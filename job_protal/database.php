<?php
include "connecton.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$job_role = $_POST['job_role'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];
$cv = $_FILE['file'];
$select_job_portal = "INSERT INTO `appjob`(`id`, `first_Name`, `last_name`, `email`, `job_role`, `address`, `city`, `pincode`, `date`, `cv`) VALUES ('','$first_name ','$last_name','$email','$job_role','$address','$city ','$pincode','$date','$cv')";
$result = mysqli_query($con, $select_job_portal);
if ($result) {

    echo "successfule submit";
}
