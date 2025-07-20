<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo Execício 02 - php</h1>
    <?
        date_default_timezone_set("America/Sao_Paulo"); 
        echo "Hoje é dia " . date("d/M/Y");
        echo "<p>E a hora atual " . date("G:i:s"); 
        phpinfo()
    ?>
</body>
</html>