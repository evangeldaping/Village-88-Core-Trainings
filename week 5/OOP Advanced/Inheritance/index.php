<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>

</body>

</html>

<?php
// Inheritance
// Our world is unique. It has Humans, but the Humans of our world are separated into three distinct classes. In this tab, we are going to create subclasses of Human: classes Wizard, Ninja, and Samurai. 
// Creating subclasses is useful when you want to create a more specialized version of a current class that you have. If it is just a specialized class it means that the current functionality will mostly remain the same except for some minor adjustments. 
// By using class inheritance, we don't have to repeat ourselves. This is our current class of Human.

class Human
{
    public $health;
    public $clan;
    public $strength = 3;
    public $intelligence = 3;
    public $stealth = 3;
    public function __construct()
    {
        echo "I am alive";
        $this->health = 100;
    }
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->property;
        }
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this = $value;
        }
        return $this;
    }
    public function trashTalk()
    {
        echo "You want a piece of me?";
    }
    public function attack($human)
    {
        $this->trashTalk();
        $luck = rand(0, 100);
        if ($luck * $this->intelligence > 1000 && $luck > $human->stealth) {
            $human->health -= $this->strength;
            return true;
        } else {
            return false;
        }
    }
}

// Say we wanted to create a new class and we wanted it to be able to use all of the functions and properties that we already had in another class, but there were some additional functions and properties that we wanted to add to it. In this case, we would have our new class inherit or extend the original class or what would be considered the parent class. Looking back on our construction example... 
// Here is a visual representation of what inheritance would look like.

// As you can see class Wizard, class Ninja, and class Samurai all inherit the blueprint of class Human but in addition, they add their own blueprint.

// Extending an existing class
// To extend a class, all we have to do when creating the new class is use the keyword extends followed by the name of the class that we wish to extend. The new class will then have access to all the properties and methods within that class. Our new class will also inherit the __construct function that is within the parent class. This means that when an instance is created for our new class 
// it will call the __construct function in the parent class.

class Wizard extends Human
{
    public function heal()
    {
        $this->health += 10;
    }
}
class Ninja extends Human
{
    public function steal()
    {
        $this->stealth += 5;
    }
}
class Samurai extends Human
{
    public function sacrifice()
    {
        $this->health -= 5;
        $this->strength += 10;
    }
}
// creating an instance of Wizard, Ninja and Samurai
$harry = new Wizard();
$rain = new Ninja();
$tom = new Samurai();
// all instances still have human properties because its class extends the Human class
echo $harry->health;
echo $rain->health;
echo $tom->health;
// yet they are subclasses which mean they can extend the current functionality of Human class
// instances of the Wizard class can perform the heal method
$harry->heal();
echo $harry->health;
// instances of the Ninja class can perform the steal method
$rain->steal();
echo $rain->stealth;
// instances of the Samurai class can perform the sacrifice method
$tom->sacrifice();
echo $tom->health;
echo $tom->strength;

?>