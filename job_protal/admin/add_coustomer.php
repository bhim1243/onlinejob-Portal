
<?php
include "slider.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">



    <link href="css/Dash.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
            <h3>online jop portal</h3>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="admin_login.php">Sign out</a>
            </div>
        </div>
    </header>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php"> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="custo.php">Customers</a></li>
                <li class="breadcrumb-item"><a href="#"> add Customers</a></li>

            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Customers</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                </div>
                <!-- <a class="btn btn-primary" href="add_coustomer.php">add coustomer</a> -->
            </div>
        </div>
        <div style="width: 60%; margin-left:20%;">
            <div id="msg"></div>
            <form action="coustomer_add.php" method="POST" style="margin: 3%; padding: 3%;" name="coustomer_from">
                
                <div class="form-group">
                    <label for="coustomer firstname"> first Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder=" Enter first Name">
                </div>
                <div class="form-group">
                    <label for="coustomer lastname"> Enter last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder=" Enter  last Name">
                </div>
                <div class="form-group">
                    <label for="coustomer username"> Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder=" Enter coustoner email">
                </div>
                <div class="form-group">
                    <label for="coustomer password">mobile number</label>
                    <input type="passwrod" name="mobile" id="mobile" class="form-control" placeholder=" Enter coustoner mobile number">
                </div>
                <div class="form-group">
                    <label for="Admin type">
                        <h5>Admin type</h5>
                    </label>
                    <select name="admin_types" name="admin_types" class="form-control" id="admin_types">
                        <option value="1">super admin</option>
                        <option value="2">coustomer admin</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" placeholder="save" name="submit" id="submit">
                    </div>
                </div>
            </form>
        </div>
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
                    var username = $("username").val();
                    var password = $("password").val();
                    var first_name = $("#first_name").val();
                    var last_name = $("#last_name").val();
                    var admin_types = $("#admin_types").val();
                    var data = $("#coustomer_from").serialize();
                    $.ajax({
                        types: "POST",
                        url: "coustomer_add.php",
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