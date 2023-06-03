<?php
include "connecton.php";
$del = $_GET['del'];
$query = mysqli_query($con, "delete from admin_login where id ='$del'");
if ($query) {
    header("location:custo.php");
    echo "<script>alert('Record has been successfully Delete !!)</script>";
} else {
    echo "<script>alert('Record has been successfully Delete !!)</script>";
}
