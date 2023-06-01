<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
	<?php require "mudar_texto.php"; ?>
	<link rel="stylesheet" type="text/css" href="style_pagina_admin.php">
	<title>pagina do admin</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) { ?>
	




<header id="topo">
	
<img src="imagens_pagina_admin/jobzin.png" class="imagem">

<div class="texto">
<h1>PÁGINA ADMINISTRATIVA</h1>
</div>

<nav class="atalhos">

<ul>
	    <li><a href="index.php">DESLOGAR</a></li>
		<li><a href="login.php">TROCAR USUÁRIO</a></li>
	</ul>
</nav>
</header>


<form action = "" method = "post">
	
	<fieldset class="ajusta">
	<legend>INSERIR USUÁRIOS</legend>

	

	<br><input type="text" name="nome" placeholder="NOME DO USUÁRIO">
	
	<input type="email" name="email" placeholder="EMAIL DO USUÁRIO">
	 
	<input type="password" name="senha" placeholder="SENHA DO USUÁRIO">
	<input type="password" name="repetesenha" placeholder="CONFIRME A SENHA">
	<input type="text" name="img" placeholder="ARQUIVO DE IMAGEM">
	<input type="submit" name="cadastrar">

	</fieldset>


</form>

 <?php require "usuarios/tabela_de_usuarios.php";
	


 ?>
<?php if(isset($_POST['cadastrar'])){
	inserirusuarios($conectar);
	header("location:pagina_admin.php");
	} ?>
<?php }else{
	header("location:login.php");
} ?>
<form action = "" method = "post">
	<legend>MUDAR TÍTULO DA PÁGINA INICIAL</legend>
	<br><input type = "text" name = "mudar_palavra">
	<input type = "submit" name = "mudar">
</form>
<?php if(isset($_POST['mudar'])){
	mudapalavra();
}?>
</body>
</html>
