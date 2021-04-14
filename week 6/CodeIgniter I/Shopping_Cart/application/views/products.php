<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="navbar-brand" href="#"><button style="font-size:24px; color:red; float:left;" onclick="window.location='cart'">Go to Cart <i class="fa fa-shopping-cart"></i></button></a>
					</li>
				</ul>
			</div>
		</nav>
		<div style="padding-bottom:10px">
			<h1 class="text-center">Products</h1>

		</div>
		<div class="card-group">
			<table class="table" cellpadding="2px" width="600px">
				<?php
				foreach ($products as $product) {
					$id = $product['serial'];
					$name = $product['name'];
					$description = $product['description'];
					$price = $product['price'];
				?>
					<div class="card">
						<img class="card-img-top" src="<?php echo $product['picture'] ?>" height="50%;" alt="products">
						<div class="card-body">
							<h5 class="card-title"><?php echo $name; ?></h5>
							<p class="card-text"><?php echo $description; ?></p>
							<p class="card-text">
								<small class="text-muted">
									<h2>Price:
										<span style="color:green">
											<?php echo "$" . $price; ?>
										</span>
									</h2>
								</small>
							</p>
							<?php

							echo form_open('cart/add');
							echo form_hidden('id', $id);
							echo form_hidden('name', $name);
							echo form_hidden('price', $price);
							echo form_submit('action', 'Add to Cart');
							echo form_close();
							?>
						</div>
					</div>
				<?php } ?>
			</table>
		</div>
	</div>
</body>

</html>