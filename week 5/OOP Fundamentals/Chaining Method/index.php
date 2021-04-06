<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaining Method</title>
</head>

<body>
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
            echo ("The total miles driven are" . $this->miles . "<br><br>");
        }

        public function drive()
        {
            echo ("Driving" . "<br>");
            $this->miles = $this->miles + 10;
            return $this;
        }

        public function reverse()
        {
            echo ("Reversing" . "<br>");
            if ($this->miles > 0) {
                $this->miles = $this->miles - 5;
            }
            return $this;
        }
    }

    $bike1 = new Bike(200, 25);
    $bike2 = new Bike(100, 30);
    $bike3 = new Bike(300, 10);

    $bike1->drive()->drive()->drive()->reverse()->displayInfo();
    $bike2->drive()->drive()->reverse()->reverse()->displayInfo();
    $bike3->reverse()->displayInfo();


    ?>
</body>

</html>