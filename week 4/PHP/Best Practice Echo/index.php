<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Practice: Echo</title>
</head>
<body>
    <main>
        <!-- Best Practice - echo
        Although it's okay to use <?php echo whenusing php to generate an html output, there is a better way.  For example, consider the code below where echo statement was used to generate a html output. -->

        <?php
            $users = array( 
                array('first_name' => 'Michael', 'last_name' => 'Choi'),
                array('first_name' => 'John', 'last_name' => 'Supsupin'),
                array('first_name' => 'Mark', 'last_name' => 'Guillen'),
                array('first_name' => 'KB', 'last_name' => 'Tonel') 
            );
        ?>
        <html>
        <body>
            <div class='content'>
        <?php
            echo "<h1>".count($users)." Users</h1>";
            foreach($users as $user){
                echo "<p>".$user['first_name'] ." " . $user['last_name'] . "</p>";

            }
        ?>
            </div>


        // When the html output gets complex, putting all the html tags inside the echo statement could lead to typing mistakes.  It also makes it hard to visualize if you're closing all the necessary html tags properly.

        // Best practice
        // Instead of using php echo to print out bunch of html, instead it's better to format your code as follows:

        <?php
            $users = array( 
                array('first_name' =--> 'Michael', 'last_name' => 'Choi'),
                array('first_name' => 'John', 'last_name' => 'Supsupin'),
                array('first_name' => 'Mark', 'last_name' => 'Guillen'),
                array('first_name' => 'KB', 'last_name' => 'Tonel') 
            );
        ?>
        <html>
        <body>
            <div class='content'>
                <h1><?= count($users) ?> Users</h1>
        <?php   foreach($users as $user) {    ?>
                <p><?= $user['first_name']?> <?= $user['last_name']?></p>
        <?php   }    ?>
            </div>
   

        // The difference may not seem very much but when the html gets a lot more complex, the latter approach is a lot easier to read and is easier to code as well as maintain.  Plus, it has become the best practice in the industry to have variable value be inserted in the html through this method instead of using echo.

        // Now that you know this, going forward, whenever you're using PHP to generate a html output, refrain from using <?php echo but instead use <?= and have the html tags appear outside the <?php ?> blocks.

        // Also note that in the best practice, we've put <?php in the very beginning of the line.  This makes the final http response easier to read and also makes the code more readable.

        // For example, below is a bad example.

            <div class="content">
                <h1><?= count($users) ?> Users</h1>
                <?php   foreach($users as $user) {    ?>
                <p><?= $user['first_name']?> <?= $user['last_name']?></p>
                <?php   }    ?>
            </div>
        // Note how above is not as easy to read and indentation of code is not as clear?  Whenever <?php is placed in the very beginning of each line, it does make the code a lot more readable and later when you use Inspect Element to view the source code, the source code will look a lot neater.  You should also follow this practice going forward.
    </main>
</body>
</html>