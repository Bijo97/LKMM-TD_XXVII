<?php
	session_start();
	include "connect.php";
	$id_ruangan = $_GET['ruangan'];
	$id_sesi = $_GET['sesi'];
	$id_shift = $_GET['shift'];
	// $id_ruangan = $_GET['id_ruangan'];
	// $id_sesi = $_GET['sesi'];
	// $id_shift = $_GET['shift'];
	$nrp = $_SESSION['namauser'];

	// $sql7 = "SELECT * FROM kelompok WHERE ruang = '".$id_ruangan."' AND shift = '".$id_shift."'";
	// $result7 = mysql_query($sql7);
	
	// while($fetch7 = mysql_fetch_array($result7)){
		
	// 	$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch7['idkelompok']." AND shift = '".$id_shift."'";
	// 	$result3 = mysql_query($sql3);
		
 // 		while ($row = mysql_fetch_array($result3)){

	//  		$sql4 = "SELECT * FROM peserta WHERE nrp = ".$row['nrp'];
	// 		$result4 = mysql_query($sql4);
	// 		$fetch4 = mysql_fetch_array($result4);
			
	// 		$sql5 = "SELECT * FROM kelompok WHERE idkelompok = ".$row['idkelompok']." AND shift = '".$id_shift."'";
	// 		$result5 = mysql_query($sql5);
	// 		$fetch5 = mysql_fetch_array($result5);
				
	// 		$sql6 = "UPDATE absensi_sesi SET validate = 1 WHERE nrp = ".$row['nrp']." AND sesi = ".$id_sesi;
	// 		$result6 = mysql_query($sql6);
	// 	}
	//  }

	$sql = "UPDATE detailsekret SET validasi = 1 WHERE nrp_sekret = ".$nrp." AND shift = '".$id_shift."' AND sesi = ".$id_sesi." AND ruangan = '".$id_ruangan."'";
	$result = mysql_query($sql);

	$sql2 = "SELECT * FROM kelompok WHERE ruang = '".$id_ruangan."' AND shift = '".$id_shift."'";
	$result2 = mysql_query($sql2);

	while($fetch2 = mysql_fetch_array($result2)){
		
		$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift = '".$id_shift."'";
		$result3 = mysql_query($sql3);

 		while ($row = mysql_fetch_array($result3)){
			$sql6 = "SELECT * FROM absensi_sesi WHERE nrp = ".$row['nrp']." AND sesi = ".$id_sesi;
			$result6 = mysql_query($sql6);
			$fetch6 = mysql_fetch_array($result6);

			$kueri = "UPDATE absensi_sesi_fix SET kehadiran = ".$fetch6['kehadiran'].", nrp_sekret = ".$nrp." WHERE nrp = ".$row['nrp']." AND sesi = ".$id_sesi;
			$update = mysql_query($kueri);
		}
	 }

	header("Location: fasilitator.php");
?>