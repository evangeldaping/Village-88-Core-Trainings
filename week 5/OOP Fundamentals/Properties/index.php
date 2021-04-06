<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Structure</title>
</head>

<body>

</body>

</html>

<?php
// You can easily add a property to a class similar to the way you would create variables in PHP. The public keyword, which is an access modifier, 
// determines the visibility of the variable and we have the option to set that variable to a default value, although this isn't required.
class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo";
}

// We can now see that the property is visible when we output our object!
$obj = new MyFirstClass();
var_dump($obj);

// You can reference that property from the creation of a new object. Using PHP object notation, you can access a method or property using the arrow (- >) off of the creation of an object. 
// Notice how you can omit the $ when referring to a property.
echo $obj->property1;

?>