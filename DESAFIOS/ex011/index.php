<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 011</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $padrao = numfmt_create('pt-br', NumberFormatter::CURRENCY);
    $precoInfo = $_GET['preco'] ?? 0;
    $ajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="precoInf">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idPreco" value="<?= $precoInfo ?>" step="0.01">
            <label for="reajuste">Qual será o percentual de ajuste? (<strong><span
                        id="valorAtual">50</span>%</strong>)</label>
            <input type="range" min="0" max="100" step="1" value="50" name="reajuste" id="reajuste"
                oninput="mudaValor()">
            <input type="submit" value="REAJUSTAR">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $soma = ($ajuste * $precoInfo) / 100;
        $valorFinal = $soma + $precoInfo;
        ?>
        <p>O produto que custava <?= numfmt_format_currency($padrao, $precoInfo, "BRL") ?>, com <strong>
                <?= $ajuste ?>% de aumento</strong> vai passar a custar
            <strong><?= numfmt_format_currency($padrao, $valorFinal, "BRL") ?></strong>
        </p>
    </section>
    <script>
        //Primeira Maneira
        /*const barraDeRolagem = document.getElementById('reajuste');
        const spanValor = document.getElementById('valorAtual');
        barraDeRolagem.addEventListener('input', function() {
            spanValor.textContent = this.value;
        })*/

        //Segunda Maneira
        function mudaValor() {
            valorAtual.innerText = reajuste.value
        }
    </script>
</body>

</html>