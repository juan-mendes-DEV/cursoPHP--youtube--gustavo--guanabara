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

        $real = $_GET["numero"];

        $dolar = intval($real / 4.92);//converte para inteiro
       
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//biblioteca do php
        echo "<p>seus " . numfmt_format_currency($padrao, $real, "BRL")."
        equivalem a ". numfmt_format_currency($padrao, $dolar, "USD</p>");
        
    ?>

   <p>
       <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
   </p>
    

</body>
</html>