<?php
include "koneksi.php";

$menu=$_POST['menu'];
$link=$_POST['link'];
$status=$_POST['status'];
mysql_query("INSERT INTO pages values('','$menu','$link','$status')");

header("location:pages.php?pesan=input");
?>