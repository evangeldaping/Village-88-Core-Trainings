<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="validation MVC assignment page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link type="text/css" rel="stylesheet" href="<?= base_url('external/bootstrap-3.0.3-dist/dist/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/user_dash.css') ?>" />

    <script type="text/javascript" src="<?= base_url('external/JQuery/v2.0.3/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('external/bootstrap-3.0.3-dist/dist/js/bootstrap.min.js') ?>"></script>

    <title>Home</title>
</head>

<body>
    <?php
    require('partials/navbar.php');

    $header = array(
        "Manage Users",
        "Leave messages",
        "Edit User Information"
    );
    $text =   array(
        "Using this application, you'll learn how to add, remove and edit users for the application.",
        "Users will be able to leave a message to another user using this application.",
        "Admins will be able to edit another user's information (email address, first name, last name, etc)."
    );
    ?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Welcome to the Test</h1>
            <p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
            <p><a class="btn btn-primary btn-lg" href="<?= base_url('signin') ?>" role="button">Start</a></p>
        </div>

        <div>

            <?php for ($section = 0; $section < 3; $section++) {
            ?> <div class="col-sm-4">
                    <h4><?= $header[$section] ?></h4>
                    <p><?= $text[$section] ?></p>
                </div>
            <?php    }
            ?> </div>
    </div> <!-- container-fluid -->
</body>

</html>