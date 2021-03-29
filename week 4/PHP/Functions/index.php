<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <main>
        <!-- Functions are like factories in the programming world. For example in a car manufacturing business, we:

        Acquire raw materials (variables) needed for creating a car.
        Process the materials in a car manufacturing plant (function)
        Produce and transport the car (function's return statement)


        Syntax
        A basic function looks like below:

        function my_function() {
        $things = "stuff";
        return $things;
        }
        my_function() is the name of the function. We can pass variables of any data type to this function, just make sure that the function itself expects it. In our example above, my_function() is not expecting any variable because its parameter field is empty. Note how the opening and closing parenthesis is empty.

        Our my_function() above returns a variable called $things. return statements are optional. You can create functions without return statements and it would still work.

        To invoke this function, you need to type:

        my_function();
        You could either write this code before the function was declared or after. When we declare the function, it's not actually doing anything! It's just a set of instructions waiting to be invoked. Invoking means you're calling the function via the function name, along with the open and closing parenthesis. The above code is a prime example of a function being invoked.

        Now, you won't see anything if you invoke the function above, and that's because we are just returning $things. We still need to echo $things out via the echo statement.

        echo my_function();
        //prints out "stuff"
        What the return statement does is it returned the value "stuff" along with stuff's data type and gave it to my_function(). It's as if the function itself IS "stuff" plus data type. With this in mind, we can actually do this:

        function my_function() {
        $things = "stuff";
        return $things;
        }
        $some_variable = my_function();
        echo $some_variable;
        //prints out "stuff"
        If we translate the car manufacturing process in codes without using functions (say we produce 2 unique cars), our code would look something like below:

        $raw_materials = array(
        array(
        'rubber' => 'Natural Rubber',
        'metal' => 'Alloy',
        'paint' => 'Green'
        ),
        array(
        'rubber' => 'Nitrile',
        'metal' => 'Brass',
        'paint' => 'Red'
        )
        );
        foreach($raw_materials as $raw_material) {
        echo "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires.</p>";
        }
        What if we want this kind of feature to work on a different PHP page? Does that mean we would have to copy and paste the same code every time we need this feature? There must be a better way!

        A function...

        takes input parameters (optional)
        performs a series of operations
        returns a value (optional)
        The first and the third step are not required. In other words, functions don't have to take any input parameters or to return anything. But in our car manufacturing program above, we will be passing variables (raw products) to our function (factory) and return to us a value (the car). Here are the improved codes:

        function car_factory($raw_materials) {
        $cars = array();
        foreach($raw_materials as $raw_material) {
        $cars[] = "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires. </p>";
        }
        return $cars;
        }
        $raw_materials = array(
        array(
        'rubber' => 'Natural Rubber',
        'metal' => 'Alloy',
        'paint' => 'Green'
        ),
        array(
        'rubber' => 'Nitrile',
        'metal' => 'Brass',
        'paint' => 'Red'
        )
        );
        $cars = car_factory($raw_materials);
        var_dump($cars);
        The result: -->


    </main>
</body>

</html>

<?php
function print_array($array)
{
    echo "There are " . count($array) . " values in the array.<br />";
    foreach ($array as $value) {
        echo $value . "<br />";
    }
}

$samples  = array("abc", "def", "ghi");
print_array($samples);

$samples  = array("John", "Noah", "Mark");
print_array($samples);

$samples  = array(13, 52, 22);
print_array($samples);

function car_factory($raw_materials)
{
    $cars = array();
    foreach ($raw_materials as $raw_material) {
        $cars[] = "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires. </p>";
    }
    return $cars;
}
$raw_materials = array(
    array(
        'rubber' => 'Natural Rubber',
        'metal' => 'Alloy',
        'paint' => 'Green'
    ),
    array(
        'rubber' => 'Nitrile',
        'metal' => 'Brass',
        'paint' => 'Red'
    )
);
$cars = car_factory($raw_materials);
var_dump($cars);

?>