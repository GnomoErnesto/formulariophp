<?php
include('protect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel</title>
</head>
<body>
	Bem vindo ao Painel,<?php echo $_SESSION['nome'];?>
	<p>
		<a href="formulario.php">Formulario</a>
		<a href="pesquisar.php">Pesquisar</a>
		<a href="logout.php">Sair</a>
	</p>
</body>
</html>