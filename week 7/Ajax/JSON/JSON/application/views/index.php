<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#get_all_button').click(function() {
                $.get('http://localhost/JSON/quotes/index_json', function(res) {
                    var htmlStr = "";
                    for (var i = 0; i < res['quotes'].length; i++) {
                        htmlStr += "<div class='quote'>";
                        htmlStr += "<h1>" + res.quotes[i].author + "</h1>";
                        htmlStr += "<p>" + res.quotes[i].quote + "</p>";
                        htmlStr += "</div>";
                    }
                    $('#quotes').html(htmlStr);
                }, 'json');
            });
        });
    </script>
</head>

<body>
    <h1>Quotsy</h1>
    <button id="get_all_button">Get All Quotes</button>
    <div id="quotes">
    </div>
</body>

</html>