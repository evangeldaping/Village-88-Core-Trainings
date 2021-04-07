<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport" />
<meta name="viewport" content="width=device-width" />
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  
     <!-- jQuery library file -->
     <script type="text/javascript" 
     src="https://code.jquery.com/jquery-3.5.1.js">
     </script>
  
      <!-- Datatable plugin JS library file -->
     <script type="text/javascript" src=
"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
     </script>

<title>CSV Web App With Pagination</title>
	
	
	<style>
		.container{
			margin-left: 150px;
		}
	</style>
</head>

<body>

<div class="container">
<?php
    echo "<h3>CSV Web App With Pagination</h3><br />\n"; 
    echo "<form enctype='multipart/form-data' action='index.php' method='post'>"; 
    echo "File name to import:<br /><br />\n";
    echo '<input type="file" class="filestyle" name="filename" data-iconName="glyphicon-inbox" required><p>&nbsp;&nbsp;</p><p></p>';
    echo "<input class='btn btn-primary'  type='submit' name='submit' value='import'><p></p></form>";

if (isset($_POST['submit'])) {
	ini_set("auto_detect_line_endings", true);
	$handle = fopen($_FILES['filename']['tmp_name'], "r"); 
	// Create a table from a csv file ?>
	<table class="table table-bordered table-hover table-striped" id="tabledata">
		<tbody>
		<?php	
		$p = (isset($_GET['p']))?$_GET['p']:1;

		if(($f = fopen($_FILES['filename']['tmp_name'], "r")) !== null){
			while (($line = fgetcsv($f)) !== false) {
				echo '<tr>';
				foreach ($line as $cell) {
						 echo "<td>" . htmlspecialchars($cell) . "</td>";
				 }		
				echo "<tr>";
			}
			fclose($f);
			?>
		</tbody>
	</table>
		

<?php	}else{
		die('Oh my god.');
	} 
}    ?>   
<script>
		$(document).ready(function() {
			$('#tabledata').DataTable( {
				"pagingType": "full_numbers"
			} );
		} );
	</script>
	
</div>
</body>
</html>