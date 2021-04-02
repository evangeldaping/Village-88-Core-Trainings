<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Input</title>
</head>

<body>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="register">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Register">
    </form>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="login">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>

</body>

</html>