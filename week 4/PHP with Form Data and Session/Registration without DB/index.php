<?php
session_start();
if (!isset($_SESSION["msgs"])) {
    $_SESSION["msgs"] = array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration No DB</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #wrapper {
            width: 400px;
            margin: 0 auto;
            padding: 10px;
            /*border: 1px solid green;*/
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            float: right;
        }

        button {
            padding: 2px;
            margin-left: 356px;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <form action="process.php" method="post">
            <h2>Please Register Below:</h2>
            <label>Email: <input type="text" name="email"></label>
            <label>First Name: <input type="text" name="f_name"></label>
            <label>Last Name: <input type="text" name="l_name"></label>
            <label>Password: <input type="text" name="pw"></label>
            <label>Confirm Password: <input type="text" name="conf_pw"></label>
            <label>DOB: <input type="text" name="dob"></label>
            <label>Please upload a profile pic</label>
            <input type="file" name="fileToUpload" />

            <button>Submit</button>
        </form>
        <?php
        if (isset($_SESSION["msgs"])) {
            foreach ($_SESSION["msgs"] as $msg) {
                echo "<p class='red'>" . $msg . "</p>";
            }
            // $_SESSION["msgs"] = array();
            session_destroy();
        }
        ?>
    </div>
</body>

</html>