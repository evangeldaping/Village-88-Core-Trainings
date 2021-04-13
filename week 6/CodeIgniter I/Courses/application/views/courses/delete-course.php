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
						<div class="col-md-12">
							<div class="container">
								<h3>Are you sure you want to delete the following course?</h3>
								<p>Name: <?php echo $single_record['course_name']; ?></p>
								<p>Description: <?php echo $single_record['description']; ?></p>
								<div class="col-md-2">
									<form action="<?php echo site_url() . '/courses/add/' ?>" method="post">
										<input class="btn btn-secondary" type="submit" value="No" />
									</form>
								</div>
								<div class="col-md-2">
									<form action=" <?php echo site_url() . '/courses/destroy/' . $single_record['id']; ?>" method="post">
										<input type="hidden" name="remove_course" value="<?php echo $single_record['id'];; ?>" />
										<input class="btn btn-danger" type="submit" value="Yes! I want to delete this" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>