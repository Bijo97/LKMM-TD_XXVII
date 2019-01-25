<?php
		include 'connect.php';
		$data1 = mysql_query("SELECT nrp FROM absensi_sesi_fix WHERE sesi = 4 AND kehadiran = 1");
		// $data1 = mysql_query("SELECT nrp FROM mhs_absen WHERE id_keg = 2");
		$data2 = mysql_query("SELECT nrp FROM mhs_absen WHERE id_keg = 3");
		// $data1 = mysql_query("SELECT nrp FROM absensi_sesi_fix WHERE sesi = 4 AND kehadiran = 1");
		// $data2 = mysql_query("SELECT nrp FROM absensi_sesi_fix WHERE sesi = 5 AND kehadiran = 1");
		while ($row = mysql_fetch_array($data1)) {
			$cek = 1;
			while ($row2 = mysql_fetch_array($data2)) {
				if ($row['nrp'] == $row2['nrp']) {
					$cek = 0;
				}
			}
			if ($cek == 1) {
				echo $row['nrp']."<br>";
			}
		}
?>