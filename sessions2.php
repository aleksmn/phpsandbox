<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP sessions</title>
</head>
<body>
  <h1>PHP sessions</h1>

  <?php

  echo 'My favorite color is ' . $_SESSION["favcolor"] . '.<br>';
  echo 'My favorite animal is ' . $_SESSION["favanimal"] . '.<br>';

  ?>

</body>
</html>