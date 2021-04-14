<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Count and Reset</title>
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
</head>

<body>
    <?php $this->load->helper('form');
    echo form_open('users/count'); ?>
    <h4>You visited this page <?php echo $count ?> times</h4>
    <?php echo form_close(); ?>

    <?php $this->load->helper('form'); ?>
    <form method="post" action="<?php echo site_url() . 'users/reset/' ?>">
        <input id="reset_button" type="submit" value="Reset">
    </form>
</body>

</html>