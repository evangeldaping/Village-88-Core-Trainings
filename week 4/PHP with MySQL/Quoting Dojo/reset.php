<?php
// Could to destroy a session and redirect to home page
session_start();
session_destroy();
header('Location: index.php');
?>