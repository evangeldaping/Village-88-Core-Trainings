<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Throw</title>
</head>

<body>
    <main>
        <?php
        $flips = 0;
        $heads = 1;
        $tails = 0;
        while ($flips < 5000) {
            $coin = rand(1, 2);
            $flips += 1;
            if ($coin == 1) {
                echo "Attempt #" . $flips . ": Throwing a coin... It's a head! ... Got " . $heads . " head(s) so far and " . $tails . "tail(s) so far";
                echo '<br>';
                $heads += 1;
            } else if ($coin == 2) {
                echo "Attempt #" . $flips . ": Throwing a coin... It's a tail! ... Got " . $heads . " head(s) so far and " . $tails . "tail(s) so far";
                echo '<br>';
                $tails += 1;
            }
        }
        ?>
    </main>
</body>

</html>