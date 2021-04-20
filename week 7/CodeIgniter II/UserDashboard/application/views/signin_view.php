<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="validation MVC assig/nment page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link type="text/css" rel="stylesheet" href="<?= base_url('external/bootstrap-3.0.3-dist/dist/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/user_dash.css') ?>" />

    <script type="text/javascript" src="<?= base_url('external/JQuery/v2.0.3/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('external/bootstrap-3.0.3-dist/dist/js/bootstrap.min.js') ?>"></script>

    <title>Sign in</title>
</head>

<body>

    <?php
    require('partials/navbar.php');

    $label = array("Email", "Password");
    $type = array("text", "password");
    $id = array("inputLoginEmail", "inputLoginPassword");
    $name = array("email", "password");
    $placeholder = array("Email", "Password");
    $autofocus = array("autofocus", "");
    ?>
    <div class="container-fluid">
        <div>
            <form action="<?= base_url('signin/logon') ?>" class="form-horizontal" method="post" role="form">
                <div class="form-group">
                    <h3 class="col-sm-3 control-label" id="signin-header">Sign in</h3>

                    <?php $error_string = $this->session->flashdata('validation_error');
                    if ($error_string) {
                    ?> <h4 class='validation_error col-sm-7 col-sm-offset-1'><?= $error_string ?></h4>
                    <?php    }
                    ?>
                </div>
                <div class="form-group">

                    <?php for ($input = 0; $input < 2; $input++) {
                    ?> <label for='<?= $id[$input] ?>' class='col-sm-3 control-label'><?= $label[$input] ?></label>
                        <div class='col-sm-7'>
                            <input type='<?= $type[$input] ?>' class='form-control' id='<?= $id[$input] ?>' name='<?= $name[$input] ?>' placeholder='<?= $placeholder[$input] ?>' <?= $autofocus[$input] ?> />
                        </div>
                    <?php    }
                    ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7">
                        <input class="btn btn-primary" type="submit" value="Login" />
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- .container-fluid -->
</body>

</html>