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
        <a href="index.php"><img src="imagens/logoCS.png" alt="Logo do site"></a>
        <div>
            <button class="botao1">Como funciona</button>
            <button class="botao2">Seja um Profissional</button>
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
    <a href="index.php"><button class="botao1">Voltar</button></a>
</body>
</html>