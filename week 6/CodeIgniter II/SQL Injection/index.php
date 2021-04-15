<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>

<body>
    <!-- SQL injection is a common security vulnerability that unfortunately a lot of websites are vulnerable for. Please spend up to 30 minutes reading about SQL injection. A good starting point is https://en.wikipedia.org/wiki/SQL_injection.

    Imagine you had the following code in your model file:

    function ...($post) {
    $this->db->query("SELECT * FROM users WHERE email = '" . $post['email'])."'";
    ...
    }
    or if you were using {},

    function ...($post) {
    $this->db->query("SELECT * FROM users WHERE email = '{post['email']}' );
    ...
    }
    If your controller was passing all the post information directly to your model above, and where your model was receiving all the post information as a variable $post, your site is vulnerable for SQL injection.

    As a rule of thumb, NEVER join any of the post information or any variable information directly in the query string. Instead, remember that you were taught to use

    $this->db->query("SELECT * FROM users WHERE email = ?", array($post['email']));
    By using ? inside the query string, you're protecting your site from SQL injection.

    Industry insights
    Surprisingly a lot of web applications are vulnerable for SQL injection. Even if your application was protected from most of the SQL injection, all it takes for someone to hack into your system is one function in your code where the developer forgot to protect themselves from SQL injection and added a variable directly to the query string.

    After teaching students about SQL injection, I have had numerous students test some of their favorite sites and found out that the site was vulnerable for SQL injection. On one instance, they learned they could hack into their school website, which meant they could

    modify any records in the database without the site admin knowing about it (e.g. change their school records including grades)
    drop any database tables they wanted (e.g. drop the whole users table)
    modify the user record to give anyone admin access
    change one's password
    retrieve everyone's password
    Luckily, these students didn't have any malicious intent so they didn't do any of the above and instead informed the school's IT about the SQL injection vulnerability the school website was exposed to.

    As a developer, you should NEVER make the mistake of trusting the information received from the POST. Always sanitize the user input to prevent your site from SQL injection as well as XSS. -->
</body>

</html>