<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Data Types</title>
</head>

<body>
    <main>

        Variables are very common throughout every programming languages. Remember your Math class?

        a + b = 100

        a and b are variables! In any application that you are going to build, we need to keep track of things. Imagine building a social networking website, we'd need to keep track of user information, wall posts, comments, likes, and many many other things! We'll need to put information like these into variables. A variable is simply just a container for a value. That particular value can vary, hence the name variable.

        Data Types are nothing more than types of data. There are a bunch of data types you can declare, and for PHP, the declaration is done behind the scenes in PHP. For now, let's focus on the most commonly used data types. Here's a list of data types that you going to use in building web applications:

        integer - A whole number. A number with no fractional component.
        strings - A text literal. The majority of information displayed on most web pages are considered strings. These can include something simple like a first name or email address, to longer strings like entire paragraphs.
        floats - Sometimes called as real numbers. They are numbers that have a fractional component. However unlike in math, fractions are expressed as decimal numbers.
        boolean - Assesses the truth value of something. It has only two values: true and false.
        arrays - A type of variable that can hold a group of values. Usually meant to store a collection of related data. You will learn more about these in the next tab.
        objects - Allows for the storage of not only data but also information on how to process the data. You will learn more about these in the OOP chapter.
        PHP does not need a variable to be of a specific type because it can freely move between data types as demanded by the code it's being used in. Example:
        <?php
        echo "1" + "2";
        ?>
        Result: 3

        Wrapping code with quotation marks automatically converts it to strings, but the code above behaves as if it's an integer! This is both bad and good for developers. Good because we don't have to manually convert it to an integer to make this simple code run as intended, bad because it promotes bad coding habits. Other programming languages such as Java, C, and C++ are very strict when it comes to dealing with data types. If you come from a PHP background, doing things in Java would be a slow process when it comes to handling data types.

        Declaring a Variable
        In PHP, a variable starts with the $ sign, followed by the name of the variable:

        Strings
        <?php
        $first_name = "Michael";
        echo $first_name;
        //This prints out "Michael"
        ?>

        When printing both strings and variables, we normally use concatenation wherein we use periods to connect variables and strings when enclosed in quotations. Check out the sample below:

        <?php
        $first_name = "Michael";
        echo "My name is " . $first_name . ".";
        //This prints out "My name is Michael."
        ?>

        Here is a cleaner way of printing both strings and variables:
        <?php
        $first_name = "Michael";
        echo "My name is $first_name";
        //This prints out "My name is Michael"
        ?>

        With double quotes, we are allowed to embed variables and additional characters with special meaning, but with single quotes:
        <?php
        $first_name = "Michael";
        echo 'My name is $first_name';
        //This prints out "My name is $first_name"
        ?>

        Notice how it treats the variable as an ordinary text and prints the variable name, not its value.

        Integers and Floats
        <?php
        $a = 10;
        $sum = $a + 100;
        echo $sum;
        //prints out "110"
        ?>

        Notice that we didn't have to wrap the number 10 with a quotation mark. We can only do stuff like this to numbers.
        <?php
        $a = 10;
        $b = 12.5;
        echo $a + $b;
        //prints out "22.5". Notice that we are actually adding two types of data (int and float). But PHP automatically converts the int one to float, thus having a result of float value (10.0)
        ?>

        Booleans
        Booleans are often used in conditional testing. For example, if you want to print out the appropriate title for each user that visits your website, we use booleans. Check out the pseudo code below:

        If user is male, then we prepend 'Mr.' before their name,
        if not, then prepend 'Ms.' before their name.
        Boolean represents two possible states: TRUE or FALSE.
        <?php
        $a = true;
        $b = false;
        ?>

        It doesn't make much sense if we use boolean data types like in the above example, but know that they are very very useful when it comes to checking the truthy-ness of values.
    </main>
</body>

</html>