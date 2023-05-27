<?php
require "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contratação de Serviços</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.php"><img src="imagens/cs3.png" alt="Logo do site"></a>
        <div>
            <a href="comofunciona.php"><button class="botao1">Como funciona</button></a>
            <a href="cadastro.php"><button class="botao2">Seja um Profissional</button></a>
        </div>
    </header>

    <div class="menu">
        <a href="menu.php?i=Saude"><img src="imagens/saude.png" alt="saúde">
            <h3>Saúde</h3>
        </a>
        <a href="menu.php?i=Autos"><img src="imagens/carro.png" alt="carro">
            <h3>Autos</h3>
        </a>
        <a href="menu.php?i=Eventos"><img src="imagens/eventos.png" alt="eventos">
            <h3>Eventos</h3>
        </a>
        <a href="menu.php?i=Aulas"><img src="imagens/aula.png" alt="aula">
            <h3>Aulas</h3>
        </a>
    </div>

    <div class="titulo">
        <h1>Conectando quem precisa com quem sabe fazer</h1>
        <p>Fale o que precisa, receba até 4 orçamentos, escolha o melhor</p>
    </div>

    <div class="busca">
        <img src="imagens/lupa.png" alt="ícone de pesquisa">
        <form action="detalhe.php" method="GET">
            <input type="search" name="busca" placeholder="Digite aqui sua pesquisa">
            <button>Buscar</button>
        </form>
    </div>

    <div class="listaGeral">
        <div class="tituloLista">
            <h1>Lista de Serviços</h1>
        </div>

        <h1 class='categoria'>SERVIÇOS DE SAÚDE</h1>
        <?php
        foreach ($servicos as $i => $serv) {
            if ($serv["area"] == "Saude") {
        ?>
                <div class="card">
                    <a href="detalhe.php?i=<?= $i ?>">
                        <img src="<?= $serv["foto"] ?>" alt="<?= $serv["nome"] ?>">
                        <h3><?= $serv["nome"] ?></h3>
                    </a>
                </div>
        <?php
            }
        }
        ?>

        <h1 class='categoria'>SERVIÇOS PARA AUTOMÓVEIS</h1>
        <?php
        foreach ($servicos as $i => $serv) {
            if ($serv["area"] == "Autos") {
        ?>
                <div class="card">
                    <a href="detalhe.php?i=<?= $i ?>">
                        <img src="<?= $serv["foto"] ?>" alt="<?= $serv["nome"] ?>">
                        <h3><?= $serv["nome"] ?></h3>
                    </a>
                </div>
        <?php
            }
        }
        ?>

        <h1 class='categoria'>SERVIÇOS PARA EVENTOS</h1>
        <?php
        foreach ($servicos as $i => $serv) {
            if ($serv["area"] == "Eventos") {
        ?>
                <div class="card">
                    <a href="detalhe.php?i=<?= $i ?>">
                        <img src="<?= $serv["foto"] ?>" alt="<?= $serv["nome"] ?>">
                        <h3><?= $serv["nome"] ?></h3>
                    </a>
                </div>
        <?php
            }
        }
        ?>

        <h1 class='categoria'>SERVIÇOS DE ENSINO</h1>
        <?php
        foreach ($servicos as $i => $serv) {
            if ($serv["area"] == "Aulas") {
        ?>
                <div class="card">
                    <a href="detalhe.php?i=<?= $i ?>">
                        <img src="<?= $serv["foto"] ?>" alt="<?= $serv["nome"] ?>">
                        <h3><?= $serv["nome"] ?></h3>
                    </a>
                </div>
        <?php
            }
        }
        ?>
    </div>
 <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo"></h1>
            <h2>Atendimento ao cliente</h2>
            <address>
                (77) 40028922<br>
                <a class="footer__btn" href=""> suportecsgroup@gmail.com.br
                </a>
            </address>
        </div>

        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title"> Media</h2>
                <ul class="nav__ul">
                    <li><a href="#">Em todas as redes sociais</a></li>
                    <li><a href="#">@Csgroup_Brasil</a></li>
                </ul>
            </li>

            <li class="nav_item nav_item--extra">
                <h2 class="nav__title">Website Designer by</h2>
                <ul class="nav_ul nav_ul--extra">
                    <li><p>Elayne</p></li>
                    <li><p>João Riquelme</p></li>
                    <li><p>Ludmylla</p></li>
                    <li><p>Rayka</p></li>
                </ul>
            </li>

            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>
                <ul class="nav__ul">
                    <li><a href="#">Politica de Privacidade</a></li>
                    <li><a href="#">Termos de uso</a></li>
                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2022 All rights reserved.</p>
            <div class="legal__links">
                <span>Made with <span class="heart">♥
            </div>
        </div>
    </footer>

</body>

</html>
   
