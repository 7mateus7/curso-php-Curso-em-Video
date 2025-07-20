<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 013
    </title>
    <link rel="stylesheet" href="style_2.css">
</head>

<body>
    <?php
    $valorInfo = $_GET['valorInfo'] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valorInfo" id="idValor" value="<?= $valorInfo ?>" step="5">
            <p style="font-size: 0.9em;">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar" id="idSaque">
        </form>
    </main>
    <section>
        <h2>Saque de R$<span><?= number_format($valorInfo, 2, ",", ".") ?></span> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <?php
        $resto = $valorInfo;

        if ($valorInfo < 100) {
            $cem = 0;
            $resto = $valorInfo;
        } else {
            $cem = intdiv($resto, 100);
            $resto %= 100;
        }

        if ($resto >= 50) {
            $cinquenta = intdiv($resto, 50);
            $resto %= 50;
        } else {
            $cinquenta = 0;
        }

        if ($resto >= 10) {
            $dez = intdiv($resto, 10);
            $resto %= 10;
        } else {
            $dez = 0;
        }

        if ($resto >= 5) {
            $cinco = intdiv($resto, 5);
        } else {
            $cinco = 0;
        }
        ?>
        <ul>
            <li><img Src="imagens/100_front.jpg" class="imagem"> x <?= $cem ?></li>
            <li><img Src="imagens/50_front.jpg" class="imagem"> x <?= $cinquenta ?></li>
            <li><img Src="imagens/10_front.jpg" class=imagem> x <?= $dez ?> </li>
            <li><img Src="imagens/5_front.jpg" class="imagem"> x <?= $cinco ?> </li>
        </ul>

    </section>
</body>

</html>