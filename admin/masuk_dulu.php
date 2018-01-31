<?php
include 'koneksi.php';
session_start();

if($_SESSION['status'] !="login"){
header("location:login1/login.php");
}
?>