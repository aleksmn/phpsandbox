<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP loops</title>
</head>
<body>
  <h1>PHP loops</h1>

  <?php
    
    // for loop
    for($i = 0; $i <= 5; $i++) {
      echo "For loop ... $i<br>";
    }


    // while loop
    $x = 0;
    while($x <= 5) {
      echo "While loop ... $x<br>";
      $x++;
    }

    // foreach loop
    $values = array(1, 2, 3, 4, 5);
    foreach($values as $value) {
      echo "Foreach loop ... $value<br>";
    }

  ?>

</body>
</html>