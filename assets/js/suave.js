var link = $(".menu a");
var subir =$(".btnsubir");
$(window).scroll(function(){
	var minhaposicao =$(this).scrollTop();
	if(minhaposicao >= 400){
		subir.fadeIn();
	}else{
		subir.fadeOut();
	}
});
link.on("click", function(){
	var seletor =$(this).attr("href");
	var posicao =$(seletor).offset().top;
	$("html, body").animate({scrollTop: posicao-180},1000);
	
	subir.on("click", function(){
	$("html, body").animate({scrollTop: 0},800);	
	});


});