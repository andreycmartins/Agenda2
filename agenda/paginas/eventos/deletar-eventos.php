<div class="container">
<header>
	<h3 class="center">Evento deletado!</h3>
</header>



<?php

	include '../manager/Main.php';

	$main = new Main();
	
	$id = $_POST["id"];

	$main->deleteData('eventos',$id);

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-evento" class="btn blue">Cadastrar um evento</a>

</div>