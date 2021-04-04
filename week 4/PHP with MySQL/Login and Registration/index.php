<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/classic.png" class="img-circle" alt="classic me" width="104" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <div class="container">
                                <h1 class="display-4">Welcome to my world!</h1>
                                <hr class="my-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
                            <hr class="my-4">

                            <form action="process.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="action" value="login">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label> <br>
                                    <input type="text" name="email"> <br>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label> <br>
                                    <input type="password" name="password"> <br>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="login">
                                </div>
                                <div class="form-group">
                                    <label for="registerHere">Not registered yet? <a href="#" data-toggle="modal" data-target="#myModal">Register Here</a></label>

                                </div>

                                <?php
                                if (isset($_SESSION['errors'])) {
                                    foreach ($_SESSION['errors'] as $error) {
                                        echo "<h5 class='error'>{$error}</h5>";
                                    }
                                    unset($_SESSION['errors']);
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Registration</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form">
                                <form action="process.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="action" value="register">
                                    </div>
                                    <div class="form-group">
                                        <label for="first">First name:</label> <br>
                                        <input type="text" name="first_name" pattern="[A-Za-z]{3,}" title="Letters only - At least three minimum."> <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="last">Last name:</label> <br>
                                        <input type="text" name="last_name" pattern="[A-Za-z]{3,}" title="Letters only - At least three minimum."> <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAdd">Email address:</label> <br>
                                        <input type="text" name="email"> <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Password:</label> <br>
                                        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPass">Confirm Password:</label> <br>
                                        <input type="password" name="confirm_password"> <br>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="register">
                                    </div>
                                    <?php
                                    if (isset($_SESSION['errors'])) {
                                        foreach ($_SESSION['errors'] as $error) {
                                            echo "<p class='error'>{$error}</p>";
                                        }
                                        unset($_SESSION['errors']);
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="display-4">Courses Offered</h1>
        <div class="row">
            <div class="col-md-3 d-flex justify-content-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="images/HTML.png" class="img-circle" alt="classic me" width="50" height="50">
                    </li>
                </ul>
                <div class="container">
                    <h4>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                    </h4>
                    <a class="btn btn-primary" href="#" role="button">See more details</a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="images/CSS.png" class="img-circle" alt="classic me" width="50" height="50">
                    </li>
                </ul>
                <div class="container">
                    <h4>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                    </h4>
                    <a class="btn btn-primary" href="#" role="button">See more details</a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="images/JavaScript.png" class="img-circle" alt="classic me" width="50" height="50">
                    </li>
                </ul>
                <div class="container">
                    <h4>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                    </h4>
                    <a class="btn btn-primary" href="#" role="button">See more details</a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="images/bootstrap.png" class="img-circle" alt="classic me" width="50" height="50">
                    </li>
                </ul>
                <div class="container">
                    <h4>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                    </h4>
                    <a class="btn btn-primary" href="#" role="button">See more details</a>
                </div>
            </div>
        </div>
        <hr class="my-6">
        <footer class="bg-light text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Welcome to my World!</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                            voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-dark">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0">Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-dark">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-dark" href="#">myWorld.com</a>
            </div>
        </footer>
    </div>
</body>

</html>