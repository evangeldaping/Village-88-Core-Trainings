<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form - Result</title>
    <style>
        input[type=submit] {
            width: 100%;
            background-color: #2B78E4;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 10px 10px;
        }

        input[type=submit]:hover {
            background-color: blue;
            color: white;
        }

        div.container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0 auto;
            width: 500px;
            margin: 0 auto;
        }

        h2 {
            text-decoration: underline;
        }

        table.result {
            table-layout: auto;
            width: 85%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Submitted Information</h2>
        <form action="index.php"">
			<table class=" result">
            <tr>
                <td>Name:</td>
                <td><?php echo $_POST['your_name']; ?></td>
            </tr>
            <tr>
                <td>Dojo Location:</td>
                <td><?php echo $_POST['dojo_location']; ?></td>
            </tr>
            <tr>
                <td>Favorite Language:</td>
                <td><?php echo $_POST['favorite_language']; ?></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td><?php echo $_POST['comment']; ?></td>
            </tr>
            </table>
            <input type="submit" value="Go back">
        </form>
    </div>
</body>

</html>