<?php
$servidor = "localhost";
$usuarioBd = "root";
$senhaBd = "";
 #nome do banco de dados
 #         |
 #         v          
$nomeBd = "jettclinica";

$conectar = mysqli_connect($servidor,$usuarioBd,$senhaBd,$nomeBd);
$query = "SELECT * FROM adm ORDER BY id";

$executar = mysqli_query($conectar,$query);

$resultados = mysqli_fetch_all($executar,MYSQLI_ASSOC);

if (isset($_GET['id'])){
	delete($conectar, $_GET['id']);
}



#INSERIR USUÁRIOS
function inserirusuarios($conectar){

		if ((isset($_POST['cadastrar']) AND !empty($_POST['email']) AND! empty($_POST['senha'])) ) {
			$erros = array();

			$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

			$nome = mysqli_real_escape_string($conectar, $_POST['nome'] );
			
			$senha = $_POST['senha'];

			$img = $_POST['img'];



			if ($_POST['senha'] != $_POST['repetesenha']){
				$erros[]= "Senhas não conferem!";

			}

			$queryEmail = "SELECT email FROM adm WHERE email = '$email'";

			$buscaEmail = mysqli_query($conectar, $queryEmail);

			$verifica = mysqli_num_rows($buscaEmail);

			if (!empty($verifica) ) {
			$erros[]= "E-mail já cadastrado!";

				
			}

			if (empty($erros)) {
				//inserir o usuario no BD
				$query = "INSERT INTO adm (name ,email , pass, img) VALUES ('$nome' , '$email' , '$senha', '$img') ";

			$executar = mysqli_query($conectar,$query);
			if ($executar) {
					echo "usuario inserido";
				}else{
					echo "erro ao inserir usuario";
				}	

			}else{
				foreach ($erros as $erro) {
					echo "<p>$erro</p>";
				}
			}

	}
}

function delete($conectar, $id){
	if(!empty($id)){
		if($id != $_SESSION['id']){
			$query = "DELETE FROM adm WHERE id =". (int) $id;
			$execute = mysqli_query($conectar, $query);
		}
		else{
			echo "Você não pode deletar a si próprio!";
		}
	}
}

function update($conectar, $email){
	if(!empty($email))
		echo "<form action = '' method = 'post'>
					<legend> ATUALIZAR </legend>
					<br><input type = 'text' name='nome' placeholder = 'NOVO NOME'>
					<input type = 'email' name='email' placeholder = 'NOVO EMAIL'>
					<input type = 'password' name='senha' placeholder = 'NOVA SENHA'>
					<input type = 'text' name='img' placeholder = 'NOVA IMAGEM'>
					<input type = 'submit' name='update'>";
		if(isset($_POST['update'])){
			$email;
			$name = $_POST['nome'];
			$emailnovo = $_POST['email'];
			$password = $_POST['senha'];
			$img = $_POST['img'];
			$query = "UPDATE adm SET name = '$name', pass = '$password', img = '$img', email = '$emailnovo' WHERE email = '$email'";
			$execute = mysqli_query($conectar, $query);

		}	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="usuarios/style_usuarios.php">
	<title>usuarios</title>
</head>
<body>
<?php 
if(isset($_GET['email'])){
	update($conectar, $_GET['email']);
};
?>

<table class="espaco" border = "2">

<thead>
	<tr>
		<th>ID</th>
		<th>FOTO</th>
		<th>NOME</th>
		<th>EMAIL</th>
		<th>SENHA</th>
		<th>ATUALIZAR INFORMAÇÕES</th>
		<th>DELETAR</th>
	</tr>
</thead>	

<tbody >
	<!--FOTOS DE USUÁRIOS-->
	<?php foreach ($resultados as $resultado): ?>
	<tr>
		<td><?php echo $resultado ["id"]?></td>
		<td><?php echo "<img src='usuarios/Profilepic/".$resultado ["img"].".png' width = '75' height = '75'>";?></td>
		<td><?php echo $resultado ["name"]?></td>
		<td><?php echo $resultado ["email"]?></td>
		<td><?php echo $resultado ["pass"]?></td>

		<td class="info"><a href="pagina_admin.php?email=<?php echo $resultado ["email"]?>" class="bubu"><p class="botao">ATUALIZAR</p></a></td>
		<td class="erro"><a href="pagina_admin.php?id=<?php echo $resultado ["id"]?>"><img src="usuarios/imagens/lixeira.png"></td>

	</tr>
<?php endforeach;?>

</tbody>

<tfoot>
	
<tr>
	
<td colspan = "6">
 Quantidade de usuários:
<?php echo mysqli_num_rows($executar);?>	
</td>


</tr>

</tfoot>

</table>


</body>


</html>

<!--?php echo "<img src='usuarios/Profilepic/".$resultado ["img"]."' width = '75' height = '75'>";? -->