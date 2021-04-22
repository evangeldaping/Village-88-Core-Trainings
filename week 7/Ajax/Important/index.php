<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Important!</title>
</head>

<body>
    <!-- Important Concepts
    When we make an Ajax call, we're basically making a new HTTP request. Consider the code below:

    $.post('http://localhost/hello/world', function(data){
    ...
    });
    Here, this code makes a new HTTP request (e.g. localhost/hello/world). When the HTTP response is received, it calls the function that follows, and it passes the HTTP response into that function using an input parameter named 'data'. As always, we could name this 'data' input parameter anything that makes sense to us, just like any other local variable.

    Some important concepts to ponder and understand before moving on:

    Since an Ajax call is initiating a new HTTP request, you do not always have to send the code to the same domain. In fact, you could technically send an Ajax call to any URL (e.g. http://www.cnn.com, http://www.disney.com or whatever) although most recent browsers block this for security. You'll learn how to get around this in one of the advanced assignments in the next chapter.
    It's the HTTP Response from the Ajax call that gets stored to the variable 'data'. You'll later learn how this is done but for now just know that the HTTP response gets stored in that variable 'data'. This particular .post also assumes that the HTTP response is in 'HTML' or text format. If you were expecting a 'json' output, you could have passed 'json' as the additional argument to the .post method (if you are expecting 'json' data, just make sure that the HTTP response starts and ends with a curly bracket).
    Nowhere in the code do we specify whether the HTTP request/response is handled by a particular interpreter. In fact, Ajax on the JavaScript end (step 1 and step 3) is done exactly the same REGARDLESS of whether you're doing Ajax with Rails, Java, C#, PHP, Python, etc as long as the HTTP RESPONSE given back to JavaScript is something your JavaScript can understand (HTML, json or even XML). In other words, you shouldn't ask how Ajax is done with a particular language as this is all handled by Javascript and it works the exact same way.
    If you want to POST information to a URL, you could use jQuery's .post method. If you do not want to POST any information but want to merely retrieve information from a URL, you could also use jQuery's .get method. Either one would work.
    Now, as your Ajax gets more complicated, you may be tempted to ask how could I have my JavaScript client pass something to my database (SQL, MongoDB, etc)? This is the wrong question to ask! :) Your JavaScript NEVER talks to the database nor your controller, config file or routing file. Your JavaScript only knows how to send a new HTTP request and again doesn't care who or what database is being used to process that request (as long as the HTTP response back to the JavaScript client is given back in HTML or in jSON). This is an important distinction to make. -->
</body>

</html>