 <?php
include('protect.php');
?>

 <?php
 	//checkbox
 	if (!isset($_POST['check_aceitar'])) {
 		echo'Por favor aceite os termos' ;
 			}
 			else{
 				echo "Obrigado";
 		 include "conection.php";
 		$termo = 1;
        $nomecompleto = $_POST["nomecompleto"];
        $celular = $_POST["celular"];
        $cep = $_POST["cep"];
        $email = $_POST["email"];

        $sql = "INSERT INTO `pessoas` (`nomecompleto`,`celular`,`cep`,`email` ,`termo`) VALUES ('$nomecompleto','$celular','$cep','$email','$termo')";

        if(mysqli_query($conn, $sql)){
                       echo"$nomecompleto <p>Cadastrado com sucesso!</p>";
                    } else
                    echo"$nomecompleto Não Cadastrado!";
 			}
                ?>

       <link rel="stylesheet" href="style.css">