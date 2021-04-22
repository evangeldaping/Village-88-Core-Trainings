<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajax Posts</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $.get('http://localhost/AjaxPosts/notes/index_html', function(res) {
                $('#notes').html(res);
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
    <div id="notes">
    </div>
    <form action="http://localhost/AjaxPosts/notes/create" method="post">
        <p>
            <label>Add a note: </label>
            <textarea name="description"></textarea>
        </p>
        <input type="submit" value="Post It!">
    </form>
</body>

</html>