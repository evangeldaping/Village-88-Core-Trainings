<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get array values</title>
</head>

<body>
    <main>
        <?php
        $arr = array(2, 3, 'hello');
        function print_lists($arr)
        {
            $html = '<ul>';
            foreach ($arr as $item) {
                if (is_array($item)) {
                    $html = print_lists($item); // <<< here is the recursion
                } else {
                    $html .= '<li>' . $item . '</li>';
                }
            }
            $html .= '</ul>';
            return $html;
        }
        echo (print_lists($arr));
        ?>
    </main>
</body>

</html>