<?php
if(!isset($_SESSION)){
		session_start();
	}

if (!isset($_SESSION['id'])) {
	die("Você não pode acessar a página <a href=\"tela_login.php\">Login </a>");
}

?>