<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>

</body>

</html>

<?php
// Methods
// Methods are just functions contained inside a class. We will be creating instance methods, which means functions 
// that are available to the instances of the specified class. 
// You declare them the same way you would declare a function.

// Adding a Method To Your Class
// We create our method the same way we would create a function, but we give the function an access modifier. 
// This will again determine the visibility of our method, which we will talk more about later.

// In this example, we use what are called getter and setter methods. 
// They are just methods that are responsible for getting and setting the value of a particular property, 
// but it is fairly common to do this inside a class. It is considered bad practice to refer to a property directly 
// from an object instance ($obj->property1) as it can lead to problems later. 
// For this reason, we will use getter and setter methods instead.

// To reference a particular property or method within the class for the current object instance, 
// PHP has a special keyword it uses called  $this. $this is referring to the current object 
// instance so you can access properties and methods per object instance.

class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo";
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj = new MyFirstClass();
echo $obj->get_property1();
$obj->set_property1('New value for property1');
echo $obj->get_property1();

// Creating Multiple Objects
// The power of OOP doesn't become apparent until you are able to create multiple instances of the same class.
class MyFirstClass2
{
    public $property1 = "I am the first property! Woohoo";
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass2();
$obj2 = new MyFirstClass2();
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();


?>