
<style>
.activevendor{
	background-color:rgb(226, 220, 220) !important;
	color:black !important;
}</style>
<div style="height:100px !important;" class="row">
<h2 style="float:left;padding-bottom:50px" class="col-md-6 transacaoClient"> Escolha o cliente : <img style="float:left; margin-right:20px; margin-top:-5px"src="<?php echo BASE_URL;?>assets/images/pesquisac.png" alt="" width="50" height="50"><input id="pesquisa" style="width:150px;   " name="filt" type="text" placeholder="pesquise..." onKeyUp="filter(this, 'lista', '1')"></h2>
<h2 style="float:left;padding-bottom:50px" class="col-md-6 transacaoClient">Cliente novo ? Cadastro rápido:</h2>


<div class="row col-md-6">
<div class="col-md-12">

     
      <table class="table table-striped" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="lista">  
      <thead class="thead-dark"> 
         <tr valign="middle">    
             <th>ID</th>   
             <th>Nome</th>    
             <th>Cpf</th>    
             <th>ações</th>
             
        </tr>
        </thead>    
        <tr>    
        <?php foreach($lista as $item):?>
            <td><?php echo $item['id'] ?></td>    
            <td><?php echo $item['nome'] ?></td>     
            <td><?php echo $item['cpf'] ?></td>  
            <td> <a href="<?php echo BASE_URL ?>carrinho/carrinhoClient?id=<?php echo $item['id']?>"><button class="selecionarClient" value="<?php echo $item['id']?>">Selecionar</button></a></td>  
             
               
        </tr>    
       <?php endforeach;?>
          
       
     </table>
     </div>
	 </div>
	 <div style="float:left; margin-left:50px; margin:auto; border-radius:5px; border:2px solid white; "class="row col-md-">
	 <form id="fast" action="<?php echo BASE_URL; ?>clientes/fastUser" method="post">
	 	<label for="nome">Nome:</label><br>
		 <input type="text" name="nome"><br>
		 <label for="cpf">cpf:</label><br>
         <input type="text" name="cpf"><br>
         <label for="rua">Rua:</label><br>
         <input type="text" name="rua"><br>
         <label for="Bairro">Bairro:</label><br>
		 <input type="text" name="bairro"><br>
		 <label for="cidade">cidade:</label><br>
         <input type="text" name="cidade"><br><br>
         <input class="btn btn-success" type="submit" value="Cadastrar">
	 </form>
	 
	 </div>
	

     </div>