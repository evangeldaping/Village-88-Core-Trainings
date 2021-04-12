<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Courses</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" media="all">
	</head>
	<body>
		<div id="wrapper">
			<h1>Add a new course</h1>
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
				<input type="hidden" name="add_course"/>
				<p>
					<label for="name">Name:</label><br />
					<input type="text" name="course_name" value="<?php echo set_value('course_name'); ?>"/>
				</p>

				<p>
					<label for="description">Description:</label><br />
					<input type="text" name="description" value="<?php echo set_value('description'); ?>"/>
				</p>

				<p>
					<input type="submit" value="Add"/>
				</p>
			</form>
		</div>
	</body>
</html>