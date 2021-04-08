<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validations</title>
</head>

<body>
    <!-- Validations
    No matter what kind of web application you're building, eventually you're going to have to receive data from your users. In PHP and CodeIgniter, this data will come in from HTML forms. Much like how we did it back in PHP Procedural, we're going to need to validate this data and confirm it's in the correct format, as well as escape special characters and other hazardous code.

    While we could do this validation with the if/else gates we wrote back in procedural PHP, there's a better way. We're working in MVC now, which means we can leverage other developer's code! From now on, we'll use the form_validation library to validate our CodeIgniter projects!

    Check out sample code below:

    $this->load->library("form_validation");
    $this->form_validation->set_rules("first_name", "First Name", "trim|required");
    if($this->form_validation->run() === FALSE)
    {
    //$this->view_data["errors"] = validation_errors();
    }
    else
    {
    //codes to run on success validation here
    }
    Note how the function set_rules() of the Form Validation class takes 3 parameters, the name of the input field to be validated, a label for the error message, and finally the validation rules for that particular field.

    $this->form_validation->set_rules("first_name", "First Name", "trim|required");
    Reading the above line of code, we learn that the first_name field of our input form is required and it gets trimmed, meaning that excess white space characters get cleaned up. The string 'Brendan' would be the same as the string 'Brendan ', as the latter would have the extra space trimmed off.

    Next, we have the function run() contained within an if statement. run() executes all the validation rules, returning TRUE if all validation rules are met, otherwise it will return FALSE and place all validation errors in the function validation_errors().

    $this->form_validation->run()
    To check out a full list of validation rules, please visit this page. There's a ton of useful information there about the form_validation library and how to further validate your code. Do not spend longer than 30 minutes to an hour reviewing this documentation. -->
</body>

</html>