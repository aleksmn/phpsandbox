<?php
$title="Работа с файлами";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style type="text/css">
        h2 {
          color: <?php printf("#%X%X%X", 65-20, 127+40, 245-20); ?>;
        }
    </style>
</head>
<body>
<?php

echo "<h2>". $title ."</h2>"; 

echo "<b>Проверка существования файла</b><br>";

if (file_exists("files/testfile.txt"))  
    echo "Файл существует<br>"; 
    else echo "Файла нет<br>";

echo "<b>Создание файла</b><br>";

$fh = fopen("files/testfile.txt", 'w') 
    or die("Создать файл не удалось");
$text = <<<_END
Строка 1
Строка 2
Строка 3

_END;
fwrite($fh, $text) or die ("Сбой записи файла");
fclose($fh);
echo "Файл записан 'files/testfile.txt' успешно ";


echo "<br><b>Чтение из файла</b><br>";

$fh = fopen("files/testfile.txt", 'r') or 
    die ("Файл существует или вы не обладаете правами на его открытие");
$line = fgets($fh);
fclose($fh);
echo $line . "<br>";


$fh = fopen("files/testfile.txt", 'r') or 
    die ("Файл существует или вы не обладаете правами на его открытие");
$text = fread($fh, 4);
fclose($fh);
echo $text;

echo "<br><b>Копирование файла</b><br>";

if (!copy('files/testfile.txt', 'files/testfile2.txt')) echo " Копирование невозможно";
else echo "Файл успешно скопирован";


echo "<br><b>Перемещение файла</b><br>";

if (!rename('files/testfile2.txt', 'files/testfile3.txt')) echo " Переименование невозможно";
else echo "Файл успешно переименован (перемещён)";


echo "<br><b>Удаление файла</b><br>";

if (!unlink('files/testfile3.txt')) echo " Удаление невозможно";
else echo "Файл успешно удален";


echo "<br><b>Обновление файла</b><br>";

$fh = fopen("files/testfile.txt", 'r+') or die("Сбой открытия файла");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Сбой записи в файл");
fclose($fh);

echo "<pre>";

echo file_get_contents("files/testfile.txt");

echo "</pre>";







?>
                        
</body>
</html>
