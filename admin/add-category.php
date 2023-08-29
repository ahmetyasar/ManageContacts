<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $fullname=$_POST['txt_fullname'];
    $date=$_POST['txt_date'];
    $other=$_POST['txt_other'];

     
    $query=mysqli_query($con, "insert into  tbl_cat (name_cat,cat_date,cat_other) value('$fullname','$date','$other')");
    if ($query) {
    $msg="Category has been added.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
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

//below this line for search categoy name
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
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Category</li>
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
                  
                  <table>
                  <tr>
                  
                  <td width="400px">Category Name:<input type="text" id="fullname" name="txt_fullname" class="form-control" autocomplete="off" required="required" autofocus="autofocus"/></td>
                   <td width="400px">Date:<input type="date" id="fullname" name="txt_date" class="form-control" autocomplete="off" required="required" autofocus="autofocus"/></td>
                   <td width="400px">Other Information:<input type="text" id="fullname" name="txt_other" class="form-control" autocomplete="off" required="required" autofocus="autofocus"/></td>
                  </tr>
                  </table>
                  
                  
                </div>
              </div>
               
           <p style="text-align: center; "><button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Add New Category</button></p>
        </form>


              <div class="form-group" >
                Search Categorie:<input type="text" placeholder="Enter your Category Name" id="search_text" class="form-control" />
                <div class="form-label-group" id="result">
                  
                  
                </div>
              </div>


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

</html>
<?php }  ?>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch_category.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

<style>
input#search_text {
    width: 300px;
}

input#fullname {
    /* height: 41px; */
    padding-bottom: 24px;
}

</style>