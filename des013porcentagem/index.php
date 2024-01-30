<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        porcentagem produto
    </h1>
    <?php 
        $valor1 = $_GET["v1"]??1;
        $porcentagem = $_GET["reaj"]??1;
        
        $soma = ($valor1 * $porcentagem) / 100??1;
        $soma2= $soma + $valor1;
        echo "<p>O valor do produto foi: $valor1, a porcentagem adicionada foi: $porcentagem, a adição sera de : $soma, totalizando: $soma2</p>";
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o valor do produto comprado:
        </label>
        <input type="number" name="v1" id="v1" min="1">
        <label for="reaj">Qual sera o percentual do reajuste: <span id="p">0</span></label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" >

        <button type="submit">
            converter
        </button>
        </form>

    <script src="./main.js"></script>
</body>
</html>