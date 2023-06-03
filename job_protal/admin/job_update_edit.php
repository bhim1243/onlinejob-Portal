<?php
include "connecton.php";
$id = $_GET['edit'];
$company_name = $_POST['company_name'];
$job_title = $_POST['job_title'];
$selari = $_POST['selari'];
$description = $_POST['description'];
$job_types = $_POST['job_types'];
$query = "UPDATE `all_job` SET`company_name`='$company_name',`job_ title`='$job_title',`selari`='$selari',`description`='$description',`job_types`='$job_types'WHERE id ='$id'";
$result = mysqli_query($con, $query);
if ($result) {
    header('location:job_create.php');
} else {
    echo "error";
}
