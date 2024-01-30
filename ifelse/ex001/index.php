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
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $genero = $_GET["genero"];
        $idade = $_GET["idade"];
       
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="nome">
            Digite seu nome:
        </label>
        <input type="text" name="nome" id="nome" minlength="3" maxlength="15">

        <label for="sobrenome">
            Digite seu sobrenome:
        </label>
        <input type="text" name="sobrenome" id="sobrenome" minlength="3" maxlength="20">

        <label for="genero">
            Digite o seu genero:
        </label>
        <input type="text" name="genero" id="genero" minlength="3" maxlength="40">

        <label for="nome">
            Digite sua idade:
        </label>
        <input type="number" name="idade" id="idade" min="1" max="100">

        <button type="submit">
            converter
        </button>
        </form>

</body>
</html>