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
    
    $itens = array("sofa", "mesa", "cadeira", "pica");

    echo "<pre>";
    print_r($itens);
    echo "<pre>";

    foreach($itens as $item) {
        echo "$item <br>";

        if($utem == "mesa") {
            echo "compre uma mesa e ganhe 25% de desconto";

        }

        echo "<br>";
    }

?>
    
</body>
</html>