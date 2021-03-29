<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get array values</title>
</head>

<body>
    <main>
        <?php
        $files = scandir($dir);
        //remove "." and ".."
        print_r($files);
        ?>

        <ul>
            <?php foreach ($files as $file) { ?>
                <li><?php echo $file; ?></li>
            <?php } ?>
        </ul>
    </main>
</body>

</html>