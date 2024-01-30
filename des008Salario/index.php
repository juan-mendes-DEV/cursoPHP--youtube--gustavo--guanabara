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
        $salario = $_GET["v1"]??0;
        $salarioAtual = 1412.000;
        $divisaoResto = $salario % $salarioAtual;
        $divisaoCabem = (int)($salario / $salarioAtual);

        echo "<p> O valor de seu salario é: R$<strong>$salario</strong>,
        nele cabem o valor de <strong>$divisaoCabem</strong> salarios minimos + R$ <strong>
        $divisaoResto
        </strong>      
         </p> "
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o valor de seu salario:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">
        <button type="submit">
            calcular
        </button>
        </form>

</body>
</html>