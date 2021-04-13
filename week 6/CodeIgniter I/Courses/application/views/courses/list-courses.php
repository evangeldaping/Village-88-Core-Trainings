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
	<div id="wrapper">
		<h1>Courses</h1>
		<div class="success">
			<?php
			// Show a success message if a course
			// has been added into the database
			echo $this->session->userdata('message');
			// After that unset the session variable
			$this->session->unset_userdata('message');

			// Show a session variable on a successful
			// record delete
			echo $this->session->userdata('delete_success');
			$this->session->unset_userdata('delete_success');
			?>
		</div>

		<table class="table table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col"> Date Added</th>
					<th scope="col" colspan=" 3">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach (array_reverse($courses) as $row) {
				?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo ucfirst($row['course_name']); ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php $date = $row['created_at'];
							echo date('F jS Y H:iA', strtotime($date));
							?>
						</td>
						<td class="border-bottom-right">
							<a href="<?php echo site_url() . '/courses/show/' . $row['id']; ?>">remove</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>