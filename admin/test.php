<?php
session_start();
error_reporting(1);
include('include/dbconnection.php');
    $fullname="ahmet";
    $BolumDept="İk";
    $DahiliNo="2365";
    $Status="1";
    $query=mysqli_query($con, "update tbldirectory set FullName='$fullname',BolumDept='$BolumDept',DahiliNo=$DahiliNo where ID=55");
?>