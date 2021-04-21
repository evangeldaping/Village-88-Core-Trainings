<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Products</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/JQuery/v2.0.3/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/bootstrap-3.0.3-dist/dist/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/JQuery/tablesorter/jquery.tablesorter.min.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("table").tablesorter({
                sortList: [
                    [0, 0]
                ]
            });
        });
    </script>
</head>
<style>
    .success {
        color: green;
        font-size: 20px;
    }

    .table-sortable>thead>tr>th {
        cursor: pointer;
        position: relative;
    }

    .table-sortable>thead>tr>th:after,
    .table-sortable>thead>tr>th:after,
    .table-sortable>thead>tr>th:after {
        content: ' ';
        position: absolute;
        height: 0;
        width: 0;
        right: 10px;
        top: 16px;
    }

    .table-sortable>thead>tr>th:after {
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #ccc;
        border-bottom: 0px solid transparent;
    }

    .table-sortable>thead>tr>th:hover:after {
        border-top: 5px solid #888;
    }

    .table-sortable>thead>tr>th.asc:after {
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 0px solid transparent;
        border-bottom: 5px solid #333;
    }

    .table-sortable>thead>tr>th.asc:hover:after {
        border-bottom: 5px solid #888;
    }

    .table-sortable>thead>tr>th.desc:after {
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #333;
        border-bottom: 5px solid transparent;
    }
</style>

<body>
    <div class="container">
        <h1>Product Listing:</h1>
        <div class="success">
            <?php
            // Show a success message if a product
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

        <table class="table table-hover table-sortable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="asc">Id</th>
                    <th scope=" col" class="asc">Product Name</th>
                    <th scope="col" class="asc">Price ($)</th>
                    <th scope="col" class="asc">Date Added</th>
                    <th scope="col" colspan=" 3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (array_reverse($products) as $row) {
                ?>
                    <tr>
                        <td><?php echo ucfirst($row['id']); ?></td>
                        <td><?php echo ucfirst($row['product_name']); ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php $date = $row['created_at'];
                            echo date('F j Y', strtotime($date));
                            ?>
                        </td>
                        <td class="border-bottom-right">
                            <a class="btn btn-danger" href="<?php echo site_url() . '/products/destroy/' . $row['id']; ?>">Delete</a>
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