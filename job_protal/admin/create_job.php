<?php
include "connecton.php";
$company_name = $_POST['company_name'];
$title = $_POST['title'];
$salary = $_POST['salary'];
$description = $_POST['description'];
$skill = $_POST['skill'];
$experience = $_POST['experience'];
$category=$_POST['category'];
$jobs_types = $_POST['jobs_types'];
$location = $_POST['location'];
$select_all_job = "INSERT INTO `all_job`(`job_id`, `company_name`, `title`, `salary`, `description`, `skill`, `experience`, `category`, `jobs_types`, `location`) VALUES ('','$company_name','$title','$salary','$description','$skill ','$experience','$category','$jobs_types ','$location')";
$result = mysqli_query($con, $select_all_job);
if ($result) {

    header('location:job_create.php');
}
