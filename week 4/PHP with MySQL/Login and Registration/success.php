<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Registration Successful</title>
</head>

<body>
    <?php
    if (isset($_SESSION['success_message'])) {
        echo "<div class='form'>
        <h3><p class='success'>{$_SESSION['success_message']}</p></h3>
        <br/>Click here to <a href='index.php'>Login</a></div>";
        unset($_SESSION['success_message']);
    }
    ?>
</body>

</html>