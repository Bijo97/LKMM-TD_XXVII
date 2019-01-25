<?php
	session_start();
	include "connect.php";
	
	$id_sesi = $_GET['id_sesi'];
	$sql11 = "SELECT DISTINCT(nrp) FROM absensi_sekret WHERE shift LIKE '2%' ORDER BY nrp";
	$result11 = mysql_query($sql11);
	
	$totalabsen = mysql_fetch_array(mysql_query("SELECT COUNT(*) as jumlah FROM absensi_sesi_fix JOIN detailkelompok ON absensi_sesi_fix.nrp = detailkelompok.nrp WHERE absensi_sesi_fix.sesi = ".$id_sesi." AND absensi_sesi_fix.kehadiran = 0 AND detailkelompok.shift LIKE '2%'"));
	$namasesi = mysql_fetch_array(mysql_query("SELECT * FROM sesi WHERE id = ".$id_sesi));
	echo "<br><br>Total jumlah peserta yang tidak hadir pada sesi ".$namasesi['nama_sesi']." = ".$totalabsen['jumlah']."<hr>";
	
	while($fetch11 = mysql_fetch_array($result11)){
		$data = mysql_query("SELECT * FROM absensi_sesi_fix JOIN detailkelompok ON absensi_sesi_fix.nrp = detailkelompok.nrp WHERE absensi_sesi_fix.sesi = ".$id_sesi." AND absensi_sesi_fix.kehadiran = 0 AND detailkelompok.shift LIKE '2%' AND absensi_sesi_fix.nrp_sekret = ".$fetch11['nrp']);
		$data2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) as cek FROM absensi_sesi_fix JOIN detailkelompok ON absensi_sesi_fix.nrp = detailkelompok.nrp WHERE absensi_sesi_fix.sesi = ".$id_sesi." AND absensi_sesi_fix.kehadiran = 0 AND detailkelompok.shift LIKE '2%' AND absensi_sesi_fix.nrp_sekret = ".$fetch11['nrp']));
		$sql12 = "SELECT * FROM panitia WHERE nrp = ".$fetch11['nrp'];
		$result12 = mysql_query($sql12);
		$fetch12 = mysql_fetch_array($result12);
		echo $data2['cek']." orang yang diabsen oleh ".$fetch12['nama_panitia']."( ".$fetch11['nrp']." ) tidak hadir.";
		echo "<div class='container'><table class='table table-striped'><tr><td>NRP</td><td>Nama</td></tr>";
		while ($row = mysql_fetch_array($data)) {
			$namamhs = mysql_fetch_array(mysql_query("SELECT nama FROM peserta WHERE nrp = ".$row['nrp']));
			echo "<tr><td>".$row['nrp']."</td><td>".$namamhs['nama']."</td></tr>";
		}
		echo "</table></div>";
	}
?>