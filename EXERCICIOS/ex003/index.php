<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos de Dados</title>
</head>
<body>
    <h1>Tipos Primitivos de Dados</h1>
    <?php
        $nome = "Mateus";
        $sobrenome = "Oliveira"; 
        const PAIS = "Brasil";
        $num = 0x1A;
        $numeroInteger = 77;
        $numeroReal = 55.7;
        $varBooleana = false;
        echo "O valor do número é igual a $num.";
        echo "<p>Olá $nome $sobrenome, Seja Bem-vindo.</p>";
        echo "<p>Você mora no " . PAIS, "</p>";
        echo "A variável de número do tipo Integer = " . $numeroInteger, "</p>";
        echo "A variável de número do tipo Real = " . $numeroReal, "</p>";
        echo "A variável do tipo Booleana = " . $varBooleana, "</p>";
    ?>
</body>
</html>