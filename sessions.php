<?php session_start(); 

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP sessions</title>
</head>
<body>
  <h1>PHP sessions</h1>

  <?php
  echo "Session variables set!<br>";

  print_r($_SESSION);

  echo "<br><a href='http://localhost/phpsandbox/sessions2.php'>View Session</a><br>";

  echo "Reset session<br>";
  $_SESSION["favcolor"] = "purple";
  $_SESSION["favanimal"] = "dog";

  echo "New session variables ";
  print_r($_SESSION);

  echo "<br>Unset session<br>";
  session_unset();
  print_r($_SESSION);



  ?>

</body>
</html>