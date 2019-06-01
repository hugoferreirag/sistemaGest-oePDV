$(function(){

	$('.formcar').bind('submit', function(e){
		
		e.preventDefault();
		var txt = $(this).serialize();
		console.log(txt);
		$.ajax({

			url:'http://localhost/system/clientes/get',
			type:'POST',
			data:txt,		
			dataType:'json',
			success:function(json){
				
				$('#id').html(json[0]['id']);
				$('#nome').html(json[0]['nome']);
				$('#cpf').html(json[0]['cpf']);

				
			}
		});
	});
});