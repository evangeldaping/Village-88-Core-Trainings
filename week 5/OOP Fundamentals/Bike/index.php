<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike</title>
</head>

<body>
    <!-- Assignment: Bike
    Create a new class called Bike with the following properties/attributes:

    price
    max_speed
    miles
    Create 3 instances of this bike.

    Now add a constructor method to the class and require the user to specify the price and max_speed of each instance. In the constructor also specify in the code so that the initial miles is set to be 0 whenever a new instance is created.

    Add the following functions for this class:

    displayInfo() - have this method display the bike's price, maximum speed, and the total miles driven.
    drive() - have it display "Driving" on the screen and increase the total miles driven by 10.
    reverse() - have it display "Reversing" on the screen and decrease the total miles driven by 5.
    Have the first instance drive three times, reverse once, and have it displayInfo().

    Have the second instance drive twice, reverse twice, and have it displayInfo().

    Have the third instance reverse three times and displayInfo().

    What would you do to prevent the instance from having negative miles? -->

    <?php

    class Bike
    {
        public $price;
        public $max_speed;
        public $miles;

        public function __construct($input_price, $input_max_speed)
        {
            $this->price = $input_price;
            $this->max_speed = $input_max_speed;
            $this->miles = 0;
        }

        public function displayInfo()
        {
            echo "The price for this bike is" . $this->price . "<br>";
            echo "The maximum speed for this bike is" . $this->max_speed . "<br>";
            echo ("The total miles driven are" . $this->miles . "<br>");
        }

        public function drive($num)
        {
            echo ("Driving" . "<br>");
            for ($i = 0; $i < $num; $i++)
                $this->miles = $this->miles + 10;
        }

        public function reversing($num)
        {
            for ($i = 0; $i < $num; $i++) {
                if ($this->miles > 0)
                    $this->miles = $this->miles - 5;
            }
        }

        public function moving($drive, $reversing)
        {
            $this->drive($drive);
            $this->reversing($reversing);
            $this->displayInfo();
        }
    }

    $bike1 = new Bike(200, "25mph");
    $bike2 = new Bike(100, "30mph");
    $bike3 = new Bike(300, "10mph");


    // $bike1->displayInfo();

    $bike1->moving(3, 1);
    $bike2->moving(2, 2);
    $bike3->moving(0, 3);
    ?>
</body>

</html>