<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <style>
        * {
            border-collapse: collapse;
            font-family: monospace;
            font-size: 1.1em;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
            width: 40px;
            height: 40px;
        }

        th,
        td.bold {
            font-weight: bold;
            font-size: 1.3em;
        }

        tr.gray {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php
                echo "<th></th>";
                for ($i = 1; $i < 10; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i < 10; $i++) {
                if ($i % 2 == 1) {
                    echo "<tr class = 'gray'>";
                } else {
                    echo "<tr>";
                }
                echo "<td class='bold'>" . $i . "</td>";
                for ($j = 1; $j < 10; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>