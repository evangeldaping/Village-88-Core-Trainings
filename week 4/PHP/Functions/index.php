<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiples by 5</title>
</head>

<body>
    <main>
        <?php
        echo "<h1>To Do: Multiplied by 5</h1>" . "<br>";
        echo '<strong>Part 1:<strong/>
		<p>Create a function called \'multiply()\' that reads each value in an array (e.g. $A = array(2, 4, 10, 16)) 
			and returns a new array where each value has been multiplied by 5.
		</p>' . "<br>";
        $A = array(2, 4, 10, 16);
        function multiply1($A)
        {
            foreach ($A as $value) {
                $value *= 5;
                echo $value . '<br>';
            }
        }

        $B = multiply1($A);
        var_dump($B); // [10,20,50,80]

        echo '<strong>Part 2:<strong/>
		<p>Modify this function so that you can pass an additional argument to this function. The function should multiply each value in the array by this additional argument (call this additional argument \'factor\' inside the function). 
		For example say $A = array(2,4,10,16). When you say...this should dump B which contains [4, 8, 20, 32 ].
		</p>' . "<br>";
        function multiply2($A, $multiplier)
        {
            foreach ($A as $value) {
                $value *= $multiplier;
                echo $value . '<br>';
            }
        }
        $B2 = multiply2($A, 2);
        var_dump($B2); // [4, 8, 20, 32 ]

        ?>
    </main>
</body>

</html>