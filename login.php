<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Login Page</title>
</head>
<body>
  <h1>PHP Login Page</h1>

<nav>
  <ul>
    <li><a href="login.php">Login Page</a></li>
    <li><a href="login_protected_page.php">Protected Page</a></li>
    <li><a href="login_logout.php">Logout</a></li>
  </ul>
</nav>
<main>
<?php
if(isset($_SESSION['isLoggedIn'])) {
  echo "<p>You are already logged in.</p>";
} else {
  $theForm = <<<THEFORM

  <h2>Please enter your user name:</h2>

  <form method='post' action='login_response.php'>
    <input type='text' name='userName' id='username'>
    <input type='submit'>
  </form>

THEFORM;

echo $theForm;
}
?>

  <?php

// using the query string to send messages back to this login page.


if(isset($_GET["isBlock"])) {

  echo "<h2>You need to login!</h2>";
  echo "<script>document.getElementById('username').focus();</script>";

} else if (isset($_GET["badUserCredentials"])) {

  echo "<p>User name OR password is wrong!</p>";
  echo "<script>document.getElementById('username').focus();</script>";

}


?>
</main>


</body>
</html>