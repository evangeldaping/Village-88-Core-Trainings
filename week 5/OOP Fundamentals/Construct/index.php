<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
</head>

<body>

</body>

</html>

<?php
// Construct
// PHP has a number of reserved method names that start with two underscores, known as magic methods, that will be called in certain circumstances within a class. 
// The most common one is the __construct() method. The __construct() is a special function within a class that gets called for every new instance of a class. 
// We didn't have to define the __construct() method in our previous implementations of our class. 
// We only have to implement this method if we want to do some kind of custom set-up before the instantiation of an object. 

// Let's say we wanted the instances of our class to echo out a special message every time it comes to life. 
// We can do this by modifying our previous class implementation to this:

class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo";
    public function __construct()
    {
        echo "I get called for each instance of this class!";
    }
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass(); // runs the __construct function immediately
$obj2 = new MyFirstClass(); // runs the __construct function immediately
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();

// We can also pass in variables to the constructor that we pass into the creation of the object.
class MyFirstClass2
{
    public $property1 = "I am the first property! Woohoo";
    public function __construct($instance)
    {
        echo "I am getting called for object: " . $instance;
    }
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass2('instance one'); // param will be passed into the __construct
$obj2 = new MyFirstClass2('instance two'); // param will be passed into the __construct
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();

?>