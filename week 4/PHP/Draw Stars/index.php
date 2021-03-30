<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Stars</title>
</head>

<body>
    <main>
        <h3>Part 1</h3>
        <p>Create a function called draw_stars() that takes an array of numbers and echo out an asterisk, or '*'.</p>
        <?php
        $array = array(4, 6, 1, 3, 5, 7, 25);
        function asterisk($array)
        {
            foreach ($array as $item) {
                echo str_repeat("*", $item) . "<br>";
            }
        }
        asterisk($array);
        ?>

        <h3>Part 2</h3>
        <p>Modify the function above. Allow an array, that contains integers and strings, to be passed to the draw_stars() function.
            When a string is passed, instead of displaying *, display the first letter of the string according to the example below.</p>
        <?php
        $x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
        function draw_stars($array)
        {
            foreach ($array as $element) {
                if (is_int($element)) {
                    echo str_repeat("*", $element);
                } else {
                    echo strtolower(str_repeat(substr($element, 0, 1), strlen($element)));
                }
                echo "<br>";
            }
        }
        draw_stars($x);
        ?>
    </main>
</body>

</html>