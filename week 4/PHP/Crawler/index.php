<?php
include_once('simple_form_dom.php');
$html = new simple_html_dom();
if (isset($_POST['crawl'])) {
    $crawl = $_POST['target'];
    $find = "http://";
    if (strpos($crawl, $find) !== false) {
        $html->load_file($crawl);
        foreach ($html->find('a') as $link) {
            if (strpos($link, "$crawl") !== false) {
                echo "<p class='links'>" . $link->href . "</p>";
            } else if (strpos($link, "http://") !== false || strpos($link, "https://") !== false) {
                echo "<p class='links'>" . $link->href . "</p>";
            } else {
                echo "<p class='links'>" . "$crawl/" . $link->href . "</p>";
            }
        }
    } else {
        echo "Invalid URL";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Web crawler</title>
    <style>
        @charset "utf-8";
        /* CSS Document */

        .input {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid #848484;
            width: 70%;
            margin: auto;
            height: 40px;
            font-size: 100%;
            font-family: "Comic Sans MS", cursive, sans-serif, Arial;
            box-sizing: border-box;
            outline: none;
            background: #FAFAFA;
        }

        input[type=text]:focus {
            border-bottom: 1px solid #FE9A2E;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 30px 15px 30px;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .links {
            text-align: Center;
            font-family: arial;
            color: #00BFFF;
        }
    </style>
</head>

<body>
    <form method="post" action="index.php">
        <p style="text-align:center;"><input type="text" name="target" class="input" placeholder="Example: http://google.com" /></p>
        <p style="text-align:center;"><input type="submit" name="crawl" class="button" value="Crawl !" /></p>
    </form>
</body>

</html>