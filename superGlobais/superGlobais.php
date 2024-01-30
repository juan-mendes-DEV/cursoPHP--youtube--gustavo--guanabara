<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
        <?php 
            setcookie("dia-da-semana","SEGUNDA",time()+3600);
            session_start();
            $_SESSION["teste"]="funcionou";


            echo "<p>Super global GET</p>";
            var_dump($_GET);

            echo "<p>Super global POST</p>";
            var_dump($_POST);

            echo "<p>Super global cookie</p>";
            var_dump($_COOKIE);

            echo "super global session";
            var_dump($_SESSION);

            echo "<p>super global ENV</p>";
            var_dump($_ENV);
            // foreach(getenv() as $c => $v){
            //     echo "<br>$c -$v";
            // }
            echo "<p>superglobal server</p>";
            var_dump($_SERVER);

            echo "<p>superglobal GLOBALS</p>";
            var_dump($GLOBALS);
        ?>
    </pre>
</body>
</html>