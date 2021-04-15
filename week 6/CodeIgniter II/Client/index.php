<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>

<body>
    <!-- Level 1: Client-Side Validation
    Client-side validations might work something like this. Each input type will listen to 'keyup' event and check every time the user types if what they typed was valid. This will give fast feedback to the users. In fact, this is what we are going to do with jQuery. We will be cloning a repository on GitHub for us to see the difference between all three levels of form validations. Go ahead and navigate to a place in the computer where you want to clone the repository and run the following command:

    git clone https://github.com/andyrewlee/form_validations.git
    There are three different branches in the repository. We are only going to focus on the level_one branch for now. Go ahead and navigate to that branch by running the following command:

    git checkout level_one
    We will go over validations.js in the assets/javascripts directory. You can also point your MAMP to this folder and run the project on localhost to see what we will be going over. You should be seeing something like this:



    The file is broken up into two parts. In the first part, we are defining the functions that we will be using. In the second part, we are adding a 'keyup' listener to the inputs that we have on the HTML and executing the functions that we wrote every time the user types into the specific input element.

    Functions
    validateEmail($obj)
    This function has one parameter, $obj, which is going to be a jQuery object. We will be using this convention for the rest of the functions. If we are expecting a jQuery object then we will prepend the variables with '$'. This is important because we might be assuming a jQuery object during our implementation of the function and if it is not a jQuery object, our program will crash. JavaScript has a .test() method that can be called (to match patterns in strings) and it will return TRUE if the pattern is found. You can learn more about the .test() method here: http://www.w3schools.com/jsref/jsref_regexp_test.asp

    function validateEmail($obj) {
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regEx.test($obj.val());
            }
            swapClass($obj, beforeClass, afterClass)
            This function has three parameters, with the first parameter being a jQuery object, the second parameter being the class you want to remove, and the third parameter being the class you want to add. It is important that we pass in a jQuery object because we are calling methods .removeClass() and .addClass() which are methods that can only be called on jQuery objects.

            function swapClass($obj, beforeClass, afterClass) {
            $obj.removeClass(beforeClass);
            $obj.addClass(afterClass);
            }
            passwordsMatch()
            This function compares two input elements in our view page with one having the id of password_confirmation and the other being password. We are calling the .val() method on these jQuery objects to compare if the values of these inputs are the same. If the passwords are the same, the function will return TRUE, otherwise, it will return FALSE.

            function passwordsMatch() {
            return $('#password_confirmation').val() == $('#password').val();
            }
            hasPresence()
            This function takes a jQuery object and returns TRUE only if the object does not contain an empty string or a null value. The function returns FALSE if the mentioned condition does not pass. We would have to make sure that the argument that we pass into this function is a jQuery input element so that we can call .val() method on it.

            function hasPresence($obj) {
            return $obj.val() !== "" && $obj.val() !== null;
            }
            meetsLengthRequirements()
            This function takes in a jQuery object and a number that specifies the minimum number of characters. This function will return true only if the value of the jQuery object that was passed in has a length that is greater than the specified minimum length and false otherwise.

            function meetsLengthRequirements($obj, minLength) {
            return $obj.val().length > minLength;
            }
            fail($obj)
            This function takes in a jQuery object and directly passes it to the swapClass function that we defined. This is going to change the $obj class from 'success' to 'fail'.` Elements with the 'success' class will have text color of lime and elements with the 'fail' class will have a text color of red.

            function fail($obj) {
            swapClass($obj, 'success', 'fail');
            }
            success($obj)
            This function takes in a jQuery object and directly passes it to the swapClass function that we defined. This is going to change the $obj class from 'fail' to 'success'.

            function success($obj) {
            swapClass($obj, 'fail', 'success');
            }
            Listeners
            We are going to add a listener to each of the inputs on our form. Every time the 'keyup' event is triggered from the user, we are going to run our functions and give the user instant feedback on whether what they are putting in is valid or not.

            $(document).ready(function() {
            $('#first_name, #last_name').keyup(function(){
            hasPresence($(this)) ? success($(this)) : fail($(this));
            });
            $('#email').keyup(function(){
            validateEmail($(this)) ? success($(this)) : fail($(this));
            });
            $('#password').keyup(function(){
            meetsLengthRequirements($(this), 7) ? success($(this)) : fail($(this));
            });
            $('#password_confirmation').keyup(function(){
            passwordsMatch() ? success($(this)) : fail($(this));
            });
            }); -->
</body>

</html>