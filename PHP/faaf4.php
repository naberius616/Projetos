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
    
    $registros = array(
    array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo'),
    array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo'),
    array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo'),
    );


    echo "<pre>";
    print_r($registros);
    echo "<pre>";

    echo "<br> <br> <br>";
    $idx = 0;
    while($idx < 3) {

            echo "<h3>" . $registros[$idx]['titulo'] . "<h3>";
            echo "<p>" . $registros[$idx]['conteudo'] . "<p>";
        $idx++;
    }


?>
    
</body>
</html>