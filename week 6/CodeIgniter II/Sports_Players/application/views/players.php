<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports Players</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>asset/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet">
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

    #loading {
        text-align: center;
        background-image: url('<?php echo base_url(); ?>images/loader.gif') no-repeat center;
        height: 150px;
    }
</style>

<body>
    <!-- Page Content -->
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
                        <input type="text" name="name_search" id="search_box" class="form-control input-lg typeahead" placeholder="name" />
                        <?php
                        foreach ($gender->result_array() as $row) {
                        ?>
                            <div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="common_selector gender" id="female" name="key" value="<?php echo $row['gender']; ?>">

                                    <?php echo $row['gender']; ?>
                                </label><br>
                            </div>
                        <?php
                        }
                        ?>

                        <label>Sports</label><br>
                        <?php
                        foreach ($sports->result_array() as $row) {
                        ?>
                            <div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="common_selector sports" id="female" name="key" value="<?php echo $row['sports']; ?>">
                                    <?php echo $row['sports']; ?>
                                </label><br>
                            </div>
                        <?php
                        }
                        ?>
                        <button type="submit" class="form-control btn btn-primary" name="submit" value="Search">Search</button>
                    </form>
                </div>

                <div class="col-md-10">
                    <div class="col-md-12">
                        <br /><br />
                        <!--class for showing images-->
                        <div align="center" class="row filter_data">

                        </div>
                        <!--class for showing pagination-->
                        <div align="center" id="pagination_link">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // $("button").click(function() {
            filter_data(1);

            function filter_data(page) {
                $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';

                var gender = get_filter('gender');
                var sports = get_filter('sports');
                var name = get_filter('name');
                $.ajax({
                    url: "<?php echo base_url(); ?>player_filter/fetch_data/" + page,
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        action: action,
                        gender: gender,
                        sports: sports,
                        name: name
                    },
                    success: function(data) {
                        $('.filter_data').html(data.player_list);
                        $('#pagination_link').html(data.pagination_link);
                    }
                })
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $(document).on('click', '.pagination li a', function(event) {
                event.preventDefault();
                var page = $(this).data('ci-pagination-page');
                filter_data(page);
            });

            $('.common_selector').click(function() {
                filter_data(1);
            });
        });
        // });
    </script>

</body>

</html>