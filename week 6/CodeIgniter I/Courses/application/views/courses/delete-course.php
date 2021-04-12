<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Courses</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" media="all">
	</head>
	<body>

		<div id="wrapper">
			
			<h1>Are you sure you want to delete the following course?</h1>
			
			 <table>
				  <tbody>		
					<tr>
						<td>Name:</td>
						<td><?php echo $single_record['course_name']; ?></td>
					 </tr>
					 <tr>
						<td>Description:</td>
						<td><?php echo $single_record['description']; ?></td>
					</tr>      
					<tr>
						<td>
							<form action="<?php echo site_url() . '/courses/add/' ?>" method="post">
								<input type="submit" value="No"/>
							</form>
						</td>
						<td class="border-bottom-right">
							<form action="<?php echo site_url() . '/courses/remove/' . $single_record['id']; ?>" method="post">
								<input type="hidden" name="remove_course" value="<?php echo $single_record['id'];; ?>"/>
								<input type="submit" value="Yes! I want to delete this"/>
							</form>
						</td>
					</tr>			
				</tbody>
			</table>
		</div>
	</body>
</html>