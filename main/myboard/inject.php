<?php
session_start();
if($_GET['e'] == "y" && $_GET['f'] != ""){
	$_SESSION['nrp'] = $_GET['f'];
	echo "encrypted !!";
}
else
{
	echo "locked !!";
}
?>
