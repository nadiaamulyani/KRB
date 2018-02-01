<?php
	include"../koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysql_query("select * from login where username='$username' and password='$password'");
	$cek = mysql_num_rows($query);
	
		if($cek>0){
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			header("location:../content.php");
		}else{
			header("location:login.php");
		}
	?>