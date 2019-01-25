<?php
	include "connect.php";

	$id = $_GET['id'];

	$sql = "UPDATE faq SET STATUS = 0 WHERE ID = ".$id;
	$result = mysql_query($sql);

	if ($result){
		header("Location: index.php");
	} else {
		echo "Gagal...";
	}
?>