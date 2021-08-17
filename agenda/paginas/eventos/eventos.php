<div class="container">
<header>
<h3 class="center">Eventos</h3>
</header>

<div>
	<a href="index.php?menuop=cad-evento" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

<table class="striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome do Cliente</th>
			<th>Título</th>
			<th>Descrição</th>
			<th>Início</th>
			<th>Fim</th>
		</tr>
	</thead>

	<tbody>

		<?php

		include '../manager/Main.php';
		$main = new Main();

		foreach ($main->getEventos('eventos') as $dados) {
		?>

		<tr>
			<td><?=$dados["id"]?></td>
			<td><?=$dados["nomeContato"]?></td>
			<td><?=$dados["titulo"]?></td>
			<td><?=$dados["descricao"]?></td>
			<td><?=$dados["start"]?></td>
			<td><?=$dados["end"]?></td>
			<td><a  class="btn btn-outline-info" href="index.php?menuop=editar-evento&id=<?=$dados["id"]?>"><i class="small material-icons center">edit</i></a></td>

			<td>
				<form action="index.php?menuop=deletar-eventos" method="POST">
					<input type="hidden" name="id" value="<?=$dados["id"]?>">
					<button class="btn btn-outline-info" onclick="return confirm('Tem certeza que deseja excluir evento?')" >
						<i class="small material-icons center">delete</i>
					</button>
					
				</form>
			</td>

		</tr>
	<?php } ?>
	</tbody>
</table>
</div>