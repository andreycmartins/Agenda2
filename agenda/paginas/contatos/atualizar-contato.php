<div class="container">
<header>
	<h3 class="center">Contato atualizado!</h3>
</header>

<?php

	$id = mysqli_real_escape_string($conexao,$_POST["id"]);
	$nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
	$emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
	$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
	$enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
	$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
	$dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);
	$sql = "UPDATE contatos SET 
	nomeContato = '{$nomeContato}', 
	emailContato = '{$emailContato}', 
	telefoneContato = '{$telefoneContato}', 
	enderecoContato = '{$enderecoContato}', 
	sexoContato = '{$sexoContato}', 
	dataNascContato = '{$dataNascContato}'

	WHERE id = {$id} 
	";

	mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-contato" class="btn orange">Cadastrar outro contato</a>
		<a href="index.php?menuop=contato" class="btn green">Visualizar contatos</a>

<?php

?>
</div>