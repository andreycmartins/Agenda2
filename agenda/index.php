<?php 
include("db/conexao.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda</title>
</head>
<body>
	<header>
		<h1 class="center">Agenda Online</h1>
		<nav class="center">
			<a href="index.php?menuop=home">Home |</a>
			<a href="index.php?menuop=contatos">Contatos |</a>
			<a href="index.php?menuop=eventos">Eventos |</a>
		</nav>
	</header>

	<main>
		<?php
		$menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
			switch ($menuop) {
				case 'home':
					include("paginas/home/home.php");
					break;
				case 'contatos':
					include("paginas/contatos/contatos.php");
					break;
				case 'cad-contato':
					include("paginas/contatos/cad-contato.php");
					break;
				case 'inserir-contato':
					include("paginas/contatos/inserir-contato.php");
					break;
				case 'editar-contato':
					include("paginas/contatos/editar-contato.php");
					break;
				case 'atualizar-contato':
					include("paginas/contatos/atualizar-contato.php");
					break;
				case 'eventos':
					include("paginas/eventos/eventos.php");
					break;
				case 'cad-evento':
					include("paginas/eventos/cad-evento.php");
					break;
				case 'inserir-evento':
					include("paginas/eventos/inserir-evento.php");
					break;
				case 'editar-evento':
					include("paginas/eventos/editar-evento.php");
					break;
				case 'atualizar-eventos':
					include("paginas/eventos/atualizar-eventos.php");
					break;
				case 'deletar-eventos':
					include("paginas/eventos/deletar-eventos.php");
					break;
				
				default:
					include("paginas/home/home.php");
					break;
			}
		?>
	</main>
</body>
</html>