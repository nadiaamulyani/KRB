<?php
include "koneksi.php";

mysql_query("delete from feedback where id='$_GET[id]'");
header("location:Feedback.php");
?>
<script language="javascript">
	alert('Data Berhasil Dihapus');
	document.location.href="Feedback";
</script>