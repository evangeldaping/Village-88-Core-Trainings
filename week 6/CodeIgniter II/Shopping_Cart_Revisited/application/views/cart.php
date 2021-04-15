<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script>
		function clear_cart() {
			var result = confirm('Are you sure want to clear all bookings?');

			if (result) {
				window.location = "<?php echo base_url(); ?>cart/remove/all";
			} else {
				return false; // cancel button
			}
		}
	</script>
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
						<a class="navbar-brand" href="#"><button style="font-size:24px; color:red; float:left;" onclick="window.location='products'">Continue Shopping <i class="fa fa-shopping-cart"></i></button></a>
					</li>
				</ul>
			</div>
		</nav>
		<div style="padding-bottom:10px">
			<h1 class="text-center">Your Shopping Cart</h1>
		</div>
		<div style="color:#F00"><?php echo $message ?></div>
		<table class="table table-hover table-striped">
			<?php if ($cart = $this->cart->contents()) : ?>
				<thead class="thead-dark">
					<tr>
						<th scope="col">Serial</th>
						<th scope="col">Name</th>
						<th scope="col">Price</th>
						<th scope="col">Qty</th>
						<th scope="col">Amount</th>
						<th scope="col">Options</th>
					</tr>
				</thead>
				<?php
				echo form_open('cart/update_cart');
				$grand_total = 0;
				$i = 1;
				foreach ($cart as $item) :
					echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
					echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
					echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
					echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
					echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
				?>
					<tbody>
						<tr>
							<td>
								<?php echo $i++; ?>
							</td>
							<td>
								<?php echo $item['name']; ?>
							</td>
							<td>
								$ <?php echo number_format($item['price'], 2); ?>
							</td>
							<td>
								<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
							</td>
							<?php $grand_total = $grand_total + $item['subtotal']; ?>
							<td>
								$ <?php echo number_format($item['subtotal'], 2) ?>
							</td>
							<td>
								<?php echo anchor('cart/remove/' . $item['rowid'], 'Cancel'); ?>
							</td>
						<?php endforeach; ?>
						</tr>
						<tr>
							<td><b>Order Total: $<?php echo number_format($grand_total, 2); ?></b></td>
							<td colspan="5" class="text-right"><input class="btn btn-danger" type="button" value="Clear Cart" onclick="clear_cart()">
								<input class="btn btn-success" type="submit" value="Update Cart">
								<?php echo form_close(); ?>
								<input class="btn btn-primary" type="button" value="Place Order" onclick="window.location='billing'">
							</td>
						</tr>
					<?php endif; ?>
					</tbody>
		</table>
	</div>
</body>

</html>