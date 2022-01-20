<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesquisa Dados</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Pesquisa Dados</h2>
	<form action="pesquisar_script.php" method="POST">
		<label>Nome da Pessoa</label>
		<input type="text" name="nomecompleto" placeholder="Digite o nome da pessoa">
		<input type="submit" name="buscar" value="buscar">
	</form>

		<a href="formulario.php">Formulario</a>
		<a href="logout.php">Sair</a>
</body>
</html>