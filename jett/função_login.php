<?php

$servidor = "localhost";
$usuarioBd = "root";
$senhaBd = "";
      
$nomeBd = "jettclinica";

$conectar = mysqli_connect($servidor,$usuarioBd,$senhaBd,$nomeBd);

function login ($conectar){
	if (isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha']) ) {
		
		$email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
		$senha = $_POST['senha'];
		$query = "SELECT * FROM adm WHERE email = '$email' AND pass = '$senha' ";
		$executar = mysqli_query($conectar, $query);
		$return = mysqli_fetch_assoc($executar);
		if (!empty($return['email'])) {
				
			session_start();
			$_SESSION['name']= $return['name'];
			$_SESSION['id']= $return['id'];
			$_SESSION['ativa']= TRUE;
			header("location:pagina_admin.php");
				

		}else{
			echo "USUÁRIO OU SENHA NÃO ENCONTRADOS!";
		
			}
		




	}
}











?>