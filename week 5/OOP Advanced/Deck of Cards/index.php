<?php
require_once 'game.class.php';
require_once "deck.class.php";
require_once "player.class.php";

session_start();

if (!empty($_POST['button'])) {
    $button = $_POST['button'];
}

if (isset($button)) {
    switch ($button) {
        case 'newgame':
            //echo "new game pressed";
            $game = new Game();
            $game->startGame();
            $game->deck->showDeckCards();
            //$game->deck->showScoreCards();
            $_SESSION['newgame'] = serialize($game);
            break;
        case 'play':
            $game = unserialize($_SESSION['newgame']);
            //print_r($game->deck);
            $game->playButtonPressed();
            $_SESSION['newgame'] = serialize($game);
            //print_r($_SESSION['newgame']);
            break;
        case 'stop':
            $game = unserialize($_SESSION['newgame']);
            $game->stopGame();
            $game->checkTheWinner();
            break;
        default:
            echo "you ve not pressed anything";
    }
} else {
    echo 'Please press the button';
}

?>

<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        body {
            margin-left: 150px;
            background: rgb(24, 36, 0);
            background: linear-gradient(90deg, rgba(24, 36, 0, 0) 0%,
                    rgba(16, 51, 100, 0) 0%,
                    rgba(0, 149, 255, 0.7329306722689075) 0%,
                    rgba(0, 255, 74, 0.23713235294117652) 58%);
            font-size: 30px;
        }

        form {
            margin-top: 70px;
        }
    </style>
</head>

<body>

    <form name="form" method="post" action="">
        <button class="btn btn-info" name="button" value="newgame" type="submit">New Game</button>
        <button class="btn btn-success" name="button" value="play" type="submit">Play</button>
        <button class="btn btn-danger" name="button" value="stop" type="submit">Stop</button>
    </form>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>