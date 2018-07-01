<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Login Response</title>
</head>
<body>
  <h1>PHP Login Response</h1>

<nav>
  <ul>
    <li><a href="login.php">Login Page</a></li>
    <li><a href="login_protected_page.php">Protected Page</a></li>
    <li><a href="login_logout.php">Logout</a></li>
  </ul>
</nav>
<main>


<?php
$userName = $_POST["userName"];

if(trim($userName) == "Mike") {

  $_SESSION['isLoggedIn'] = true;
  header('Location: login_protected_page.php');

} else {

  header('Location: login.php?badUserCredentials=true');
}
?>
</main>


</body>
</html>