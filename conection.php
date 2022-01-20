<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "pessoas";

//    $server = "sql306.epizy.com";
  //  $user = "epiz_30454077";
    //$pass = "xNqntb9K3H";
    //$bd = "epiz_30454077_alunos";
    if( $conn = mysqli_connect($server, $user, $pass , $bd)){
        //echo "Conectado!";
    } else
        echo "Erro!";

function mensagem($texto , $tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
    $texto
  </div>";
}

?>