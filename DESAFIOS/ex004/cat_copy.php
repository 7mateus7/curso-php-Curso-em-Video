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
        <pre>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //echo "<>A cotação atual é igual a $cotacao";

            $valorInformado = $_GET["dinheiro"];
            $valorFinal = $valorInformado / $cotacao;

            echo "<p>Seus " . numfmt_format_currency($padrao, $valorInformado, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $valorFinal, "USD") . "</p>";
        ?>
        </pre>
    </main>
</body>
</html>