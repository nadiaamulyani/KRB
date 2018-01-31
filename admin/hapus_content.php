<?php
include "koneksi.php";

mysql_query("delete from content where id_content='$_GET[id_content]'");
header("location:content.php");
?>
<script language="javascript">
	alert('Data Berhasil Dihapus');
	document.location.href="content";
</script>