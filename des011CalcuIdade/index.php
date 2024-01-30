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
        Digite as Datas para saber a idade
    </h1>
    <?php 
        $anoNascimento = $_GET["v1"]??0;
        $dataAtual = $_GET["v2"]??0;

        $soma = $dataAtual - $anoNascimento;
        $data = date("d/M/Y");
        
        

        echo "<p> A data atual é: $data, a sua idade é $soma.</p>";

    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">
            Digite o ano de nascimento:
        </label>
        <input type="number" name="v1" id="v1" min="1" value="1" step="0.001">

        <label for="v2">
            Digite a data:
        </label>
        <input type="number" name="v2" id="v2" min="1" value="1" step="0.001">
        
        <button type="submit">
            calcular
        </button>
        </form>

</body>
</html>