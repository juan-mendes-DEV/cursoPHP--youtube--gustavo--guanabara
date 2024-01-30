<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado do processamento</h1>
    <?php 
        // var_dump($_POST)
        $n = $_GET["nome"] ?? "anonimo";
        $s = $_GET["sobrenome"] ?? "";

        echo "<p>processo finalizado com sucesso sr.  $n $s </p>"
    ?>
   <p>
       <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
   </p>
    

</body>
</html>