<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um número:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="numero" id="idNumero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o <strong>número ".$numero."</strong>, temos:</p>";
            $raizQ = $numero ** (1/2);
            $raizC = $numero ** (1/3);
            $raizC_2 = $numero ** 0.33333; //Outra forma
            echo "<ul><li>Sua raiz quadrada é <strong>".number_format($raizQ,3,",",".")."</strong></li>";
            echo "<li>Sia raiz cúbica é <strong>".number_format($raizC,3,",",".")."</strong></li></ul>";
        ?>
    </section>
</body>

</html>