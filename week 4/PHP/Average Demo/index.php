<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Demo</title>
</head>

<body>
    <main>
        <?php
        function print_average($array)
        {
            $number_of_values = count($array);
            $total = 0;
            foreach ($array as $value) {
                $total = $total + $value;
                echo $total . '<br>';
            }
            $average = $total / $number_of_values;

            return $average;
        }

        $sample = array(10, 3, 5, 8, 4, 2, 1, 333);
        $average = print_average($sample);
        echo $average;
        ?>
    </main>
</body>

</html>