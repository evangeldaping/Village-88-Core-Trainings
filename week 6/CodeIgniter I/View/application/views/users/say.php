<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Say</title>
</head>
<style>
    body {
        width: 500px;
        margin: 50px auto;
        text-align: center;
    }

    h1 {
        background-color: black;
        color: white;
        padding: 15px;
    }

    input[type=submit] {
        width: 100%;
        background-color: #2B78E4;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 10px 10px;
    }

    input[type=submit]:hover {
        background-color: blue;
        color: white;
    }
</style>

<body>
    <h4>What's on your mind?</h4>
    <?php
    if (is_numeric($number)) {
        for ($i = 1; $i <= $number; $i++) { ?>
            <h2><?php echo $string; ?></h2>
    <?php   }
    } else {
        echo $number;
    }
    ?>
</body>

</html>