<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility</title>
</head>

<body>

</body>

</html>

<?php
// Visibility
// So far we've mentioned what it means for a property to be visible. Now we're going to see how we can change the visibility of our properties and methods, so that they can only be used by the class itself or its family (child classes, parent classes).

// Public
// We have been using the public keyword to denote methods and properties. This just means that these methods and properties are available not only to code within the class itself, but also to code outside the class. Let's define the different scopes from which you can access a method or property. 
// From the diagram in the Inheritance lesson, here are the different visibility scopes:

// Visibility Scopes
// 1. For attributes that are defined in the same class as the code that is trying to access it, you can do so by using $this. Example: code within the Human class can access the attribute health, which is defined within that same class. The code would reference the attribute as follows: 
//     $this->health = 100; 
// 2. For attributes that are defined in a parent class, you use the same syntax with $this. Example: code within the Wizard class can access the attribute health, which is defined in the parent Human class. The code would reference the attribute as follows:
//     $this->health += 10; 
// 3. For attributes defined anywhere else (for attributes that are members of any other object), $this cannot see them. If we are currently within the class Bicycle, then health has no meaning to us (health is not an attribute of the Bicycle class). If, however, this code contains a local attribute owner of type Human, then we could reference the health attribute as follows: 
//     $this->owner->health -= 50;       // ouch -- the bike crashed!

// The keywords public, protected and private can each be used to set visibility. For every property or method, we should decide whether we want it to be accessible in all three visibility scopes, or just the first two scopes, or just the first one. 

// Public Visibility Scope
// The public keyword makes the specified property or method available in all three visibility scopes.
?>