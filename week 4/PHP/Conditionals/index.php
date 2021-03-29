<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>

<body>
    <main>
        <!-- We use conditionals in conjunction with operators to control the flow of the program. Imagine yourself being in a traffic, you could use if and else statements to describe it. We use all sorts of control flow in our everyday life to determine what it is we are doing based on a certain condition.

        If(there is construction)
        {
        use detour
        }
        else
        {
        take the normal route
        }

        How does this translate into something useful for PHP developers? Well consider this:

        Someone visits your website and you want to ask for their name, but only if it's their first time coming to your site. With an if statement, this is easy! Simply have a conditional statement to check, "Is this your first time visiting our website?". If the condition is true, then take them to the "Please input your name" page, if it's not their first time then let them view the website as normal because you have already asked for their name in the past.

        Two things you need to remember when dealing with conditions in programming:

        A condition always returns true or false
        As long as something has a value (Which almost everything in PHP does) - can be used in a condition.
        Let's start with a basic example whether $subject equals Math. To determine how our condition is evaluated, we will use var_dump():

        $subject = "English";
        var_dump($subject == 'Math');
        The code above can be translated to English as: Does the $subject variable equal Math? In this case, var_dump() will print false because the $subject is equal to English. PHP was able to know this by simply checking whether the value on the left is identical to the value on the right.

        If-else
        $subject = "English";
        if($subject == 'Math') {
        echo "The subject is Math";
        } else {
        echo "The subject is English";
        }
        The code above is bad because we are assuming that if the $subject is not Math, then it is English! There are dozens of subjects that the $subject variable may contain. There must be a better way!

        PHP has 4 basic conditional statements:

        if statement - executes a code if a specified condition is true.
        if...else statement - executes some code if the condition is true and another code if the condition is false.
        if...elseif...else statement - specifies a new set of conditions to test if the first condition is false.
        switch statement - used to check a variable against many different values. The switch statement can usually be rewritten as multiple if statements.
        switch-case

        Sometimes when you have a large amount of if-else statements, you can save some time and code by using a Switch case statement instead. Examine the examples below and take note of how nicely multiple if-else conditionals are converted into a switch case. Get familiar with the syntax of a switch case so you know how to read them, but remember: There's nothing a switch-case can do that you can't do with regular if-else statements!

        Below is an example of a switch statement. The switch evaluates the value of $first_name, and then assign $role on its value.

        $first_name = 'Oliver';
        $roles = array('guest', 'member', 'admin');
        $role = 0; // The key which associates with the $roles array
        switch($first_name)
        {
        case 'Tom':
        $role = 1;
        break;
        case 'Severus':
        $role = 1;
        break;
        case 'Oliver':
        $role = 2;
        break;
        }
        echo "Hello $first_name ! Your role is $roles[$role]";
        The code above should output:

        Hello Oliver ! Your role is admin
        In the above example, we see that case 'Tom' and case 'Severus' do the same thing, assigning $role = 1, so we can rewrite the above as:

        switch($first_name)
        {
        case 'Tom':
        case 'Severus':
        $role = 1;
        break;
        case 'Oliver':
        $role = 2;
        break;
        }
        And finally, you can use default as the catchall case, similar to how you would use an else at the end of a series of if statements. If none of the cases match the switch conditional expression, then default will be executed.

        switch($first_name)
        {
        case 'Tom':
        case 'Severus':
        $role = 1;
        break;
        case 'Oliver':
        $role = 2;
        break;
        default:
        $role = 0;
        break;
        }
        Use this table below as a reference for the different conditional operators you can leverage.

        Symbol Meaning Type Example
        == is equal to comparison $x == $y
        != is not equal to comparison $x != $y
        < less than comparison $x < $y> greater than comparison $x > $y
            <= less than or equal to comparison $x <=$y>= greater than
                or equal to comparison $x >= $y
                ! not logical !$x
                &&
                AND and logical $x && $y
                $x AND $y
                ||
                OR or logical $x || $y
                $x OR $y -->
    </main>
</body>

</html>

<?php
$subject = "English";
var_dump($subject == 'Math');

$subject1 = "English";
if ($subject1 == 'Math') {
    echo "The subject is Math";
} else {
    echo "The subject is English";
}

$first_name = 'Oliver';
$roles = array('guest', 'member', 'admin');
$role = 0; // The key which associates with the $roles array
switch ($first_name) {
    case 'Tom':
        $role = 1;
        break;
    case 'Severus':
        $role = 1;
        break;
    case 'Oliver':
        $role = 2;
        break;
}
echo "Hello $first_name ! Your role is $roles[$role]";

switch ($first_name) {
    case 'Tom':
    case 'Severus':
        $role = 1;
        break;
    case 'Oliver':
        $role = 2;
        break;
}

switch ($first_name) {
    case 'Tom':
    case 'Severus':
        $role = 1;
        break;
    case 'Oliver':
        $role = 2;
        break;
    default:
        $role = 0;
        break;
}


?>