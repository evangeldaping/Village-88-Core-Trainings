<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#get_all_button').click(function() {
                $.get('http://localhost/HTML/quotes/index_html', function(res) {
                    $('#quotes').html(res);
                });
            });
        });
    </script>
</head>

<body>
    <button id="get_all_button">Get All Quotes</button>
    <div id="quotes">
    </div>
</body>

</html>