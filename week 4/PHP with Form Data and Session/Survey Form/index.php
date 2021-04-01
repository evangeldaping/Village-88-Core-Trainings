<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

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
            width: 500px;
            margin: 0 auto;
        }

        textarea {
            resize: vertical;
            width: 495px;
        }
    </style>

</head>

<body>
    <div class="container">
        <form action="result.php" method="post">
            <label for="yName">Your Name:</label>
            <input type="text" name="your_name">
            <label for="dLocation">Dojo Location:</label>
            <select id="location" name="dojo_location">
                <option>Mountain View</option>
                <option>San Fernando</option>
                <option>Baguio City</option>
                <option>La Trinidad</option>
            </select>
            <label for="fLanguage">Favorite Language:</label>
            <select id="language" name="favorite_language">
                <option>Javascript</option>
                <option>PHP</option>
                <option>Java</option>
                <option>Python</option>
            </select>
            <label for="comment">Comment (optional)</label> <br><br>
            <textarea name="comment" rows="10" cols="30">
			</textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>