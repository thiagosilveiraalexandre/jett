<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php require "mudar_texto.php";?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.php">
		<link rel="icon" type="image/x-icon" href="logo/icon.png">
		<title>Jett Clínica</title>
	</head>
	<body>
		<header>
			<div class="logo">
				<img src="logo/jettclinica">
			</div>
		</header>
		<nav>
			<ul>
				<li><a class="atual" href="index.php">Home</a></li>
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
				<li><a href="trabalheconosco.php">Trabalhe Conosco</a></li>
				<li> <a href="login.php"> Acessar Pagina Administrativa</a></li>
			</ul>
		</nav>
		<main>
            <h1><?php echo $title['text'];?></h1>
            <div class="main">
            <p>Bem vindos(as) a todos vocês clientes o que podemos fazer por vocês hoje? agendar exames? agendar consultas agendar cirurgías? nossos doutores estão disponíveis 24h por dia inclusive feriados para emergências
            </p>
            </div>
        </main>
        <div class="faixa">
        <h2>Estrutura</h2>
        </div>
        <p>A clínica médica possui diferenciais que proporcionam um melhor bem-estar aos pacientes. É acessível, tanto os preços quanto o local que está localizada. Conta com tecnologia e equipamentos modernos que trazem maior precisão aos resultados dos exames. Exames no local, maior praticidade para você.</p>
        <div class="fotos">
				<img src="index/saladeespera.png" alt="sala de espera">
				<img src="index/corredor.png" alt="corredor">
				<img src="index/recepcao.png" alt="recepcao">
		</div>
        <div class="faixa">
        <h2>Depoimentos</h2>
        </div>
        <div class="depoimentos">
        	<img class="img4" src="depoimentos/depoimento1.png">
        	<img class="img5" src="depoimentos/depoimento2.png">
        	<img class="img6" src="depoimentos/depoimento3.png">
        	<img class="img7" src="depoimentos/depoimento4.png">
		</div>
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