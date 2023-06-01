<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.php">
		<link rel="icon" type="image/x-icon" href="logo/icon.png">
		<title>Trabalhe Conosco</title>
	</head>
	<body>
		<header>
			<div class="logo">
				<img src="logo/jettclinica">
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="cortina">
				<a id="persiana">Nossos Serviços</a>
				<div class="conteudo">
					<a href="fisioterapia.php">Fisioterapia</a>
					<a href="odonto.php">Odontologia</a>
					<a href="oftalmo.php">Oftalmologia</a>
					<a href="otorrino.php">Otorrino</a>
					<a href="pediatria.php">Pediatria</a></div></li>
				<li><a href="marcarexame.php">Marcar Exame</a></li>
				<li><a href="reclameaqui.php">Reclame Aqui</a></li>
				<li><a class="atual" href="trabalheconosco.php">Trabalhe Conosco</a></li>
				<li> <a href="login.php"> Acessar Pagina Administrativa</a></li>
			</ul>
		</nav>
		<main id="branco">
			<h1>Trabalhe Conosco</h1>
			<fieldset>
				<legend>Informações</legend>
				<label>Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="telefone" placeholder="Telefone">
				<label>E-mail:</label>
				<input type="text" name="email" placeholder="E-mail">
				<label>Área de Atuação:</label>
					<select>
						<option>--Selecione sua posição--</option>
						<option>Auxiliar Administrativo</option>
						<option>Call Center</option>
						<option>Corpo Clínico</option>
						<option>Recepção</option>
					</select>
				<label>Endereço:</label>
				<input type="text" name="rua" placeholder="Rua">
				<input class=numero type="text" name="numero" placeholder="N°">
				<input class=complemento type="text" name="complemento" placeholder="Complemento">
				<input type="text" name="CEP" placeholder="CEP">
				<label>Upload do Currículo Vitae:</label>
				<input type="file" name="currículo">
			</fieldset>
			<div class="botao">
				<button name="enviar">Enviar</button>
			</div>
		</main>
		<footer>
            <div>
                <h2 class="vermelho">olá isso é um easter egg</h2>
            </div>
            <div class="rodape">
                <div class="um">
                    <h4>Siga nossas redes:<br><a><img src="icones/logotwitter.png">ㅤ<img src="icones/logoinsta.png">ㅤ<img src="icones/iconefacebook.png"></a></h4>
                    <h4>Central atendimento:<br><a href="https://chat.whatsapp.com/Cc2stvETOxYD5QiZfOhkDg"><img src="icones/logozap.png"></a></h4>
                </div>
                <div class="dois">
                    <h4>Trabalhe conosco:<br><a href="trabalheconosco.php">Clique aqui!</a></h4>
                    <a><img src="icones/pagamento.png"></a>
                </div>
            </div>
            <div>
                <h2 class="vermelho">olá isso é um easter egg</h2>
            </div>
            <div class="faixa1">
                <h2>Desenvolvido pelo Grupo 2™</h2>
            </div>
        </footer>
	</body>
</html>