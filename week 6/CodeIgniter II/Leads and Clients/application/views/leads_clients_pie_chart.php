<!Doctype html>
<html>

<head>
    <title>Leads and Clients</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        google.charts.load('visualization', "1", {
            packages: ['corechart']
        });

        $(document).ready(function() {
            $('#clientsLeadsTable').DataTable();
        });
    </script>
</head>

<body>
    <div class="container">
        <table id="clientsLeadsTable" class="table table-striped table-bordered table-hover" style="width:1000px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Number of Leads</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clients_leads as $row) {
                ?>
                    <tr>
                        <td><?php echo $row->client_name;  ?></td>
                        <td><?php echo $row->number_of_leads; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12">
                <div id="clients_leads_pie" style="width: 900px; height: 500px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</body>

<script language="JavaScript">
    // Draw the pie chart for registered users year wise
    google.charts.setOnLoadCallback(clientsLeadsChart);

    // for clients_leads
    function clientsLeadsChart() {

        /* Define the chart to be drawn.*/
        var data = google.visualization.arrayToDataTable([
            ['Leads', 'Clients'],
            <?php
            foreach ($clients_leads as $row) {
                echo "['" . $row->client_name . "'," . $row->number_of_leads . "],";
            }
            ?>
        ]);
        var options = {
            title: 'Customers and numbers of new leads',
            is3D: true,
        };
        /* Instantiate and draw the chart.*/
        var chart = new google.visualization.PieChart(document.getElementById('clients_leads_pie'));
        chart.draw(data, options);
    }
</script>

</html>