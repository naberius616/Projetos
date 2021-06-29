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
  
    $funcionarios = array(
        array("nome" => "joao","salario" => 2500),
        array("nome" => "maria","salario" => 3000),
        array("nome" => "julia","salario" => 2200),
    );
    
    echo "<pre>";
    print_r($funcionarios);
    echo "<pre>";

    foreach($funcionarios as $idx => $funcionario) {
        foreach($funcionario as $idx2 => $valor) {
            echo "$idx2 - $valor <br>";
            
        
        
        }

        echo "<hr>";
        
    
    
    }

?>
    
</body>
</html>