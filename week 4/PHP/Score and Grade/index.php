<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score and Grade</title>
</head>

<body>
    <main>
        <?php
        $score = rand(50, 100);

        function grade($score)
        {
            if ($score >= 50 && $score < 70) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is D.<h2/>";
            } else if ($score >= 70 && $score < 80) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is C.<h2/>";
            } else if ($score > 80 && $score < 90) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is B.<h2/>";
            } else if ($score > 90 && $score <= 100) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is A.<h2/>";
            }
            if ($score == 80) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is B.<h2/>";
            }
            if ($score == 90) {
                echo "<h1>Your Score:" . $score . '/100' . "<h1/>";
                echo "<h2>Your grade is A.<h2/>";
            }
        }

        grade($score);

        $count = 1;
        for ($i = 1; $i <= 100; $i++) {
            echo $count++;
            grade($score);
        }
        ?>
    </main>
</body>

</html>