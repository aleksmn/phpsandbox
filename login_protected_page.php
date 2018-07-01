<?php session_start(); 

if(!$_SESSION['isLoggedIn']) {
  header('Location: login.php?isBlock=true');
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Login Protected Page</title>
</head>
<body>
  <h1>PHP Login Protected Page</h1>

<nav>
  <ul>
    <li><a href="login.php">Login Page</a></li>
    <li><a href="login_protected_page.php">Protected Page</a></li>
    <li><a href="login_logout.php">Logout</a></li>
  </ul>
</nav>
<main>

This is protected page!

</main>


</body>
</html>