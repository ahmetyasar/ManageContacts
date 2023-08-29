<!--Edit By Ahmet-->
<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid']==0)) {
  header('location:logout.php');
  } else{



  ?>



<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REHBER</title>

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
          <li class="breadcrumb-item">
            <a href="#">Gösterge Paneli</a>
          </li>
          <li class="breadcrumb-item active">Tüm Kayıtlar</li>
        </ol>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 <thead>
                <tr>
                  <th>Ad Soyad</th>
                  <th>Departman Bölüm</th>
                  <th>Dahili</th>
				  <th>Görünürlük</th>
                </tr>
              </thead>
               <?php
$ret=mysqli_query($con,"select * from tbldirectory");
while ($row=mysqli_fetch_array($ret)) {
?>
                <tr>
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['BolumDept'];?></td>
                  <td><?php  echo $row['DahiliNo'];?></td>
				  <?php  if($row['Status']==1)
				  {
				  echo "<td>Herkese Açık</td>";
				  }
				  else{
					echo "<td>Sadece Admin</td>";  
				  }
				  ?>
				  
  <?php  
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
          <h5 class="modal-title" id="exampleModalLabel">Çıkış Yapmak İstiyor Musunuz?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Geçerli oturumunuzu sonlandırmaya hazırsanız aşağıdan "Çıkış"ı seçin.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
          <a class="btn btn-primary" href="logout.php">Çıkış Yap</a>
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

</html>
<?php }  ?>



<style>

#datatable {
    OVERFLOW: SCROLL;
}


.container-fluid
{
    OVERFLOW: SCROLL;
    
}


    
</style>