<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiples of 5</title>
</head>

<body>
    <main>
        <?php
        for ($i = 5; $i <= 1000000; $i += 5) {
            echo $i . '<br>';
        }
        ?>
    </main>
</body>

</html>