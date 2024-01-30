<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em php</title>
</head>
<body>
    <h1>
        teste de tipos primitivos em php.
    </h1>
    <p>  
        <?php 
            //0x = hexadecimal, 0b = binario, 0 = octal 
            
            //   $num = 100;
            //   echo "o valo da variavel é: $num";

              //$v = 200;
              //var_dump($v); 
              // var_dump() é uma função interna do php para despejo da variavel mostrando que tipo ela é

            // $num = (int)3e2; //int coersão
            // $num2 = (float)"900";
    
            // var_dump($num2);
            // var_dump($num);

            $vet = [1,2,3,4,5];
            var_dump($vet);
            ?>
    </p>
</body>
</html>