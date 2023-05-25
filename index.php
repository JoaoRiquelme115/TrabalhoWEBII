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
        <a href="index.php"><img src="imagens/logoCS.png" alt="Logo do site"></a>
        <div>
            <button class="botao1">Como funciona</button>
            <button class="botao2">Seja um Profissional</button>
        </div>
    </header>

    <div class="menu">
        <a href="detalhe.php?Saude"><img src="imagens/saude.png" alt="saúde">
        <h3>Saúde</h3></a>
        <a href="detalhe.php?Autos"><img src="imagens/carro.png" alt="carro">
        <h3>Autos</h3></a>
        <a href="detalhe.php?Eventos"><img src="imagens/eventos.png" alt="eventos">
        <h3>Eventos</h3></a>
        <a href="detalhe.php?Aulas"><img src="imagens/aula.png" alt="aula">
        <h3>Aulas</h3></a>
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

        <h1 class='categoria'>SAÚDE</h1>
        <?php
            foreach($servicos as $i => $serv){
                if($i < 6){
        ?>
        <div class="card">
            <a href="detalhe.php?i=<?=$i?>">
			    <img src="<?=$serv["foto"]?>" alt="<?=$serv["nome"]?>">
                <h3><?=$serv["nome"]?></h3>
            </a>
        </div>
        <?php
                }
            }
        ?>

        <h1 class='categoria'>AUTOS</h1>
        <?php
            foreach($servicos as $i => $serv){
                if($i >= 6 && $i < 12){
        ?>
        <div class="card">
            <a href="detalhe.php?i=<?=$i?>">
			    <img src="<?=$serv["foto"]?>" alt="<?=$serv["nome"]?>">
                <h3><?=$serv["nome"]?></h3>
            </a>
        </div>
        <?php
                }
            }
        ?>

        <h1 class='categoria'>EVENTOS</h1>
        <?php
            foreach($servicos as $i => $serv){
                if($i >= 12 && $i < 18){
        ?>
        <div class="card">
            <a href="detalhe.php?i=<?=$i?>">
			    <img src="<?=$serv["foto"]?>" alt="<?=$serv["nome"]?>">
                <h3><?=$serv["nome"]?></h3>
            </a>
        </div>
        <?php
                }
            }
        ?>

        <h1 class='categoria'>AULAS</h1>
        <?php
            foreach($servicos as $i => $serv){
                if($i >= 18 && $i < 24){
        ?>
        <div class="card">
            <a href="detalhe.php?i=<?=$i?>">
			    <img src="<?=$serv["foto"]?>" alt="<?=$serv["nome"]?>">
                <h3><?=$serv["nome"]?></h3>
            </a>
        </div>
        <?php
                }
            }
        ?>
    </div>
</body>
</html>