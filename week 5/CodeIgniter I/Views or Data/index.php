<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views/Data</title>
</head>

<body>
    <!-- A view file in CodeIgniter is an HTML page with embedded PHP codes. The view files are located in the application/views folders.

    Say that we had the following view file in /application/views/ dojo/hello.php.

    <html>

    <head>
        <title>Ninjas Page</title>>
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>

    <body>
        <h1>Ninjas</h1>
        <p>This view file is in /application/views/<b>dojo/ninjas.php</b></p>
        <p>I am going to have php calculate 456 x 331115. The result is <?php echo 456 * 331115; ?></p>
    </body>

    </html>
    IMPORTANT - You'll note that CodeIgniter has an assets folder. This is where you should add the appropriate CSS, javascript, and image files. For example, the above view file calls main.css which is stored in /assets/css.

    You could have the view file include other view files as well. For example. You could have /application/views/ partials/header.php or /application/views/partials/footer.php that was included for each view file. To include these files, you would change your /application/views/dojo/hello.php to look like

    <?php $this->load->view('partials/header') ?>
    <h1>Ninjas</h1>
    <p>This view file is in /application/views/dojo/ninjas.php</p>
    <?php $this->load->view('partials/footer') ?>
    Now you could also have the controller load multiple view files but this it not a common practice and it's more common for the view file to load other partial view files themselves. It's not that this is the only way, but developers have adopted this as a common practice. Also you could require other PHP files by using require/include method but this only works for files that live in the same folder level as your view file and we think it's better that you use $this->load->view instead of using require/include.

    The key thing to remember is that as you create a lot of view files and notice that a lot of your HTML is being repeated (for example the header and the footer), you could create separate view file just containing these repeated codes so that 1) your other view files look simpler/shorter and 2) so that when you have to make changes to the header/footer/etc, you can just change one file instead of changing each view file.

    Passing Data to the View

    A lot of times, the controller would prepare some data (data pulled from the database, data generated while validating the form, etc) and may want to pass this data to the view file. This can be done by passing an array as the second argument to the view method. For example:

    public function ninjas()
    {
    $view_data = array(
    'topic' => 'CodingDojo Ninjas',
    'description' => 'You guys rock. Keep up the good work!'
    );
    $this->load->view('dojo/hello', $view_data);
    }
    Open the view file to be loaded (/application/views/dojo/hello.php) and change the text to variables that correspond to the array keys of $view_data.

    <?php $this->load->view('partials/header') ?>
    <div id="container">
        <h1>Topic: <?php echo $topic; ?></h1>
        <p>Description: <?php echo $description; ?></p>
    </div>
    <p><?php $this->load->view('partials/footer') ?></p>
    It's also a good practice to use two-dimensional array in passing data to the view, making it easier for us to organize our codes in the view.

    //code in the controller
    $view_data['ninjas'] = array(
    'topic' => 'CodingDojo Ninjas',
    'description' => 'I love MVC!'
    );
    $this->load->view('dojo/hello', $view_data);
    //code in the view
    <div id="container">
        <h1>Welcome to <?php echo $ninjas['topic']; ?></h1>
        <?php echo $ninjas['description']; ?>
    </div>
    Reminder: $view_data is not a constant variable to hold your data to be passed into a view, you can use any variable name.

    Recommendations
    group view files for each controller in a separate folder - although this is not required, this is generally done by the developers community and it does help your view folder look more organized. For some of the simple apps you are doing, you may not see a lot of benefit doing it this way, but we recommend you follow this convention. This will help you when you go to more rigid MVC frameworks like Rails as again Rails will force all developers to follow this convention.
    naming the view file - It's common to have the view file be named after the name of the controller's method. Again, this is NOT the only way to do this as earlier we demonstrated how Dojo->Ninjas method was loading up /application/views/dojo/hello.php but this was to make sure you understand how the controller and the view work together (and how it's totally up to the controller which view file gets loaded). So for example, for Dojo->Ninjas method you could have the view file for that ninjas method saved as /application/views/dojo/ninjas.php. Similarly a view file for Posts->Create method (Posts Controller, Create method) you could name as /application/views/posts/create.php. This usually makes it a lot easier for developers to find your codes, which is a great thing.
    Redirect
    Another tool we have at our disposal is the redirect() function. Redirect() merely redirects the header to the URL we pass to it. A full URL to a separate website will act a lot like this->load->view, check out the example below:

    if ($go_to_google == TRUE)
    {
    redirect("http://www.google.com");
    }
    Besides hard linking, we can use the redirect() to call methods within our controllers. If you need to call one controller method from within another controller method, use redirect()! Do not directly call public methods within your controller, always use redirect() for this!

    Consider the below example:

    public function index()
    {
    $get_data['data'] = $this->Data->getData();
    $this->load->view('index', $get_data);
    }
    public function logout()
    {
    $this->session->sess_destroy();
    $this->session->set_flashdata('error_message', "Logged Out successfully");
    redirect('/');
    }
    Any time we need to send a user back to the index view, rather than writing out all of our code again, we can use the redirect() to call our index method. No matter how complex our code base becomes, we'll never need to rewrite this->load->view back to index! -->
</body>

</html>