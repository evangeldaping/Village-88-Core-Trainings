<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTML Table</title>
    <style>
        * {
            border-collapse: collapse;
            font-family: monospace;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }

        th,
        td.bold {
            font-weight: bold;
            font-size: 1.2em;
        }

        tr.reverse {
            background-color: black;
            color: white;
        }

        tr.reverse td {
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <?php
    $users = array(
        array('first_name' => 'Michael', 'last_name' => ' Choi '),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => ' Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'May', 'last_name' => 'Miller-Ricci'),
        array('first_name' => 'Harry', 'last_name' => 'Potter'),
        array('first_name' => 'Ron', 'last_name' => 'Weasley'),
        array('first_name' => 'Hermione', 'last_name' => 'Granger'),
        array('first_name' => 'Ginny', 'last_name' => 'Weasley'),
        array('first_name' => 'Cho', 'last_name' => 'Chang'),
        array('first_name' => 'Cedric', 'last_name' => 'Diggory'),
        array('first_name' => 'Draco', 'last_name' => 'Malfoy'),
        array('first_name' => 'Albus', 'last_name' => 'Dumbledore'),
        array('first_name' => 'Hedwig', 'last_name' => 'the Owl'),
    );
    ?>

    <table>
        <thead>
            <tr>
                <th>User #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Full Name in Uppercase</th>
                <th>Length of Name</th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($users); $i++) {
            if (($i + 1) % 5 == 0) {
                echo "<tr class='reverse'>";
            } else {
                echo "<tr>";
            }
            $first_name = $users[$i]['first_name'];
            $last_name = $users[$i]['last_name'];
            $full_name = $first_name . " " . $last_name;
            echo "<td class='bold'>" . ($i + 1) . "</td><td>" .
                $first_name . "</td><td>" .
                $last_name . "</td><td>" .
                $full_name . "</td><td>" .
                strtoupper($full_name) . "</td><td>" .
                strlen((trim($first_name)) . (trim($last_name))) . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>