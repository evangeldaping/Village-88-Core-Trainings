<?php
// $name = "Evangel";
// include('content.php');

// include_once('functions.php');
// print_name('Evangel');

require('name.php');
echo 'I made it here';


// We'll find many cases where we will need to include a PHP script from one file in another file. This is fairly common and it happens with scripts that will be used on several different pages. Including a PHP script is nothing more than pasting the content of one file into another. Below is an example:

// sum.php

// function sum($a, $b)
// {
//     return $a + $b;
// }
// index.php

//  require('sum.php');
//  echo sum(1,2);
// Even if we don't have a sum() function in our index.php file, we made it possible to use sum() by including a file that contains sum(). It's as if we copied the entire code from sum.php file, and pasted it into our index.php file.

// Now this is just a basic example and you may not see the benefits of doing this yet. As our app becomes bigger, we want to maintain sanity by separating our logic into different files. Since we can now connect to the database, our algorithms and logic will become more complex. Up to this point, we want to:

// Have a separate file that renders the page.
// Have a separate file that does the logic e.g: process.php
// Have a separate file that can connect and communicate to a database e.g: new-connection.php
// In the last lesson, we created a new-connection.php file that allowed us to connect to a database. There may be several other PHP files that would want to query the database and display content using the new-connection.php file, and the best way for these files to inherit the MySQL connection is by either requiring or including it. 

// We have 4 built-in PHP methods to choose from that can "paste" code from file to file.

// require - This will produce a fatal error when there's something wrong with the "required" file and will stop code from executing immediately.
// include - Unlike require, include will just produce a warning and will not stop other code from running.

// Important: Use require() when the file is REQUIRED by the application. Like in the basic example above, sum.php must be required because we use the sum() function in index.php. Without sum.php, index.php would break. Use include if the file you want to include is really not that important or won't affect the main flow of the app. For example, we include templates instead of requiring them:

// <?php include('header.php'); 
?>
// <div>
    <p> some content here </p>
</div>
// <?php include('footer.php'); ?>
// require_once - This right here is the function that we might want to use. Why? Just think about this scenario:
// You have new-connection.php working perfectly
// You have a main_navigation.php file that pulls navigation items from the db (thus requiring a MySQL connection)
// You have an index.php file that includes the main_navigation.php file. Since index pulls User records from the DB, you also require a MySQL connection.
// main_navigation.php

// require_once('new-connection.php');
// // More code here
// index.php

// /* pretending that you forgot about
// main_navigation.php file already requiring the new-connection.php file
// */
// require_once('new-connection.php');
// include('main_navigation.php');
// //More code here
// Since we used require_once(), this won't produce any errors and will completely ignore the require_once() code in the index.php file, allowing us to be only requiring the same file once, and still have MySQL connections for both main_navigation.php and index.php files.

// Wait, don't we want to be warned by PHP that there is code being repeated somewhere? Isn't having an error more useful than having to commit mistakes? So if we use require_once(), does that mean we can throw require_once() anywhere we want because it's not going to throw errors anyway? Probably not the best idea, remember to keep your code clean!

// If you want errors and want to be guided - use require()

// If you just want to make things work - use require_once()

// 4. include_once - same as include(), but will make sure the file only gets included once. Same thing as require_once(), you want warnings? use include(). You don't care? Then...