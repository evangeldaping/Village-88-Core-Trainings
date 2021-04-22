<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $.get('http://localhost/Create_without_Ajax/quotes/index_html', function(res) {
                $('#quotes').html(res);
            });
        });
    </script>
    <style>
        form {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <form action="http://localhost/Create_without_Ajax/quotes/create" method="post">
        <p>
            <label>Author: </label>
            <input type="text" name="author">
        </p>
        <p>
            <label>Quote: </label>
            <textarea name="quote"></textarea>
        </p>
        <input type="submit" value="Add Quote">
    </form>
    <div id="quotes">
    </div>
</body>

</html>