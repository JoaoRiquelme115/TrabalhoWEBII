<!--Página com os detalhes do(s) serviço(s) escolhido(s)-->
<?php
    require "dados.php";
    if(!isset($_GET["i"])){
		header("location: index.php");
		die;
	}
    $indice = $_GET["i"];
    if(isset($servicos)){
        $s = $servicos[$indice];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Detalhe do Serviço</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="imagens/cs3.png" alt="Logo do site"></a>
        <div>
            <a href="comofunciona.php"><button class="botao1">Como funciona</button>
            <a href="cadastro.php"><button class="botao2">Seja um Profissional</button>
        </div>
    </header>

    <div class="card-detalhe">
        <?php
            if(isset($s)){
        ?>
		<img src="<?=$s['foto']?>">
		<h3><?=$s["nome"]?></h3>
        <h3>Valor: R$ <?=$s["valor"]?>,00</h3>
        <h3>Profissionais disponíveis: <?=$s["disponivel"]?></h3>
        <p><strong>Descrição:</strong> <?=$s["descricao"]?></p>
        <?php
            }else{
                echo "<h3>Serviço não Encontrado</h3>";
            }
        ?>
    </div>
    <a href="index.php"><button class="botao1">Voltar</button></a> <br><br><br>

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