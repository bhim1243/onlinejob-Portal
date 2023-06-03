<?php
include "connecton.php";
$del = $_GET['del'];
$query = mysqli_query($con, "DELETE FROM `all_job` WHERE job_id ='$del'");
if ($query) {
    echo "data has been successfully inserted";
} else {
    echo " some error please try again";
}
header("location:job_create.php");
