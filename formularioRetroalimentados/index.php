<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php //capturando os dados do formulario retroalimentado 
        $valor1 = $_GET["v1"]??0;
        $valor2 = $_GET["v2"]??0;

        $soma = $valor1 + $valor2;
        
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">valor 1</label>
        <input type="number" name="v1" id="v1" value="<?php $valor1 ?>">
        <label for="v2">valor 2</label>
        <input type="number" name="v2" id="v2" value=" <?php $valor2 ?>">
        <button type="submit">somar</button>
    </form>
    <?php echo "o valor da soma é: $soma";?>
</body>
</html>