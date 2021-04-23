<!-- <link href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script> -->

<!-- Display input for Dates -->
<!-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" id="Date1" name="Date1" placeholder="first date" aria-label="Search">
    <input class="form-control mr-sm-2" type="text" id="Date2" name="Date2" placeholder="last date" aria-label="Search">
    <input class="form-control mr-sm-2" type="search" id="key" name="key" placeholder="Search" aria-label="Search">
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit" value="Search">
</form> -->

<!-- Display posts list -->
<table id="clientsLeadsTable" class="table table-striped table-bordered table-hover" style="width:1000px">
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

<!-- Render Datepicker -->
<!-- <script type="text/javascript">
    $("#Date1").val("");
    $("#Date2").val("");
    $('#submit').click(function() {
        var x = 1;
        var Date1 = $('#Date1').val();
        var Date2 = $('#Date2').val();
        var key = $('#key').val();
        if (key == "" && Date1 == "" && Date2 == "") {
            $("#key").attr("placeholder", "#name was incorrect").val("").focus().blur();
            $("#Date1").val("");
            $("#Date2").val("");
            $("#submit").attr("disabled", true);
            $("#clientsLeadsTable").append("<tr><td colspan='4'><b>not found</b></td></tr>");
            setTimeout(function() {
                $("#submit").attr("disabled", false);
                $('#clientsLeadsTable tbody').empty();
                $("input").focus();
            }, 1000);
        } else {
            $.ajax({
                type: "POST",
                url: 'http://localhost/Leads_Search_and_Pagination/posts/ajax-data',
                data: {
                    "key": key,
                    "Date1": Date1,
                    "Date2": Date2
                },
                dataType: "json",
                success: function(data) {
                    $.each(data, function(key, value) {
                        $("#clientsLeadsTable").append(
                            "<tr><th scope='row'>" + (x++) + "</th><td>" + value.email + "</td></tr>"
                        )
                    })
                }
            })
        }

        $('#key').val("");
        $('#Date1').val("");
        $('#Date2').val("");
        return false;
    });

    $('#Date1').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
    });
    $('#Date2').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
    });
</script> -->