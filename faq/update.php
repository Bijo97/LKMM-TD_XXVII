<?php
	include "connect.php";

	$id = $_POST['id'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];

	$sql = "UPDATE faq SET QUESTION = '".$question."', ANSWER = '".$answer."' WHERE ID = ".$id;
	$result = mysql_query($sql);

	if ($result){
		header("Location: index.php");
	} else {
		echo "Gagal...";
	}
?>