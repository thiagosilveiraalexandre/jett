<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.php">
        <link rel="icon" type="image/x-icon" href="logo/icon.png">
        <title>Fisioterapia</title>
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
                <a class="atual" id="persiana">Nossos Serviços</a>
                <div class="conteudo">
                    <a class="atual2" href="fisioterapia.php">Fisioterapia</a>
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
            <h1>Fisioterapia</h1>
            <div class="main">
            <h2>O que é fisioterapia?</h2>
            <p>A fisioterapia é uma ciência da saúde que se aplica ao estudo, diagnóstico, prevenção e tratamento de disfunções cinéticas funcionais de órgãos e sistemas do corpo humano. Ela atua no tratamento e prevenção de doenças e lesões, decorrentes de fraturas ou má-formação ou vícios de postura. Tem como aliados, técnicas como massagens e exercícios que restaurem a capacidade física e funcionam do pacientes.
            </p>
            </div>
        </main>
        <div class="faixa">
        <h2>Procedimentos</h2>
        </div>
        <aside>
            <img src="propaganda.png">
        </aside>    
        <div class="procedimentos">
            <h3>Cinesioterapia</h3>
            <p>A cinesioterapia é um conjunto de exercícios terapêuticos que ajudam na reabilitação de diversas situações, fortalecendo e alongando os músculos, e também podem servir para otimizar o estado de saúde geral e prevenir alterações motoras. Ela tem como objetivo preservar a força muscular e garantir a amplitude das articulações. Dessa forma, esse tipo de técnica vai envolver exercícios físicos que estimulam a coordenação motora e, assim, proporcionando ao paciente manter ou elevar o seu aprendizado motor.</p>

            <h3>Eletrotermofototerapia</h3>
            <p>Terapia que utiliza corrente elétrica aplicada à pele por meio de eletrodos. Exerce função analgésica. São ondas de radiofrequência que geram calor, aquecendo os tecidos e aumentando o fluxo sanguíneo. O objetivo é reduzir as dores e em outros casos, atua proporcionando irrigação sanguínea e mobilidade articular. A eletroterapia faz uso de estímulos elétricos com dois objetivos: para interferir na transmissão dos sinais de dor para o cérebro, ou para estimular a contração muscular ao influenciar a atividade elétrica muscular.</p>
            
            <h3>Liberação Miofascial</h3>
            <p>A liberação miofascial é um procedimento que visa amenizar as dores musculares causadas por tensão. Por meio de pressão sobre o local da dor, realizada manualmente ou com o aporte de rolos, a terapia previne lesões e contribui para o tratamento de graves patologias musculoesqueléticas.
            Quando está desgastada ou comprometida, a fáscia fica rígida e isso causa dor e dificuldade na execução dos movimentos. Nesse caso, é importante trabalhar a liberação para resolver o problema.</p>
            <nav>
            <h4><a href="marcarexame.php">Marcar exame agora!</a></h4>
            </nav>
        </div>
        <div class="faixa">
            <h2>Nossos Doutores</h2>
        </div>
        <div class="doutores">
            <div class="doutor">
                <img src="doutores/1.png">
            </div>
            <div class="graduação">
                <h4>Dra. Luciane Ismail</h4>
                <p>Especializada em Fisioterapia Esportiva, Dermato Funcional, Ergonômica e Neurofuncional Pediátrica.</p>
            </div>
        </div>
        <div class="doutores">
            <div class="doutor">
                <img src="doutores/3.png">
            </div>
            <div class="graduação">
                <h4>Dr. Rosano Soares</h4>
                <p>Especializado em Fisioterapia em Terapia Intensiva, Traumato-ortopédica e Respiratória.</p>
            </div>
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
                    <h4>Trabalhe conosco:<br><a href="trabalheconosco.html">Clique aqui!</a></h4>
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