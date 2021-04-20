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

    <?php
    $title = "Register";
    if (empty($admin)) {
        $admin = false;
    }
    if ($admin) {
        $title = "New User";
    }
    ?>
    <title><?= $title ?></title>

</head>

<body>
    <?php
    require('partials/navbar.php');

    $label = array("First Name", "Last Name", "Email", "Password", "Confirm Password");
    $type = array("text", "text", "text", "password", "password");
    $id = array("inputRegFirstName", "inputRegLastName", "inputRegEmail", "inputRegPassword", "inputRegConfirmPassword");
    $name = array("first_name", "last_name", "email", "password", "password2");
    $placeholder = array("First Name", "Last Name", "Email", "Password", "Confirm Password");
    $autofocus = array("autofocus", "", "", "", "");
    ?>
    <div class="container-fluid">
        <form action="<?= base_url('registration/register') ?>" class="form-horizontal" method="post" role="form">
            <div class="form-group">

                <?php if ($admin) {
                    $title = "Add new user";        //	otherwise already set above as 'Register'
                }
                ?> <h3 class="col-sm-3 control-label" id="signin-header"><?= $title ?></h3>
                <?php
                if ($this->session->flashdata('validation_error')) {
                    $error_string = ($this->session->flashdata('validation_error'));
                ?> <h4 class='validation_error col-sm-7 col-sm-offset-1'><?= $error_string ?></h4>
                <?php    }
                ?>
            </div>
            <div class="form-group">
                <?php
                for ($input = 0; $input < 5; $input++) {
                ?> <label for='<?= $id[$input] ?>' class='col-sm-3 control-label'><?= $label[$input] ?></label>
                    <div class='col-sm-7'>
                        <input type='<?= $type[$input] ?>' class='form-control' id='<?= $id[$input] ?>' name='<?= $name[$input] ?>' placeholder='<?= $placeholder[$input] ?>' <?= $autofocus[$input] ?> />
                    </div>
                <?php    }
                ?>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                    <input class="btn btn-primary" type="submit" value="Register" />
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
</body>

</html>