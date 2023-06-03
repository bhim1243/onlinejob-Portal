<?php
include "connecton.php";
$company_name = $_POST['company_name'];
$company_title = $_POST['company_title'];
$description = $_POST['description'];
$select_company_name = "INSERT INTO `company`(`id`, `company _name`, `company _title`, `description`) VALUES ('','$company_name','$company_title','$description')";
$result = mysqli_query($con, $select_company_name);
if ($result) {

    header('location:company.php');
}
