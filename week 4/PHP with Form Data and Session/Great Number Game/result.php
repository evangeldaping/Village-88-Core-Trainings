<?php
session_start();

if (isset($_POST['reset'])) {
    unset($_SESSION['tooLow']);
    unset($_SESSION['tooHigh']);
}

if (isset($_POST['guess'])) {
    // $_SESSION['guess'] = $_POST['guess'];
    if ($_POST['guess'] == $_SESSION['number']) {
        $_SESSION['correct'] = "<h3 class='green'>" . $_POST['guess'] . " was the number!</h3>";
    }
    if ($_POST['guess'] < $_SESSION['number']) {
        $_SESSION['tooLow'] = "<h3 class='red'>" . "Too Low!</h3>";
    }
    if ($_POST['guess'] > $_SESSION['number']) {
        $_SESSION['tooHigh'] = "<h3 class='red'>" . "Too High!</h3>";
    }
}

header('Location: index.php');
