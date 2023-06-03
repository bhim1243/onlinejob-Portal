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
if (empty($job_title)) {

  }
  elseif (!preg_match("/^[a-zA-Z ]*$/", $job_title)) {

  }
  if (empty($selary)) {
    
  }
  elseif (!preg_match("/^[1-10000 ]*$/", $selary)) {
    
  }
  if (empty($description)) {
    
  }
  elseif (!preg_match("/^[a-zA-Z ]*$/", $description)) {

  }
  if (empty($job_types)) {
  
}
elseif (!preg_match("/^[a-zA-Z ]*$/", $job_types)) {
  
}
}

?>
<style>
    select#category {
    width: 100%;
    height: 30;
}
</style>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard.php"> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create.php">All joblist </a></li>
            <li class="breadcrumb-item"><a href="#"> add jobs</a></li>

        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">add jobs</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
            <!-- <a class="btn btn-primary" href="add_coustomer.php">add coustomer</a> -->
        </div>
    </div>
    <div style="width: 60%; margin-left:20%;">
        <div id="msg"></div>
        <form action="create_job.php" method="POST" style="margin: 3%; padding: 3%;" name="job_from" required>
            <div class="form-group">
                <label for="customer name"> Enter company_name</label>
                <input type="company_name" name="company_name" id="company_name" class="form-control" placeholder=" Enter customer_name"required>
            </div>
            <div class="form-group">
                <label for="job title"> Enter JOB Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder=" Enter job_titlr"required>
            </div>

            <div class="form-group">
                <label for="state"> Enter selary</label>
                <input type="number" name="salary" id="sslary" class="form-control" placeholder=" Enter selary"required>
            </div>

            <div class="form-group">
                <label for="des"> Enter description</label>
                <input type="text" name="description" id="das" class="form-control" placeholder=" Enter description"required>
            </div>
            <div class="form-group">
                <label for="des"> Enter skills</label>
                <input type="text" name="skill" id="skill" class="form-control" placeholder="Enter skill"required>
            </div>
            <div class="form-group">
                <label for="des"> Enter experience</label>
                <input type="text" name="experience" id="experience" class="form-control" placeholder=" Enter description"required>
            </div>
            <div class="form-group">
                            <label for="category">category </label>
                            <select id="category" name="category">
                                <option value="">Select Job Role</option>
                                <option value="frontend">Frontend Developer</option>
                                <option value="backend">Backend Developer</option>
                                <option value="full_stack">Full Stack Developer</option>
                                <option value="ui_ux">UI UX Designer</option>
                            </select>
                        </div>
          
            <div class="form-group">
                <label for="job_types">
                    <h5>job types</h5>
                </label>
                <input type="text" name="jobs_types" id="jobs_types" class="form-control" placeholder=" Enter job_types"required>
            </div>
            <div class="form-group">
                <label for="des"> Enter Location</label>
                <input type="text" name="location" id="location" class="form-control" placeholder=" Enter description"required>
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
                var company_title = $("job_title").val();
                var country = $("selari").val();
                var state = $("job_types").val();
                var des = $("des").val();

                var data = $("#job_from").serialize();
                $.ajax({
                    types: "POST",
                    url: "create_job.php",
                    data: data,
                    succcess: function(data) {
                    
                    }

                });
            });
        });
    </script>
    </body>

    </html>