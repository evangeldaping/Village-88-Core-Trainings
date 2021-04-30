<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Notes 2</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
                var form = $(this);
                $.post(form.attr('action'), form.serialize(), function(data) {
                    $('#notes').html(data);
                });
                return false;
            });

            $(document).on('keyup', 'form.update_note textarea', function() {
                $(this).parent().submit();
            });

            $('form').submit();
        });
    </script>
</head>

<style>
    input,
    textarea {
        display: block;
        width: 250px;
        margin-bottom: 15px;
    }

    h3 {
        margin: 5px 0px;
    }

    .note {
        display: inline-block;
        width: 260px;
        height: 250px;
        padding: 5px;
        margin: 5px;
        border: 1px solid silver;
    }

    .note input {
        width: 100px;
        background-color: blue;
        color: white;
    }

    .note input.remove {
        width: 100px;
        background-color: red;
        color: white;
    }
</style>

<body>
    <h1>Ajax Notes</h1>

    <div id="notes"></div>

    <h2>Add a new note</h2>
    <form class="create_note" action="<?= site_url() . 'note/create'; ?>" method="post">
        Title:
        <input type="text" name="title" placeholder="title">
        Description:
        <textarea name="note" placeholder="Enter your description here"></textarea>
        <input type="submit" value="Create a new note">
    </form>
</body>

</html>