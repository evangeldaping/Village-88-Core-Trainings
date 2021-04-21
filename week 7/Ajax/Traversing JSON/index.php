<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traversing JSON</title>
</head>

<body>
    <!-- Some URLs have JSON (JavaScript Object Notation) that we can use. JSON is just one of many ways of representing data. Navigate to http://pokeapi.co/api/v1/pokemon/1/ to see JSON data about Bulbasaur. This means that instead of having our own database about Bulbasaur, we can just refer to this link to get more data about this Pokemon. How can we use this JSON data to display Bulbasaur's types (grass and poison), its height, and weight onto our website? Thanks to jQuery, we have a convenient function $.get to do AJAX (which is a way of getting information from another URL without having to reload your own page). If we were to do it using pure JavaScript (which is how the $.get function in jQuery is implemented), we would have to write a lot of code to make AJAX work for all different types and versions of browsers. Thanks, jQuery!

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Gotta Catch'em All</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script>
            $(document).ready(function() {
                $.get("http://pokeapi.co/api/v1/pokemon/1/", function(res) {
                    console.log(res);
                }, "json");
            })
        </script>
    </head>

    <body>
        <div id="bulbasaur">
        </div>
    </body>

    </html>
    We are using JQuery to load the JSON data that lives in http://pokeapi.co/api/v1/pokemon/1/ and logging it to the console. We are passing in three arguments to the $.get function.

    The URL that we want to load information from (i.e. "http://pokeapi.co/api/v1/pokemon/1/")
    Function you want to run after information was successfully loaded (i.e. function(res) { console.log(res) })
    $.get will automatically pass an argument to this function that holds the information from the URL we requested
    We can access this argument by having our function take an argument (i.e. res)
    You can name this argument anything you want, you can name it 'data' for example
    The type of information we are expecting back which in our case is json.
    You can read more about $.get here.



    Traversing JSON
    Go ahead and play with the JavaScript Object that is logged onto your console. Chrome has done a great job allowing us to traverse through different parts of the Object by clicking inside. Let's say we want to display Bulbasaur's types (poison, grass), onto our console. How can we do this?

    Getting Bulbasaur's Types

    Once we click on the Object that is logged in our console, we will see a lot of attributes. One of those attributes is named 'types.' Chrome has provided us with a nice GUI arrow that specifies that there's more inside. Go ahead and click the arrow and notice that the 'types' attribute is storing an array of two objects. If we open up each of these objects, we see that they both have a 'name' attribute. This looks like the data that we want. How can we traverse the JSON to get here?

    $.get("http://pokeapi.co/api/v1/pokemon/1/", function(res) {
    console.log(res.types[0].name);
    console.log(res.types[1].name);
    }, "json");
    Let's look at the first console.log above. The object we received back from the pokeapi has been put into a parameter named 'res'. Within this object, we want to examine an attribute named 'types'. Since the 'types' attribute holds an array of two objects, we index to [0] to grab the first object. Within that object, we access that object's 'name' attribute to have 'poison' logged to our console. In the second console.log, we are doing the same thing except we grab the second object from the res.types array. Since we know that res.types is an array, we can rewrite our code using a FOR loop. What if the pokeapi someday updates Bulbasaur and adds another type? Using a FOR loop makes our application more flexible.

    $.get("http://pokeapi.co/api/v1/pokemon/1/", function(res) {
    for(var i = 0; i < res.types.length; i++) { console.log(res.types[i].name); } }, "json" ); </body> -->

</html>