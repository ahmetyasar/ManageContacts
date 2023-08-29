<!--Edit By Ahmet-->
<?php

error_reporting(0);
include('admin/include/dbconnection.php');

?>
<?php
session_start();
error_reporting(0);
include('admin/include/dbconnection.php');
if (strlen(!$_SESSION['Role']==2)) {
  header('location:logout.php');
  } else{



  ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta http- equiv="X-UA-Compatible" content="IE=11">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Telefon Rehberi</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/bg-image.css" rel="stylesheet">
  <link href="css/datatables.css" rel="stylesheet">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" 
    <div class="container">
	<a class="navbar-brand" href="santral.php">
	<img src="img/logo1.png" alt="logo" width="200" height="50"> 
      &nbsp;&nbsp;&nbsp;&nbsp;Telefon Rehberi
	</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Çıkış Yap
              <span class="sr-only">(current)</span>
            </a>
          </li>
     
        </ul>
      </div>
	</div>
	
  </nav>


  <!-- Page Content -->
  <div class="container">

<div>&nbsp;&nbsp;</br>&nbsp;</div>


    <!-- Page Features -->
<div class="mx-auto ml-4 text-center text-nowrap font-weight-bold bg-success text-white m-2">Santral Kullanımı İçindir</div>  
<div id="wrapper">

    <div id="content-wrapper">

      <div class="container-fluid">
         
      
<table class="table table-striped sampleTable" id="dataTable" width="100%" cellspacing="0">
 <thead>
                <tr>
                  <th>Ad Soyad</th>
				  <th>Departman / Bölüm</th>
                  <th>Dahili / Numara</th>
				  <th>Lokasyon</th>
                 </tr>
              </thead>
               <?php
$ret=mysqli_query($con,"select * from tbldirectory");
$cnt=1;

while ($row=mysqli_fetch_array($ret)) {
?>
              
                <tr>
                  <td><?php  echo $row['FullName'];?></td>
				  <td><?php  echo $row['BolumDept'];?></td>
                  <td><?php  echo $row['DahiliNo'];?></td>
                  <td><?php  echo $row['Lokasyon'];?></td>
                </tr>
                <?php 
}?>
</table>
<div>&nbsp;&nbsp;</br>&nbsp;</div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php');?>

    </div>

</div>



    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">   <span>Bilgi | <a href="mailto:a@a.com" target="_blank">Sorun ve Önerileriniz İçin</a></span></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fancyTable.js"></script>
  <script src="js/dataTables.js"></script>
  <script>
$(document).ready(function() {
$("#dataTable").DataTable({
pageLength:10
});
$('div.dataTables_filter input').focus();
});

  </script>
  
 <script>
setTimeout(() => {
  document.location.reload();
}, 600000);
</script>

  
    </body>
</html>


</body>

</html>
  <?php }?>