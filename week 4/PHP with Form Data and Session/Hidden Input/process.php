<?php
if (isset($_POST['action']) && $_POST['action'] == "register") {
    echo "do registration process";
}
if (isset($_POST['action']) && $_POST['action'] == "login") {
    echo "do login process";
}
