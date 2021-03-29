<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimensional Arrays</title>
</head>

<body>
    <main>
        <!-- Multi-dimensional Arrays
        Earlier we mentioned that we can store different data types in an array. This includes other arrays!



        A multidimensional array is an array in which each element can also be an array and each element in the sub-array can be an array. PHP multidimensional arrays can commonly go up to two, three, four levels deep, and even much more beyond that. However, most people will find it hard to manage if arrays go up to three levels deep, so let's not dig deep into that level or we might end up in limbo! (pun intended)

        An example of a 2-dimensional array will look something like below:

        $exams = array(array(), array(), array());
        var_dump($exams);
        Result:



        In terms of syntax, multidimensional arrays are just like normal arrays. The only difference is that the values inside the $exams array variable contain arrays as values! The result is still the same. The result above tells us that we have an array with 3 items inside it (size=3). These items are all empty arrays with keys 0,1, and 2 all pointing to each empty arrays respectively.

        Below is an example of how you could use it in the real world:

        $exams = array(
        array(
        'title' => 'Yellow Belt Exam',
        'language' => 'HTML & CSS'
        ),
        array(
        'title' => 'Red Belt Exam',
        'language' => 'PHP using CodeIgniter'
        ),
        array(
        'title' => 'Black Belt Exam',
        'language' => 'Ruby using Ruby on Rails'
        )
        );
        And to access it manually, we do:

        echo $exams[0]['title'];
        //prints out 'Yellow Belt Exam'
        Cool, huh? If you remember back to the loops tab, we use the foreach loop to iterate through an array. Using concatenation, we can do something like this:

        foreach($exams as $exam) {
        echo "<p>" . $exam['title'] ."-". $exam['language'] . "</p>";
        }
        As mentioned on the variables tab, we can implement the better way of printing both strings and variables like this:

        foreach($exams as $exam) {
        echo "<p> $exam['title'] - $exam['language'] </p>";
        }
        But wait... When you run the code above you will receive a very weird error message:



        The problem is that PHP requires you to tell it explicitly when the variable you are retrieving is coming from an associative array. To do this, we need to enclose the entire reference to the array and variable within curly braces. So the correct code would be:

        foreach($exams as $exam) {
        echo "<p> {$exam['title']} - {$exam['language']} </p>";
        }
        Result: -->
    </main>
</body>

        <?php
        $exams = array(
            array(
                'title' => 'Yellow Belt Exam',
                'language' => 'HTML & CSS'
            ),
            array(
                'title' => 'Red Belt Exam',
                'language' => 'PHP using CodeIgniter'
            ),
            array(
                'title' => 'Black Belt Exam',
                'language' => 'Ruby using Ruby on Rails'
            )
        );
        echo $exams[0]['title'];
        //prints out 'Yellow Belt Exam'

        foreach ($exams as $exam) {
            echo "<p>" . $exam['title'] . "-" . $exam['language'] . "</p>";
        }

        foreach($exams as $exam) {
            echo "<p> $exam['title'] - $exam['language'] </p>";
        }

        foreach ($exams as $exam) {
            echo "<p> {$exam['title']} - {$exam['language']} </p>";
        }

        // Result:
        // Yellow Belt Exam - HTML & CSS
        // Red Belt Exam - PHP using CodeIgniter
        // Black Belt Exam' - Ruby using Ruby on Rails




        ?>

</html>