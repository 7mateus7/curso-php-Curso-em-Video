<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execício 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
        $soma = $valor1 + $valor2;
    ?>
    <main>
        <h1>Informe DOIS números:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 01</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 02</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="SOMAR">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php 
            echo "<p>$soma</p>"
        ?>
    </section>
</body>
</html>