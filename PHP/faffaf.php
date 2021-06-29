<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>?NAB?</title>
</head>
<body>
<?php 

    $num = 1;
    echo "-- INICIO DO LOOP -- <br>";
    while($num < 10) {

        echo "$num <br>";
        $num += 1;

        if($num == 2 || $num == 6) {
            continue;
        }

        /*if($num > 200) {
            break;
        }*/

    }

    echo "-- FIM DO LOOP --"



?>
    
</body>
</html>