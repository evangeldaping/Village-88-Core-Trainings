<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States and Array</title>
</head>

<body>
    <main>
        <form>
            <select>
                <option selected="selected">Choose one</option>
                <?php
                // Using for loop
                $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

                for ($i = 0; $i < count($states); $i++) {
                    echo "<option value='strtolower($states[$i])'>$states[$i]</option>";
                }
                ?>
            </select>
            <select>
                <option selected="selected">Choose one</option>
                <?php
                // Using foreach
                foreach ($states as $item) {
                    echo "<option value='strtolower($item)'>$item</option>";
                }
                ?>
            </select>
            <select>
                <option selected="selected">Choose one</option>
                <?php
                $states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

                // Using foreach
                foreach ($states as $item) {
                    echo "<option value='strtolower($item)'>$item</option>";
                }
                ?>
            </select>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>