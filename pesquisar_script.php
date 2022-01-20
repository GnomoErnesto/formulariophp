<?php
include('protect.php');
?>
<?php	        
        include "conection.php";
        $pesquisar = $_POST['nomecompleto'];

        $sql = "SELECT * FROM pessoas WHERE nomecompleto LIKE '%$pesquisar%'";

        $dados = mysqli_query($conn, $sql);

        	while ( $linha = mysqli_fetch_assoc($dados) ){
                            $id = $linha['id'];
                            $nomecompleto = $linha['nomecompleto'];
                            $celular = $linha['celular'];
                            $cep = $linha['cep'];
                            $email = $linha['email'];

                            echo "<p>$id,$nomecompleto,$celular,$cep,$email</p>";
                        };

    ?>
    <br>
        <a href="formulario.php">Formulario</a>
        <a href="pesquisar.php">Pesquisar</a>
        <a href="logout.php">Sair</a>
        <link rel="stylesheet" href="style.css">