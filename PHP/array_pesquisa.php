<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $frut = ['Banana', 'Maçã', 'Morango', 'Uva'];


    echo "<pre>";
    print_r($frut);
    echo "</pre>";

    //$existe = in_array('Maçã', $frut);
    //true -> texto = 1
    //false -> texto = vazio
    $existe = array_search('Uva', $frut);
    //null

    if($existe) {
      echo "Sim, o valor pesquisado existe no array";

    }else {
      echo "Não, o valor pesquisado não existe no array";
    };

    $frut_listas = [
      'frutas' => $frut,
      'pessoas' => ['Juaum', 'Maria']
  ];

  echo "<pre>";
  print_r($frut_listas);
  echo "</pre>";

  echo in_array('Melancia', $frut_listas['frutas']);





     ?>

  </body>
</html>
