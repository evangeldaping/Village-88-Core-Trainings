<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using OOP</title>
</head>

<body>

</body>

</html>

<?php
require('database.php');
require('country_finder.php');
require('people.php');
$database = new Database();
$people_manager = new People_manager('people');
$country_finder = new Country_finder('world');
$users = $people_manager->get_all_users();
var_dump($users);
?>