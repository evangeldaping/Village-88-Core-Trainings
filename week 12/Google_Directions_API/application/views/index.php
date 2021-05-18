<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Google Directions API</title>

    <script>
        $(document).ready(function() {
            $('#search').submit(function() {
                $.post($(this).attr('action'), $(this).serialize(), function(dir) {
                    $('#directions').html(dir);
                });
                return false;
            });
        });
    </script>
</head>

<body>
    <div class="container login-container">
        <div class="col-md-12 login-form-1">
            <form action="maps/direction" method="post" id="search">
                <label for="from_address">From: </label>
                <div class="form-group">
                    <input type="text" class="form-control" name="from_address">
                </div>
                <label for="to_address">To: </label>
                <div class="form-group">
                    <input type="text" class="form-control" name="to_address">
                </div>
                <div class="form-group">
                    <input type="submit" value="Get Directions!" class="btn btn-default">
                </div>
            </form>
        </div>
        <div class="container login-container" id="directions">

        </div>
    </div>
    </div>
</body>

</html>