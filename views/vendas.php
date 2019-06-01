<style>
.activetransi{
	background-color:rgb(226, 220, 220) !important;
	color:black !important;
}</style>
<div>

<table class="table table-striped " width="400">
<thead class="thead-dark">
<tr>

	<th scope="col">Token</th>
	<th scope="col">Client_name</th>
	<th scope="col">Total</th>
	<th scope="col">Data</th>
	<th>Ações</th>

</tr>
</thead>
<?php foreach($lista as $item): ?>
<tbody>
<tr>

	<td><?php echo $item['token']	?></td>
	<td><?php echo $item['client_name']	?></td>
	<td><?php echo $item['total']	?></td>
	<td><?php echo $item['_data']	?></td>
	<td><a target="_blank" href="<?php echo BASE_URL?>pdf?id=<?php echo $item['token']?>">detalhes</a></td>
  
</tr>
</tbody>
<?php endforeach; ?>
</table>

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