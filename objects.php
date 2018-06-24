<?php

echo "<b>Объекты PHP</b><br>";
    
$object = new User;
print_r($object); echo "<br>";

$object->name="Joe";
$object->password="mypass";

print_r($object);

class User {
    public $name, $gender, $password;
    
    function save_user() {
        echo "Сюда помещается код сохраняющий данные пользователя";
    }
}

echo "<br><i>Копирование объекта</i><br>";

$object1       = new User;
$object1->name = "Alice";
$object2       = $object1;
$object2->name = "Amy";

echo "object1 name = ". $object1->name . "<br>";
echo "object2 name = ". $object2->name;


echo "<br><i>Клонирование объекта</i><br>";

$object1       = new User;
$object1->name = "Alice";
$object1->gender = "f";
$object2       = clone $object1;
$object2->name = "Amy";

echo "object1 name = ". $object1->name . "<br>";
echo "object1 gender = ". $object1->gender . "<br>";
echo "object2 name = ". $object2->name . "<br>";
echo "object2 gender = ". $object2->gender . "<br>";


echo "<br><i>Конструктор объекта</i><br>";

class User2 {
    public $username;
    public $password;
    function __construct($param1, $param2) {
        $this->username = $param1;
        $this->password = $param2;
    }
}

$object = new User2("Mike", "1234");
print_r($object);



echo "<br><i>Деконструктор объекта</i><br>";

echo "<br><i>Написание методов</i><br>";

class User3 {
    public $name, $password;
    public function get_password() {
        return $this->password;
    }
}

$object = new User3;
$object->password = "wordPAsS";

echo "Your password is ". $object->get_password()."!<br>";

echo "<br><i>Статические методы</i><br>";
/* Статистический метод доступен из класса но не из объекта. Такие методы полезны для совершения действий относящихся к самому классу, а не к объекту. */

User4::pwd_string();

class User4 {
    static function pwd_string() {
        echo "Пожалуйста, введите пароль.<br>";
    }
}

echo "<br><i>Объявление свойств</i><br>";
/* Можно присваивать значения по умолчанию */

class Test {
    public $name = "John";
    public $age = 42;
}

echo "<br><i>Объявление констант</i><br>";

echo Translate::lookup();
echo Translate::SPANISH;

class Translate {
    
    const ENGLISH = 0;
    const SPANISH = 1;
    
    static function lookup(){
        echo self::SPANISH;
    }
}

echo "<br><i>Область видимости свойств и методов</i><br>";


