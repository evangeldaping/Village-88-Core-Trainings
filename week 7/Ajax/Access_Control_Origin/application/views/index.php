<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acess Control Origin</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').submit(function() {
                // load up any gif you want, this will be shown while user is waiting for response
                $('#results').html("<img src='assets/loading.gif'>");
                $.post($(this).attr('action'), $(this).serialize(), function(res) {
                    var html_string = "";
                    if (res.results.length !== 0) {
                        html_string = "<video controls src='" + res.results[0].previewUrl + "'><\/video>";
                    } else {
                        html_string = "Not Found";
                    }
                }, 'json');
                // don't forget, without it the page will refresh
                return false;
            });
        });
    </script>
</head>

<body>
    <form action="/main/get_movie" method="post">
        <label for="user_input">Enter Artist's Name:</label>
        <input id="user_input" name="user_input" type="search">
        <input type="submit" value="search">
    </form>
</body>

</html>