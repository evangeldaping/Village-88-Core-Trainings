<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
	<style>
		body {
			width: 500px;
			margin: 50px auto;
			text-align: center;
		}
		h1 {
			background-color: black;
			color: white;
			padding: 15px;
		}
		input[type=submit] {
		  width: 100%;
		  background-color: #2B78E4;
		  color: black;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  box-shadow: 10px 10px;
		}
		input[type=submit]:hover {
		  background-color: blue;
		  color: white;
		}
	</style>
</head>
<body>
<?php $this->load->helper('form'); 
	  echo form_open('wordgenerator/random'); ?>
	
		<h4>Random Word (Attempt # <?php echo $count ?>)</h4>
		<h1><?php echo $string ?></h1>
		<input type="submit" value="Generate!">
	<?php echo form_close(); ?> 
</body>
</html>