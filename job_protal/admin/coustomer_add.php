<?php
include "connecton.php";
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$admin_types = $_POST['admin_types'];
$select_admin_login = "INSERT INTO `admin_login`(`id`, `username`, `password`, `first_name`, `last_name`, `admin_types`) VALUES ('','$username','$password','$first_name','$last_name','$admin_types')";
$result = mysqli_query($con, $select_admin_login);
if ($result) {

    header("location:custo.php");
}
