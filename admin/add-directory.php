<!--Edit By Ahmet-->
<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $fullname=$_POST['fullname'];
    $BolumDept=$_POST['BolumDept'];
    $DahiliNo=$_POST['DahiliNo'];
    $admsta=$_POST['status'];
	$Lokasyon=$_POST['Lokasyon'];
    $query=mysqli_query($con, "insert into  tbldirectory(FullName,BolumDept,DahiliNo,Status,Lokasyon) value('$fullname','$BolumDept','$DahiliNo','$admsta','$Lokasyon')");
    if ($query) {
    $msg="Kişi Eklendi.";
  }
  else
    {
      $msg="Birşeyler Ters Gitti Lütfen Tekrar Deneyiniz.";
    }

  
}
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
          <li class="breadcrumb-item">
            <a href="#">Gösterge Paneli</a>
          </li>
          <li class="breadcrumb-item active">Rehbere Ekle</li>
        </ol>
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
        <!-- Icon Cards-->
        
        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
        <form name="directory" method="post">
          
     
          
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="fullname" name="fullname" class="form-control"  required="required" autofocus="autofocus">
                  <label for="firstName">Ad Soyad</label>
                </div>
              </div>
              <table>
              <tr>
              <td width="550px">   <div class="form-group">
            <div class="form-label-group">
             <select name="status" class="form-control wd-450" required="true" >
        <option value="">Görünürlük Değiştir</option>
        <option value="1" >Herkese Açık</option>
     <option value="0" >Sadece Admin</option>
	 </select>
        </div>
          </div></td>

           <td width="550px"><div class="form-group">
            <div class="form-label-group">
        </div>
          </div></td>
          
          </tr>
              </table>
              
              
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="BolumDept" name="BolumDept" class="form-control"  required="required">
                  <label for="BolumDept">Bolüm veya Departman</label>
                </div>
              </div>
            
          
          <div class="form-group">
                 <div class="form-label-group">
                  <input type="text" id="DahiliNo" name="DahiliNo" maxlength="15" class="form-control"  required="required">
                  <label for="inputPassword">Dahili Numara</label>
                </div>
              </div>
	      <select name="Lokasyon" class="form-control wd-450" required="true" >
              <option value="">Lokasyon Seçin</option>
              <option value="Güneşli" >GÜNEŞLİ</option>
              <option value="Çorlu" >ÇORLU</option>
			  <option value="Tokat" >TOKAT</option>
			  <option value="Mısır" >MISIR</option>
			  <option value="Almanya" >ALMANYA</option>
			  <option value="Polonya" >POLONYA</option>
	      </select>  
			  

       <p style="text-align: center; "><button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Ekle</button></p>
        </form>

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
  <!-- Prevent Post -->
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>
<?php }  ?>