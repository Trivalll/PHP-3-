<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>1 тапсырма</title>
  </head>
  <body>
      <form method = "POST">
          <p>Укажите цифру больше 1 или равную к этой цифре:</p>
          <input type="number" name="t"  step="1">
          
          <p>Укажите цифру больше 3 или равную к этой цифре</p>
          <input type="number" name="b"  step="1">
          <input type = "submit">
      </form>
      <?php
      $a = $_POST["t"];
      $b = $_POST["b"];
      if(($a <= 1) and ($b >= 3))
      {
          $c = $a + $b;
          echo "Otvet: ", $c;
          
      }else
      {
          $c = $a - $b;
          echo "Otvet :", $c;
      }
      
        ?>
  </body>
</html>
