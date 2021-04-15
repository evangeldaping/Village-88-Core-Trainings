<?php
$grand_total = 0;

if ($cart = $this->cart->contents()) :
    foreach ($cart as $item) :
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Billing Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                        <a class="navbar-brand" href="#"><button style="font-size:24px; color:red; float:left;" onclick="window.location='products'">Continue Shopping <i class="fa fa-shopping-cart"></i></button></a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#"><button style="font-size:24px; color:red; float:left;" onclick="window.location='cart'">Go to Cart <i class="fa fa-shopping-cart"></i></button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <?php echo form_open('billing/save_order'); ?>
            <input type="hidden" name="command" />
            <h1 class="text-center">Billing Info</h1>
            <div class="form-group">
                <h2>Order Total:
                    <span class="badge badge-primary text-wrap" style="font-size:35px; color:white;">$<?php echo number_format($grand_total, 2); ?></span>
                </h2>
            </div>
            <div class=" form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="card">Card #:</label>
                <input type="text" class="form-control" name="card" id="card" placeholder="Card #" required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>

</html>