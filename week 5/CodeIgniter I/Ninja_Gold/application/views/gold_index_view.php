<?php
date_default_timezone_set('America/Los_Angeles');
// echo base_url();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold</title>
	<link rel="stylesheet" text="text/css" href="./assets/css/css.css">
</head>
<style>
* {
	font-family: arial;
	margin:0;
	padding:0;
}
body {
	margin: 0 auto;
	width: 1000px;
	padding: 20px;
}
h3 {
	padding: 0 0 20px 0;
}
h2 {
	padding: 10px 0;
}
.gain {
	color:green;
}
.lost {
	color:red;
}
.choose_path_wrapper {
	position:relative;
	border:1px solid black;
	width: 140px;
	margin: 12px;
	display: inline-block;
	vertical-align: top;
	padding: 40px;
	text-align: center;
	height: 130px;
}
.choose_path_wrapper form {
	position: absolute;
	bottom:40px;
	left:80px;
}
.choose_path_wrapper input, #reset_button {
	border:1px solid black;
	background-color: white;
	padding: 5px 10px;
	box-shadow: 2px 2px 0 0 black;
}
.inner {
	overflow: auto;
	height:200px;
}
#header {
	margin: 10px 0;
}
#gold {
	display: inline-block;
	border:1px solid black;
	padding: 5px 30px;
	width: 300px;
}
#activity_wrapper {
	border:1px solid black;
	width: 930px;
	padding: 20px;
	margin: 0 auto;
	overflow: auto;
	height: 200px;
}
#reset_button {
	background-color: red;
	color:white;
	font-weight:bold;
	letter-spacing: 1px;
	margin: 15px 0;
	width: 200px;
}
</style>
<body>
	<div id="header">
		<h1>Your Gold: <div id="gold"><?= $this->session->userdata('gold') ?> Gold</div></h1>
	</div>
	<div class="choose_path_wrapper">
		<h3>Farm</h3>
		<p>(earns 10-20 gold)</p>
		<?php $this->load->helper('form');  echo form_open('ninjagold/farm'); ?>
			<input type="submit" value="Find Gold!">
		<?php echo form_close(); ?>
	</div>
	<div class="choose_path_wrapper">
		<h3>Cave</h3>
		<p>(earns 5-10 gold)</p>
		<?php $this->load->helper('form');  echo form_open('ninjagold/cave'); ?>
			<input type="submit" value="Find Gold!">
		<?php echo form_close(); ?>
	</div>
	<div class="choose_path_wrapper">
		<h3>House</h3>
		<p>(earns 2-5 gold)</p>
		<?php $this->load->helper('form');  echo form_open('ninjagold/house'); ?>
			<input type="submit" value="Find Gold!">
		<?php echo form_close(); ?>
	</div>
	<div class="choose_path_wrapper">
		<h3>Casino</h3>
		<p>(earns/takes 0-50 gold)</p>
		<?php $this->load->helper('form');  echo form_open('ninjagold/casino'); ?>
			<input type="submit" value="Find Gold!">
		<?php echo form_close(); ?> 
	</div>
	<h2>Activities:</h2>
	<div id="activity_wrapper">
		<div class="inner">
		<?php
		$logger = $this->session->userdata('activity_logger');
		foreach ($logger as $message) {
			echo $message;
		}
		?>
		</div>
	</div>
	 <?php $this->load->helper('form');  echo form_open('reset'); ?>
		<input id="reset_button" type="submit" value="Reset Game">
	 <?php echo form_close(); ?> 
</body>
</html>
