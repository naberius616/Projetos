<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>?NAB?</title>
  </head>
  <body>
    <?php
      $top = "testando <br>";
      $top2 = "testando <br>";
      
      echo "$top <br>";
      
      echo "$top2 <br>";

      echo "<hr>";

      echo substr($dig, 1, 4)."<br>";

      echo "teste <br>"; 
      echo "<hr>";


      $num2 = 2.45;
      $num = -2.45;
      
      echo ceil($num2)."<br>";//fazer arredondamento
      echo floor($num)."<br>"; //arredondar para baixo

      echo round($num1)."<br>";  //arrendonda com base na fração

      echo rand($num)."<br>"; //gerar um valor aleatorio 0 até randmax
      echo "<br>".getrandmax();




     ?>

     
</html>
