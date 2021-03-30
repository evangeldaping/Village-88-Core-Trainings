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
        function get_min_max($array)
        {
            $values['max'] = max($array);
            $values['min'] = min($array);
            return $values;
        }
        $sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
        $output = get_min_max($sample);
        var_dump($output);
        ?>
    </main>
</body>

</html>