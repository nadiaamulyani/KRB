<?php
include "koneksi.php";
$pages_id = $_POST['pages_id'];
$update = mysql_query("UPDATE pages SET menu='$_POST[menu]', link='$_POST[link]', status='$_POST[status]' where pages_id='$pages_id'");
header("location:pages.php");
?>