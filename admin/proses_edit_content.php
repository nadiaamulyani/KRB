<?php
include "koneksi.php";
$gambar = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
if(empty($gambar))
{
	$update = mysql_query("UPDATE  content SET id_category='$_POST[id_category]', jenis='$_POST[jenis]', judul='$_POST[judul]', isi='$_POST[isi]' where id_content='$_POST[id_content]'");
}
else{
	$v_dir = "images/";
	$v_file = $v_dir . $gambar;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$v_file);
	$update = mysql_query("UPDATE  content SET id_category='$_POST[id_category]', jenis='$_POST[jenis]', judul='$_POST[judul]', isi='$_POST[isi]', gambar='$gambar' where id_content='$_POST[id_content]'");

	}

header("location:content.php");
?>