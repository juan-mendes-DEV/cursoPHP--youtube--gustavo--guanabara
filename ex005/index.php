<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <?php 
        // const ESTADO = "RJ";
        // echo "moro no estado " . ESTADO;
        // $nom = "rodrigo";
        // $snom = "nogueira";
        // echo $nom." mi notauro ".$snom;
        $curso = "PHP";
        $ano = date("y");
        $nome = "juan";

        echo <<< FRASE
            estou estudando $curso no ano: $ano
                meu nome é $nome
        FRASE;
    ?>
</body>
</html>