<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun with Controllers</title>
</head>

<body>
    <!-- Fun with Controllers
    Let's get to know our Controllers a little better. We are going to go over the difference between redirect and calling a controller method by predicting the output in various situations.

    Example 1: Echoing before Redirecting
    Here is our view file

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Fun With Controllers</title>
    </head>
    <body>
        <a href="/welcomes/show">Click Me</a>
    </body>
    </html>
    And here is our controller:

    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Welcomes extends CI_Controller {
    public function index()
    {
        $this->load->view('welcomes/index');
    }
    public function show()
    {
        echo "2";
        echo "25";
        redirect("http://www.cnn.com");
    }
    }
    //What do you think the output is going to be when we click on the 'Click Me' link? It will echo out "225" and throw an error saying "Cannot modify header information." This is because we can't echo out things before we do a redirect.

    //Example 2: Redirecting
    //Let's change our controller to the following. What do you think the output would be once we click the Click Me anchor tag that will execute the show instance method in the Welcomes controller?

    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Welcomes extends CI_Controller {
    public function index()
    {
        $this->load->view('welcomes/index');
    }
    public function show()
    {
        redirect("/welcomes/hello");
    }
    public function hello()
    {
        echo "hello";
    }
    }
    //The show instance method in the Welcomes controller will be executed first. During the execution, we redirect to "/welcomes/hello" which triggers a whole new request. Our request will go to the routes file, which will then determine from the given route and our default controller that the hello instance method in the Welcomes controller should be run. The hello() method gets run which echoes out "hello" and that is the output we will see in the browser. Notice on which route "hello" is being echoed out. The location is /welcomes/hello because we redirected to that route.

    //Example 3: Calling an instance method
    //Now let's change our previous code to the following. What would be the output?

    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Welcomes extends CI_Controller {
    public function index()
    {
        $this->load->view('welcomes/index');
    }
    public function show()
    {
        $this->hello();
    }
    public function hello()
    {
        echo "hello";
    }
    }
    //The output would be the same as before, but there is one crucial difference between this example and the previous example. In the previous example, we used redirect which creates a whole new HTTP request. This means that the whole cycle starts over again with it going to index.php then routes to determine which controller is responsible and which method should be run. On the other hand when we are calling an instance method within our instance method, we do not start a whole new request. It just jumps directly to the function and executes it. This explains why the route that shows "hello" in this case is /welcomes/show because /welcomes/show was what we requested and we didn't make a new request so this is our final destination. -->
</body>

</html>