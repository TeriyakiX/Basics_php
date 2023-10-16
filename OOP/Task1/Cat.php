<?php

class Cat
{
    private $name;
    private $color;
    public $weight;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . ',';
        echo ' и мой цвет ' . $this->color . '.';
    }

    public function getColor()
    {
        return $this->color;
    }

}

$cat1 = new Cat('Снежок', 'белый');
$cat2 = new Cat('Барсик', 'рыжий');

$cat1->sayHello();
echo "\n";
$cat2->sayHello();