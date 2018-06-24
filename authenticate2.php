<?php // authenticate2.php

require_once 'login.php';

$connection = new mysqli($hn, $un, $pw, $db);

if ($connection->connect_error) die($connection->connect_error);

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
  $un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
  $pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);

  $query = "SELECT * FROM users WHERE username = '$un_temp'";
  $result = $connection->query($query);
  if (!$result) die ($connection->error);
  elseif($result->num_rows)
  {
    $row = $result->fetch_array(MYSQLI_ASSOC);
      $result->close();
    
    $salt1 = "qm&h*";
    $salt2 = "pg!@";
    $token = hash('ripemd128', "$salt1$pw_temp$salt2");

    if ($token == $row['password'])
    {
      session_start();
      $_SESSION['username'] = $un_temp;
      $_SESSION['password'] = $pw_temp;
      $_SESSION['forename'] = $row['forename'];
      $_SESSION['surname'] = $row['surname'];
      echo "{$row['forename']} {$row['surname']} : Привет, {$row['forename']}, теперь Вы зарегистрированы под именем {$row['username']}";
      die ("<p><a href='continue.php'>Щелкните здесь для продолжения</a></p>");
    }
    else die ("Неверная комбинация имя пользователя - пароль (неверный пароль)");
  }
  else die ("Неверная комбинация имя пользователя - пароль (нет пользователя)");
}
else
{
  header('WWW-Authenticate: Basic realm="Restricted Section"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Пожалуйста, введите имя пользователя и пароль");
}

$connection->close();

function mysql_entities_fix_string($connection, $string)
{
  return htmlentities(mysql_fix_string($connection, $string));
}
function mysql_fix_string($connection, $string)
{
  if (get_magic_quotes_gpc()) $string = stripslashes($string);
  return $connection->real_escape_string($string);
}


?>