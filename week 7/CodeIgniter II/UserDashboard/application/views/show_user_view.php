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

    <title>User #<?= $profile['id'] ?></title>
</head>

<body>
    <?php
    require('partials/navbar.php');

    $label = array("Member Since:", "User ID:", "Email Address:", "Description:");
    $id = array("showCreatedAt", "showUserID", "showEmail", "showDescription");
    $value = array($profile['created_at'], $profile['id'], $profile['email'], $profile['description']);

    $error_string = $this->session->flashdata('validation_error');
    ?>
    <div class="container-fluid">
        <div class='col-sm-offset-1 col-sm-10'>
            <form action="<?= base_url('messages/add/' . $profile['id']) ?>" class="form-horizontal" method="post" role="form">
                <div class='form-group'>
                    <h3><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></h3>
                    <?php if ($admin || ($user_id == $profile['id'])) {
                    ?> <a href='<?= base_url('users/edit/' . $profile['id']) ?>'>edit</a>
                    <?php    }
                    if (isset($error_string)) {
                    ?> <h4 class='validation_error'><?= $error_string ?></h4>
                    <?php    }
                    ?>
                </div>
                <?php for ($field_num = 0; $field_num < 4; $field_num++) {
                ?> <div class="form-group">
                        <label for='<?= $id[$field_num] ?>' class='col-sm-3 text-left'><?= $label[$field_num] ?></label>
                        <div class='col-sm-9' id='<?= $id[$field_num] ?>'><?= $value[$field_num] ?></div>
                    </div>
                <?php    }
                ?> <div class="form-group">
                    <h4 class="col-sm-5">Leave a message for <?= $profile['first_name'] ?>:</h3>
                        <textarea rows='3' name='message' class="form-control" id='inputUserMessage'></textarea>
                        <input class="btn btn-primary" type="submit" value="Post" />
                </div>
            </form>
            <?php foreach ($messages as $message) {
            ?> <div class="form-group row">
                    <p class="col-sm-6 text-left"><a href="<?= base_url('users/show/' . $message['author_id']) ?>"><?= $message['full_name'] ?></a> wrote:</p>
                    <p class="col-sm-6 text-right"><?= $message['created_date'] ?></p>
                    <textarea rows='3' class="form-control" readonly><?= $message['message_txt'] ?></textarea>
                    <?php if ($admin || ($user_id == $message['author_id'])) {
                        $link = base_url("messages/remove/" . $message['id'] . "/" . $profile['id']);
                    ?>
                        <a href="<?= $link ?>"><button class="btn btn-warning">Delete</button></a>
                        <!-- <a href="<?= $link ?>"><button class="btn btn-warning col-sm-1">Delete</button></a> -->
                    <?php        }
                    ?>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php if (isset($message['comments'])) {
                        $comments = $message['comments'];
                        foreach ($comments as $comment) {
                    ?> <div class="row">
                                <p class="col-sm-6 text-left"><a href="<?= base_url('users/show/' . $comment['author_id']) ?>"><?= $comment['full_name'] ?></a> wrote:</p>
                                <p class="col-sm-6 text-right"><?= $comment['created_date'] ?></p>
                                <textarea rows='3' class="form-control" readonly><?= $comment['comment_txt'] ?></textarea>
                                <?php
                                if ($admin || ($user_id == $comment['author_id'])) {
                                    $link = base_url("comments/remove/" . $comment['id'] . "/" . $profile['id']);
                                ?>
                                    <a href="<?= $link ?>"><button class="btn btn-warning">Delete</button></a>
                                    <!-- <a href="<?= $link ?>"><button class="btn btn-warning col-sm-1">Delete</button></a> -->
                                <?php                }
                                ?>
                            </div>
                    <?php            }
                    }
                    ?> <div class="row">
                        <form action="<?= base_url('comments/add/' . $message['id']) ?>" class="form-horizontal" method="post" role="form">
                            <input type="hidden" name="profile_id" value="<?= $profile['id'] ?>" />
                            <div>
                                <textarea rows='3' name='comment' class="form-control" placeholder="leave a comment"></textarea>
                                <input class="btn btn-primary" type="submit" value="Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            <?php    }
            ?>
        </div>
    </div> <!-- .container-fluid -->
</body>

</html>