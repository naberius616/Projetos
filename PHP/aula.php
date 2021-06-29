<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //sequenciais (numericos)
    //$lista_frutas = array('Banana', 'Pica', 'Yumee', 'Mug I love you', 'Abacate');
    //$lista_frutas[2] = 'Abacaxi';
    //$lista_frutas[3] = 'Banana';


    echo "<pre>";
    var_dump($lista_frutas);
    echo "<pre>";
    echo "<hr>";
    echo "<pre>";
    print_r($lista_frutas);
    echo "<pre>";


    $frut = array('a' => 'Sara',
    'b' => 'Car',
    'c'=> 'Yumee',
    'd' => 'Mug I love you',
    'e' => 'Mitsubishi Lancer Evolution IX',
    'f' => 'Porshe Cayman 201922938',
    'g' => 'Caça A28826376238263 Turbo Nitro');
    echo '<pre>';
    var_dump($frut);
    echo '<pre>';
    echo $frut['b'];


    //$coisa = array();
    $coisa = [];

    $coisa['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'A', 4 => 'Uva');

    //$coisa['frutas'] = 'Banana';
    //$coisa['frutas'] = 'Maçã';

    $coisa['pessoas'] = [1 => 'yumee', 2 => 'Juaum', 3 => 'Josefino'];


    echo "<pre>";
    print_r($coisa);
    echo "<pre>";

    echo "<hr>";
    echo $coisa['frutas'][3];
    echo "<br>";
    echo $coisa['pessoas'][3];



    echo "<pre>";
    print_r($coisa);
    echo "<pre>";


    echo $lista_frutas[];

     ?>

  </body>
</html>
