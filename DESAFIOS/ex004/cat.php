<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 php</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            $inicio = date("m-d-Y", strtotime("- 7 days"));
            $fim = date("m-d-Y");

            $padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $valorInformado = $_GET["dinheiro"];
            $valorDolar = $valorInformado / $cotacao;

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $valorInformado, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $valorDolar, "USD") . "</strong></p>";

            echo "\u{1F4B5}Cotação do Dólar no dia <em>$fim</em> <strong>" . numfmt_format_currency($padrao,$cotacao,"USD") . "</strong>";

            echo "<p>⚠️Cotação atualizada em tempo real via APi com Banco Central do Brasil 🇧🇷 </p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>