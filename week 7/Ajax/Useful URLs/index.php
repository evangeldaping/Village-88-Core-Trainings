<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useful URLs</title>
</head>

<body>
    <!-- Any URL on the Internet can be used to make our own websites better. Remember that URLs are just the human-friendly way of identifying the location of the computer that holds the files that we are requesting.



    Pages
    Some URLs lead you to a page. For example, if you navigate to http://www.codingdojo.com your browser will render the landing page of Coding Dojo. You navigated to a URL and that URL rendered HTML/CSS and JavaScript as its response. Let's fetch this response in a different way. Go ahead and open up your terminal and type in the following commands:

    curl http://www.codingdojo.com
    This is the response that your browser gets when navigating to the website. The browser interprets the HTML/CSS and JavaScript to display a complete page.



    Images
    Some URLs only hold an image. For example, if you navigate to http://pokeapi.co/media/img/1.png your browser will render a picture of Bulbasaur. Let's try fetching this response using curl:

    curl http://pokeapi.co/media/img/1.png
    Image files sure look funky! Now that we know that link contains a picture of a Bulbasaur, we can use that URL to make our website better. We can include the image of Bulbasaur on our website by including an img tag to our website:
    <img src="http://pokeapi.co/media/img/1.png">


    Videos
    Some URLs only hold a video. For example, if you navigate to http://a1068.v.phobos.apple.com/us/r1000/019/Video4/v4/e5/e7/a9/e5e7a98f-ae35-7399-867b-aad0915cc445/mzvf_8081360670963169027.640x352.h264lc.U.p.m4v your browser will render a music video of Kanye West. Let's try fetching this response using curl:

    curl http://a1068.v.phobos.apple.com/us/r1000/019/Video4/v4/e5/e7/a9/e5e7a98f-ae35-7399-867b-aad0915cc445/mzvf_8081360670963169027.640x352.h264lc.U.p.m4v
    Hopefully the video file didn't scare you. We can include this video on our website by including a video tag to our website:

    <video src="http://a1068.v.phobos.apple.com/us/r1000/019/Video4/v4/e5/e7/a9/e5e7a98f-ae35-7399-867b-aad0915cc445/mzvf_8081360670963169027.640x352.h264lc.U.p.m4v" controls></video>


    CDN
    Some URLs hold useful code. CDNs (content distribution network) is a fancy way of saying that. For example, if you navigate to https://code.jquery.com/jquery-2.1.3.js you will see the code for jquery. Let's try fetching this response using curl:

    curl https://code.jquery.com/jquery-2.1.3.js
    We can include this code on our website by using a script tag:

    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>


    Request Response
    How many requests do you think this web page will send? Load the code into a browser, open up the developer console, click on the network tab, and refresh the page.

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>HTPP Request Response</title>
        <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    </head>

    <body>
        <img src="http://pokeapi.co/media/img/1.png" alt="bulbasaur">
        <video src="http://a1068.v.phobos.apple.com/us/r1000/019/Video4/v4/e5/e7/a9/e5e7a98f-ae35-7399-867b-aad0915cc445/mzvf_8081360670963169027.640x352.h264lc.U.p.m4v" controls></video>
    </body>

    </html>
    To load this page, the browser had to make 4 GET requests. First to GET the page. Then as it was reading the page it saw that we are including jQuery's CDN. So the browser makes another GET request to get the code located in the URL specified in the src attribute and includes it on the page. Then the browser has to send another GET request when it realizes the img tag's source is located in the PokeAPI URL. Finally, the browser makes another GET request to load the video located in the URL provided in the video element's src attribute. -->
</body>

</html>