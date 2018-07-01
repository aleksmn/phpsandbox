<?php // upload.php


echo <<< _END

<html>
<head>
    <title>PHP форма для загрузки данных на сервер</title>
</head>
<body>    
<form method="post" action="upload.php" enctype='multipart/form-data'>
    Выберите файл с расширением JPG, GIF, PNG или TIFF:<br> 
    <input type='file' name='filename' size='10'>
    <input type='submit' value='Загрузить'>
</form>
    
_END;

//print_r($_FILES);

if ($_FILES['filename']['name']) {
  $name = $_FILES['filename']['name'];
  $name = strtolower(preg_replace("[^A-Za-z0-9.]", "", $name));
  $path_name = "images/". $name;

  switch($_FILES['filename']['type'])
  {
    case 'image/jpeg':  $ext = 'jpg'; break;
    case 'image/gif':   $ext = 'gif'; break;
    case 'image/png':   $ext = 'png'; break;
    case 'image/tiff':  $ext = 'tif'; break;
    default:            $ext = '';    break;
  }
  if($ext)
  {
    move_uploaded_file($_FILES['filename']['tmp_name'], $path_name);
    echo "Загружаемое изображение '$name'<br><img src='$name' width='100'>";
    echo "<br>Расположение файла: " . $path_name;
  }
  else echo "$name - неприемлемый файл изображения";

  echo "<br><br><b>Содержимое массива \$_FILES</b>";
  echo "<br><pre>";
  echo "\n\$_FILES['filename']['name']\t" . $_FILES['filename']['name'];
  echo "\n\$_FILES['filename']['type']\t" . $_FILES['filename']['type'];
  echo "\n\$_FILES['filename']['size']\t" . $_FILES['filename']['size'];
  echo "\n\$_FILES['filename']['tmp_name']\t" . $_FILES['filename']['tmp_name'];
  echo "\n\$_FILES['filename']['error']\t" . $_FILES['filename']['error'];
  echo "</pre>";

}
else echo "Изображение не загружено";

echo "</body></html>";

?>



