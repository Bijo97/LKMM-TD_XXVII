<?php
	include "connect.php";

	$question = $_POST['question'];
	$answer = $_POST['answer'];

	$sql = "INSERT INTO faq VALUES ('', '".$question."', '".$answer."', 1)";
	$result = mysql_query($sql);

	if ($result){
		header("Location: index.php");
	} else {
		echo "Gagal...";
	}
?>