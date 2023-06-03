<?php
include "connecton.php";
$del = $_GET['del'];
$query = mysqli_query($con, "DELETE FROM `company` WHERE id ='$del'");
if ($query) {
    header("location:company.php");
    echo "<script>
    alert(Record has been successfully Delete !!)
    </script>";
} else {
    echo "<script>alert('Record has been successfully Delete !!)</script>";
}
?>
