<?php
	include "../connect.php";
	$id = $_GET["id"];
	mysql_query("delete from rekap_pelanggaran where id=".$id);
	header("Location:keamanan.php");
?>