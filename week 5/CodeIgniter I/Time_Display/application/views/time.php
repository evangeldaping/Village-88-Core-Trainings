<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Times Display - Coding Dojo Assignment</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>The Current Time and Date:</h1>

    <div id="current-time">

        <p><?php echo $date_time['month_day_year']; ?><br />
        <?php echo $date_time['time_up_to_12']; ?></p>

    </div>


</div>

</body>
</html>