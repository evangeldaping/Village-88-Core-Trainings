<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <main>
        <!-- Think of an array as an endless file cabinet. You put the items you wish to store in their appropriate folders or drawers. You can choose to give them labels (known as associations) or locate them based on the order of folders.

        Declaring Array Variables
        You can declare an empty array like this:

        Method #1:

        $users = array();
        Or like this Method #2:

        $users = [];
        Method #1 is preferable because Method #2 only works for the latest versions of PHP.

        If you want to see whether what we have declared is really an array variable, we use PHP's var_dump() function. var_dump is same as echo or print() but its main purpose is to let the programmer know what types of data they are dealing with. Don't use it to render content, it should be used exclusively by the developer for testing!

        $users = array();
        var_dump($users);
        Result:



        The result tells us three things:

        The data type - array
        The size, in terms of how many items are currently in the array - 0
        The value - which is currently empty
        If you want to add more stuff to the already declared empty array:

        array_push($users, "Oliver");
        var_dump($users);
        // Pushes a user "Oliver" to $users array variable
        //NOTE: array_push is a built-in function in PHP that allows us to push new things to an array
        // You can add more stuff to the array by appending values separated by comma.
        Result:



        This time, the result tells us five things:

        The data type of the $users variable - array
        The size, in terms of how many items are currently in the array - 1
        The value, which is in a key and value pair format:
        0 - key (also known as index)
        'Oliver' - value
        PHP automatically assigns a unique key to each value you add to an array. The very first key it assigns is 0, that increments each time you add more stuff to it.
        The array value's data type - String
        The length of the string - 6
        Again, var_dump() is used to display structured information(type and value) about one or more variable, which is very useful if you are debugging. If we want to print out the value ("Oliver") we use echo, but since we are dealing with arrays, we need to specify the key to get the value:

        echo $users[0];
        //prints out "Oliver"
        The above code is the manual way of accessing values from an array. There is a much better way, using loops! We will cover loops in a later tab.

        Associative Arrays
        Letting PHP auto assign keys to our list is useful, but wouldn't it be great to have more meaningful keys? Arrays with named keys, perhaps?

        Associative arrays are the arrays that use named keys that you assign to them. There are two ways to create an associative array:

        Method #1:

        $likes = array("Oliver" => "Video games", "Dan" => "Football", "Melody" => "Ping pong");
        // take note of the syntax. We use => symbol to point the key to the value.
        Method #2:

        $likes["Oliver"] = "Video games";
        $likes["Dan"] = "Football";
        $likes["Melody"] = "Ping pong";
        // Here we are using the = sign
        We recommend using Method #1. To output the value, we simply use the named keys we provided. Example:

        echo $likes['Dan'];
        //prints out "Football";
        While arrays can only accept strings or integers as keys, it can store any data types as values (int, string, float, Boolean) and that includes storing an array data type as value as well! An array within an array is called a multidimensional array, and we will cover them in a later tab. -->
        <?php
        $trainees = array();
        $trainees[] = "Randall";
        $trainees[] = "Michael";
        $trainees[] = "Charles";
        $trainees[] = "Dexter";

        // $trainees = array("Randall", "Michael", "Charles");

        echo "This is student 0:" . $trainees[0] . '<br>';
        echo "This is student 0:" . $trainees[1] . '<br>';
        echo "This is student 0:" . $trainees[2] . '<br>';
        echo "This is student 0:" . $trainees[3] . '<br>';

        // multi-dimensional array
        $rookies = array(
            array("Randall", "Frisk", 27),
            array("Michael", "Choi", 33),
            array("Charles", "Holloman", 27)
        );
        echo "This is the age of 0:" . $rookies[0][2] . '<br>';
        echo "This is the age of 1:" . $rookies[1][2] . '<br>';
        echo "This is the age of 2:" . $rookies[2][2] . '<br>';

        //Associative array
        $student = array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27);
        echo $student["first_name"] . "<br>";
        echo $student["last_name"] . "<br>";
        echo $student["age"] . "<br>";

        // multi-dimensional Associative array
        $studyantes = array(
            array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27),
            array("first_name" => "Michael", "last_name" => "Choi", "age" => 33),
            array("first_name" => "Charles", "last_name" => "Holloman", "age" => 27)
        );
        echo $studyantes[0]["first_name"] . "<br>";
        echo $studyantes[0]["last_name"] . "<br>";
        echo $studyantes[0]["age"] . "<br>";
        echo $studyantes[1]["first_name"] . "<br>";
        echo $studyantes[1]["last_name"] . "<br>";
        echo $studyantes[1]["age"] . "<br>";
        echo $studyantes[2]["first_name"] . "<br>";
        echo $studyantes[2]["last_name"] . "<br>";
        echo $studyantes[2]["age"] . "<br>";

        $beginners = array();
        $beginners[] = array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27);
        echo $beginners[0]["age"] . "<br>";

        ?>
    </main>
</body>

</html>