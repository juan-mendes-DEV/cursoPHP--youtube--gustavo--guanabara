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
        $valor1 = $_GET["v1"]??0;
        $valor2 = $_GET["v2"]??0;
        $peso1 = $_GET["p1"]??0;
        $peso2 = $_GET["p2"]??0;

        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

       

        echo "<p>a média dos valores é: $mediaSimples</p> ";
        echo "<p>a média ponderada dos valores é: $mediaPonderada </p>";
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o valor 1:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">

        <label for="p1">
            Digite o peso 1:
        </label>
        <input type="number" name="p1" id="p1" min="1" value="1" step="0.001">

        <label for="v2">
            Digite o valor 2:
        </label>
        <input type="number" name="v2" id="v2" min="1" value="1" step="0.001">

        <label for="p2">
            Digite o peso 2:
        </label>
        <input type="number" name="p2" id="p2" min="1" value="1" step="0.001">

        <button type="submit">
            calcular
        </button>
        </form>

</body>
</html>