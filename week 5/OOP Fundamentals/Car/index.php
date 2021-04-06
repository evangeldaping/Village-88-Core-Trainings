<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
</head>

<body>
    <!-- Assignment: Car
    Create a class called Car. In the constructor, allow the user to specify the following attributes: price, speed, fuel, mileage. If the price is greater than 10,000, set the tax to be 15%. Otherwise, set the tax to be 12%.

    Create five different instances of the class Car. In the class have a method called Display_all() that returns all the information about the car as a string. In your constructor, call this Display_all() method to display information about the car when a new car is created.

    A sample output would be like this:

    Price: 2000
    Speed: 35mph
    Fuel: Full
    Mileage: 15mpg
    Tax: 0.12

    Price: 2000
    Speed: 5mph
    Fuel: Not Full
    Mileage: 105mpg
    Tax: 0.12

    Price: 2000
    Speed: 15mph
    Fuel: Kind of Full
    Mileage: 95mpg
    Tax: 0.12

    Price: 2000
    Speed: 25mph
    Fuel: Full
    Mileage: 25mpg
    Tax: 0.12

    Price: 2000
    Speed: 45mph
    Fuel: Empty
    Mileage: 25mpg
    Tax: 0.12

    Price: 20000000
    Speed: 35mph
    Fuel: Empty
    Mileage: 15mpg
    Tax: 0.15 -->
</body>

</html>

<?php

class Car
{
    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;

    public function __construct($input_price, $input_speed, $input_fuel, $input_mileage)
    {
        $this->price = $input_price;
        $this->speed = $input_speed;
        $this->fuel = $input_fuel;
        $this->mileage = $input_mileage;

        if ($input_price > 10000) {
            $this->tax = $tax = 0.15;
            $input_price * $tax;
        } else {
            $this->tax = $tax = 0.12;
            $input_price * $tax;
        }

        $this->display_all();
    }

    public function display_all()
    {
        echo "Price: " . $this->price . "<br>";
        echo "Speed: " . $this->speed . "<br>";
        echo "Fuel: " . $this->fuel . "<br>";
        echo "Mileage " . $this->mileage . "mpg" . "<br>";
        echo "Tax: " . $this->tax . "<br><br>";
    }
}

$car1 = new Car(2000, 35, "Full", 15);
$car2 = new Car(2000, 5, "Not Full", 105);
$car3 = new Car(2000, 15, "Kind of Full", 95);
$car4 = new Car(2000, 25, "Full", 25);
$car5 = new Car(2000, 45, "Empty", 25);
$car5 = new Car(20000000, 35, "Empty", 15);

?>