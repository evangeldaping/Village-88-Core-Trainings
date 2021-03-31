<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            padding: 0px 400px 400px 400px;
        }

        div.checkerBoardBlack {
            float: left;
        }

        div.checkerBoardGreen {
            float: right;
        }

        div div {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: -4px -4px 0px 0px;
        }

        div.color_1 {
            background-color: black;
        }

        div.color_2 {
            background-color: red;
        }

        div.color_3 {
            background-color: #556B2F;
        }

        div.color_4 {
            background-color: #FFFFE0;
        }
    </style>
</head>

<body>
    <main>

        <?php echo "<div class=\"checkerBoardBlack\">"; ?>
        <?php function checkerBoardBlack()
        { ?>
            <?php $size = 10; ?>
            <?php for ($a = 0; $a < $size; $a++) { ?>
                <div>
                    <?php for ($b = 0; $b < $size; $b++) { ?>
                        <div class='color_<?= ($b + $a) % 2 + 1 ?>'></div>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
        <?php checkerBoardBlack(); ?>
        <?php echo "</div>";  ?>

        <?php echo "<div class=\"checkerBoardGreen\">"; ?>
        <?php function checkerBoardGreen()
        { ?>
            <?php $size = 10; ?>
            <?php for ($c = 0; $c < $size; $c++) { ?>
                <div>
                    <?php for ($d = 0; $d < $size; $d++) { ?>
                        <div class='color_<?= ($d + $c) % 2 + 3 ?>'></div>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
        <?php checkerBoardGreen(); ?>
        <?php echo "</div>";  ?>
    </main>
</body>

</html>