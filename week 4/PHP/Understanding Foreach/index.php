<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Foreach</title>
</head>

<body>
    <main>
        <?php
        echo "<h1>Understanding Foreach</h2>";
        echo 'Let\'s say that $x = [1,3,5,7]' . "<br>";
        echo "1. What would be the output of the following code? Try to guess the output of the code before running it!" . "<br>";
        $x = array(1, 3, 5, 7);
        foreach ($x as $key => $value) {
            echo $key . " - " . $value . "<br />";
        }

        echo "<br />";

        echo "2. What would be the output of the following code? Try to guess the output of the code before running it!" . "<br>";
        $x = array(1, 3, 5, 7);
        foreach ($x as $value) {
            echo $value . "<br />";
        }

        echo "<br />";

        echo 'Let\'s now say that $x = [ "hi" => "Dojo", "awesome" => "game" ]'  . "<br>";
        echo "3. What would be the output of the following code? Try to guess the output of the code before running it!" . "<br>";
        $x = array("hi" => "Dojo", "awesome" => "game");
        foreach ($x as $key => $value) {
            echo $key . " - " . $value . "<br />";
        }

        echo "<br />";

        echo "4. What would be the output of the following code? Try to guess the output of the code before running it!" . "<br>";
        $x = array("hi" => "Dojo", "awesome" => "game");
        foreach ($x as $key => $value) {
            echo $value . "<br />";
        }

        echo "<br />";

        echo "5. What would be the output of the following code? Try to guess the output of the code before running it!" . "<br>";
        $x = array("hi" => "Dojo", "awesome" => "game");
        foreach ($x as $key => $value) {
            echo $key . "<br />";
        }

        echo "<br />";

        echo "6. Okay. Now let's make it a little bit harder. What would be the output of the following code?" . "<br>";
        $x = array(array(1, 3, 5), array(2, 4, 6), array(3, 6, 9));
        foreach ($x as $key => $value) {
            echo 'Key is {$key}<br />';
            echo "var_dumping value";
            var_dump($value);
        }

        echo "<br />";

        echo "7. Now what about this? Again guess the output before running the code." . "<br>";
        $x = array(array(1, 3, 5), array(2, 4, 6), array(3, 6, 9));
        foreach ($x as $value) {
            echo "var_dumping value";
            var_dump($value);
        }

        echo "<br />";

        echo "8. Okay. Now let's make it even harder. What would be the output of the following code?" . "<br>";
        $x = array(array("hi" => "Dojo", "game" => "awesome"), array("dude" => "fun", "play" => "what?"), array("no" => "way", "i am" => "confused?"));
        foreach ($x as $key => $value) {
            echo "key is {$key}<br />";
            foreach ($value as $key2 => $value2) {
                echo $key2 . " - " . $value2 . "<br />";
            }
        }

        echo "<br />";

        echo "9. Now what about this?" . "<br>";
        $x = array(array("hi" => "Dojo", "game" => "awesome"), array("dude" => "fun", "play" => "what?"), array("no" => "way", "i am" => "confused?"));
        foreach ($x as $y) {
            foreach ($y as $key => $value) {
                echo $key . " - " . $value . "<br />";
            }
        }
        ?>
    </main>
</body>

</html>