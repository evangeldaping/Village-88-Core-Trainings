<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body>
    <!-- Notice: if your post data isn't working and you have Windows, read this:

    There is a wonderful bug with Codeigniter and Windows that for some people makes their post data (either $_POST or $this->input->post()) always evaluate to false. To fix this do the following:

    Click your Wamp icon on the bottom right icon tray of your screen.
    Hover over the 'Apache' tab and then the 'Apache modules' tab
    Find the module in the list called 'rewrite_mod' and click it to check the box
    This will restart your server and make the desired change and post data should now work!
    The input class
    The Input Class serves two purposes:

    It preprocesses global input data for security.
    It provides some helper functions for fetching input data and preprocessing it.
    The Input class has the ability to filter input automatically to prevent cross-site scripting attacks. If you want the filter to run automatically every time it encounters POST or COOKIE data you can enable it by opening your application/config/config.php file and setting this:

    $config['global_xss_filtering'] = TRUE;
    Using POST, COOKIE, or SERVER Data
    CodeIgniter comes with three helper functions that let you fetch POST, COOKIE or SERVER items. The main advantage of using the provided functions rather than fetching an item directly ($_POST['something']) is that the functions will check to see if the item is set and return false (boolean) if not. This lets you conveniently use data without having to test whether an item exists first. In other words, normally you might do something like this:

    if ( ! isset($_POST['something']))
    {
    $something = FALSE;
    }
    else
    {
    $something = $_POST['something'];
    }
    With CodeIgniter's built in functions you can simply do this:

    $something = $this->input->post('something');
    $this->input->post();
    1) The first parameter will contain the name of the POST item you are looking for:

    $this->input->post('some_data');
    2) The function returns FALSE (boolean) if the item you are attempting to retrieve does not exist.

    3) The second optional parameter lets you run the data through the XSS filter. It's enabled by setting the second parameter to boolean TRUE;

    $this->input->post('some_data', TRUE);
    4) To return an array of all POST items call without any parameters.

    5) To return all POST items and pass them through the XSS filter set the first parameter NULL while setting the second parameter to boolean;

    6) The function returns FALSE (boolean) if there are no items in the POST.

    $this->input->post(NULL, TRUE); // returns all POST items with XSS filter
    $this->input->post(); // returns all POST items without XSS filter
    Forms
    To learn more about using the Input Class, let's work with forms and data submission. Let's create a view with the code below and save it in application/views/add_course_page.php.

    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <form action="/courses/add_course" method="post">
            <input type="text" name="title" placeholder="email">
            <input type="text" name="description" placeholder="description">
            <input type="submit" value="Add course">
        </form>
    </body>

    </html>
    Compared to basic PHP where the action of a form is usually a file (action="login.php" etc), remember that in MVC Controllers are directly related to the URL. That is why (action="/courses/add_course") would mean that we are going to submit the form into a Controller named as Courses with function add_course() inside it.

    class Courses extends CI_Controller {
    //displays the add course page
    public function index()
    {
    $this->load->view('add_course_page');
    }
    //processes the adding of a course
    public function add_course()
    {
    $course_details['title'] = $this->input->post('title');
    $course_details['description'] = $this->input->post('description');
    $this->load->model("Course_model");
    $add_course = $this->Course_model->add_course($course_details);
    if($add_course){
    echo "Course is added";
    }
    }
    }
    Global Variables
    The Input Class can also be used to handle other global variables. If you are overwhelmed about these Global Variables, please go back and review the PHP course where it was discussed.

    //$_GET
    $this->input->get();
    //$_COOKIE
    $this->input->cookie();
    //$_SERVER
    $this->input->server(); -->
</body>

</html>