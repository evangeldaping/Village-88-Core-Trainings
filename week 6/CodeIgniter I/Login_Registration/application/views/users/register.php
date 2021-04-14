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
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
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
								<h1 class="display-4">Registration</h1>
								<hr class="my-4">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste totam illo fugit dolore! Deleniti, reiciendis.</p>
							<hr class="my-4">

							<form method="post">
								<div class="form-group" style="color: black;">
									<input type="text" name="first_name" placeholder="enter first name" value="<?php echo !empty($user['first_name']) ? $user['first_name'] : ''; ?>" />
									<?php echo form_error('first_name', '<span style="color:red" class="help-block">', '</span>'); ?>
								</div>
								<div class="form-group" style="color: black;">
									<input type="text" name="last_name" placeholder="enter last name" value="<?php echo !empty($user['last_name']) ? $user['last_name'] : ''; ?>" />
									<?php echo form_error('last_name', '<span style="color:red" class="help-block">', '</span>'); ?>
								</div>
								<div class="form-group" style="color: black;">
									<input type="text" name="email" placeholder="enter email" value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>" />
									<?php echo form_error('email', '<span style="color:red" class="help-block">', '</span>'); ?>
								</div>
								<div class="form-group" style="color: black;">
									<input type="text" name="password" placeholder="enter password" />
									<?php echo form_error('password', '<span style="color:red" class="help-block">', '</span>'); ?>
								</div>
								<div class="form-group" style="color: black;">
									<input type="text" name="cpassword" placeholder="confirm password" />
									<?php echo form_error('cpassword', '<span style="color:red" class="help-block">', '</span>'); ?>
								</div>
								<div class="cellSpace">
									<input class="btn btn-success" type="submit" name="submit" value="submit" />
								</div>
								<div>
									<span>Already have an account? click <a href="<?php echo base_url(); ?>index.php//users/login">here</a> to login.</span>
								</div>
							</form>
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
				<a class="text-dark" href="#">LoginRegistration.com</a>
			</div>
		</footer>
	</div>



</body>

</html>