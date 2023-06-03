
<?php
include "header.php";
include "slider.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard.php"> Dashboard</a></li>
            <li class="breadcrumb-item">
                <a href="company.php">company</a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">company</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
            <a class="btn btn-primary" href="add_company.php">add company</a>
        </div>
    </div>
    <!-- datatable start -->
    <table id="example" class="display" style="width:100%">
        <thead>

            <tr>
                <th>company_id</th>
                <th>company_name</th>
                <th>company_title</th>
                <th>description</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "connecton.php";

            $query = mysqli_query($con, "SELECT * FROM `company`");
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['company _name']; ?></th>
                    <th><?php echo $row['company _title']; ?></th>
                    <th><?php echo $row['description']; ?></th>
                    <td>
                        <div class="row">
                            <div class="btn-group col-lg-2">
                                <a href="coustomer_edit.php" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                            </div>

                            <div class="btn-group col-lg-2">

                                <a href="company_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
        <tfoot>

            <th>id</th>
            <th>company_name</th>
            <th>company_title</th>
            <th>description</th>
            <th>Action</th>

        </tfoot>
    </table>
    <!-- datatable end -->
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>



    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                var company_name = $("company_name").val();
                var company_title = $("company_title").val();
                var des = $("description").val();

                var data = $("#company_from").serialize();
                $.ajax({
                    types: "POST",
                    url: "company_add.php",
                    data: data,
                    succcess: function(data) {
                        $("#msg").html(data);
                    }

                });
            });
        });
    </script>
    </body>

    </html>