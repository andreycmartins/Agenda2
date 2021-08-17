<header>
	<h3 class="center">Cadastro de Contato</h3>
</header>
<div class="container">
	<form action="index.php?menuop=inserir-contato" method="POST">
			<div class="input-field col s6">
				<input type="text" name="nomeContato" id="nomeContato" required>
				<label for="nomeContato">Nome: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="emailContato" id="emailContato" required>
				<label for="emailContato">E-mail: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefoneContato" id="telefoneContato" required>
				<label for="telefoneContato">Telefone: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="enderecoContato" id="enderecoContato" required>
				<label for="enderecoContato">Endereço: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sexoContato" id="sexoContato" required>
				<label for="sexoContato">Sexo (M ou F): </label>
			</div>

			<div class="input-field col s12">
				<input type="date" name="dataNascContato" id="dataNascContato" required>
				<label for="dataNascContato">Data de Nascimento: </label>
			</div>

			<div class="input-field col s12">
			<input type="submit" value="Adicionar" name="btnAdicionar" class="btn green">
			</div>
			
	</form>
</div>