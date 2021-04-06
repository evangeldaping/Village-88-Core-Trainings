<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected</title>
</head>

<body>

</body>

</html>

<?php
// Protected
// In the lesson on visibility, we were able to define the different scopes that exist and determined that the public keyword (called an access modifier) adds no scope restrictions. 
// This means that anything defined as public can be accessed within any scope, as long as we have a handle to that object. 
// What if we didn't want those that held a handle to an instance object to be able to directly access certain properties or methods? One way to limit access to an attribute is by setting its visibility to protected.

// Setting Visibility to Protected
// By putting the keyword protected in front of a property or method, you limit any access to code within the class or its child classes. 
// The property or method can no longer be seen outside of the class, or even by its own parent classes. In the example below, we set the get_parent_property() method to protected.
class MyBaseClass
{
    public function __construct($instance)
    {
        echo "I am called for object: " . $instance;
    }
    protected $base_property = "I am a base property!  woohoo.";
    public function set_the_property($prop_value)
    {
        $this->base_property = $prop_value;         //  I can always see/set all my own attributes
    }
}
class MyChildClass extends MyBaseClass
{
    public function directly_set_property($prop_value)
    {
        // 'protected' makes $base_property available to child classes.
        $this->base_property = $prop_value;    // Yes, works nicely.  
    }
}
$base = new MyBaseClass('base');
$child = new MyChildClass('child'); 
// 'protected' makes $base_property unavailable, except within self or child classes.
$base->base_property = 86;                    // Nope!  This will cause an error
$child->base_property = 68;                   // Nope!  This will cause an error
// Instead call 'public' method set_the_property(), which has access to the protected attribute
$base->set_the_property(42);                 // Yes!  This will work wondrously
$child->set_the_property(42);                // Yes!  Wow! -- works wonderfully
// Or you can call a public method on the subclass -- it can see the protected attribute as well
$base->directly_set_the_property(86);       // Fail!  MyBaseClass doesn't contain a method by this name!
$child->directly_set_the_property(42);      // Yes!  Wow! -- works wonderfully

?>