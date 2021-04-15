<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Fun with Controllers</title>
</head>

<body>
    <!-- Why Certain Routes Should Not Render a View

    There are certain controller methods where you shouldn't load the view. For example, let's say a controller is both responsible for creating an order and also displaying the success page. If we have this on the same controller then whenever a user wants to load that page, something is going to get created in the database. If a user were to click refresh because the Internet was being slow, the order will be made twice. This is why controller methods that are responsible for updating the database should not be responsible for loading the view. They should do something with the database and redirect to another route where no database changes are made and only the view is loaded. -->
</body>

</html>