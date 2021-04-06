<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
</head>

<body>

</body>

</html>

<?php
// Private
// In the previous lesson, we saw how to restrict access to properties and methods by using the protected access modifier. 
// This removes any visibility outside the object or its children. What if we had a property or method that we didn't want our child class to access either? To do this, we set the visibility to private.

// Marking a member as private
// Setting the keyword private in front of the property or method makes it available only within the scope of the current class. 
// It cannot be inherited or called by any other code. In the following example, we set our $base_property member to private.

class MyBaseClass
{
    public function __construct($instance)
    {
        echo "I am called for object: " . $instance;
    }
    // Note: in the previous example, this was marked 'protected'
    private $base_property = 0;
    // Note: in the previous example, this was marked 'public'
    protected function set_the_property($prop_value)
    {
        $this->base_property = $prop_value;          //  I can always see/set my own attributes
    }
}
class MyChildClass extends MyBaseClass
{
    public function directly_set_property($prop_value)
    {
        // 'private' makes MyBaseClass::base_property unavailable, even to child classes.
        $this->base_property = $prop_value;         // This causes an error -- cannot access prop_value 
    }
    public function child_sets_property($prop_value)
    {
        // 'protected' makes MyBaseClass::set_the_property() visible to child classes like this one.
        $this->set_the_property($prop_value);      // This will work well. 
    }
}
$child = new MyChildClass('child'); 
$base = new MyBaseClass('base');
// 'private' makes $base_property unavailable outside the class itself
$child->base_property = 68;                         // Nope! This will cause an error
$base->base_property = 86;                          // Nope! This will cause an error
// $base_property is even inaccessible by child classes.
$child->directly_set_property(68);                // Nope! We can call the method, but it then fails
// 'protected' makes set_the_property() invisible outside itself and child classes.
$child->set_the_property(68);                      // Nope! We can't access that method from out here.
$base->set_the_property(86);                       // Nope! We can't access that method from out here. 
// from inside the child_sets_property() public method, we can access protected attributes
$child->child_sets_property(42);                   // YES!  This works wonderfully well.
// and remember that parent objects don't "reverse-inherit" the methods/members of their children!
$base->directly_set_property(86);                  // Nope! MyBaseClass contains no method with that name
$base->child_sets_property(86);                    // Fail! $base doesn't even have a child_sets_property()!

?>