<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
        $salarioMin = 1380.60;
        $salarioInf = $_POST['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu salário:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salarioLabel">Salário (R$)</label>
            <input type="number" name="sal" id="idSalario" step="0.01" value="<?=$salarioMin?>">
            <p>Considerando o salário mínimo de
                <strong><?=numfmt_format_currency($padrao, $salarioMin, "BRL")?></strong>
            </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final:</h2>
        <?php 
            $quantidade = intdiv($salarioInf, $salarioMin);
            $resto = $salarioInf % $salarioMin;
            echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salarioInf, "BRL") . " ganha <strong>" .$quantidade. " salários mínimos +  ". numfmt_format_currency($padrao , $resto, "BRL") . "</strong> </p>";
        ?>
    </section>
</body>

</html>