<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human</title>
</head>

<body>

</body>

</html>

<?php
//class Human
// Now that we learned how to instantiate new objects from a class, how to add properties, and how to add methods, we can create instances of Humans in our world!

// Let's start by first adding the properties that instances of the class Human will have and then start adding on some methods. How boring would it be if the instances of our Human can't do anything?

// Properties are variables that an instance of an object keeps track of. In our blueprint, we declare what properties or attributes every instance of this class is going to have. Think back to what you know about MySQL. When we pull out a user from our database, we have columns of different key-pair values. A user has a name, an email address, a password, etc. 
// The same for our instances! Check out the example below:
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
}

// In our world, a Human class is going to have these following attributes: $health, $clan, $strength, $intelligence, and $stealth. These are the variables that a particular instance of this class is going to keep track of. 

// We have also declared a function within the scope of the class declaration. 
// This is what's called a method, a function that an instance of this class can call. In fact, this method is a special method that all objects have. This is the magic method that will automatically get run every time you create a new instance of this class! Therefore, this is generally the area where you want to do some set up before you launch the object into the world. In this class, every time we create a new instance of this class, it is going to echo "I am alive" and then will set an initial value of 100 to the $health property. 
// This method will get run when we instantiate new objects with the following code:
$juliuscopy = new Human();
$clarkson = new Human();

// Now, both instances of the class Human have the value of 100 in its $health property. 
// This does not mean that instances always have the same values in its properties. 
// We can modify $julius's health by creating a getter and setter methods for that property and then running the 
// following code:
class Human2
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
    public function get_health()
    {
        return $this->health;
    }
    public function set_health($health)
    {
        $this->health = $health;
    }
}
$julius->set_health(80);

// Now, $julius has a $health of 80 while $clarkson still has 100. 

// In the next chapter, we are going to have the instances of Human or instances of a class that subclasses 
// Human to battle each other. We are going to provide two more functionalities to instances of Humans. 
// We are going to implement an attack() instance method and also the trashTalk() instance method. 
// We can achieve the following by modifying our code like the following:
class Human3
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
            $this->$property = $value;
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
        if ($luck * $this->intelligence > 1000) {
            if ($luck > $human->stealth) {
                $human->health -= $this->strength;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

// Notice the two new magic methods that we added __get() and __set(). These magic methods are provided to us by PHP so that we don't have to implement our own getters and setters for each property. Now we can get any property by '$obj->property_name' and we can set any property '$obj->property_name = value.' 

// It's up to you whether you want to utilize these magic methods or write getters and setters for your property. There are pros and cons of both. Some people claim __get() and __set() are magic and should be avoided. Some people love how it saves more lines of code and makes it more readable. 

// This is how the attack method works. An instance of the class Human can execute the attack method and pass in an argument of a human object. It is important that we pass in an instance of a human object because we expect the argument that is passed in to have properties such as $intelligence and $strength. First, the instance of the object is going to execute its trashTalk() method. Then we are going to get a random number from 0 to 100 and store it in a variable called $luck. If $luck multiplied by the instance's intelligence is greater than 1000 AND the luck variable has a greater value than the $human's stealth, 
// we are going to subtract the health of the opposing object by the amount of the current object's strength.
?>