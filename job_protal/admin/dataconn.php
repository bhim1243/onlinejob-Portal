<?php
include "connecton.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$select_admin_login = "INSERT INTO `admin_login`(`id`, `username`, `password`) VALUES ('','$username','$password')";
$result = mysqli_query($con, $select_admin_login);
if ($result) {

  header('location:');
}
?>