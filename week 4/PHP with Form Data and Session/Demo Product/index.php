<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Demo</title>
</head>

<body>
    <h1>Product Demo</h1>

    <form action="process.php" method="post">
        Your Name: <input type="text" name="name" /> <br />
        Email: <input type="text" name="email" /> <br />
        Purchasing:
        <select name="item">
            <option value="CodingDojo_Shirt">CodingDojo_Shirt</option>
            <option value="CodingDojo_Cup">CodingDojo_Cup</option>
        </select>
        Quantity: <input type="text" name="quantity"> <br />
        <input type="submit" value="Purchase" />
    </form>
</body>

</html>