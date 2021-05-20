<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<title>HTTP Analyzer</title>

	<style>
		*,
		*::before,
		*::after {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		header {
			position: relative;
			background-color: gray;
			padding: 1em;
			color: white;
		}

		header h2,
		header form {
			display: inline-block;
			vertical-align: middle;
		}

		form {
			position: absolute;
			top: 1em;
			right: 2em;
		}

		input[type="url"] {
			border: none;
			padding: 0.5em;
			border-radius: 5px;
		}

		input[type="submit"] {
			border: none;
			padding: 0.5em;
			border-radius: 5px;
			background-color: blue;
			cursor: pointer;
			color: #fff;
			box-shadow: 3px 3px 5px #000;
		}

		div.results {
			width: 1080px;
			margin: 3em auto;
		}

		table,
		.source {
			display: inline-block;
			vertical-align: top;
			width: 450px;
		}

		table {
			border-collapse: collapse;
		}

		tr:nth-child(even) {
			background-color: #d3d3d3;
		}

		th,
		tr {
			padding: 0.5em;
			text-align: left;
		}

		th {
			background-color: darkslategrey;
			color: white;
		}

		div.source div {
			overflow: scroll;
			width: 600px;
			height: 400px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<header>
			<h2>HTTP Analyzer</h2>
			<form action="analyzer/parseUrl" method="post">
				<label for="url">URL to fetch by Ajax</label>
				<input type="url" name="url" id="url">
				<input type="submit" value="Analyze">
			</form>
		</header>
		<div class="results">
			<table>
				<thead>
					<tr>
						<th>HTML Tag</th>
						<th>Number of Appearances</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<div class="source">
				<h2>HTTP Response</h2>
				<div></div>
			</div>
		</div>
	</div>
	<script src="<?= base_url(); ?>assets/js/index.js"></script>
</body>

</html>