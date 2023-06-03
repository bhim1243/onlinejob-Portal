

<?php
include "connecton.php";
include "slider.php";
include "header.php";
?>
<?php
$id = $_GET['id'];
$query =mysqli_query($con,"SELECT * FROM all_job WHERE job_id='$id'");
while ($row=mysqli_fetch_array($query)){

    $company_name=$row['company_name'];
    $title=$row['title'];
    $salary=$row['salary'];
    $description=$row['description'];
    $jobs_types=$row['jobs_types'];

?>


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
        <form action="create_job.php" method="POST" style="margin: 3%; padding: 3%;" name="job_from">
            <div class="form-group">
                <label for="customer name"> Enter company_name</label>
                <input type="company_name" name="company_name" id="company_name" class="form-control" value="<?php echo $row['company_name']; ?>" placeholder=" Enter customer_name">
            </div>
            <div class="form-group">
                <label for="job title"> Enter JOB Title</label>
                <input type="text" name="title" id="jobs_title" class="form-control" value="<?php echo $row['title']; ?>"placeholder=" Enter job_titlr">
            </div>

            <div class="form-group">
                <label for="state"> Enter selary</label>
                <input type="number" name="salary" id="salary" class="form-control" value="<?php echo $row['salary']; ?>" placeholder=" Enter selary">
            </div>

            <div class="form-group">
                <label for="des"> Enter description</label>
                <input type="text" name="description" id="description" class="form-control" value="<?php echo $row['description']; ?>" placeholder=" Enter description">
            </div>
            <div class="form-group">
                <label for="des"> Enter skills</label>
                <input type="text" name="skill" id="skill" class="form-control" value="<?php echo $row['skill']; ?>"  placeholder="Enter skill"required>
            </div>
            <div class="form-group">
                <label for="des"> Enter experience</label>
                <input type="text" name="experience" id="experience" class="form-control"  value="<?php echo $row['experience']; ?>" placeholder=" Enter description"required>
            </div>
            <div class="form-group">
                <label for="des"> Enter category</label>
                <input type="text" name="category" id="category" class="form-control" value="<?php echo $row['category']; ?>" placeholder=" Enter description">
            </div>
            <div class="form-group">
                <label for="job_types">
                    <h5>job types</h5>
                </label>
                <input type="text" name="job_types" id="job_types" class="form-control" value="<?php echo $row['jobs_types']; ?>"   placeholder=" Enter job_types">
            </div>

            <div class="form-group">
                <label for="des"> Enter Location</label>
                <input type="text" name="location" id="location" class="form-control"  value="<?php echo $row['location']; ?>" placeholder=" Enter description"required>
            </div>
            <div class="form-group">

                <div class="form-group">
                    <input type="submit" class="btn btn-success" placeholder="save" name="submit" id="submit">
                </div>
            </div>
        </form>
        <?php } ?>
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