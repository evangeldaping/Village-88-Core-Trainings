<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption</title>
</head>

<body>

</body>

</html>

<!-- Encryption
Background
Up to this point, we haven't really discussed the need to secure our data. Internet hackers are notorious for trying to guess passwords and generally just make a mess of things. As web developers, we are responsible for keeping our users' data safe. That means storing the data safely as well. Storing passwords as-is is never a good way to keep data secure. Imagine if a user's password was stored as-is on a database somewhere and a hacker got a hold of it. Now imagine if all of your users' passwords were stored as-is on a database. Can you say bedlam?

This is why we encrypt users' passwords before we put them into our database. By encryption, we mean to mask the value of an input by using an algorithm that changes its value. Encryption and cryptography are a complicated and fascinating field of study that are heavily mathematical in nature. That being said, you don't need a Ph.D. to protect your data; you just need to know a few handy tools! This tab will teach you two methods of encryption, md5 encryption and a hashed password algorithm.

Basic md5 encryption
The basic way to encrypt something is to use md5 encryption. Md5 encryption is a technique that takes an input, most likely a password, and returns an encrypted string. To see how this works, type the following into a PHP file:

$password = 'password';
$encrypted_password = md5($password); //the function md5 is native to PHP
echo $encrypted_password; //this will show you the encrypted value
// 5f4dcc3b5aa765d61d8327deb882cf99 -> nice!
What you will see is the crazy string above. The md5 PHP function returns an encrypted version of the parameter it is passed. The md5 function yields the same value every time it is run with the same argument. That means the value it spits back is not random, it is encrypted! You may ask: why don't hackers just reverse engineer the values? Answer: the Md5 algorithm is well known and solvable, but it is very strong in the sense that it is not easily reverse engineered. Md5 is not the industry standard, but it is a good starting point.

How to use md5
When you add your users into the database upon registration, you should save their passwords as an encrypted md5 string. Similarly, when they log in, you should encrypt the inputted password to make sure it matches with the one saved in the database. Here's the idea:

The user being put into your database:

$password = md5($_POST['password']);
$email = escape_this_string($_POST['email']);
$username = escape_this_string($_POST['username']);
$query = "INSERT INTO users (username, email, password, created_at, updated_at)
VALUES ('{$username}', '{$email}', '{$password}', NOW(), NOW());
run_mysql_query($query);
When your user is trying to log in:

$password = md5($_POST['password']);
$email = escape_this_string($_POST['email']);
$query = "SELECT * FROM users where users.password = '{$password}' AND users.email = '{$email}'";
//..etc etc
Salted encryption
While Md5 is an easy encryption method and safe for small-time projects, it is not secure enough for enterprise-level applications. To really secure your data, you need to make the encryption method more random. By random, we mean more unpredictable. As we said before, Md5 encryption is the same no matter what computer runs the code. So to make our encryption more powerful, we will encrypt our data by using what is called a salt. A salt is like a "unique" key used to generate a unique password. Example:

$salt = '123'; //where the value 123 changes randomly
$encrypted_password = md5($_POST['password'] . '' . $salt);
A salt is a string of random characters that will be passed to an encryption method along with the string we are trying to encrypt via concatenation. The encryption method that uses the salt is designed in such a way that it takes the salt to compute the encrypted string, using the salt as an 'ingredient' in the encryption 'recipe'.

Generating a salt
To generate a salt, you just need to generate a random string of characters. The code below actually uses two different functions to render a random string:

$salt = bin2hex(openssl_random_pseudo_bytes(22));
Note: if you get an error about openssl_random_pseudo_bytes() being undefined, you have to include the php_openssl module in your PHP extensions.
The function called openssl_random_pseudo_bytes() returns a string of bytes equal to the parameter it's given. This string isn't a normal alphanumeric string, so we turn it into a string using the function bin2hex(), which will turn the value returned from the openssl() function into a normal alphanumeric string. This new random string will be our salt. The idea is to store this $salt during the registration process. Example:

$username = escape_this_string($_POST['username']);
$email = escape_this_string($_POST['email']);
$password = escape_this_string($_POST['password']);
$salt = bin2hex(openssl_random_pseudo_bytes(22));
$encrypted_password = md5($password . '' . $salt);
$query = "INSERT INTO users (username, email, password, salt, created_at, updated_at)
VALUES ('{$username}', '{$email}', '{$encrypted_password}', '{$salt}', NOW(), NOW());
run_mysql_query($query);
Now, when we are trying to authenticate a user's login, we do some pretty nifty stuff:

$email = escape_this_string($_POST['email']);
$password = escape_this_string($_POST['password']);
$user_query = "SELECT * FROM users WHERE users.email = '{$email}'";
$user = fetch_record($user_query);
if(!empty($user))
{
$encrypted_password = md5($password . '' . $user['salt']);
if($user['password'] == $encrypted_password)
{
//this means we have a successful login!
}
else
{
//invalid password!
}
}
else
{
//invalid email!
}
Below is a list of encrypted passwords we generated using 'password' as the password, and str_shuffle('hello') as the salt. The final password is the result of our not-very-secure md5 hashing function. Even though we used very simple values for both the password and salt, we still get 5 scary-looking encrypted passwords! -->