<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <main>
        <!-- Imagine that you were back in 1st Grade and you got in trouble for talking out in class. Your teacher asks you to write
        "I will not talk out in class" 1,000 times. Yikes! If you learned about programming in kindergarten, you might have
        thought to write a program to do it for you!
        
        In PHP programming, loops are a way of telling the PHP interpreter to keep doing something until a certain condition has
        been met. Many times loops have been used to do the counting, like creating a math program that counts the number of
        years a person would take in order to pay off a home loan. Loops in PHP can also be used to iterate through an item
        within arrays.
        
        There are multiple ways to do loops, and we will only talk about the most commonly used loops in web development which
        are for loop and foreach loop.
        
        For Loop
        for loop pseudo code:
        
        for (initialize a counter; conditional statement; increment a counter) {
        run this code;
        }
        
        Notice how all the steps of the loop are enclosed within the for loop statement, the open and close parenthesis. Each
        step is separated with a semicolon. A semicolon is needed because these are separate expressions, but you don't put a
        semicolon after the increment counter expression.
        
        This is the traditional way to write a for loop in PHP, and it will work in most situations. Remember, there are tons of
        ways to write loops, but very few of them have any innate properties we don't get in a standard loop.
        
        Here's how the for loop works:
        
        Initialize a counter - Set a counter variable to some initial value.
        $i = 0;
        
        Conditional statement - Check to see if the conditional statement is true:
        $i <= 10; Run this code - If condition is true, execute the code within the loop: echo "Hello World! <br>" ; Increment a
            counter - Increment a counter at the end of each iteration through the loop: $i++ This is what the PHP for loop
            really looks like: for($i=0; $i <=10; $i++) { echo "Hello World! <br>" ; } Result: Foreach Loop The foreach loop
            works only on arrays, and is used to loop through each key/value pair in an array. In plain English, a foreach loop
            works like this: For each value in the specified array, execute this code. While the for loop will continue until
            some condition fails, the foreach loop will continue until it has gone through every item in the array. This is the
            second most common loop you'll use. The code: foreach($users as $user) { //execute code; } For every loop iteration,
            the value within the $users array will be assigned to a $user variable. For example, if your $users array variable
            contains items like below: $users=array('Mike', 'Jeffrey' ); Then on the first loop, the $user will contain 'Mike' ,
            on the next loop, the $user will contain 'Jeffrey' . Our example above is just a normal array, and that means our
            key on each value are numeric. How do you access these keys? foreach $users as $key=> $user
        
            The pseudo code above roughly translates to:
        
            For each item in the $users array, we want to refer to the key as $key and the value as $user.
            The "=>" operator represents the relationship between a key and value. Pretty similar to how we create an
            associative array:
        
            $grimes = array('needle' => 'haystack');
            Other Loops
            Here are the rest of PHP's loop types:
        
            We encourage you to use for loops and foreach loops instead of what's listed below. Familiarize with the syntax but
            keep in mind that while and do-while loops aren't inherently special, you can just as easily write a for loop to do
            the exact same thing!
        
            while - loops through a block of code in a specified number of times.
        
            $i = 0;
            while( $i < 10 ) { echo $i; $i++; } do....while - loops through a block of code once, and then repeats the loop as
                long as a special condition is true. $i=0; do { echo $i; $i++; }while($i < 10); -->
    </main>
</body>

</html>

<?php
$students = array(
    array("Randall", "Frisk", 27),
    array("Michael", "Choi", 33),
    array("Charles", "Holloman", 27)
);
for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        echo $students[$i][$j] . ' ';
    }
    echo '<br>';
}

$studyantes = array(
    array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27),
    array("first_name" => "Michael", "last_name" => "Choi", "age" => 33),
    array("first_name" => "Charles", "last_name" => "Holloman", "age" => 27)
);

foreach ($studyantes as $row) {
    foreach ($row as $info => $value) {
        echo $info . ' ' . $value;
    }
    echo '<br>';
}
?>