<div class="container">
<header>
<h3 class="center">Contatos</h3>
</header>

<div>
	<a href="index.php?menuop=cad-contato" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

<table class="striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Sexo</th>
			<th>Data de Nasc.</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
	</thead>

	<tbody>

		<?php

		include '../manager/Main.php';
		$main = new Main();

		foreach ($main->getAll('contatos') as $dados) {
		?>

		<tr>
			<td><?=$dados["id"]?></td>
			<td><?=$dados["nomeContato"]?></td>
			<td><?=$dados["emailContato"]?></td>
			<td><?=$dados["telefoneContato"]?></td>
			<td><?=$dados["enderecoContato"]?></td>
			<td><?=$dados["sexoContato"]?></td>
			<td><?=$dados["dataNascContato"]?></td>
			<td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["id"]?>"><i class="small material-icons center">edit</i></a></td>
			<td><a href=""><i class="small material-icons center">delete</i></a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>