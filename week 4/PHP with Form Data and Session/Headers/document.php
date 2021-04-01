<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headers</title>
</head>

<body>
    <!-- Headers
    In this tab, we will talk about the header() function.

    In the previous chapter, we told you that an HTTP protocol is really just about a client talking to a server where the client sends a 'message' to the server, and the server responds with a 'message'. A message is nothing but a chunk of information or data that is going through the connection between client and server. What this message looks like, its contents, and how to modify this message are what we will find out in this tab.

    Now, why do we need to learn this? There are lots of reasons why:

    Knowing headers will greatly improve the way you troubleshoot your PHP code and it shows what's really happening behind the scenes.
    Modifying headers allows you to enable or disable caching of pages.
    You might want to change the document type of the page for various purposes (e.g. changing the document type to image in order to process an image on a page).
    It allows you to redirect the user to another page.
    Now in this tab, our focus will be on item numbers 1 and 4. Items number 2 and 3, however, are something you can look at later.

    What it Looks Like
    Create a test.php file and write this simple "hello world!" program below, and run it in your browser:

    <?php echo "Hello world!"; ?>
    The request of a client and the response of a server can be viewed on any page using the Chrome Inspect Element tool, and by clicking on the Network tab:



    Inside the Network tab
    On the network tab, you will see the requested file: test.php. Take note of these 7 important columns, which are all self-explanatory: Path, Method, Status, Type, Initiator, Size, and Time. Most of the time you will be checking for the Method and Status columns when troubleshooting your code.

    Clicking on test.php pops a new window up and will show you the raw header information:



    The information may not make any sense to you right now and that's fine. What's important is:

    You know there is a Network tab where you can go look for information why your website is not performing as you expected.
    You know that you can see the different kinds of files being requested by the client to the server (test.php) using the Network tab.
    You can see the different kinds of methods being requested (GET, POST, PUT, etc.) by the client to the server.
    You can see the status of each file (200, 404, etc).
    To learn more about status codes, click here.

    The header() function
    If you remember from the last chapter, we learned that when a request is made to the server for a PHP file, all the PHP tags within the document get interpreted and a response gets sent back with a file that contains HTML.

    Before we start, it's important to know that the header() function displayed in the code below...

    <?php header(); ?>
    ...can not be used after output has been sent to a page. For example:

    <h1> Hello World </h1>
    <?php header(); ?>
    The above won't work because we already asked for an <h1> to be displayed on the page. This is the important part of this lesson. If the PHP file does NOT output any content, like HTML, echo, or print, then we still have a chance to write our own headers. The header we will be using is called Location. Not only does it send the user back to the file or address specified, but it also returns a REDIRECT (302) status code to the browser.

        <?php
        // inside process.php
        header('Location: index.php');
        // The above header function sends a response to the browser with a status code 302 Moved Temporarily
        // The browser will then send a new request to index.php
        ?>
        The purpose of introducing this very simple function is for you to apply it whenever you submit a form. In the Survey Form lesson, you learned how to submit data from one page to another, but we didn't tell you that once you POST to the form's action value (or once you hit send or submit to process.php) and submit data, and hit refresh, we get this message:



        This is not a cool feature that you accidentally created. This is a feature that the browser automatically implements for security reasons. Imagine that you are in an eCommerce website and you are buying an item for $200, you press "Buy" and after being sent to their process.php page, you accidentally hit refresh. If there is no Confirm Form Resubmission dialog box, you will pay for the same item twice.

        In the real world, we use the redirect to avoid this kind of scenario. Now you may be scratching your head, and wonder:

        How are we supposed to display the data being submitted via a form, then?
        PHP and other programming languages recommend you to always separate the concerns: Let processing files, such as process.php, handle the logic or the processing without the need to render or show content, and let 'view' files like index.php, handle the displaying of the processed information. We have multiple ways of displaying submitted data after we get redirected by header(). We can use session to hang onto our data or we can connect our PHP to a database and save our posted data there, so that we can retrieve it again once we get redirected to a 'view' page.

        Below is a quick demonstration on Headers: -->
</body>

</html>