

<?php

session_start();
error_reporting(0);
include('include/dbconnection.php');

$pdid=$_GET['delid'];
$ret=mysqli_query($con,"delete from tbldirectory where ID='$pdid'");

 if ($ret) {
    echo "<script>  alert('The Contact Has Been Deleted Sucessfully!'); window.location='manage-directory.php'</script>";
  }
  else
    {
      echo "<script> alert('Something went Wrong'); window.location='search.php'</script>";
    }

?>


<style>
    .alert {
 padding: 20px;
  background-color: #f44336;
  color: white;
  
}
</style>