<?php session_start();
unset($_SESSION['username']);
header("location: login.php");
?>


 
<h2>Anda telah berhasil logout..</h2>
Silahkan klik <a href="login.php"><b>Disini</b></a></center> untuk login kembali
