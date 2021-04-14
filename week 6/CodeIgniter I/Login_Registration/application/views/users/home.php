<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://codecondo.com/wp-content/uploads/2017/04/Coding-Dojo.png" class="img-circle" alt="coding dojo" width="104" height="100">
            </a>
        </nav>
        <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div>
                            <div class="container">
                                <?php $this->output->enable_profiler(TRUE); ?>
                                <h1 class="display-4"><?php echo 'Welcome ' . ucfirst($udata->first_name) . '!'; ?></h1>
                                <hr class="my-4">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label><?php echo 'First Name: ' . ucfirst($udata->first_name); ?></label>
                                </div>

                                <div class="form-group">
                                    <label><?php echo 'Last Name: ' . ucfirst($udata->last_name); ?></label>
                                </div>

                                <div class="form-group">
                                    <label><?php echo 'Email Address: ' . $udata->email; ?></label>
                                </div>

                                <div class="form-group">
                                    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/users/logout">logout</a>
                                </div>
                            </form>
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
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU6mB893ur9kE4bqcX6rThtvdCGuzJYdcol1GNOczh0xQjhGcP39tUPkRd09tF_GdSKg4&usqp=CAU" class="img-circle" alt="HTML" width="50" height="50">
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
                        <img src="https://cdn.345tool.com/public/logos/css-formatter-logo.png" class="img-circle" alt="CSS" width="50" height="50">
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
                        <img src="data:image/png;base64,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" class="img-circle" alt="Javascript width=" 50" height="50">
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
                        <img src="https://e7.pngegg.com/pngimages/377/159/png-clipart-php-web-development-scripting-language-programming-language-computer-programming-saintgermainenlaye-blue-emblem.png" class="img-circle" alt="PHP" width="50" height="50">
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
                        <h5 class="text-uppercase">Login and Registration</h5>
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
                <a class="text-dark" href="#">LoginRegistration.com</a>
            </div>
        </footer>
    </div>