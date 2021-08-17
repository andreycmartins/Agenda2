<div class="container">
<header>
	<h3 class="center">Evento Cadastrado!</h3>
</header>



<?php

	include '../manager/Main.php';

	$main = new Main();
	
	$array = array('idCadastro'=>$_POST["idCadastro"],
		'titulo'=>$_POST["titulo"],
		'descricao'=>$_POST["descricao"],
		'start'=>$_POST["start"],
		'end'=>$_POST["end"]);

	$main->insertData('eventos', $array);

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-evento" class="btn blue">Cadastrar outro evento</a>

</div>