
<span class="transacaoClient">Cliente:<strong> Nome: <?php echo $_SESSION['vendor'][1]?> - id : <?php echo $_SESSION['vendor'][0]?></strong> <a href="<?php echo BASE_URL?>carrinho/emptySession"><button class="btn btn-danger">Cancelar/Trocar</button> </a> </span>
<span  class="cartClient"> <img src="<?php echo BASE_URL?>assets/images/cart.png" alt="" width="40" style="float:left"> <strong class="count"><?php echo $_SESSION['pQtd']?> Produtos</strong> <img src="<?php echo BASE_URL?>assets/images/dnario.png" alt="" width="40" style="float:left"><strong class="ttl">R$:<?php echo $_SESSION['vTotal'] ?>,00</strong> <a href="<?php echo BASE_URL?>carrinho/emptyCart"><button class="btn btn-danger">Limpar</button></a> <a href="<?php echo BASE_URL?>carrinho/concluirVenda"> <button class="btn but btn-warning"> <img src="<?php echo BASE_URL?>assets/images/trans.png" width="25"  >Concluir Venda</button> </a> </span>



<div class="row col-md-12">

     
<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-sm"><img src="<?php echo BASE_URL?>assets/images/+p.png" width="25"> - Inserir produto</button><hr>
     
      <table class="table table-striped" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="">  
      <thead class="thead-dark"> 
         <tr valign="middle"> 
             <th>#</th>
             <th>ID</th>
             <th>Nome</th>    
             <th>Preço</th> 
             <th>Quantidade</th>   
             <th>Subtotal</th>
             <th>ações</th>
             
             
        </tr>
        </thead>    
        <tr>    
        <?php foreach($lista as $item):?>
        <td><img src="<?php echo BASE_URL.'assets/images/'.$item['arquivo']?>" alt="" width="50"></td>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['products_name'] ?></td>     
            <td><?php echo $item['preco'] ?></td> 
            <td><?php echo $item['quantidade'] ?></td> 
            <td><?php echo $item['sub_total'] ?></td>
            <td><a href="<?php echo BASE_URL; ?>carrinho/delete?id=<?php echo $item['id']	?>&qtd=<?php echo $item['quantidade']?>&sub=<?php echo $item['sub_total']?>"><button  class="btn btn-danger">Remover</button></a> - <button class="btn btn-warning" onclick="editar('<?php echo $item['id']?>','<?php echo $item['preco']?>','<?php echo $item['quantidade']?>','<?php echo $item['sub_total']?>')">Editar</button> </td></td>
            
             
               
        </tr>    
       <?php endforeach;?>

       
     </table>
    
     </div>
     
     <div class="modal fade bd-example-modal-lg" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Mudar quantidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body	">
     <form class="form" action="<?php echo BASE_URL; ?>carrinho/editProduct" method="post">
		 <input type="hidden" class="id3"  name="id" value=""><br>
        <input class="preco3" type="hidden" name="preco"><br>
        <input class="quantidadeA3" type="hidden" name="quantidadeA"><br>
        <label for="quantidadeN">Quantidade</label><br>
        <input class="quantidadeN3" type="text" name="quantidadeN"><br>
		<input class="sub3" type="hidden" name="sub"><br>

		</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success" >Salvar mudanças</button>
        
				</form>
      </div>
    </div>
  </div>
</div>



<!-- @@@@@@@@@@-->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Pesquise o produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			 <div class="modal-body">
             <div class="row col-md-12">

     
<table class="col-md-2" width="100%" border="0"> 
     <tr>  <h5>Produtos : </h5>
          <td width="301"><input id="pesquisaP" name="filt" type="text" placeholder="pesquise aqui..." onKeyUp="filterP(this, 'listaP', '1')"></td>  
          
          
      </tr>
   </table>
     
      <table class="table table-striped" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="listaP">  
      <thead class="thead-dark"> 
         <tr valign="middle">  
             <th>#</th>  
             <th>ID</th>   
             <th>Nome</th>    
             <th>Preço</th>    
             <th>ações</th>
             
             
        </tr>
        </thead>    
        <tr>    
        <?php foreach($produtos as $item):?>
            <td><img src="<?php echo BASE_URL.'assets/images/'.$item['arquivo']?>" alt="" width="50"></td>
            <td><?php echo $item['id'] ?></td>    
            <td><?php echo $item['nome'] ?></td>     
            <td><?php echo $item['preco'] ?></td>  
            
            <td><button class="btn btn-success" id="" onclick="selecionarProduto('<?php echo $item['id']?>','<?php echo $item['nome']?>','<?php echo $item['preco']?>','<?php echo $item['arquivo']?>')">Inserir</button></td>  
             
               
        </tr>    
       <?php endforeach;?>

       
     </table>
    
     </div>
     
     <div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Insira a quantidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body	">
     <form class="form" method="post">
       
		 <input class="idp" type="hidden" name="id" value=""><br>
     <input class="arquivo" type="hidden" name="arquivo" value=""><br>
	 	
		<label for="quantidade">Quantidade</label><br>
		<input class="quantidade" type="text" name="quantidade"><br>
	 	<input  class="nome" type="hidden" name="nome"><br>

		<input  class="preco"type="hidden" name="preco"><br>


		</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success enviar" onclick="enviar(), window.location.reload()"  >Inserir</button>
				</form>
      </div>
    </div>
  </div>
</div>
 	     </div>
	 <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        
				</form>
      </div>
    </div>
  </div>
</div>
<script>
function editar(id,preco,quantidadeA,sub){
	$('#modal3').modal('show');
	
    $('.id3').val(id);
    $('.preco3').val(preco);
    $('.quantidadeA3').val(quantidadeA);
    $('.sub3').val(sub);
    console.log(id, preco, quantidadeA, sub)
	
}
	</script>




     




