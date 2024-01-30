<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do processamento</h1>
    <?php 
        // var_dump($_POST)
        $n = $_GET["numero"]; 
        $antecessor = $n - 1;
        $sucessor = $n + 1;

        echo "<p>o numero escolhido foi: $n</p>";
        echo "<p>seu antecessor é: $antecessor</p>";
        echo "<p>seu sucessor é: $sucessor</p>";
    ?>

   <p>
       <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
   </p>
    

</body>
</html>