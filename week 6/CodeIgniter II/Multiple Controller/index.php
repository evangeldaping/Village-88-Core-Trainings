<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulitple Controller</title>
</head>

<body>
    <!-- Using Multiple Controllers and Models
    On the previous assignments, you may have used one controller and model for all of your back-end code. As your projects get larger, you'll find that code will become difficult to organize and navigate when using only one controller/model. Instead, we can modularize our code by breaking it up into multiple files.

    The general rule-of-thumb is one controller and model for each table in your database. For example, if you are making a website that needs to keep track of users, products, and orders, you may have a controller and model for each. (A users controller and user model, products controller and product model, etc.)

    Certain features or aspects of your app could also have their own controllers/models, such as an admin controller. You do not need to have a controller and model for every feature or piece of your database.

    Having multiple controllers and models makes it much easier for you (and others!) to sort through your code. Your method names can now be more short and concise... and RESTful!

    To navigate from one controller to another, simply redirect to a route that points to the desired controller/method.

    There are multiple options for loading your models:

    1. Load the model just prior to use:

    $this->load->model("product");
    $this->product->create($post);
    2. Load the model in the controller's __construct() method:

    class Products extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model('product');
    }
    }
    3. Load the model in config/autoload.php:

    $autoload['model'] = array('user', 'product', 'order');
    Use multiple controllers and models on the rest of your assignments! -->
</body>

</html>