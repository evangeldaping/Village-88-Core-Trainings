<?php
require("new-connection.php");
// var_dump($connection);

//use this if you want to show multiple records
// $query = "SELECT * FROM people";
// $people = fetch($query);
// var_dump($people);

//use this if you want to show specific record
// $query = "SELECT * FROM people WHERE id = 1";
// $person = mysqli_fetch_assoc(mysqli_query($connection, $query));
// var_dump(mysqli_fetch_assoc($person));

$query = "INSERT INTO people(first_name, last_name)
		  VALUES('Evangel','Daping')";
$insertPerson = run_mysql_query($query);
var_dump($insertPerson);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    //use this if you want to show all records
    // foreach($people as $person) {
    // echo $person['first_name'] . "<br>";
    // }


    //use this if you want to show specific record
    // echo $person['first_name'] . $person['last_name'];
    ?>
</body>

</html>