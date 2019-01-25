<?php
	session_start();
	$strID = substr($_SESSION['ID'], 1);
	include 'db_config.php';
	$NamaLengkap = $_POST['NamaLengkap'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$AlamatTinggal = $_POST['AlamatTinggal'];
	$TTL = $_POST['TTL'];
	$NomorTelepon = $_POST['NomorTelepon'];
	$IDLine = $_POST['id_line'];
	$IPKTerakhir = $_POST['IPKTerakhir'];
	$Motivasi = $_POST['Motivasi'];
	$Kelebihan = $_POST['Kelebihan'];
	$Kekurangan = $_POST['Kekurangan'];
	$EXP = $_POST['EXP'];
	$Prioritas1 = $_POST['Prioritas1'];
	$Prioritas2 = $_POST['Prioritas2'];
	$Komitmen = $_POST['Komitmen'];
	$updatedata = mysql_query("UPDATE tbl_regist SET NamaLengkap = '".$NamaLengkap."', JenisKelamin = '".$JenisKelamin."', AlamatTinggal = '".$AlamatTinggal."', TTL = '".$TTL."', NomorTelepon = '".$NomorTelepon."', IDLine = '".$IDLine."', IPKTerakhir = '".$IPKTerakhir."', Motivasi = '".$Motivasi."', Kelebihan = '".$Kelebihan."', Kekurangan = '".$Kekurangan."', EXP = '".$EXP."', Prioritas1 = '".$Prioritas1."', Prioritas2 = '".$Prioritas2."', Komitmen = '".$Komitmen."' WHERE nrp = $strID");
	header("Location: page=register.php");
?>