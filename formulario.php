<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Formulário</h1>

	<form action="inserir.php" method="POST">
		<input type="text" name="nomecompleto" placeholder="Nome Completo"><br>
		<input type="tel" name="celular" placeholder="Celular"><br>
		<input type="text" name="cep" placeholder="CEP"><br>
		<input type="email" name="email" placeholder="Email"><br><br>

		<input type="checkbox" name="check_aceitar" id="check_aceitar"><br>
		<label for="check_aceitar">Aceito os Termos</label><br>


		<input type="submit" name="enviar" value="enviar"><br>
		<a href="pesquisar.php">Pesquisar</a>
		<a href="logout.php">Sair</a>
	</form>
</body>
</html>