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
        Digite os segundos
    </h1>
    <?php 
        $segundos = $_GET["v1"]??0;
        $minutos = (int)($segundos / 60);
        $horas = (int)($minutos / 60);
        $dias = (int)($horas / 24);
        $semanas = (int)($dias / 7);

        echo "<p>segundos: $segundos</p>";
        echo "<p>minutos: $minutos</p>";
        echo "<p>horas: $horas</p>";
        echo "<p>dias: $dias</p>";
        echo "<p>semanas: $semanas</p>";
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite os segundos para conversão:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">

        <button type="submit">
            converter
        </button>
        </form>

</body>
</html>