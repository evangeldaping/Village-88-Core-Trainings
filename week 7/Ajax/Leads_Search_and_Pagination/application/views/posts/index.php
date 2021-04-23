<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Search and Pagination</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script> -->
    <script>
        function searchFilter(page_num) {
            page_num = page_num ? page_num : 0;
            var keywords = $('#keywords').val();
            var sortBy = $('#sortBy').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('/posts/ajaxPaginationData/'); ?>' + page_num,
                data: 'page=' + page_num + '&keywords=' + keywords + '&sortBy=' + sortBy,
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(html) {
                    $('#dataList').html(html);
                    $('.loading').fadeOut("slow");
                }
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <!-- Search form -->
        <div class="post-search-panel">
            <input type="text" id="keywords" placeholder="Search first name" onkeyup="searchFilter();" />
            <select id="sortBy" onchange="searchFilter();">
                <option value="">Sort by Name</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
        </div>

        <div class="post-list" id="dataList">
            <table id="clientsLeadsTable" class="table table-striped table-bordered table-hover" style="width:1000px;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">leads_id</th>
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
                        <th scope="col">registered datetime</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Display posts list -->
                    <?php if (!empty($posts)) {
                        foreach ($posts as $row) { ?>
                            <tr>
                                <td><?php echo $row["id"];  ?></td>
                                <td><?php echo $row["first_name"];  ?></td>
                                <td><?php echo $row["last_name"]; ?></td>
                                <td><?php echo $row["created_at"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                            </tr>
                        <?php }
                    } else { ?>
                        <p>Post(s) not found...</p>
                    <?php } ?>
                </tbody>
            </table>

            <!-- Render pagination links -->
            <?php echo $this->ajax_pagination->create_links(); ?>
        </div>

        <!-- Loading Image -->
        <div class="loading" style="display: none;">
            <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>" /></div>
        </div>
    </div>
</body>

</html>