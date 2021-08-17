<div class="container">
<header>
	<h3 class="center">Evento Atualizado!</h3>
</header>



<?php

	include '../manager/Main.php';

	$main = new Main();
	
	$id = $_POST["id"];

	$array = array('id'=>$id,
		'idCadastro'=>$_POST["idCadastro"],
		'titulo'=>$_POST["titulo"],
		'descricao'=>$_POST["descricao"],
		'start'=>$_POST["start"],
		'end'=>$_POST["end"]);

	$main->updateData('eventos', $array,$id);

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-evento" class="btn blue">Cadastrar outro contato</a>

</div>