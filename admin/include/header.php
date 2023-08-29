 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php"> Rehber <p id="name"> Rehber Yönetim Paneli</p> </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
   

    <!-- Navbar Search -->

      <div class="input-group">
       
       
      </div>
   
<ul class="navbar-nav ml-auto ml-md-0">
      
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <?php
$adid=$_SESSION['pdaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
          <a class="dropdown-item" href="admin-profile.php"><b>Hoş Geldiniz: </b><?php echo $name; ?></a>
          <a class="dropdown-item" href="admin-profile.php">Yönetici Profili</a>
          <a class="dropdown-item" href="changepassword.php">Şifre Değiştir</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Çıkış</a>
        </div>
      </li>
    </ul>

  </nav>
  
  
  
  
  <style>
    i.fas.fa-bars {
    margin-top: 16px;
}

p#name {
    
    font-size: 12px;
    line-height: 1
}

@media only screen and (max-width: 400px) {
   .about {
    margin-left: 6%;
}
i.fas.fa-bars {
    margin-top: 3px;
}

}


    
    
</style>


