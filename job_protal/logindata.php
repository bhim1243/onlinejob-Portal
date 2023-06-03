<?php
include "connecton.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$category =$_POST['category'];
$time =$_POST['time'];
$select_admin_login = "INSERT INTO `admin_login`(`id`, `username`, `email`, `password`, `category`, `time`) VALUES ('','$username','$email','$password','$category','$time')";
$result = mysqli_query($con, $select_admin_login);
if ($result) {

    header('location:login.php');
}
