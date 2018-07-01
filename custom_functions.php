<?php

function greetings($name="User", $prefix="") {
  return "Hello, $prefix $name!";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP custom functions</title>
</head>
<body>
  <h1>PHP custom functions</h1>

  <?php
  echo greetings("Mike", "my dear");
  echo "<br>";
  echo greetings("James", "Mr.");
  echo "<br>";
  echo greetings();
  echo "<br>";
  echo greetings("Marie");
  ?>

</body>
</html>