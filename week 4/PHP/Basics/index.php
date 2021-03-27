<?php
// This is a comment for my php page
// echo 'Top of file'
echo 'Top file'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<style>
    .header {
        color: red;
    }
</style>

<body>
    <h1 class="<?php echo 'header'; ?>">
        <?php
        echo 'Hello Coding Dojo Students!'
        ?>
    </h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $name; ?></td>
            </tr>
        </tbody>
    </table>
    <h1 class="<?php echo $class_name; ?>"> Hello World! </h1>
    // PHP can be embedded inside HTML tags to either dynamically add an HTML attribute or HTML attribute value!

    <h1> Hello, <?php echo $name; ?> </h1>
    // PHP can dynamically change content and can be embedded in between HTML tags.

    <?php echo "<h1> Hello, World! </h1>"; ?>
    //PHP can even echo out HTML tags and it would still render out as HTML nicely. However, we do not recommend this. Ideally, you'll echo out content, not tags. It's both hard to manage and difficult to read.

</body>

</html>

<?php
echo 'Bottom file'
/*
for multiline comments
*/
?>