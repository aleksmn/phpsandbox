<?php
$title="Функции даты и времени";
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
echo time();
echo "<br>";
echo time() + 7 * 24 * 60 * 60;
echo "<br>";
echo date("l F jS,  Y - g:ia", time());

echo "<br><b>Проверка допустимости даты</b></br>";

$month = 9;
$day = 31;
$year = 2018;

if (checkdate($month, $day, $year)) echo "Допустимая дата";
else echo "Недопустимая дата";
?>
                        
</body>
</html>
