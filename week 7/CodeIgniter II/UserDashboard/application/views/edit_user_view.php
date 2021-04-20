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

    <title>Edit User</title>
</head>

<body>
    <?php
    require('partials/navbar.php');
    ?>
    <div class="container-fluid">

        <form action="<?= base_url('users/edit_user/name') ?>" class="form-horizontal" method="post" role="form">
            <div class="form-group">

                <?php if (empty($admin) || empty($user) || empty($user['id'])) {
                ?> <h3 class="col-sm-3 control-label">Edit Profile</h3>
                <?php        } else {
                ?> <h3 class="col-sm-3 control-label">Edit User #<?= $user['id'] ?></h3>
                <?php        }

                if ($this->session->flashdata('validation_error')) {
                    $error_string = ($this->session->flashdata('validation_error'));
                ?> <h4 class='validation_error col-sm-7 col-sm-offset-1'><?= $error_string ?></h4>
                <?php        }
                ?>
            </div>
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>" />
                <label for="inputEditFirstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputEditFirstName" name="first_name" value="<?= $user['first_name'] ?>" autofocus />
                </div>
                <label for="inputEditLastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputEditLastName" name="last_name" value="<?= $user['last_name'] ?>" />
                </div>
                <label for="inputLoginEmail" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputLoginEmail" name="email" value="<?= $user['email'] ?>" />
                </div>
                <?php if ($admin) {
                    if ($user['user_level'] == 9) {
                        $adminOption = "<option selected='selected' value=9>admin</option>";
                    } else {
                        $adminOption = "<option value=9>admin</option>";
                    }
                ?> <label for="inputEditLevel" class="col-sm-3 control-label">User Level</label>
                    <div class="col-sm-7">
                        <select id="inputEditLevel" name="user_level" value="<?= $user['user_level'] ?>">
                            <option value=0>user</option>
                            <?= $adminOption ?>
                        </select>
                    </div>
                <?php        } else {
                ?> <input type="hidden" class="form-control" id="inputLoginUserLevel" name="user_level" value="<?= $user['user_level'] ?>" />
                <?php        }
                ?> <div class="col-sm-offset-3 col-sm-7">
                    <input class="btn btn-primary" type="submit" value="Update" />
                </div>
            </div>
        </form>

        <form action="<?= base_url('users/edit_user/password') ?>" class="form-horizontal" method="post" role="form">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>" />
                <label for="inputEditPassword" class="col-sm-3 control-label">New Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="inputEditPassword" name="password" placeholder="to change password, enter a new one" />
                </div>
                <label for="inputEditConfirmPassword" class="col-sm-3 control-label">Confirm New Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="inputEditConfirmPassword" name="password2" placeholder="confirm your new password" />
                </div>
                <div class="col-sm-offset-3 col-sm-7">
                    <input class="btn btn-primary" type="submit" value="Update Password" />
                </div>
            </div>
        </form>

        <form action="<?= base_url('users/edit_user/description') ?>" class="form-horizontal" method="post" role="form">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>" />
                <label for="inputEditDescription" class="col-sm-3 control-label">Edit Description</label>
                <div class="col-sm-7">
                    <textarea rows='3' name='description' class="form-control" id='inputEditDescription' placeholder='Brief personal statement'><?= $user['description'] ?></textarea>
                </div>
                <div class="col-sm-offset-3 col-sm-7">
                    <input class="btn btn-primary" type="submit" value="Save" />
                </div>
            </div>
        </form>

    </div> <!-- .container-fluid -->
</body>

</html>