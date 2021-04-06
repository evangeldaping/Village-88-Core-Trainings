<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwriting</title>
</head>

<body>

</body>

</html>

<?php
// Overwriting
// In most cases, you would want to keep the properties and methods that you were inheriting from your parent class, but if you wanted to create a method or property to take the place of the existing 
// one in the parent class you would just overwrite it.

class Wizard extends Human
{
    public function heal()
    {
        $this->health += 10;
    }
    public function trashTalk()
    {
        echo "Happiness can be found even in the darkest of times";
    }
}
class Ninja extends Human
{
    public function steal()
    {
        $this->stealth += 5;
    }
    public function trashTalk()
    {
        echo "Now you see me...";
    }
}
class Samurai extends Human
{
    public function sacrifice()
    {
        $this->health -= 5;
        $this->strength += 10;
    }
    public function trashTalk()
    {
        echo "The flower that blooms in adversity is the most beautiful of all";
    }
}
$ron = new Wizard();
$sasuke = new Ninja();
$kenshin = new Samurai();
// all three instances have the method trashTalk which was declared in the Human blueprint which 
// all three of the subclasses extends. However, each subclass overwrote the previous implementation
$ron->trashTalk();
$sasuke->trashTalk();
$kenshin->trashTalk();

?>