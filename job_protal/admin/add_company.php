<?php
include "connecton.php";
include "slider.php";
include "header.php";
?>
<?php 

if ($_SERVER['REQUEST_METHOD']=="POST"){

// Validate name field
if (empty($company_name)) {
  // Handle error - name is required
}
elseif (!preg_match("/^[a-zA-Z ]*$/", $company_name)) {
  // Handle error - name contains invalid characters
}
if (empty($company_title)) {

  }
  elseif (!preg_match("/^[a-zA-Z ]*$/", $company_title)) {

  }
  if (empty($description)) {
    
  }
  elseif (!preg_match("/^[a-zA-Z  ]*$/", $description)) {
    
  }
  if (empty($email)) {
    
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  }
}
  
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard.php"> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="company.php">company</a></li>
            <li class="breadcrumb-item"><a href="#"> add company</a></li>

        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">company</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
            <!-- <a class="btn btn-primary" href="add_coustomer.php">add coustomer</a> -->
        </div>
    </div>
    <div style="width: 60%; margin-left:20%;">
        <div id="msg"></div>
        <form action="company_add.php" method="POST" style="margin: 3%; padding: 3%;" name="company_from"required>
            <div class="form-group">
                <label for="coustomer username"> Enter company_name</label>
                <input type="company _name" name="company_name" id="company_name" class="form-control" placeholder=" Enter company_name"required>
            </div>
            <div class="form-group">
                <label for="coustomer username"> Enter company_title</label>
                <input type="company _title" name="company_title" id="company_title" class="form-control" placeholder=" Enter company_title"required>
            </div>
            <div class="form-group">
                <label for="coustomer "> Enter description</label>
                <input type="description" name="description" id="description" class="form-control" placeholder=" Enter das"required>
            </div>
            <div class="form-group">
                <label for="coustomer ">email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
            </div>

            <div class="form-group">

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
                var company_name = $("company_name").val();
                var company_title = $("company_title").val();
                var des = $("des").val();

                var admin_types = $("#admin_types").val();
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