<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keys and Values</title>
</head>

<body>
    <main>
        <?php
        $users['first_name'] = "Michael";
        $users['last_name'] = "Choi";

        function keysAndValues($users)
        {
            echo "There are " . count($users) . " keys in this array:";
            foreach ($users as $row => $value) {
                echo '<br>';
                echo $row;
                echo '<br>';
                echo "The value in the key '" . $row . "' is " . $value . ".";
            }
        }
        keysAndValues($users);
        ?>
    </main>
</body>

</html>