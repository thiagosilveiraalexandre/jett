<?php
$servidor = "localhost";
$usuarioBd = "root";
$senhaBd = "";
 #nome do banco de dados
 #         |
 #         v          
$nomeBd = "jettclinica";

$conectar = mysqli_connect($servidor,$usuarioBd,$senhaBd,$nomeBd);
$query = "SELECT * FROM title";
$executar = mysqli_query($conectar, $query);
$title = mysqli_fetch_assoc($executar);



function mudapalavra(){
	if (isset($_POST['mudar'])){
		$servidor = "localhost";
		$usuarioBd = "root";
		$senhaBd = "";
 #nome do banco de dados
 #         |
 #         v          
		$nomeBd = "jettclinica";
		$titulo = ($_POST['mudar_palavra']);
		$conectar = mysqli_connect($servidor,$usuarioBd,$senhaBd,$nomeBd);
		$query = "UPDATE title SET text = '$titulo' WHERE id = 1";
		$executar = mysqli_query($conectar, $query);
	}
}
	?>
