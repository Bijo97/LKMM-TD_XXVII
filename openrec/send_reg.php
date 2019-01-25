<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{
}
$strID = substr($_SESSION['ID'], 1);
?>  
<?php
include 'db_config.php';
$NamaLengkap = $_POST['NamaLengkap'];
$NRP = $strID;
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
$datetime=date("y-m-d h:i:s"); //date time

$ins_data1=mysql_query("INSERT INTO tbl_regist VALUES('', '$NamaLengkap','$NRP', '$JenisKelamin', '$AlamatTinggal', '$TTL', '$NomorTelepon', '$IDLine', '$IPKTerakhir', '$Motivasi', '$Kelebihan', '$Kekurangan', '$EXP', '$Prioritas1', '$Prioritas2', '$Komitmen', '$datetime')");

//check if query successful 
if ($ins_data1){
	echo "Registrasi berhasil, data anda sudah masuk ke database. Klik <a href='page=register.php'>Disini, Untuk Kembali</a>";
}
else{echo 'Klik <a href="page=register.php">Disini, Untuk Kembali</a>';}
?>