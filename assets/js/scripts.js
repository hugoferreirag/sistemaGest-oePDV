var table = document.getElementById('lista'); 
        
    function filter (input, _id, cellNr){  
      var table = document.getElementById(_id); 
        
        var search = input.value.toLowerCase();
        if(search.length > 0){
          table.style.display = '';
        } 
      
        var elemento;  
        
      
        for (var r = 1; r < table.rows.length; r++){ 
            console.log(elemento = table.rows[r].cells[cellNr].innerHTML);   
              if (elemento.toLowerCase().indexOf(search)>=0 )  {
               table.rows[r].style.display = '';    

                }else {table.rows[r].style.display = 'none'; 
                 }  
                 
                 }  
       }

       
       $('.selecionarClient').bind('click', function(){
      
        var id= $(this).val();
        $.ajax({
      
      url:'http://localhost/system/carrinho/carrinhoClient?id='+id,
      type:'GET',	
      success:function(){
        window.location.href = "http://localhost/system/carrinho/";
        
      }
      });
     
        
      });
      function selecionarProduto(id, nome, preco, arquivo){
        var id = id;
        var nome = nome;
        var preco = preco;
        var arquivo = arquivo;
        $("#pesquisaP").val('');
        $('#modal2').modal('show');
        
          $('.idp').val(id);
          $(".nome").val(nome);
          $(".preco").val(preco);
          $(".arquivo").val(arquivo);
          
        
        
        console.log(arquivo);
        
        
        
        }
        function enviar(){
          var id = $(".idp").val() 
          var nomep = $(".nome").val()
          var preco = $(".preco").val()
          var quantidade = $(".quantidade").val()
          var arquivo = $(".arquivo").val()
          
        console.log(id, nomep, preco, quantidade, arquivo)
        $.ajax({
        
        url:'http://localhost/system/carrinho/carrinhoTemp',
        type:'POST',
        data:{id, nomep, preco, quantidade, arquivo},		
        dataType:'json',
        success:function(json){
          window.location.reload();
         
         
          
         
        
          
        }
        });
          }
        
     
        
                    
             var table = document.getElementById('listaP'); 
               
            function filterP (input, _id, cellNr){  
              var table = document.getElementById(_id); 
               
                var search = input.value.toLowerCase();
                if(search.length > 0){
                  table.style.display = '';
                } 
              
                var elemento;  
                
              
                for (var r = 1; r < table.rows.length; r++){ 
                    console.log(elemento = table.rows[r].cells[cellNr].innerHTML);   
                      if (elemento.toLowerCase().indexOf(search)>=0 )  {
                       table.rows[r].style.display = '';    
        
                        }else {table.rows[r].style.display = 'none'; 
                         }  
                         
                         }  
               }
        
             
              
        (function($) {	
            remove = function(item) {	 
              console.log('na') ;
                var tr = $(item).closest('tr');	
                console.log(tr);
            tr.fadeOut(400, function() {
                      tr.remove();  	 
                       });	
            return false;	
              }	
              })(jQuery);
           

