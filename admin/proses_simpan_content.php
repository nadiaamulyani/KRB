<?php
include "koneksi.php";
$foto = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
if(empty($foto))
{
	$update = mysql_query("INSERT INTO content(id_category,jenis,judul,isi) VALUES('$_POST[id_category]','$_POST[jenis]','$_POST[judul]','$_POST[isi]')");
}
else{
	$v_dir = "images/";
	$v_file = $v_dir . $foto;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$v_file);
	$update = mysql_query("INSERT INTO content(id_category,jenis,judul,isi,gambar) VALUES('$_POST[id_category]','$_POST[jenis]','$_POST[judul]','$_POST[isi]','$foto')");

	}

header("location:content.php");
?>