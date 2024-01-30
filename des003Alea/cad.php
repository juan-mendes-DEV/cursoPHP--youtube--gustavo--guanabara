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
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"]; 
        $numero_aleatorio = mt_rand($numero1, $numero2);
       

        echo "<p>o numero gerado foi: $numero_aleatorio</p>";
        
    ?>

   <p>
       <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
   </p>
    

</body>
</html>