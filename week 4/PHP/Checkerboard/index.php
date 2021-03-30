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
            padding: 40px;
        }

        div.checkerBoardBlack ul {
            float: left;
        }

        div.checkerBoardBlack ul li {
            list-style-type: none;
            width: 50px;
            height: 50px;
            background-color: red;
        }

        div.checkerBoardBlack ul li.black {
            background-color: black;
        }

        div.checkerBoardGreen ul {
            float: right;
        }

        div.checkerBoardGreen ul li {
            list-style-type: none;
            width: 50px;
            height: 50px;
            background-color: #FFFFE0;
        }

        div.checkerBoardGreen ul li.black {
            background-color: black;
        }

        div.checkerBoardGreen ul li.green {
            background-color: #556B2F;
        }
    </style>
</head>

<body>
    <main>
        <?php
        echo "<div class=\"checkerBoardBlack\">";
        function checkerBoardBlack()
        {
            for ($i = 0; $i < 8; $i++) {
                echo "<ul>";
                for ($j = 0; $j < 8; $j++) {
                    if (($i % 2 == 0) and ($j % 2 == 0) or ($i % 2 == 1) and ($j % 2 == 1)) {
                        echo "<li class='black'></li>";
                    } else {
                        echo "<li></li>";
                    }
                }
                echo "</ul>";
            }
        }
        checkerBoardBlack();
        echo "</div>";

        echo "<div class=\"checkerBoardGreen\">";
        function checkerBoardGreen()
        {
            for ($i = 0; $i < 8; $i++) {
                echo "<ul>";
                for ($j = 0; $j < 8; $j++) {
                    if (($i % 2 == 0) and ($j % 2 == 0) or ($i % 2 == 1) and ($j % 2 == 1)) {
                        echo "<li class='green'></li>";
                    } else {
                        echo "<li></li>";
                    }
                }
                echo "</ul>";
            }
        }
        checkerBoardGreen();
        echo "</div>";
        ?>
    </main>
</body>

</html>