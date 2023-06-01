<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.php">
        <link rel="icon" type="image/x-icon" href="logo/icon.png">
        <title>Reclame Aqui</title>
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
                <li><a class="atual" href="reclameaqui.php">Reclame Aqui</a></li>
                <li><a href="trabalheconosco.php">Trabalhe Conosco</a></li>
                <li> <a href="login.php"> Acessar Pagina Administrativa</a></li>
            </ul>
        </nav>
        <main id="branco">
            <h1>Reclame Aqui</h1>
            <div class="main">
                <form method="get">
                    <label>
                        Nome:<input type="text" name="nome" placeholder="Digite seu nome completo" required>
                    </label>
                <br>
                <label>
                    Email para contato:<input type="email" name="email" required>
                </label>
                <br>
                <label>
                    Telefone/celular para contato:<input type="number" name="telefone" required>
                </label>
                <br>
                <label>
                    Tipo de reclamação:<select required>
                        <option value="">---Escolha Aqui---</option>
                        <option value="Agendamento">Agendamento</option>
                        <option value="Site">Site</option>
                        <option value="Atendimento">Atendimento</option>
                        <option value="Trabalhe Conosco">Trabalhe Conosco</option>
                        <option value="Outro">Outro</option>
                    </select>
                </label>
                <br>                          
                <label>
                    Reclamação:<br><textarea rows="15" cols="50" placeholder="Escreva sua reclamação nesta área" required></textarea>
                </label>
                <input type="submit" name="Enviar">
            </form>
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