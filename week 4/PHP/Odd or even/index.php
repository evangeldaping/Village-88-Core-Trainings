<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or even</title>
</head>

<body>
    <main>
        <?php
        $total_sum = 0;
        for ($i = 1; $i <= 2000; $i++) {
            if ($i % 2) {
                echo "Number is" . $i . " " . "This is an odd number." . "<br>";
            } else {
                echo "Number is" . $i . " " . "This is an even number." . "<br>";
            }
        }
        ?>
    </main>
</body>

</html>