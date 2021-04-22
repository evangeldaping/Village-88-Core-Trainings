<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
</head>
<body>
    <!-- An API does not have to return JSON. Let's create a URL that will return a partial (HTML) as a response instead of JSON. This will allow us to not go through the process of dynamically generating our HTML with JavaScript. This process can be very error-prone sometimes and we recommend for the next two assignments to use URLs that return HTML instead of JSON. First let's modify our Quotes controller to have another instance method called index_html that will return a partial located inside of partials/quotes. Now if other developers want the JSON format of our data they can request /quotes/index_json and if other developers want the HTML format instead, they can request /quotes/index_html.

    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Quotes extends CI_Controller {
    public function index_json()
    {
        $this->load->model("Quote");
        $data["quotes"] = $this->Quote->all();
        echo json_encode($data);
    }
    public function index_html()
    {
        $this->load->model("Quote");
        $data["quotes"] = $this->Quote->all();
        $this->load->view("partials/quotes", $data);
    }
    public function index()
    {
        $this->load->view('index');
    }
    }
    The partials/quotes view will look something like this:

    <?php
    foreach($quotes as $quote)
    {  ?>
        <div class="quote">
            <h1><?= $quote['author'] ?></h1>
            <p><?= $quote['quote'] ?></p>
        </div>
    <?php
    }  ?>
    And we will be able to use this API in our index.php in a similar way we used our JSON API.

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Quotes</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script>
        $(document).ready(function(){
            $('#get_all_button').click(function(){
            $.get('/quotes/index_html', function(res) {
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
    copy
    When we do $this->load->view, we are printing out whatever is contained in that file. Since what we echo back will have HTML elements such as <body>, the browser can then use that information to render the page appropriately. -->
</body>
</html>