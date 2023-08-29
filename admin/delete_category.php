<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
?>


<?php

$pdid3=$_GET['delid'];
$ret2=mysqli_query($con,"delete from tbl_cat where id_cat='$pdid3'");

 if ($ret2) {
    echo "<script>  alert('The Category has been deleted sucessfully!');  window.location='add-category.php'</script> ";
  }
  else
    {
      echo "<script> alert('Something went Wrong'); window.location='add-category.php'</script>";
    }

?>

