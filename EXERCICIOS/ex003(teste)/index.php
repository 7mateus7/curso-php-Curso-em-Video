<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php
        const _TX = "Brasil"; 
        $nome = 'Rodrigo';
        $sobrenome = "Nogueira";
        $salário = 2500.55;
        $emoji = "PHP \u{1F418}";
        $emoji_2 = 'PHP \u{1F418}';  

        Echo "<p>Seja muito bem-vindo $nome \" Minotauro \" $sobrenome</p>";
        "<p>Seu salário é de R$$salário reais.</p>
        <p>E você é natural do ". _TX . " \u{26BD} </p>";
        echo "</p>Emoji do " . $emoji, "</p>"; 
        echo "</p>Emoji do " . $emoji_2, "</p>"; 
        echo "<p>Estamos no ano de " . date('Y'), "</p>";     
        echo "Estamos no mês de " . date('M'), "</p>";  
        echo "Estamos no dia de " . date('d'), "</p>";
    ?>
</body>
</html>