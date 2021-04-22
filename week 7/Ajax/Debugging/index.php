<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging</title>
</head>

<body>
    <!-- JavaScript / jQuery Debugging Steps (Use Google Chrome, Please)
    1. INSPECT ELEMENT
    The very first thing that you should do when debugging javascript is to inspect the element and look at the console tab to see if there are any errors in your JavaScript code. The JavaScript console may tell you where in your JavaScript code there are syntax errors, saving you lots and lots of time in debugging.

    2. Use alert() or console.log()
    If you don't see any error messages in the console use the alert() or console.log() functions at each line of your code to find out where the error exists. We recommend using them in the following locations in your code:

    Right after the document.ready() function just to make sure your jQuery is loading properly.
    Right after the .submit() handler for your form to make sure your event listener is working
    Within the success function of your $.post() or $.get() function.
    If you are creating variables within your jQuery or JavaScript, you can use console.log() to display the properties of them; perhaps there is an error with a particular property of an object, or you are using a string instead of a float. Stuff like that is perfect for logging to the console.

    3. Check Network tab
    There is a tab called 'network' when you open 'inspect element' in your browser. If you recall, this tab allows you to monitor the HTTP requests and responses sent by your web page. Check to see if your page is connecting to the file you are submitting your form to and make sure there aren't any errors on that page. Click on the tab response/preview and check whether the URL is returning data for you. If your Javascript/jQuery is working correctly, but your PHP code is awry, using the network tab will allow you to see your PHP errors in the response/preview tab without turning Ajax off, which is nice because that lessens the scope of potential errors!

    4. Check if response is a valid json format
    Force your form to submit to the page you are posting data to and make sure that the output is in valid json format. If it is not, then the problem is not with your javascript code. This can be checked by using the network tab mentioned above. Make sure on your PHP side you are not using any headers, echoes (except for the json_encode line), or var_dumps. The only thing that should print to the screen is the json-encoded data. This means any PHP errors will make your response an invalid json format. -->
</body>

</html>