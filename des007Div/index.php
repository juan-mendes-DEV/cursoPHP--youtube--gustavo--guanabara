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
        $valor1 = $_GET["v1"] ?? 1;
        $valor2 = $_GET["v2"] ?? 1;

        $resto = $valor2 != 0 ? $valor1 % $valor2 : "erro";
        $coeficiente = $valor2 != 0 ? $valor1 / $valor2 : "erro";
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o dividendo da conta:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">
        <label for="v2">
            Digite o divisor da conta:
        </label>
        <input type="number" name="v2" id="v2" min="1" value="1" step="0.001">
        <button type="submit">
            calcular
        </button>
        </form>

   <div class="conta">
   <div class="container">
        <div class="esquerda">
            <?php echo "<p class=\"paragrafo\">$valor1</p>"?>
        </div>
        <div class="direito">
            <?php echo "<p class=\"paragrafo\">$valor2</p>"?>
        </div>
    </div>
    <div class="container1">
        <div class="esquerda1">
            <?php echo "<p class=\"paragrafo\">$resto</p>"?>
        </div>
        <div class="direito1">
            <?php echo "<p class=\"paragrafo\">".number_format($coeficiente,1)."</p>"?>
        </div>
    </div>
   </div>
</body>
</html>