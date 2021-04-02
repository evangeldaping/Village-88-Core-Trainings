<?php session_start(); ?>
<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ninja Gold</title>
    <style type="text/css">
        .places {
            border: 1px solid black;
            display: inline-block;
            margin-right: 10px;
            width: 200px;
            height: 200px;
            text-align: center;

        }

        span {
            border: 1px solid black;
            padding-right: 100px;
        }

        #activities {
            border: 1px solid black;
            width: 850px;
            height: 200px;
            overflow: scroll;
        }

        .green {
            color: green;
            margin: 0;
        }

        .red {
            color: red;
            margin: 0;
        }
    </style>
</head>

<body>
    <div>
        <p>Your Gold:<span> <?php echo $_SESSION['gold']; ?> </span></p>

    </div>
    <div class="places">
        <h2>Farm</h2>
        <p>(earns 10-20 gold)</p>
        <form method="post" action="process.php">
            <input type="hidden" name="action" value="farm">
            <input type="submit" value="Find Gold!">
        </form>
    </div>
    <div class="places">
        <h2>Cave</h2>
        <p>(earns 5-10 gold)</p>
        <form method="post" action="process.php">
            <input type="hidden" name="action" value="cave">
            <input type="submit" value="Find Gold!">
        </form>
    </div>
    <div class="places">
        <h2>House</h2>
        <p>(earns 2-5 gold)</p>
        <form method="post" action="process.php">
            <input type="hidden" name="action" value="house">
            <input type="submit" value="Find Gold!">
        </form>
    </div>
    <div class="places">
        <h2>Casino</h2>
        <p>(earns/takes 0-50 gold)</p>
        <form method="post" action="process.php">
            <input type="hidden" name="action" value="casino">
            <input type="submit" value="Find Gold!">
        </form>
    </div>
    <p>Activities:</p>
    <div id="activities">
        <?php
        foreach ($_SESSION['activity'] as $key => $value) {
            echo $value;
        }
        ?>
    </div>
</body>

</html>