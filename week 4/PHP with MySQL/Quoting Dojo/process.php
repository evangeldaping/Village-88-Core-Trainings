<?php
session_start();
require_once('includes/new-connection.php');

/****** Process the form here ******/

// Start with an empty $errors array
$errors = [];

// Error check a name
if(!isset($_POST['name']) || $_POST['name'] == NULL)
{
    $errors[] = 'Please enter a name.';
}
elseif(strlen($_POST['name']) < 2 || strlen($_POST['name']) > 100)
{
    $errors[] = 'Your name must be more than 2 characters and less than 100 characters.';
}

if(!isset($_POST['quote']) || $_POST['quote'] == NULL)
{
    $errors[] = 'Please enter a quote.';
}
elseif(strlen($_POST['quote']) < 10 || strlen($_POST['quote']) > 140)
{
    $errors[] = 'Your quote must be at least 10 characters and less than 140 characters long.';
}

if($errors != NULL)
{
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
}
else
{

    /*
    Set 'name' and 'quote' input/text area session variables
    if they don't exist
    */
    if(!isset($_SESSION['name']) && !isset($_SESSION['quote']))
    {

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['quote'] = $_POST['quote'];

        // Save a MySQL query as a $query variable using
        // data from form fields
        $insert_query = "INSERT INTO quotes(name, quote, created_at, updated_at) VALUES ('{$_SESSION['name']}', '{$_SESSION['quote']}', NOW(), NOW())";

        // Pass the $query variable into a called function
        // and save it as a $execute_query variable
        $execute_insert_query = run_mysql_query($insert_query);

        header('Location: main.php');

    }

}
?>