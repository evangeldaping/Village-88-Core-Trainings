<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Inputs</title>
</head>

<body>
    <!-- Form inputs
    For an e-commerce website, imagine that you had a form such as this

    Buy this awesome T-shirt
    <form action="..." method="post">
        <input type='hidden' name='description' value='Tshirt' />
        <input type='hidden' name='price' value='19.99' />
        <select name="quantity"> ... </select>
        <input type='submit' value='Buy Now' />
    </form>
    If you were a hacker, can you think of how you could hack into this system and buy this T-shirt for 0.01?

    One way you could easily hack a site like this is to open up the site, use Inspect Element, double click on the 19.99 field, change it to 0.01, and then to click on the submit button. As the browser will allow you to modify any html output, you can easily adjust the value in the form, even if the form input's hidden. When you modify the price and submit, the browser will send a http request with the following formation information:

    description - Tshirt
    price - 0.01
    Is that what you wanted?

    How could you protect your site from the user easily changing any of the input values?

    Industry insight
    Back in 2013, I remember teaching a group of students about this concept and how we can easily adjust any of the html values easily using Inspect Element. Then I challenged the students to see if they could find an e-commerce website that had a form structured like this and to see if they really did allow them to buy items for $0.01 or whatever they wanted. In about 30 minutes, students came back with multiple sites where sites had these security flaws.

    Now, if you wanted to take advantage of these sites, you could easily build a crawler that stored all the html response and see if they had any input fields for the price. Most likely, a lot of these sites would be vulnerable for these user modifications/hacks.

    Solution
    The key for fixing these type of security flaws is to not put any critical information in the form that the users can easily modify or put information in the form that's okay even if the users were to change it. For example, instead of putting the price, what if you put in the product ID and also the quantity? For example, maybe the form for buying the T-shirt could be as follows:

    <form action="..." method='post'>
        <input type='product_id' value='100313' />
        <select name='quantity'> ... </select>
        <input type='submit' value='Buy Now' />
    </form>
    Now, for these forms, even if the user was to change the product_id manually, it won't matter. They would simply be buying a different item!

    Key takeaway
    IAs a general rule, it's never a good idea to completely trust the information that comes from the user. Sanitize the data, put information that's okay for the users to change, and implement other security measures as you'll be taught in a bit. -->
</body>

</html>