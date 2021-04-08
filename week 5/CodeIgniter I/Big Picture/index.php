<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Picture</title>
</head>

<body>
    <!-- 
    1. The client requests a page from the server (e.g. "/", "/dojo/ninja", "/awesome").
    2. The server sends that request to index.php and passes the URL request's details. index.php loads the files necessary to use CodeIgniter.
    3. CodeIgniter takes the URL and lets the routing file (e.g. routing.php) determine which controller (and method within the controller) should handle the URL request
    The first parameter in the URL (the "/dojo/" in "/dojo/ninja") signifies the controller that should handle the request. The second parameter ("ninja" in "/dojo/ninja") is the name of the method in that controller that should handle the request. For example "/users/new" would be handled by "Users" controller and the "new" method inside "Users."
    We can also set custom routing rules - shortcuts to controller and method combinations without using the normal "/controller/method" pattern. (E.g., "/add" instead of "/users/add".)
    4. Once the controller takes over the request, it can talk to models (classes that process information and communicate with the database), and then hand information to a view (client-facing, HTML) file.
    5. The view file displays information to the client using HTML, CSS, and JavaScript. It may also display information passed to it by the controller (such as a list of users or blog posts).
    Summary: All URL requests are sent directly to index.php, which hands it over to the routing file, which determines the controller/method that should handle the request, and the controller finally renders the view file.

    Example
    Let's say that we wanted to create a simple web application below. By looking at the wireframe below, can you determine how many URL requests you need for this web app?



    If you answered two, you're right!

    One request will be sent to render this HTML/CSS page and another request will be sent to process the POST data submitted via the form.

    1. When the user goes to 'http://localhost/', you'll set up your routing file so that the request gets sent to the Course Controller and the index method. The index method would then render a view file that contains HTML/CSS information.
    2. When the user submits the form, this will send the second request to "http://localhost/course_add". You can set up your routing file so that this custom URL request is handled by the Course controller and add method, which would process the POST data. This method can redirect to "http://localhost/", starting back at step one and displaying the main page.
    Summary
    You don't have to understand yet how to do each of the steps above, but remember that instead of the form being submitted to a specific file, it now goes to a route, whether that is a controller/method URL or a custom route. The method in the controller will determine what to do with the information next. -->
</body>

</html>
<!-- MVC FLOW Pattern
index.php -> routing -> controller -> models
index.php <- view <- controller <- models -->