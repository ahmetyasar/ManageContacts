<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid']==0)) {
  header('location:logout.php');
  } else{
  ?>
  <?php
//$usercount = mysqli_query($connection->database_connection(),$query);
$query = "SELECT * FROM `tbl_cat`";
$result = mysqli_query($con,$query);
$options="";
while ($row2 = mysqli_fetch_array($result))
{             
$options = $options.="<option>$row2[1]</option>";
}



$category = $_POST['catname2'];
?>



<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  
    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item active">
        <form method="post">
        <table>
        <tr><td>Categories<select name="catname2" class="form-control wd-450" required="true" >
        <option value="">Select Category</option>
        <?php echo $options; ?>
        </select></td>
        <td><input type="submit" name="submit" value="View Category Data" class="btn btn-info btn-min-width mr-1 mb-1" /></td></tr>
        </table>
        </form></li>
        </ol>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Full Name</th>
              <th>Mobile Number</th>
              <th>Category</th>
                   <th>Action</th>
                </tr>
              </thead>
               <?php
$ret=mysqli_query($con,"select * from tbldirectory where Category ='$category'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php  echo $row['FullName'];?></td>
<td><?php  echo $row['MobileNumber'];?></td>
<td><?php  echo $row['Category'];?></td>
<td><a href="view-directory2.php?editid=<?php echo $row['ID'];?>">View Detail</a>
</tr>
<?php 
$cnt=$cnt+1;
}?>
   


</table>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
<style>

input.btn.btn-info.btn-min-width.mr-1.mb-1 {
    margin-top: 28px;
}
select.form-control.wd-450 {
    width: 300px;
}

</style>
</html>
<?php }  ?>