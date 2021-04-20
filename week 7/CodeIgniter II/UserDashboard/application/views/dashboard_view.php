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
    <script type="text/javascript" src="<?= base_url('external/JQuery/tablesorter/jquery.tablesorter.min.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("table").tablesorter({
                sortList: [
                    [0, 0]
                ]
            });
        });
    </script>

    <title>Dashboard</title>
</head>

<body>
    <?php
    require('partials/navbar.php');

    if (empty($admin)) {
        $admin = false;
    }
    if ($admin) {
        $pageHeader = "Manage Users";
    } else {
        $pageHeader = "All Users";
    }

    $error_string = $this->session->flashdata('validation_error');
    if (empty($error_string)) {
        $error_string = '&nbsp';    //	placeholder, for spacing
    }
    ?>
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <h3 class="col-sm-4"><?= $pageHeader ?></h3>
                <h4 class='validation_error col-sm-6'><?= $error_string ?></h4>
                <?php if ($admin) {
                ?> <a href="<?= base_url('users/add') ?>" class="col-sm-1"><button class="btn btn-primary new-user-button">Add User</button></a>
                <?php    }
                ?> <table id="user-table" class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Member Since</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_users as $user) {
                            $name = $user['full_name'];
                        ?> <tr>
                                <td><?= $user['id'] ?></td>
                                <td><a href='<?= base_url('users/show/' . $user['id']) ?>'><?= $name ?></a></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['created_date'] ?></td>
                                <td><?= $user['status'] ?></td>
                                <?php if ($admin) {
                                ?> <td>
                                        <a class="btn btn-warning btn-sm" href="<?= base_url("users/edit/{$user['id']}") ?>">Edit</a>
                                        <a data-toggle="modal" href="#myModal-<?= $user['id'] ?>" class="btn btn-danger btn-sm">Remove</a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal-<?= $user['id'] ?>" user_id="<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Remove User</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 class="modal-title">Are you sure you want to remove this user? This operation is not reversible.</h4>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href='#' class="btn" data-dismiss="modal">Cancel</a>
                                                        <a href="<?= base_url("users/remove/{$user['id']}") ?>" class="btn btn-primary">Remove</a>
                                                    </div>
                                                </div> <!-- /.modal-content -->
                                            </div> <!-- /.modal-dialog -->
                                        </div> <!-- /.modal -->
                                    </td>
                                <?php        } elseif ($user['id'] == $this->session->userdata['user_id']) {
                                ?> <td>
                                        <!-- <a class="btn btn-warning btn-sm" href="< ?= base_url("users/edit/{$user['id']}") ?>">Edit</a>  -->
                                        <a href='<?= base_url('users/edit/' . $user['id']) ?>'>edit</a>
                                    </td>
                                <?php        }
                                ?>
                            </tr>
                        <?php    }
                        ?> </tbody>
                </table>
            </div>
        </div>
    </div> <!-- .container-fluid -->
</body>

</html>