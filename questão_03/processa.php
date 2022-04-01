
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_03</title>
</head>
<body>
<?php
    $number=$_POST['number'];

    switch($number) {
        case "1":
            echo "<h1>Domingo</h1>";
            break;
        case "2":
            echo "<h1>Segunda</h1>";
            break;
        case "3":
            echo "<h1>Terça</h1>";
            break;
        case "4":
            echo "<h1>Quarta</h1>";
            break;
        case "5":
            echo "<h1>Quinta</h1>";
            break;
        case "6":
            echo "<h1>Sexta</h1>";
            break;
        case "7":
            echo "<h1>Sábado</h1>";
            break;
        default:
            echo "Voce digitou o numero errado, por favor digite ENTRE 1 a 7";
            break;
    
    }

?>  
</body>
</html>