<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$porque = null;
$orelha = '';
$diguidim = false;

if(is_null($porque)) {
    echo "Sim, a variavel é null";

} else {
    echo "Não, a variavel não é null";
}

echo "<br>";
if(is_null($orelha)) {
    echo "Sim, a variavel é null";

} else {
    echo "Não, a variavel não é null";
}

echo "<br>";
if(empty($porque)) {
    echo "Sim, a variavel é null";
} else {
    echo "Não, a variavel não é null";
}

echo "<br>";
if(empty($orelha)) {
    echo "Sim, a variavel é null";
} else {
    echo "Não, a variavel não é null";
}





?>
    
</body>
</html>