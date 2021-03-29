<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average</title>
</head>

<body>
    <main>
        <?php
        $numbers = array(1, 2, 5, 10, 255, 3);
        $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4] + $numbers[5];
        $average = $sum / count($numbers);
        echo "The average is:" . $average . '<br>';

        //using for loop
        $total_sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $total_sum += $numbers[$i];
        }
        $total_average = $total_sum / count($numbers);
        echo "The average is:" . $total_average;
        ?>
    </main>
</body>

</html>