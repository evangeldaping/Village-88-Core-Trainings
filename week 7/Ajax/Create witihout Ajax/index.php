Instead of having our users click on a button to get all quotes, let's have them display as soon as the page loads. So instead of waiting for the clicking of a button event, we are just going to make an AJAX call with $.get as soon as the document is ready and replace our HTML inside of div with the id of quotes.

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function(){
        $.get('/quotes/index_html', function(res) {
          $('#quotes').html(res);
        });
      });
    </script>
  </head>
  <body>
    <div id="quotes">
    </div>
  </body>
</html>
<!-- Let's make our API more versatile. We can let developers post information to the URL /quotes/create by using a form if other people want to add on to our great quotes selection. The users of our API will have to post a form with information about the author and his or her quote to successfully save their entry into our database. For example, if we include a form on our page that posts to the URL "quotes/create" with inputs author and quote, the form submission should update the quotes database. We can modify our main page like this: -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function(){
        $.get('/quotes/index_html', function(res) {
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
    <form action="/quotes/create" method="post">
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
We will have to modify our controller and model respectively.

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quotes extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Quote");
  }
  public function index_json()
  {
    $data["quotes"] = $this->Quote->all();
    echo json_encode($data);
  }
  public function index_html()
  {
    $data["quotes"] = $this->Quote->all();
    $this->load->view("partials/quotes", $data);
  }
  public function create()
  {
    $new_quote = $this->input->post();
    $this->Quote->create($new_quote);
    redirect("/");
  }
  public function index()
  {
    $this->load->view('index');
  }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quote extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM quotes")->result_array();
  }
  public function create($new_quote)
  {
    $query = "INSERT INTO quotes (author, quote) VALUES (?, ?)";
    $values = array($new_quote['author'], $new_quote['quote']);
    return $this->db->query($query, $values);
  }
}
//Now that we have verified that this URL will work without Ajax, let's build it with Ajax. Whenever we are working with Ajax, it is very helpful to build without it first and then turn it on. Once we know that our API is acting as expected, then can we turn on Ajax. One problem at a time. Once we enter in a new quote, we just need to have the part of the page with the quotes to refresh instead of the whole page refreshing. Separate your page into different chunks and update entire chunks every time it gets updated. This will help you write code that is easy to read and maintain.