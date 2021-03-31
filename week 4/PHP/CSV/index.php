<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV</title>
</head>

<body>
    <?php
    ini_set("auto_detect_line_endings", true);
    $records = 0;
    $f = fopen("us-500.csv", "r");

    $prepend = array();

    while (($data = fgetcsv($f, 1000, ",")) !== FALSE) {
        if ($records === 0) {
            for ($i = 0; $i < count($data); $i++) {
                $prepend[$i] = ucwords(str_replace('_', ' ', $data[$i]));
            }
        } else {
            echo "<ul>";
            echo "<h1> Record" . $records . "</h1>";
            for ($i = 0; $i < count($data); $i++) {
                echo "<li>" . $prepend[$i] . ": " . $data[$i] . "</li>";
            }
            echo "</ul>";
        }
        $records++;
    }
    fclose($f);
    ?>

</body>

</html>