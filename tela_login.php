<?php
include('conexao.php');

        if(isset($_POST['usuario']) || isset($_POST['senha'])){

        	if(strlen($_POST['usuario']) == 0){
        		echo "Preencha seu usuário";
        	} else if(strlen($_POST['senha']) == 0){
        		echo"Preencha sua senha";
        	}else{
        		$usuario = $mysqli->real_escape_string($_POST['usuario']);
        		$senha = $mysqli->real_escape_string($_POST['senha']);

        		$sql_code = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";

        		$sql_query = $mysqli->query($sql_code) or die("Falha na execuçao do código SQL:" . $mysqli->error);

        		$quantidade = $sql_query->num_rows;

        		if($quantidade == 1){
        			$usuario = $sql_query->fetch_assoc();
					session_start();

        			$_SESSION['id'] = $usuario['id'];
        			$_SESSION['nome'] = $usuario['nome'];
        			header("Location: painel.php");

        		} else {
        			echo"Falha ao logar!";
        		}
        	}
        }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="" method="POST">
		<label>Usuário</label>
		<input type="text" name="usuario" placeholder="Usuário">
		<br>
		<label>Senha</label>
		<input type="password" name="senha" placeholder="Senha">
		<br><br>
		<input type="submit" name="entrar" value="Login">
	</form>
</body>
</html>