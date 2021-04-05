<?php session_start();  ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>The Wall - Login/Register</title>
	
	<style>
		.login_register {
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 25%;
		  text-align: center;
		}
		button:hover {
		  opacity: 0.8;
		}
		.red {
			color: red;
		}
		.form {
			margin-left: 150px;
		}
		.loginForm input{
			color: black;
		}
	</style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="img/the_wall.png" alt="the_wall_logo" class="img-circle" width="104" height="100">
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
                        <a class="nav-link" href="#">Lorem ipsum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lorem ipsum</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron bg-cover text-white" style="background-image: url('img/wall.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <div class="container">
                                <h1 class="display-4">Welcome to The Wall!</h1>
                                <hr class="my-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
                            <hr class="my-4">

                            <form class="loginForm" action="process.php" method="post">
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
                                    <button class="login_register" type="submit" value="login">Login</button>
                                </div>
                                <div class="form-group">
                                    <label for="registerHere">Not registered yet? <a href="#" data-toggle="modal" data-target="#myModal">Register Here</a></label>

                                </div>

                                <?php
                                if (isset($_SESSION['logErr'])) {
                                    foreach ($_SESSION['logErr'] as $message) {
                                        echo "<h5 class='red'>{$message}</h5>";
                                    }
                                    unset($_SESSION['logErr']);
                                }
                                ?>
								 <?php
                                    if (isset($_SESSION['regErr'])) {
                                        foreach ($_SESSION['regErr'] as $message) {
                                            echo "<h5 class='red'>{$message}</h5>";
                                        }
                                        unset($_SESSION['regErr']);
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
                                        <input type="password" name="password2"> <br>
                                    </div>
                                    <div class="form-group">
                                        <button class="login_register" type="submit" value="register">Register</button>
                                    </div>
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
        <hr class="my-6">
        <footer class="bg-light text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Welcome to The Wall!</h5>
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
                <a class="text-dark" href="#">theWall.com</a>
            </div>
        </footer>
    </div>
</body>

</html>