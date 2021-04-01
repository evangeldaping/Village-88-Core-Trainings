<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie and Session</title>
</head>

<body>
    <!-- Cookie and Session


    What are cookies and sessions and why do I need to learn about them? Well, if you want to build an awesome website then you definitely need to learn about cookies and sessions. Cookies are used to enhance the user experience while sessions are used to allow you, as the developer, to create some levels of security all throughout your web application.

    Sessions are server-side files that contain user information while Cookies are client-side files that contain user information. Take note that they are just files that contain user information. This means that cookies store user information in the user's browser; sessions do not. This difference determines what each is best used for.

    Cookies can be set to a long lifespan, which means that data stored in a cookie can be stored for months if not years.

    Sessions are stored on the server, which means clients do not have access to the information stored about them. They work like a token, allowing access and passing information while the user has their browser open. The problem with sessions is that when you close your browser, you also lose the session. So, if you have a site requiring a login, the user will be forced to re-login every time they visit.

    What is the user information that gets stored? And how are they set?

    The information can be anything: from the links you clicked on the website, the id or authorization level of a certain user, the items you added to your shopping cart or the language preference that you specified.


    (Video: courtesy of Adversitement)

    Let's Start a Session
    To start a session, we need to add this to our PHP file. Make sure to write this on top of any other code:

    index.php

    <?php session_start(); ?>
    Running our code will not render anything, but what it did in the background is generate a unique session id for us. This means that whenever a user visits your index.php page, the server will automatically assign a unique session id to it if no session id is present.

    To view the session id we use session_id():
    index.php

    echo session_id();
    The session_id() method is both a getter and a setter. If you don't specify a parameter, then it acts as a getter. If you pass a string to it, then it will manually set the session id you specified. The majority of the time you'll want PHP to generate a session id for you.

    Result (You may have a different session id value)

    b7a00332815148fb30a2e0e6b7478672
    What's interesting is that this value will be available as long as you don't close your browser.

    Do you still have your other PHP assignments? Let's open them in a different tab, along with your index.php file that started the session, and make sure to edit and add this code on top of it:

    (any .php assignment)

    session_start();
    echo session_id();
    With the code above, even though it's a completely different file, it still echoes out the same session id value.

    How does this work?
    When PHP reads the code session_start(), it generates an encrypted string in the background and set it as the user's session id if session id doesn't exist yet.
    This session id is stored somewhere in the server's file system, Apache, typically in the /tmp folder.
    At the same time, session_start() also created a small cookie file in the user's browser containing the session id value. This revelation tells us that session need cookies.
    If we refresh our page, PHP then reads the session_start() code again, but this time PHP will notice that session id is already set, via the existence of a cookie.
    So if the cookie's session id is equal to the server's session id then it's safe to assume that the user who's on the same page right now is the same user who accessed the page a few seconds ago.
    So what does having a session id have to do with anything?

    Well, it means that our server will now have a way to know which users are accessing what, via the unique session id. That means we can serve different kinds of information to each user. We don't know much about these users specifically, like their name and email because there is a different process for that, which we will discuss next.

    A good example of how session can serve different information to each user is a simple program that counts how many times a user visits a certain page:

    User b7a00332815148fb30a2e0e6b7478672 who used Mozilla, visited the site 10 times

    User 0c0fb031d7a8552524f426f966aa1381 who used Safari, visited the site 2 times

    The same page is accessed, but there are different page visit values.


    The $_SESSION Variable
    There is a way for us to provide more useful user information to the session, and that is through the use of the $_SESSION associative array variable. $_SESSION is another superglobal that lets us save values and have them be available from page to page until we decide to remove them. $_SESSION values get stored on the server so we have to have a way of retrieving them each time a new session request is made. $_SESSION gives us a way of identifying each visitor that comes to our site by saving a cookie, as session needs a cookie.

    Consider the example below where Mike, Carol and Diana each have separate sessions with YouTube.



    In the diagram above we can see that each user is assigned a unique id when they visit YouTube. As the user navigates from page to page within YouTube they are remembered by matching the cookie saved in the browser with the same one on the server. Each one of these values can be referenced using the $_SESSION superglobal.

    Using $_SESSION
    Each page that you would like to add, remove or update a value to $_SESSION you have to put session_start() at the top.

    <?php session_start(); ?>
    Adding Meaningful Values to Session
    $_SESSION is an array, but it is a special type of array that will only allow you to add values with an association. In order to add values to $_SESSION, you must specify an association. What is this also called? An associative array!

    // index.php
    session_start();
    $_SESSION[] = "Some Value"; // THIS IS INCORRECT
    $_SESSION['name'] = "Carlos"; // This is Correct!
    $_SESSION['occupation'] = "CEO";
    Getting Session Values
    To get the $_SESSION values, we can simply reference the association that we set. Since we put the value into $_SESSION it is available to us on any other page!

    // home.php
    session_start();
    echo $_SESSION['name']; // this will print out "Carlos"
    Removing Session Values
    There are a number of different ways to remove $_SESSION values. We use different methods for different purposes. No matter what page we decide to remove session values from, it will be removed from all pages.

    // profile.php
    session_start();
    unset($_SESSION['name']); // This will only remove 'name' and its value from $_SESSION
    $_SESSION = array(); // Removes all variables currently set in $_SESSION.
    session_destroy(); // Destroys all the data associated with the current session.
    Setting a Cookie
    We don't need a session_start() to set a cookie. We just use the setcookie() method. setcookie() requires only 1 parameter (name) but is typically set up with 4 parameters:

    setcookie('foo', 'bar', time() + 86400 * 30, '/');
    foo as the cookie name. Required parameter.
    bar as foo's value. Optional parameter.
    time() + 86400 * 30 sets the cookie to expire in 30 days. Optional parameter. If this parameter is omitted or set to 0, the cookie will expire at the end of the session (when the browser closes). The default is 0.
    "/" means the cookie will be available within the entire domain. Optional parameter. The default value is the current directory that the cookie is being set.
    NOTE: The setcookie() function must appear BEFORE the <html> tag.

    Get Cookie
    To get the cookie's value, we use the $_COOKIE associative array variable:

    echo $_COOKIE['foo'];
    // echoes out 'bar';
    Setting cookies with sensitive information is dangerous. The information is stored on the user's computer and is easily exposed. This is why we only use the Cookie that is set by default by PHP (which holds the session id) to access information that is saved on the server through the $_SESSION.

    Where are cookies stored anyway?
    Internet Explorer and Windows keeps cookies here:

    AppData\Microsoft\Windows\Cookies

    Also, Temporary Internet Files can contain some cookies. Meanwhile, Firefox keeps cookies into SQLite database under profile root:

    AppData\Mozilla\Firefox\Profiles\FireFoxProfile\cookies.sqlite

    To read the data you need to connect to that database using any SQLite client, an SQL database like MySQL.

    Now What?
    When building a website, most of the time, you will work with sessions and not so much with cookies. But know that, even though we won't be working with cookies that often, sessions technically use them. So if a user disables their cookies, sessions will not work as expected. Using our example earlier:

    session_start();
    echo session_id();
    We know that session_id will always have the same value as long as you keep your browser open, even if you open a new tab. But! Disabling the cookies in your browser's setting will generate new session_id every time you refresh the page. That's because the session wasn't able to create a cookie which is the only way that the server will be able to recognize the user. It's as if the server suddenly got a short-term memory loss and every time you say 'hi' to it in a form of request, the server would respond as if you just met for the first time.



    There is a dirty fix around this but it is not secure because instead of session_id() being stored in the client's computer in a form of a cookie, you need to put the session_id in the browser as part of the URL, and force session_id() to have that value in order for the server to recognize you:

    URL

    localhost/test.php?SESSIONID=b7a00332815148fb30a2e0e6b7478672
    test.php

    session_start();
    session_id($_GET['SESSIONID']);
    But please don't do that. Imagine having the ability to fake a session just by changing the value of session_id in the URL? NOT VERY SECURE.

    If you go to Facebook right now and you disable your cookies, you won't even get past the login screen and Facebook will force you to turn your cookies back on in order to proceed.

    We use sessions for authentication, authorization, error messages, and notifications which we commonly need. Cookies, on the other hand, are paired with nice-to-have features like 'remember me', 'language', and 'website setting preference'. -->
</body>

</html>