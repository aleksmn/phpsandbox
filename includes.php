<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP includes</title>
</head>
<body>
  <h1>PHP includes</h1>

<?php include 'navbar.php'; ?>
<?php
  echo "Hello PHP!";


  $query = 5;
  echo "<br>Version of PHP is $query.";

  phpinfo();
?>

</body>
</html>