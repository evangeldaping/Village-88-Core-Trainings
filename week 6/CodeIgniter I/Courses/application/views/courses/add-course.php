<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" media="all">
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
				<img src="https://media2.giphy.com/media/xT8qBt3pdiCZrk3erS/source.gif" class="img-circle" alt="coding dojo" width="104" height="100">
			</a>
		</nav>
		<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://frugalfun4boys.com/wp-content/themes/frugal/assets/img/objects.png)">
			<div class="row">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div id="wrapper">
								<h2>Add a new course</h2>
								<?php
								// Load the form helper
								$this->load->helper('form');
								// Load the form_validation library
								$this->load->library('form_validation');

								$this->load->helper('url');
								?>
								<div class="error">
									<?php
									// Show validation errors if they exist
									echo validation_errors();
									?>
								</div>

								<form action="<?php echo site_url() . '/courses/add'; ?>" method="post" id="add-course">
									<input type="hidden" name="add_course" />
									<label for="name">Name:</label><br />
									<input style="color:black;" type="text" name="course_name" value="<?php echo set_value('course_name'); ?>" /><br /><br />
									<label for="description">Description:</label><br />
									<input style="color:black;" type="text" name="description" value="<?php echo set_value('description'); ?>" /><br /><br />
									<input class="btn btn-success" type="submit" value="Add" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>