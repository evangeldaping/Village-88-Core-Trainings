<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validations</title>
</head>

<body>
    <!-- Form Validations test
    There are many ways to validate your form. Although there is no perfect way, there are best practices. We have separated the levels of form validations into three different levels.

    Level 1: Client-side Validation (View)


    The first level is only validating your form from the client-side, which means validating from your view. We can do client-side validations (validations from a view file) by using JavaScript through jQuery. If this is the only validation that you have, your site is not very protected because a user might be able to bypass front end validations because all of the files are available for them in the browser. For example, let's say I know that the website is using jQuery to do the front-side validations. I can break all of that by opening up the JavaScript console and redefining the variable '$' to something else. Or there are some users who prefer to disable JavaScript on their browsers. This is why although having front-end validations provide great user experience for the user by providing instant feedback, it cannot be the only validations that you have.

    Level 2: Client-side Validation + Server-side (Controller)


    By having the validations done in the controller, we are now doing validations on the server-side. Now you have validations on the client-side and also on the server-side. This makes your website secure because the user won't be able to bypass the server-side validation from the client-side. A lot of developers validate the form in the controller. In fact, even on CodeIgniter's documentation, they do their validations in the controller. If you do validations in the controller, you are at Level 2. This is a huge improvement from Level 1 because you are now doing validations on the server-side.

    However, should the controller really be concerned if the data that we want to enter into the database is valid? Or, should that be up to the model? You will see that other popular frameworks such as Rails use the Model to validate data. The general rule of thumb you should follow is the skinny controller, fat model. The controller delegates task among the view and the model as much as possible.

    Level 3: Client-side Validation + Server-side (Model)


    We don't want our Controller to deal with validations. The controller's job is to delegate all of its work. We can reach the third level of form validations by moving our validations from the controller to the model. By doing so, we will be able to uphold the general rule of thumb: skinny controller, fat model. -->
</body>

</html>