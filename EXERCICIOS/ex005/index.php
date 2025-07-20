<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <?php 
        $valor = "2" + "2";
        $teste =   5 + 2 / 2;
        $absoluto = abs(500);
        $conversor = base_convert(100, 10, 8);
        $divInteira = intdiv(5,2);
        $menorValor = min(1,2,3,4,5,6);
        $maiorValor = max(1,2,3,4,5,6);
        $pi = M_PI;
        $potencia = pow(5, 2);
        $raizQuadrada = sqrt(144);
        echo "<p>O valor de \"2\" + \"2\" é igual a $valor</p>";
        var_dump($valor);
        echo "<p>O valor de 5 + 2 \ 2 é igual a $teste</p>";
        print("<p>O valor absoluto de 500 é $absoluto</p>");
        print("<p>O número 100 na base 8 é igual a $conversor</p>");
        echo("<p>O valor da divisão inteira é igual a $divInteira</p>");
        echo("<p>O menor valor do intervalo de 1-6 é $menorValor</p>");
        echo("<p>O maior valor do intervalo de 1-6 é $maiorValor</p>");
        echo("<p>O valor de PI é igual a $pi</p>");
        echo("O valor de 5 elevado (com função) a 2 é igual a $potencia");
        echo("<p>A raiz quadrada (com função) do número 144 é igual a $raizQuadrada</p>");
    ?>
</body>
</html>

<!-- 
    +  -> Adição (5 + 2 = 7);
    -  -> Subtração (5 - 2 = 3);
    *  -> Multiplicação (5 * 2 = 10);
    /  -> Divisão Real (5 / 2 = 2.5);
    %  -> Resto da Divisão Inteira (5 % 2 = 1);
    ** -> Exponenciação (5 ** 2 = 25);
-->