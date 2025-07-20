<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execício 09</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $numero01 = $_GET['primeiroNum'] ?? 0;
    $peso01 = $_GET['primeiroPeso'] ?? 1;
    $numero02 = $_GET['segundoNum'] ?? 0;
    $peso02 = $_GET['segundoPeso'] ?? 1;
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="primeiro">1° Valor</label>
            <input type="number" name="primeiroNum" id="idPrimeiroNum" required value="<?=$numero01?>">
            <label for=" segundo">1° Peso</label>
            <input type="number" name="primeiroPeso" id="idPrimeiroPeso" value="<?= $peso01 ?>" required>
            <label for="terceiro">2° Valor</label>
            <input type="number" name="segundoNum" id="idSegundoNum" required value="<?= $numero02?>">
            <label for="quarto">2° Peso</label>
            <input type="number" name="segundoPeso" id="idSegundoPeso" value="<?= $peso02 ?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Médias</h2>
        <?php
        $mediaA = ($numero01 + $numero02) / 2;
        $mediaP = (($numero01 * $peso01) + ($numero02 * $peso02)) / ($peso01 + $peso02);
        echo "<p>Analisando os valores $numero01 e $numero02</p>";
        echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaA, 2, ",", ".") . ".</li>";
        echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso01 e $peso02 é igual a " . number_format($mediaP, 2, ",", ".") . ".</ul>";
        ?>
    </section>
</body>

</html>