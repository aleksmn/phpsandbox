<?php

$cmd = "dir";
exec(escapeshellcmd($cmd), $output, $status);

if ($status) echo "Команда не выполнена";
else
{
  echo "<pre>";
  foreach($output as $line) echo htmlspecialchars("$line\n");
  echo "</pre>";
}

?>