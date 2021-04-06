<?php
class Animal
{
    public $name;
    public $health;

    public function __construct($input_screen_name)
    {
        $this->name = $input_screen_name;
        $this->health = 100;
    }

    public function walk()
    {
        $this->health -= 1;
        return $this;
    }

    public function run()
    {
        $this->health -= 5;
        return $this;
    }

    public function displayHealth()
    {
        echo "Name:" . $this->name . "<br>";
        echo "Health:" . $this->health . "<br><br>";
    }
}

class Dog extends Animal
{
    public function __construct($input_screen_name)
    {
        $this->name = $input_screen_name;
        $this->health = 150;
    }

    public function pet()
    {
        $this->health += 5;
        return $this;
    }
}

class Dragon extends Animal
{
    public function __construct($input_screen_name)
    {
        $this->name = $input_screen_name;
        $this->health = 170;
    }

    public function fly()
    {
        $this->health -= 10;
        return $this;
    }

    public function displayHealth()
    {
        echo '\'this is a dragon!\'' . "<br>";
        echo "Name:" . $this->name . "<br>";
        echo "Health:" . $this->health . "<br><br>";
    }
}

$animal = new Animal("Animal");
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new Dog("Dog");
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon = new Dragon("Dragon");
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
