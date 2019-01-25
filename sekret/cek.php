<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];
if ($username == "sekret" && $password == "semutsemut"){
	$_SESSION['user'] = "sekret";
	header("Location: list_contact.php");
} else {
	header("Location: index.php");
}

?>