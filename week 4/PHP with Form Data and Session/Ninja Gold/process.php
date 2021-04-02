<?php
session_start();

$date = date('F jS Y g:i a');

if (!isset($_SESSION['activity'])) {
    $activity = [];
    $_SESSION['activity'] = $activity;
};


if (!isset($_SESSION['gold'])) {
    $gold = 0;
    $_SESSION['gold'] = $gold;
};

if ($_POST['action'] && $_POST['action'] == 'farm') {
    $farm_earn = rand(10, 20);
    $_SESSION['gold'] = $_SESSION['gold'] + $farm_earn;
    array_push($_SESSION['activity'], '<p class="green">You entered a farm and earned ' . $farm_earn . ' gold. (' . $date . ')</p>');
};

if ($_POST['action'] && $_POST['action'] == 'cave') {
    $cave_earn = rand(5, 10);
    $_SESSION['gold'] = $_SESSION['gold'] + $cave_earn;
    array_push($_SESSION['activity'], '<p class="green">You entered a cave and earned ' . $cave_earn . ' gold. (' . $date . ')</p>');
};
if ($_POST['action'] && $_POST['action'] == 'house') {
    $house_earn = rand(2, 5);
    $_SESSION['gold'] = $_SESSION['gold'] + $house_earn;
    array_push($_SESSION['activity'], '<p class="green">You entered a house and earned ' . $house_earn . ' gold. (' . $date . ')</p>');
};
if ($_POST['action'] && $_POST['action'] == 'casino') {
    $casino_earn = rand(-50, 50);
    $_SESSION['gold'] = $_SESSION['gold'] + $casino_earn;

    if ($casino_earn < 0) {
        array_push($_SESSION['activity'], '<p class="red">You entered a casino and lost ' . abs($casino_earn) . ' gold... Ouch.. (' . $date . ')</p>');
    } else {
        array_push($_SESSION['activity'], '<p class="green">You entered a casino and gained ' . $casino_earn . ' gold. (' . $date . ')</p>');
    };
};
if ($_POST['action'] && $_POST['action'] == 'reset') {
    session_destroy();
}

header('Location: index.php');
die();
