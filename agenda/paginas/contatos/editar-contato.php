<header>
	<h3 class="center">Editar Contato</h3>
</header>
<?php 

$idContato = $_GET["idContato"];

$sql = "SELECT * FROM contatos WHERE idContato = {$idContato}";

$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);

?>

<div class="container">
	<form action="index.php?menuop=atualizar-contato" method="POST">

			<div class="input-field col s6">
				<input type="text" name="idContato" id="idContato" value="<?=$dados["idContato"]?>" required>
				<label for="idContato">ID: </label>
			</div>

			<div class="input-field col s6">
				<input type="text" name="nomeContato" id="nomeContato" value="<?=$dados["nomeContato"]?>" required>
				<label for="nomeContato">Nome: </label>
			</div>
 
			<div class="input-field col s12">
				<input type="text" name="emailContato" id="emailContato" value="<?=$dados["emailContato"]?>">
				<label for="emailContato">E-mail: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefoneContato" id="telefoneContato" value="<?=$dados["telefoneContato"]?>">
				<label for="telefoneContato">Telefone: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="enderecoContato" id="enderecoContato" value="<?=$dados["enderecoContato"]?>">
				<label for="enderecoContato">Endereço: </label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sexoContato" id="sexoContato" value="<?=$dados["sexoContato"]?>">
				<label for="sexoContato">Sexo (M ou F): </label>
			</div>

			<div class="input-field col s12">
				<input type="date" name="dataNascContato" id="dataNascContato" value="<?=$dados["dataNascContato"]?>" required>
				<label for="dataNascContato">Data de Nascimento: </label>
			</div>

			<div class="input-field col s12">
			<input type="submit" value="Atualizar" name="btnAtualizar" class="btn green">
			</div>
			
	</form>
</div>