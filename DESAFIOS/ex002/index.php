<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $numero = mt_rand(0, 100);
            echo "O valor gerado foi <strong>$numero</strong>";
        ?>
        <input type="button" value="&#x1F504; Gerar outro" id="meuBotao">
        <script>
            const botao = document.getElementById("meuBotao");

            botao.addEventListener("click", recarrega);

            
            function recarrega() {
                location.reload();
            }
        </script>
    </main>
</body>
</html>