
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_02</title>
</head>
<body>
<?php

$num01 = $_POST['num01'];
$num02 = $_POST['num02'];
$num03 = $_POST['num03'];

     echo "<h1>Voce digitou nessa ordem:</h1>";
     echo "$num01";
    echo "<br>";
     echo "$num02";
    echo "<br>";
     echo "$num03";
    echo "<br>";

echo "<h2>Aqui está em ordem crescente:</h2>";

    if ($num01<$num02 && $num02<$num03) {
    echo "$num01>$num02$num03";
    }

    if ($num01<$num03 && $num03<$num02) {
    echo "$num01>$num03>$num02";
    }

    if ($num02<$num01 && $num01<$num03) {
    echo "$num02>$num01>$num03";
    }

    if ($num02<$num03 && $num03<$num01) {
    echo "$num02>$num03>$num01";
    }

    if ($num03<$num02 && $num02<$num01) {
    echo "$num03>$num02>$num01";
    }

    if ($num03<$num01 && $num01<$num02) {
    echo "$num03>$num01>$num02";
    }

?>
</body>
</html> 