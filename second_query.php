<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if(!$result) die("Сбой при доступе к базе данных: " . $conn->error);
$rows = $result->num_rows;
for($j = 0; $j < $rows; ++$j) {
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
  echo "$row[0] purchased ISBN $row[1];<br>";

  $subquery = "SELECT * FROM classics WHERE isbn = $row[1]";
  $subresult = $conn->query($subquery);
  if(!$subresult) die("Сбой при доступе к базе данных: " . $conn->error);
  $subrow = $subresult->fetch_array(MYSQLI_NUM);
  echo "&nbsp;&nbsp;&nbsp;'$subrow[1]' by $subrow[0]<br>";
}

?>