<?php
include "koneksi.php";

mysql_query("delete from pages where pages_id='$_GET[pages_id]'");
header("location:pages.php");
?>
<script language="javascript">
	alert('Data Berhasil Dihapus');
	document.location.href="pages";
</script>