<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Min and Max</title>
</head>

<body>
    <main>
        <?php
        function get_max_and_min($array)
        {
            $min = $array[0];
            $max = $array[0];
            for ($i = 1; $i < count($array); $i++) {
                if ($array[$i] < $min) {
                    $min = $array[$i];
                }
                if ($array[$i] > $max) {
                    $max = $array[$i];
                }
            }
            $min_max_array = array(
                "max" => $max,
                "min" => $min
            );
            return $min_max_array;
        }

        $sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
        $output = get_max_and_min($sample);
        var_dump($output);
        //$output should be equal to array('max' => 332, 'min' => 1.02);
        ?>
    </main>
</body>

</html>