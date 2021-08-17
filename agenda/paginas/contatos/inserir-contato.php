<div class="container">
<header>
	<h3 class="center">Contato cadastrato!</h3>
</header>



<?php

	include '../manager/Main.php';

	$main = new Main();
	
	$array = array('nomeContato'=>$_POST["nomeContato"],
		'emailContato'=>$_POST["emailContato"],
		'telefoneContato'=>$_POST["telefoneContato"],
		'enderecoContato'=>$_POST["enderecoContato"],
		'sexoContato'=>$_POST["sexoContato"],
		'dataNascContato'=>$_POST["dataNascContato"]);

	$main->insertData('contatos', $array);

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-contato" class="btn blue">Cadastrar outro contato</a>

</div>