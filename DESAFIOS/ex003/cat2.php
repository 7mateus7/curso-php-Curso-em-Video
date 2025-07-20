<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $valorDinheiro = $_GET["dinheiro"];
            $valorDolar = $valorDinheiro / 5.56;
            $valorFinal = number_format($valorDolar, 2);

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $valorDinheiro, "BRL"). "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $valorFinal, "USD") . "</strong></p>";
            echo "<strong><p>*Cotação fixa de R$5,56</strong> informada diretamente no código.</p>";
        ?>
        <input type="button" value="Voltar" id="voltarBotao">

        <script>
            const
                botao = document.getElementById("voltarBotao");

                function voltarPagina () {
                    window.history.back();
                }

                botao.addEventListener("click",voltarPagina)
        </script>
    </main>
</body>
</html>