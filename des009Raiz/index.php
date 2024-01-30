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
        Digite os valores para divisão:
    </h1>
    <?php 
        $raiz = $_GET["v1"]??0;
        $raizQuadrada = sqrt($raiz);//para saber a raiz quadrada
        $raizCubica = pow($raiz, 1/3);//para saber a raiz cubica

        echo "<p> o valor escolhido foi: <strong>$raiz</strong>, sua raiz quadrada é 
        <strong>$raizQuadrada</strong> e sua raiz cubica é <strong>$raizCubica</strong></p> "
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o valor para achar a raiz quadrada e cubica:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">
        <button type="submit">
            calcular
        </button>
        </form>

</body>
</html>