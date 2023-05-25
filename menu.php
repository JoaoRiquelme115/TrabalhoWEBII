<?php
    require "dados.php";
    if(!isset($_GET["i"])){
		header("location: index.php");
		die;
	}
    $categoria = $_GET["i"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Menu de Serviços</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="imagens/logoCS.png" alt="Logo do site"></a>
        <div>
            <button class="botao1">Como funciona</button>
            <button class="botao2">Seja um Profissional</button>
        </div>
    </header>

    <div class="listaGeral">
        <h1 class="categoria">Serviços de <?=$categoria?></h1>
        <?php
            foreach($servicos as $i => $serv){
                if($serv["area"] == $categoria){
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