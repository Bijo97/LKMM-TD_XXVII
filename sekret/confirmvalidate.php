<?php
	session_start();
	include "connect.php";
	$id_ruangan = $_POST['ruangan'];
	$id_sesi = $_POST['sesi'];
	$id_shift = $_POST['nn'];
	$nrp = $_SESSION['namauser'];
	
	echo "Nama Ruangan : ".$id_ruangan;
	echo "</br>";
	$sqll = "SELECT * FROM sesi WHERE id = ".$id_sesi;
	$resultt = mysql_query($sqll);
	$fetchh = mysql_fetch_array($resultt);
	echo "Nama Sesi : ".$fetchh['nama_sesi'];
	echo "</br>";
	echo "Nama Shift : ".$id_shift;
	echo "</br>";
	echo "</br>";
	echo "Mahasiswa Yang Tidak Hadir : ";
	echo "</br>";


	$sql2 = "SELECT * FROM kelompok WHERE ruang = '".$id_ruangan."' AND shift = '".$id_shift."'";
	$result2 = mysql_query($sql2);

	echo "<div id='myModal' class='modal'>";
	echo "<div class='modal-content'>";
	echo "<p>";
	$i=0;
	while($fetch2 = mysql_fetch_array($result2)){
		$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift = '".$id_shift."'";
		$result3 = mysql_query($sql3);

 		while ($row3 = mysql_fetch_array($result3)){
			$sql4 = "SELECT * FROM absensi_sesi WHERE nrp = ".$row3['nrp']." AND sesi = ".$id_sesi." AND kehadiran = 0";	
			$result4 = mysql_query($sql4);
			while ($row4 = mysql_fetch_array($result4)){
				$sql5 = "SELECT * FROM peserta WHERE nrp = ".$row4['nrp'];
				$result5 = mysql_query($sql5);
				$fetch5 = mysql_fetch_array($result5);
				echo $row4['nrp']." ".$fetch5['nama']."<br>";
				$i++;
			}
		}
 		
	 }
	 echo "</br>";
	 echo "Jumlah Mahasiswa Tidak Hadir : ".$i;
	 echo "</br>";
	 echo "</p>";

	 echo "<p>Apa anda yakin ingin melanjutkan validasi? </p>";
	 echo "<a href='fasilitator.php'><button class='pull-right'>No</button></a>";
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	 echo "<a href='updatevalidate.php?ruangan=".$id_ruangan."&sesi=".$id_sesi."&shift=".$id_shift."'><button>Yes</button></a>";
	
	 echo "</div>";
	// echo "<script>
	// 		if (confirm('') == true) {
	// 			if (str.length == 0) { 
	// 			document.getElementById('updateValidate').innerHTML = "";
	// 			return;
	// 			} else {
	// 				var xmlhttp = new XMLHttpRequest();
	// 				xmlhttp.onreadystatechange = function() {
	// 					if (this.readyState == 4 && this.status == 200) {
	// 						document.getElementById('updateValidate').innerHTML = this.responseText;
	// 						alert('aasdasda');
	// 					}
	// 				}
	// 				alert('aasdasda');
	// 				xmlhttp.open('GET', 'updatevalidate.php?id_ruangan='+".$id_ruangan."+'&sesi='+".$id_sesi."+'&shift='
	// 				+".$id_shift.", true);
	// 				xmlhttp.send();
	// 			}
	// 		} else {
				
	// 		}
	// 	</script>";
?>