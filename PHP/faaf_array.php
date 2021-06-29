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
    /*$array = "notebook, teclado";
    $retorno = is_array($array);

    if($retorno) {
        echo "Sim, array";
    } else {
        echo "Não, array";
    }*/


    $array = array("mouse", "teclado", "cabo hdmi", "mouse6.7");
    echo "<pre>";
        print_r($array);
    echo "<pre>";

    asort($array);
    echo "<pre>";
    print_r($array);
    count($array);
    echo "<pre>";







?>
    
</body>
</html>