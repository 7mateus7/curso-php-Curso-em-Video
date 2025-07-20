<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 010</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $anoAtual = date('Y');
    $anoNascimento = $_POST["anoNasc"] ?? 2000;
    $anoInformado = $_POST["anoInformado"] ?? $anoAtual;
    ?>
    <main>
        <h2>Calculando a sua Idade</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="idNasc" value="<?= $anoNascimento ?>" required max="2025">
            <label for="anoInf">Quer saber a sua idade em que ano?(Atualmente estamos em
                <strong><?= $anoAtual ?></strong>)</label>
            <input type="number" name="anoInformado" id="idInf" value="<?= $anoInformado ?>" required>
            <input type="submit" value="CALCULAR A IDADE">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php
        $idade = $anoInformado - $anoNascimento;
        ?>
        <p>Quem nasceu em <?= $anoNascimento ?> vai ter <strong><?= $idade ?> anos </strong> em <?= $anoInformado ?>!
        </p>
    </section>
</body>

</html>