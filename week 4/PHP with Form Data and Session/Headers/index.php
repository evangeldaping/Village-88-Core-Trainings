<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="post">
        <input type="text" name="x">
        <input type="text" name="y">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_SESSION['sum'])) {
        echo $_SESSION['sum'];
    }
    ?>
</body>

</html>