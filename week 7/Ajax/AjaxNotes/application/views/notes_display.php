<!DOCTYPE html>
<html>

<head>
	<title>Ajax Notes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$.post(
				'http://localhost/AjaxNotes/notes/load',
				function(output) {
					$('.notes-area').html(output)
				});

			$('#titleForm').on('submit', function() {
				$.post(
					$('#titleForm').attr('action'),
					$('#titleForm').serialize(),
					function(data) {
						$('.notes-area').html(data);
					});
				return false;
			});

			$(document).on('focusout', 'textarea', function() {
				var form = $(this).parent();
				$.post(
					form.attr('action'),
					form.serialize(),
					function(data) {
						$('.notes-area').html(data);
					});
				return false;
			});

			$(document).on('click', '#delete', function() {
				event.preventDefault();
				var form = $(this);
				$.post(form.attr('href'),
					form.serialize(),
					function(data) {
						// console.log(data_shown);
						$('.notes-area').html(data);
					}
				);
				// return false;
			});
		});
	</script>
	<style>
		body {
			background: rgb(2, 0, 36);
			background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 121, 104, 0.6292892156862745) 0%, rgba(0, 212, 255, 0.727328431372549) 86%);
			padding-left: 20px;
		}

		h1 {
			margin-bottom: 0px;
		}

		.full-note {
			display: inline-block;
		}

		.note-box {
			height: 300px;
			width: 200px;
			/*border:1px solid black;*/
			margin: 10px;
			padding: 10px;
			display: inline-block;
		}

		.description-box {
			height: 220px;
			width: 195px;
			/*border:1px solid black;*/
			padding: 10px;
			display: inline-block;
			background-color: #FFEF00;
		}

		.textbox {
			height: 200px;
			width: 175px;
			background-color: #FFEF00;
			border: 0px;
		}

		#titleForm {
			margin-top: 20px;
		}

		h2 {
			display: inline-block;
			margin-top: 5px;
		}

		p {
			display: inline-block;
			margin-left: 40px;
		}
	</style>
</head>

<body>
	<div class='container'>
		<h1>Notes</h1>
		<form id='titleForm' action='http://localhost/AjaxNotes/notes/title_add' method='post'>
			<div class="form-group">
				<input type='text' name='title' placeholder='Insert note title here...'><br><br>
				<input class="btn btn-primary btn-sm" type='submit' value='Add Note'>
			</div>
		</form>
		<div class='notes-area'>
		</div>
	</div>

</body>

</html>