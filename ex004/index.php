<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçoes aritmeticas</title>
</head>
<body>
    <?php 
        // $res = abs(-500);//para mostrar o valor absoluto
        // echo "O valor absoluto é: $res";
        $divisaoInteira = intdiv(5, 2); // serve para fazer uma divisão inteira
        echo "A resposta é: $divisaoInteira" . PHP_EOL;
        
        $minimo = min(1, 2, 3, 4);
        echo "/O menor valor é: $minimo" . PHP_EOL;//achar o menor numero
        
        $maximo= max(1, 2, 3, 4);
        echo "/O maior valor é: $maximo" . PHP_EOL;//achar o maior numero

        $valorDePi = pi();
        echo "/O valor de pi : $valorDePi";//achar o valor de pi

        $potencia = pow(5,2);
        echo "/o valor da potencia é $potencia";//achar o valor da potencia 

        $raizQuadrada = sqrt(81);
        echo "/ a raiz é $raizQuadrada"//achar a raiz quadrada
    ?>
</body>
</html>