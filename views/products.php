<style>
.activeestoque{
	background-color:rgb(226, 220, 220) !important;
	color:black !important;
	
}

</style>
<div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Novo Produto</button><hr>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Adicionar novo Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			 <div class="modal-body">
     <form class="form" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>products/novoProduto" method="post">
	 	<label for="nome">Nome</label><br>
	 	<input type="text" name="nome"><br>
		 <label for="preco">preco</label><br>
		<input type="text" name="preco"><br>
		<label for="quantidade">quantidade</label><br>
		<input type="text" name="quantidade"><br>
		<label for="foto">Foto</label><br>
		<input type="file" name="file">
		</div>
	 <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Salvar mudanças</button>
				</form>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped " width="400">
<thead class="thead-dark">
<tr>
	<th>#</th>
	<th>Id</th>
	<th>nome</th>
	<th>preco</th>
	<th>quantidade</th>
	<th>Ações</th>
</tr>
</thead>
<?php foreach($lista as $item): ?>

<tr>
	<td><img src="<?php echo BASE_URL.'assets/images/'.$item['arquivo']?>" alt="" width="70"></td>
	<td><?php echo $item['id']	?></td>
	<td><?php echo $item['nome']	?></td>
	<td><?php echo $item['preco']	?></td>
	<td><?php echo $item['quantidade']	?></td>

	

<td><a href="<?php echo BASE_URL; ?>products/delete?id=<?php echo $item['id']	?>"><button class="btn btn-danger">Delete</button></a> <button class="btn btn-warning" onclick="editar('<?php echo $item['id'] ?>')">Editar</button> </td>
</tr>
<?php endforeach; ?>
</table>

</div>
<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Editar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div class="modal-body">
     <form class="form"action="<?php echo BASE_URL; ?>products/edit" method="post">
		 <input id="id" type="hidden" name="id" value=""><br>
	 	<label for="nome">Nome</label><br>
	 	<input type="text" name="nome"><br>
		 <label for="preco">preco</label><br>
		<input type="text" name="preco"><br>
		<label for="quantidade">quantidade</label><br>
		<input type="text" name="quantidade"><br>
		</div>
	 <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Salvar mudanças</button>
				</form>
      </div>
    </div>
  </div>
</div>

<script>
function editar(id){
	$('#modal2').modal('show');
	var id = id;
	$('#id').val(id);
}
	</script>