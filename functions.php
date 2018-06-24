<?php

/*
echo "<b>Цикл while</b><br>";

$count = 0;

while (++$count <= 6){
    echo "Число $count умноженное на 6 равно " . $count * 6 . ".<br>" ;
}
    
echo "<br>";

echo "<b>Цикл for</b><br>";

for ($count = 1; $count <= 6; $count++){
    echo "Число $count умноженное на 6 равно " . $count * 6 . ".<br>" ;
}
    
  */  


echo "<b>Функции PHP</b><br>";

//phpinfo();
/*
echo strrev("Hello World!") . "<br>";
echo strtoupper("Hello") . "<br>";  
echo str_repeat("Hello ", 2) . "<br>";
*/

echo "<i>Функция с возвращением массива:</i><br>";
$names = fix_names("wIlliam", "HeNrY", "GATES");
echo $names[0] ." ". $names[1] ." ". $names[2]."<br>";

function fix_names($n1, $n2, $n3) {
    
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    
    return array ($n1, $n2, $n3);
    
}

echo "<i>Возвращение значений из функции по ссылке:</i><br>";

$a1 = "WILLIAM";
$a2 = "heNry";
$a3 = "gaTES";

echo $a1 ." ". $a2 ." ". $a3 ."<br>";

fix_names_links($a1, $a2, $a3);

echo $a1 ." ". $a2 ." ". $a3 ."<br>";

function fix_names_links(&$n1, &$n2, &$n3) {
    
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}



