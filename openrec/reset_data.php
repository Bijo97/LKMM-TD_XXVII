<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:index.php");}else{
}
$strID = substr($_SESSION['ID'], 1);
?>
<?php include 'db_config.php';

	$pid0=mysql_query("DELETE FROM Tbl_Peserta WHERE NRP={$strID}");
	$pid0=mysql_query("DELETE FROM Tbl_Data WHERE NRP={$strID}");
	echo '<h3>Reset Data Berhasil !</h3>,<a href="tanya.php"> Klik Disini untuk kembali</a>';
?>
</body>
</html>