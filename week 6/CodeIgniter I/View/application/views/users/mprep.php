<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mprep</title>
</head>

<body>
    <h1>User Name: <?php echo $name; ?></h1>
    <h2>User Age: <?php echo $age; ?>, Location: <?php echo $location; ?></h2>
    <h3><?php echo count($hobbies); ?> Hobbies</h3>
    <ul>
        <li><?php echo $hobbies[0]; ?></li>
        <li><?php echo $hobbies[1]; ?></li>
        <li><?php echo $hobbies[2]; ?></li>
        <li><?php echo $hobbies[3]; ?></li>
        <li><?php echo $hobbies[4]; ?></li>
    </ul>

</body>

</html>