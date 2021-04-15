<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Comments</title>
</head>

<body>
    <!-- Document your code and add meaningful comments
    Aside from readable codes, detailed comments on complex codes are useful and important for those jumping into this project. Any functions without any comment above it, should not be accepted as valid code.

    For each function, write a brief description as well as comments that would help other developers as well as yourself, when you're reviewing the code later. For complex function, add explanation on how the functions work, when it is called, and other important details that other devs should know.

    Comment Format
    Use /* instead of // for comments since the latter will have issues on code precompile.

    Good

    /* DOCU: This function is triggered by Run and Save and Submit and Watch buttons in the Challenge Page. For run and save, it triggers checking of code via isolate and also sends the recorded keypresses of the user to S3. For Submit, this updates time spent details of the for the challenge.
    Requires hero_id, challenge_id
    Owner: PJ, Updated by Chris
    */
    function completeChallenge($post_data){
    ...
    Bad

    //HERO SUBMIT CHALLENGE ANSWER
    function completeChallenge($post_data){
    ...
    General Rule of Thumb
    Each method/function in the model and the controller should have comments documenting what the function is doing. It should also layout what the function will be returning (its output) as well as what parameters are expected for the function to run (its arguments).

    In addition, as a general rule of thumb, if for every 15-20 lines of code, if your code does NOT have any comments, it probably means you're not documenting your code enough. -->
</body>

</html>