
<?php
include "header.php";
include "connecton.php";

?>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="job_create.php">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            job create
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company.php">
                            <span data-feather="layers" class="align-text-bottom"></span>
                            company
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Dashboard.php"> Dashboard</a></li>
                    <li class="breadcrumb-item">
                        <a href="job_create.php">jobs</a>
                    </li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> All joblist </h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">

                    </div>
                    <a class="btn btn-primary" href="add _create_job.php">create job</a>
                </div>
            </div>
            <!-- datatable start -->
            <table id="example" class="display" style="width:100%">
                <thead>

                    <tr>
                        <th>job_id</th>
                        <th>company_name</th>
                        <th>job_title</th>
                        <th>selary</th>
                        <th>description</th>
                        <th>skill<th> 
                       <th> experience</th>
                        <th>category</th>
                        <th>job types</th>
                        <th>location</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connecton.php";

                    $query = mysqli_query($con, "SELECT * FROM `all_job`");
                    while ($row = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                            <th><?php echo $row['job_id']; ?></th>
                            <th><?php echo $row['company_name']; ?></th>
                            <th><?php echo $row['title']; ?></th>
                            <th><?php echo $row['salary']; ?></th>
                            <th><?php echo $row['description']; ?></th>
                            <th><?php echo $row['skill']; ?><th> 
                           <th><?php echo $row['experience']; ?></th>
                            <th><?php echo $row['category']; ?></th>
                            <th><?php echo $row['jobs_types']; ?></th>
                            <th><?php echo $row['location']; ?></th>


                            <td>
                                <div class="row">
                                    <div class="btn-group col-lg-2">
                                        <a href="job_edit.php?id=<?php echo $row['job_id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </div>

                                    <div class="btn-group col-lg-2">
                                        <a href="job_delete.php?del=<?php echo $row['job_id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
                <tfoot>
                    <th>_job_id</th>
                    <th>company_name</th>
                    <th>job_title</th>
                    <th>selary</th>
                    <th>description</th>
                    <th>skill<th> 
                  <th> experience</th>
                    <th>category</th>
                    <th>job types</th>
                    <th>location</th>
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
                        var job_name = $("job_name").val();
                        var job_title = $("job_title").val();
                        var description = $("description").val();
                        var country = $("country").val();
                        var state = $("state").val();
                        var city = $("city").val();


                        var data = $("#job_from").serialize();
                        $.ajax({
                            types: "POST",
                            url: "job_create.php",
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