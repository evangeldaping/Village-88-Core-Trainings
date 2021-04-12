<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Courses</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" media="all">
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

			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Date Added</th>
						<th colspan="3">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach(array_reverse($courses) as $row)
					{
					?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo ucfirst($row['course_name']); ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php $date = $row['created_at'];
								      echo date('F jS Y H:iA',strtotime($date));
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