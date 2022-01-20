<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "pessoas";

    $mysqli = new mysqli($server, $user, $pass , $bd);

    if($mysqli->error){
    	die("Erro!" . $mysqli->error);
    }
  ?>