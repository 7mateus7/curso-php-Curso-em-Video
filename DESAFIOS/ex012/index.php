<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 012</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $segundosInfo = $_GET['segundosInf'] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="input">Qual é o total de segundos?</label>
            <input type="number" name="segundosInf" id="idSegundos" value="<?= $segundosInfo ?>">
            <input type="submit" value="CALCULAR">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
        $semanas = intdiv($segundosInfo, 604800);
        $desconto = $semanas * 604800;

        $dias = intdiv(($segundosInfo - $desconto), 86400);
        $desconto = $desconto + ($dias * 86400);

        $horas = intdiv(($segundosInfo - $desconto), 3600);
        $desconto = $desconto + ($horas * 3600);

        $minutos = intdiv(($segundosInfo - $desconto), 60);
        $desconto = $desconto + ($minutos * 60);

        $segundos = $segundosInfo - $desconto;
        ?>
        <p>Analisando o valor que você digitou, <strong> <?= number_format($segundosInfo, 0, ",", ".") ?>
                segundos</strong> equivalem a um total de: </p>
        <ul>
            <li> <?= $semanas ?> Semanas</li>
            <li> <?= $dias ?> Dias</li>
            <li> <?= $horas ?> Horas</li>
            <li> <?= $minutos ?> Minutos</li>
            <li> <?= $segundos ?> Segundos</li>
        </ul>
    </section>
</body>

</html>