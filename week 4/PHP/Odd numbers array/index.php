<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd numbers array</title>
</head>

<body>
    <main>
        <?php
        $array_variable = array();

        for ($i = 0; $i <= 20000; $i++) {
            if ($i % 2 == 1) { // if the remainder after division `$i` by 2 is one{
                $array_variable[] = $i; // $array_variable[] means adding something to the array
            }
        }

        var_dump($array_variable); //dump all odd numbers
        ?>
    </main>
</body>

</html>