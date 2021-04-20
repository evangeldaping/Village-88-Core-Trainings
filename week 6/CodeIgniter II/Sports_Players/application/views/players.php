<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Players</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    * {
        color: hotpink;
    }

    .players {
        margin-bottom: 10px;
        margin-right: 10px;
        float: left;
        padding: 5px;
        text-align: center;
    }

    .players::after {
        content: "";
        clear: both;
        display: table;
    }

    .players img {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Star-Sports-Logo-PNG-Image.png" alt="sports" width="200px" height="200px" style="margin-top:-70px;">
            </a>
        </nav>
        <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://toppng.com/uploads/preview/sports-30-icons-information-technology-icon-11553443196ekawkmohqn.png)">
            <div class="row">
                <div class="col-md-2">
                    <form action="" method="post" class="mb-3">
                        <label>Search Users</label><br>
                        <input type="text" class="form-control" id="search" name="key" placeholder="name"><br>

                        <label>Female</label>
                        <input type="checkbox" class="common_selector female" id="female" name="key" value="Female"><br>

                        <label>Male</label>
                        <input type="checkbox" class="common_selector male" id="female" name="key" value="Male"><br><br>


                        <label>Sports</label><br>
                        <label>Basketball</label>
                        <input type="checkbox" class="common_selector basketball" id="basketball" name="key" value="Basketball"><br>

                        <label>Volleyball</label>
                        <input type="checkbox" class="common_selector volleyball" id="volleyball" name="key" value="Volleyball"><br>

                        <label>Baseball</label>
                        <input type="checkbox" class="common_selector baseball" id="baseball" name="key" value="Baseball"><br>

                        <label>Soccer</label>
                        <input type="checkbox" class="common_selector soccer" id="soccer" name="key" value="Soccer"><br>

                        <label>Football</label>
                        <input type="checkbox" class="common_selector football" id="football" name="key" value="Football"><br>

                        <input type="submit" class="form-control btn btn-primary" name="submit" value="Search">
                    </form>
                </div>

                <div class="col-md-10">
                    <?php if ($sports_players) : ?>
                        <?php foreach ($sports_players as $row) : ?>
                            <div class="col-sm-4 ">
                                <div class="card-columns-fluid players">
                                    <div class="card  bg-light">
                                        <img src="<?php echo base_url() ?>images/<?= $row->image;  ?>" class="card-img-top" alt="players">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row->name; ?></h5>
                                            <h5 class="card-title"><?= $row->sports; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h3>Player's name not found.</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>