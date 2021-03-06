<?php 
$r = 65;
$g = 127;
$b = 245;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>printf fuctions</title>
    <style type="text/css">
        h2 {
          color: <?php printf("#%X%X%X", $r-20, $g+40, $b-20); ?>;
        }
    </style>
</head>
<body>

<?php

echo "<h2>Использование printf()</h2>";    

$number = 123;

printf("<i>Десятичное представление:</i><br>В вашей корзине %d покупки.<br>", $number);

printf("<i>Двоичное представление:</i><br>В вашей корзине %b покупки.<br>", $number);

printf("<i>Научная запись:</i><br>В вашей корзине %.5e покупки.<br>", $number);
    
printf("<i>Число с плавающей точкой:</i><br>В вашей корзине %.3f покупки.<br>", $number);

printf("<i>Шестнадцатиричное число:</i><br>В вашей корзине %X покупки.<br>", $number);


printf("Меня зовут %s. Мне %d лет, или %X в шестнадцатиричной системе.<br>", 'Симон', 29, 29);

echo"<br><b>Настройка представления данных</b><br>";

printf("Результат с точностью до второго знака после запятой: %.2f.", 123 / 18,5);

printf("Результат с точностью до пятого знака после запятой: %.5f.", 123 / 18,5);

echo "<pre>";
echo "Дополнение пробелами до 15 знакомест:<br>";
printf ("Результат равен $%15f\n", 123.42/12);   echo "Дополнение нулями до 15 знакомест:\n";
printf ("Результат равен $%015f\n", 123.42/12);   echo "Дополнение нулями до 15 знакомест <br>и двух десятичных знаков:\n";
printf ("Результат равен $%015.2f\n", 123.42/12); echo "Дополнение # до 15 знакомест <br>и двух десятичных знаков:\n";
printf ("Результат равен $%'#15.2f\n", 123.42/12);
        
$h = "Hello";
    
printf("[%s]\n", $h);
printf("[%12s]\n", $h);
printf("[%-12s]\n", $h);
printf("[%012s]\n", $h);
printf("[%-012s]\n", $h);
printf("[%'#12s]\n", $h);
printf("[%-'#12s]\n", $h);

$d = 'Rasmus Lerdorf';

printf("[%12.8s]\n", $d);
printf("[%12.12s]\n", $d);
printf("[%-'@12.10s]\n", $d);
    
echo "</pre>";       

echo "<b>Функция sprintf()</b><br>";    
$out = sprintf("Результат: $%.2f", 123.42 / 12);
echo $out;




?>

        
            
                    
</body>
</html>


