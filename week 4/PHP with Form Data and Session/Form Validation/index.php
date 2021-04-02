<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <form action="process.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
    if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
            echo $error;
        }
        $_SESSION = array();
    }
    ?>
</body>

</html>