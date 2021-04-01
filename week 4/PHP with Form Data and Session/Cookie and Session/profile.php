<?php
session_start();

if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != TRUE) {
    header('Location: login.php');
} else {
    if ($_SESSION['id'] == 1) {
        echo "Oliver";
    }

    if ($_SESSION['id'] == 2) {
        echo "Michael";
    }
}
?>
<h1>Profile</h1>