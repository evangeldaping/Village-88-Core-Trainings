<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
        <!-- We will be creating a quotes application using the quotes API that we will create. We will also be creating a series of links of which any developer may use to contribute to our quotes database. For example, Twitter API has a series of links that developers can use to access the Twitter database of tweets. It's imperative that you follow each part of the application as it's being presented, because we will continue to modify our application to introduce different strategies in creating your API. First we will create a set of links where if developers request a particular URL, they will get back a response that would be JSON data holding our quotes. After we do this, we will modify our API so that it returns a partial (HTML) instead so that we don't have to dynamically create our HTML using the JSON data.

        APIs are usually a web URL where you can pass information (either in the URL by the GET method or by posting a form to the URL) where the server returns JSON (or other similar data format). Let's say we have a great database of quotes, and we want to create an API where other developers, including ourselves, can access this great resource to make applications. Let's create our own API and use it to build an application that might look something like this. Go ahead and build the HTML/CSS using this picture. Yes, type out all of the quotes as well. Building our HTML/CSS first will help us visualize what we need to do with our data.



        Now, let's build our API. Download  quote_model.sql and run it in your workbench. This will create a schema called 'myownapi' and inside it, we will have a table 'quotes' with columns 'id', 'quote', and 'author.' The table should already be pre-populated with great quotes. Now that we have a great database of quotes, how can we create an API that other developers (including us) can use in our future projects?

        First, let's connect our database with our CI application:

        if(ENVIRONMENT == 'production')
        {
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        $db['default']['password'] = '';
        $db['default']['database'] = '';
        }
        else
        {
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        $db['default']['password'] = 'root';
        $db['default']['database'] = 'myownapi';
        }
        Then let's set our default controller to quotes:

        $route['default_controller'] = "quotes";
        $route['404_override'] = '';
        //end of routes.php
        At this point, we will replace the main controller with a quotes controller.  This controller will have an instance method index() that loads the index view file, as well as an instance method index_json() that echoes the JSON encoding of all quotes in our database. Note: we have not created our model or implemented the all() instance method yet. After visualizing the behavior we want, now we can construct our model.

        <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Quotes extends CI_Controller {
        public function index_json()
        {
            $this->load->model("Quote");
            $data = array();
            $data["quotes"] = $this->Quote->all();
            echo json_encode($data);
        }
        public function index()
        {
            $this->load->view('index');
        }
        }
        Let's create the Quote model we are going to use with one method called all() that will return all the quotes in our quotes table:

        <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Quote extends CI_Model {
        public function all()
        {
            return $this->db->query("SELECT * FROM quotes")->result_array();
        }
        }
        You just created your own API that either you or other developers can use! You can now go to http://localhost:8888/quotes/index_json to access the quotes database through a URL. If you decide to deploy your API with the domain name www.coolapi.com, developers will be able to access it with the URL http://www.coolapi.com/quotes/index_json.



        Using Our API
        Let's have our index method in our Quotes controller render the view named 'index' which will just have a button that says 'Get All Quotes.' Once this button is clicked, we will make an AJAX request to /quotes/index_json to get a response back in JSON. We will be using AJAX because we don't want to refresh the whole page; we want to stay on the sample page while updating only the sections that have changed. Then we are going to build our HTML string with the JSON data and replace whatever is inside the <div id="quotes"></div> with our HTML string which will be interpreted as HTML. We want to wrap author's names in h1 tags and wrap the quotes in p tags. We can do the following with this code:

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Quotes</title>
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script>
            $(document).ready(function(){
                $('#get_all_button').click(function(){
                $.get('/quotes/index_json', function(res) {
                    var htmlStr = "";
                    for(var i = 0; i < res['quotes'].length; i++) {
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
        </html> -->
</body>
</html>