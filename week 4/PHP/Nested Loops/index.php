<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loops</title>
</head>

<body>
    <main>
        <!-- Nested Loops
        The Nested loop is simply a loop within a loop. Same as multi-dimensional arrays, it can go many levels deep, but let's focus on dealing only with a loop within a loop design for now. With this design, we will have an outer loop that executes some code, and an inner loop that executes another.

        When working with nested loops, the outer loop changes only after the inner loop are completely finished (or is interrupted). For example:



        Let's say the racing mechanics require players to do some things like this:

        The blue car must go around the track field 5 times. But each time the blue car completes a lap, the car must stop. The driver must then get out of the car and run through the green field twice.
        Pretty weird thing to see in a racing match but it could be fun! So how can we translate the race mechanics in programming? Here's what it would look like:

        <ul>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Blue car finished round $i! <ul>";
                for ($k = 1; $k <= 2; $k++) {
                    echo "<li> Driver just ran and finished round $k! </li>";
                }
                echo "</ul></li>";
            }
            ?>
        </ul>
        Don't mind the uls and lis in the code. They are just there to display the result nicely on the screen. But here's the result:



        Nested loops are not limited to do a for loop within a for loop. You can also do a foreach loop within a for loop, or vice versa. It all depends on what you need for your program. Just remember that the for loop is mainly used for counting while foreach loop is used to iterate through an associative array. -->
    </main>
</body>

</html>