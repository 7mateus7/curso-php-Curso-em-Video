<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $numeroAtual = $_GET["numero"];
        $numeroAnt = $numeroAtual - 1;
        $numeroProx = $numeroAtual + 1;
        echo"<h1>Resultado Final</h1>";
        echo"<p>O número informado: $numeroAtual</p>";
        echo"<p>O número ANTERIOR: $numeroAnt</p>";
        echo"<p>O PRÓXIMO número: $numeroProx</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'"> &#x2B05; Voltar</button>

        <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar 02</button>
    </main>
</body>
</html> 