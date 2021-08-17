<header>
	<h3 class="center">Cadastro de Evento</h3>
</header>
<div class="container">
	<form action="index.php?menuop=inserir-evento" method="POST">

			<?php
				include '../manager/Main.php';
				$main = new Main();
			?>

  		<div class="row">
  			<label for="idCadastro">Nome do cliente: </label>
			<div class="">
				<select name="idCadastro" id="idCadastro" class="form-control" required>
					<?php
						foreach ($main->getAll("contatos") as $contato) {
							echo '<option value="'.$contato["id"].'" > '.$contato["nomeContato"].'</option>';
						}
					?>
				</select>
				
			</div>
		</div>

		<div class="row">
				<label for="titulo">Título: </label>
			<div class="input-field col s6">
				<input type="text" name="titulo" id="titulo" required>
			</div>
		</div>

		<div class="row">
				<label for="descricao">Descricao:</label>
			<div class="input-field col s12">
				<input type="text" name="descricao" id="descricao" required>
			</div>
		</div>

		
		<div class="row">
			<label for="start">Início: </label>
			<div class="input-field col s12">
				<input type="datetime-local" name="start" id="start" required>
			</div>
		</div>

		<div class="row">
			<label for="end">Fim: </label>
			<div class="input-field col s12">
				<input type="datetime-local" name="end" id="end" required>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
			<input type="submit" value="Adicionar" name="btnAdicionar" class="btn green">
			</div>
		</div>
	</form>
</div>