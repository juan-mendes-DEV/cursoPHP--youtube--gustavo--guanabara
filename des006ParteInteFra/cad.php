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
       $num = $_GET["numero"] ?? 0;

       echo "<p>Analisando o numero informado pelo usuario <strong>".number_format($num,3,",",".")."</strong></p>";

       $int = (int)$num;
       $fra = $num - $int;

        echo "<p> a parte inteira do numero é <strong>".number_format($int,0,",",".")."</strong></p>";
        echo "<p>a parte fracionaria é ".number_format($fra,3,",",".")."</p>";
    ?>

   <p>
       <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
   </p>
    

</body>
</html>