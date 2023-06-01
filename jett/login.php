<?php require_once "função_login.php"?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>painel de login</title>
	<link rel="stylesheet" type="text/css" href="style_login.php">
</head>
<body class="bg">
	<form class="box" action="" method="post">
  <h1>Login</h1>
  <input class="i"  type="text" name="email" placeholder="E-mail">
  <input  type="password" name="senha" placeholder="Senha">
  <input type="submit" name="acessar" value="Login">
</form>

<script type="text/javascript" src="scripts.js"></script>


<?php
	if (isset($_POST['acessar'])){
		login($conectar);
	
	}

?>
</body>
</html>

