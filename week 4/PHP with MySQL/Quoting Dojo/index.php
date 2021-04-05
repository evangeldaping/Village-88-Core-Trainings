<?php
session_start();
require_once('includes/new-connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Quoting Dojo</title>
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>

    <div id="wrapper">

        <h1>Welcome to Quoting Dojo</h1>

        <form action="process.php" method="post">

            <p><em>Please enter your name and quote. Then click submit to add it to the database.</em></p>

            <p>Your name:<br /><input type="text" name="name" /></p>

            <p>Your quote:<br />
                <textarea name="quote" id="" cols="30" rows="10"></textarea>
            </p>

            <p><input type="submit" value="Add my Quote" /></p>

            <p><a href="main.php">SKIP TO QUOTES</a></p>

        </form>

        <div id="errors" class="error">
            <?php
            if (isset($_SESSION['errors'])) {

                foreach ($_SESSION['errors'] as $error) {
                    echo $error . '<br />';
                }
            }
            ?>
        </div>

        <p>&nbsp;</p>

        <p><a href="reset.php">Reset Session</a></p>

    </div>

</body>

</html>