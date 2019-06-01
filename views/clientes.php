<style>
.activehome{
	background-color:rgb(226, 220, 220) !important;
	color:black !important;
}</style>
<div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-sm">Novo cliente</button><hr>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Adicionar novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			 <div class="modal-body">
						<form class="form" action="<?php echo BASE_URL; ?>clientes/novouser" method="post">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome"><br>
						<label for="cpf">cpf</label><br>
						<input type="text" name="cpf"><br>
						<label for="rua">rua</label><br>
						<input type="text" name="rua"><br>
						<label for="bairro">bairro</label><br>
						<input type="text" name="bairro"><br>
						<label for="Cidade">Cidade</label><br>
						<input type="text" name="cidade"><br>
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
	<th scope="col">Id</th>
	<th scope="col">nome</th>
	<th scope="col">cpf</th>
	<th scope="col">rua</th>
	<th scope="col">bairro</th>
	<th scope="col">cidade</th>
	<th scope="col">ações</th>
</tr>
</thead>
<?php foreach($lista as $item): ?>
<tbody>
<tr>

	<td><?php echo $item['id']	?></td>
	<td><?php echo $item['nome']	?></td>
	<td><?php echo $item['cpf']	?></td>
	<td><?php echo $item['rua']	?></td>
	<td><?php echo $item['bairro']	?></td>
	<td><?php echo $item['cidade']	?></td>
  <td><a href="<?php echo BASE_URL; ?>clientes/delete?id=<?php echo $item['id']	?>"><button class="btn btn-danger">Delete</button></a> <button class="btn btn-warning" onclick="editar('<?php echo $item['id'] ?>', '<?php echo $item['nome'] ?>','<?php echo $item['cpf'] ?>','<?php echo $item['nome'] ?>','<?php echo $item['rua'] ?>','<?php echo $item['bairro'] ?>','<?php echo $item['cidade'] ?>')">Editar</button> </td>
</tr>
</tbody>
<?php endforeach; ?>
</table>

</div>
<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body	">
     <form class="form"action="<?php echo BASE_URL; ?>clientes/edit" method="post">
		 <input id="id" type="hidden" name="id" value=""><br>
	 	<label for="nome">Nome</label><br>
	 	<input id="nome" type="text" name="nome"><br>
		 <label for="cpf">cpf</label><br>
		<input id="cpf"type="text" name="cpf"><br>
		<label for="rua">rua</label><br>
		<input id="rua" type="text" name="rua"><br>
		<label for="bairro">bairro</label><br>
		<input id="bairro" type="text" name="bairro"><br>
		<label for="Cidade">Cidade</label><br>
		<input id="cidade" type="text" name="cidade"><br>
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
function editar(id, nome, cpf, rua, bairro, cidade){
	$('#modal2').modal('show');
	var id = id;
	var cpf = cpf;
	$('#id').val(id);
	$("#nome").val(nome);
	$("#rua").val(rua);
	$("#bairro").val(bairro);
	$("#cidade").val(cidade)
	$("#cpf").val(cpf);
}
	</script>