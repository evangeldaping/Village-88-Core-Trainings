<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllers</title>
</head>

<body>
    <!-- As discussed in the big picture tab, once an HTTP request is made, all requests are passed to index.php first. This file loads all the libraries, system files, and also loads the routing file (application/config/routes.php). This routing file then determines based on the URL which controller and which method in that controller class should handle the URL request.

    The segments in the URL, following the Model-View-Controller approach, usually represent:

    example.com/class/function/ID
    
    1. The first segment represents the controller class that should be invoked.
    2. The second segment represents the class function, or method, that should be called.
    3. The third and any additional segment, represent the ID and any variables that will be passed to the controller (you can pass unlimited additional segments/arguments as long as they are separated by /).
    Remember that now that we're using an MVC framework, the URL does NOT mean anything about which file should be executed/loaded by the interpreter. In fact, since all URL requests go to index.php now, the URL is now just one piece of information that is passed to the routing file, for it to determine which controller/method should handle that URL request. This is one of the key concepts of using an MVC framework.

    Controllers

    Controllers are stored in application/controllers/ folder (file name should be the same as the class name). To help you start with CI, it has a default controller class Welcome which is located in application/controllers/welcome.php

    <?php
    class Welcome extends CI_Controller
    {
        public function index()
        {
            $this->load->view('welcome_message');
        }
    }
    ?>
    When someone accesses localhost/index.php/welcome/index, the routing file will look for /application/controllers/welcome.php and if found, load this controller file and execute the index method in that controller. Similarly, if you were to go to localhost/index.php/dojo/ninjas, the routing file will look for /application/controllers/dojo.php and if found, load this controller and execute the ninjas method in that controller. Make sure you understand this key concept before moving on any further.

    Each controller you create is a new class that extends from the CI_Controller class included in CodeIgniter. Your controller class will inherit properties and methods from this default class, such as the __construct() method.

    Removing index.php from our URL request
    Since we modified .htaccess file to remove "index.php" in the URL, we can directly visit the same page with:

    localhost/welcome/index or localhost/dojo/ninjas
    Reminder: If you're a PC User, make sure that Apache's rewrite_module is enabled for .htaccess to take effect. For MAMP, this should already be enabled by default.

    What would happen if you just visited localhost/welcome and you did NOT specify the name of the method for the routing file to call? Well. By default, CodeIgniter's routing file will open that controller and see if you have a method called 'index'. If 'index' method is found, then it runs that method. So you could run the index method by just calling localhost/name_of_the_controller.

    Methods and loading a view file
    Inside the controller, we can have multiple methods to do different tasks within that controller. Common tasks in the controller's method include

    handling post data
    handling session data
    adding validations
    generating json data (for Ajax)
    loading appropriate view files (and passing data to the view files)
    passing or retrieving information from the database by calling 'models'
    To have the method render a view file in /application/views/hello.php (view file in CodeIgniter is basically an HTML file with embedded PHP code), you do something like below:

    class Dojos extends CI_Controller {
    public function ninjas()
    {
    $this->load->view('hello');
    }
    }
    When someone visits localhost/dojos/ninjas, this should now display the contents in /application/views/hello.php. Note that the URL alone does not determine which view file gets called. In other words, although our URL is /dojos/ninjas, we had it so that was loading up hello.php!
    Sometimes developers like to create a folder each for the view files used by each controller. For example, say that your web app had 5 controllers: dojos, codings, blogs, posts, and comments. Let's say that each of these controllers had 5 methods and each method in the controller had a unique view file it called. Having 25 view files all in /application/views could get a little confusing and it's often done where developers create a folder named after the controller in /application/views and store the view files for that controller there. For example, you could create a folder /application/views/dojos and put your hello.php there. You would then adjust your code so that it says...

    $this->load->view('dojos/hello');
    Although, for simple web apps, this may not be necessary, it's still good to know how developers create view files in general. In fact, some frameworks like Rails, this is the only way to do things. :)
    In the demo videos (Counter and Number Game), we'll show you how we would start a new CodeIgniter web application from scratch, starting from installation all the way to developing the appropriate controller and methods to handle the different URL requests.

    Video Outline:

    1. installation (.htaccess file, folder structures, key point is that you should download and install CI for each new project you'll be creating, in this case, install CI for each assignment you will be working on)
    2. brief demo on routing file, autoload.php, database.php and other config files
    3. brief demo on the controller, method, and a view file
    show a final wireframe of what we would like to create
    outline the steps to create this.
    Passing arguments to methods
    You can pass arguments to the method through the URL, For example, say that our URL is now

    localhost/dojos/ninjas/red/35
    We can modify our program so that the ninjas method is like below:
    public function ninjas($color, $id)
    {
    echo "Color: ". $color ." - ID: ". $id;
    $this->load->view('hello');
    }
    Reminder: Only public functions can be accessed in the URL and the number of parameters allowed is unlimited.

    Redirect
    Sometimes you'll need to have the server redirect to another URL. For example, localhost/posts/create was the URL to handle some data submission. Once this is done, you wanted the client to be redirected to /posts/show. To do this, you would have your controller look like this:

    public function create()
    {
    //some logic that may do some form validations, setting sessions, etc
    redirect('/posts/show');
    }
    Redirect is one of the methods available in the URL helper, which we automatically had CodeIgniter load by default. Always put a slash ('/') before the route, as this starts the request from the base path (where we want it to).

    If you ever experience issues with your redirect, check out your config.php file in the config folder. Make sure in your config.php file you have the following:

    $config['base_url'] = 'http://localhost:8888/';
    $config['index_page'] = '';
    Routes
    Defining a Default Controller
    The default controller for a CI application can be configured in application/config/routes.php. Default Controller is automatically loaded when a user visits localhost or your web domain name. To set your default controller, modify your application/config/routes.php to state
    $route['default_controller'] = "welcome";
    When the default controller gets called when you visit say localhost/, it would look up for the default controller and for index method. If the controller can't be found or if the index method can't be found, CodeIgniter will generate an error for you.

    Setting your own routing rules
    We can also set custom rules. Let's say that when people go to localhost/awesome, we wanted the dojos controller and the ninja method to handle that URL request. We could set these custom routing rules by modifying application/config/routes.php to say...
    $route['awesome'] = "dojos/ninja";
    The important lesson is that just by looking at the URL structure, you can't be completely convinced which controller would be handling that request as we can always set custom routing rules for any URL type! In other words, don't always assume that the first word that appears after the domain name is the name of the controller that would be handling that HTTP request!

    FAQ
    (IMPORTANT) How many controllers would I need to create? What are the best practices?
    When you're building something very simple, you could put everything in a single controller. As soon as your application gets pretty complicated, it helps to create multiple controllers. For example, say you're building an application that needs to serve the HTTP request for 5 URL's. Would it make sense to have 5 different controllers to handle each URL request? Probably not. What if you had about 50 URL requests. Would it make sense for a single controller say Main Controller to handle all 50 URL requests? Probably not. As a rule of thumb, you want to make sure that each controller has less than 10-15 methods. If you have a complex web application, you could say "Okay.I need to group different functionalities of my web application into different buckets." You may then group certain functionalities to be handled by a Users controller and have the Users controller handle the URL requests that deal with User information. You could create a Session controller that handles the login/log off features. You could also create say an Email controller that handles all the URL requests related to emails (receiving, sending emails, etc).

    Really there's not just one way to build things. You could have, again, hundreds of methods in a single controller but when you have so many functionalities and many developers working on the project, it's always a good idea to group similar functionalities into different controllers so that it can be easily maintained and updated. -->
</body>

</html>