<?php
echo "<b>Использование функций для работы с массивами</b><br>";
echo "<i>Функция is_array()</i><br>";
$fred = array("x", "s", "c", "a");

$question   = 'Фред это массив?';
$answer_yes = 'Это массив';
$answer_no  = 'Это не массив';

echo "&mdash; $question<br>" . 
     (is_array($fred)     
     ? "&mdash; $answer_yes" 
     : "&mdash; $answer_no") . ".<br>";

echo "<i>Функция count()</i><br>";
echo count($fred);

echo "<i><br>Функция sort()</i><br>";
sort($fred);
print_r($fred);
echo "<br>Сортировка SORT_STRING: ";
$numbers = array(10980, 23, 456, 6, 829);
sort($numbers, SORT_STRING);
print_r($numbers);
echo "<br> Обратная сортировка: ";
rsort($numbers, SORT_STRING);
print_r($numbers);

echo "<br><i>Функция shuffle(): </i>";
shuffle($numbers);
print_r($numbers);

echo "<br><i>Функция explode()</i><br>";
$temp = explode(" ", "Это предложение из пяти слов");
print_r($temp);


echo "<br><i>Функция extract()</i><br>";
$example = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($example);
extract($example, EXTR_PREFIX_ALL, 'my');
echo "<br>". $my_a ." ". $my_b ." ".$my_c;

echo "<br><i>Функция compact()</i><br>";
$fname = 'Doctor';
$sname = 'Who';
$contact = compact('fname', 'sname');
print_r($contact);

echo "<br><i>Функции reset() и end()</i><br>";
reset($fred);
echo $item = reset($fred) . "<br>";

end($fred);
echo $item = end($fred) . "<br>";



?>

<?php
/*
echo "<b>Массивы PHP</b><br>";

$paper[0] = "Ink";
$paper[1] = "Laser";
$paper[3] = "Photo";
$paper[4] = "Copier";
$paper[]  = "Last";
$paper[2]  = "Second";

print_r($paper);

echo "<br><br>Printing Array<br>";

for($i = 0; $i < 6; $i++){
    echo "$i: $paper[$i]<br>";
}


echo "<i>Ассоциативные массивы<br></i>";

$html['title'] = "Заголовок моей веб страницы";
$html['body'] = "... тело веб-страницы ...";
echo "{$html['title']}<br>";
echo "{$html['body']}<br>";

echo "<i>Добавление элементов к массиву с использованием ключевого слова array<br></i>";

$p1 = array('Copier', 'Inkjet', 'Lazer', 'Photo');
print_r($p1);
echo "<br>";
$p2 = array('copier' => 'Copier Printer',
            'inkjet' => 'Inkjet Printer',
            'laser'  => 'Laser Printer',
            'photo'  => 'Photo Printer',
            );
print_r($p2);

echo "<br><i>Цикл foreach ... as</i><br>";

$paper = array('Copier', 'Inkjet', 'Lazer', 'Photo');
$j = 0;

foreach($paper as $item){
    echo "$j: $item<br>";
    $j++;
}

$paper = array('copier' => 'Copier Printer',
               'inkjet' => 'Inkjet Printer',
               'laser'  => 'Laser Printer',
               'photo'  => 'Photo Printer',
              );

foreach($paper as $item => $description){
    echo "$item: $description<br>";
}
*/
?>

<?php
/*
echo "<br><i>Создание многомерного ассоциативного массива</i><br>";

$products = array(
    'paper' => array(
        'inkjet' => 'Inkjet Printer',
        'copier' => 'Copier Printer',
        'laser'  => 'Laser Printer',
        ),
    'pens' => array(
        'ball'   => 'Ball Point',
    'misc' => array(
        'tape'  => 'Sticky Tape',
        'glue'  => 'Adhesives',
        'clips' => 'Paper Clips'
        )

);
echo "<pre>";
foreach($products as $section => $items){
    foreach($items as $key => $value) {
        echo "$section:\t$key\t($value)<br>";
    }
}
echo "</pre>";
*/
 
?>