<?php
session_start();
require_once('includes/new-connection.php');

// Code need to select and display
// data from the MySQL table
$quotes_table_query = "SELECT * FROM quotes";
$quotes = fetch($quotes_table_query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quoting Dojo</title>
    <link rel="stylesheet" href="css/styles.css"/>

</head>
<body>

<div id="wrapper">

    <h1>Here are the Awesome Quotes!</h1>

    <div id="quotes">
        <?php

        // Display MySQL data inserted into the MySQL DB
        // from a form on another page
         foreach(array_reverse($quotes) as $quote)
         {
            echo '<p><span class="big">&ldquo;</span>' . $quote['quote'] . '<span class="big">&rdquo;</span><br /><span class="float-right"> &mdash; ' . $quote['name'] .' at ' . date('g:ia F j Y', strtotime($quote['updated_at'])) . '</span></p>';
         }
        ?>
    </div>


    <p>&nbsp;</p>

    <p><a href="reset.php">Reset Session and Go Home</a></p>

</div>

</body>
</html>