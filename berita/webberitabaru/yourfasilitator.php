<?php
$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan");
mysql_select_db("lkmmtd_database", $con);

	$id_fasilitator = $_GET['id_fasilitator'];
	$id_sesi = $_GET['sesi'];
	$id_shift = $_GET['shift'];

	$sql1 = "SELECT * FROM fasilitator WHERE id_fasilitator = ".$id_fasilitator;
	$result1 = mysql_query($sql1);
	$fetch1 = mysql_fetch_array($result1);

	$sql2 = "SELECT * FROM kelompok WHERE ruang = '".$fetch1['nama_ruangan']."' AND shift = '".$id_shift."'";
	$result2 = mysql_query($sql2);

	while($fetch2 = mysql_fetch_array($result2)){
		$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift = '".$id_shift."'";
		$result3 = mysql_query($sql3);

		 echo "<table class='table table-striped'>
   			<tr>
			<td>Nama Kelompok</td>
   			<td>NRP</td>
   			<td>Nama</td>
			<td>Prodi</td>
			<td>Action</td>
   			</tr>";

   		$i = 1;
 		while ($row = mysql_fetch_array($result3)){

	 		$sql4 = "SELECT * FROM peserta WHERE nrp = ".$row['nrp'];
			$result4 = mysql_query($sql4);
			$fetch4 = mysql_fetch_array($result4);

			$sql5 = "SELECT * FROM kelompok WHERE idkelompok = ".$row['idkelompok']." AND shift = '".$id_shift."'";
			$result5 = mysql_query($sql5);
			$fetch5 = mysql_fetch_array($result5);
	

			$sql6 = "SELECT * FROM absensi_sesi WHERE nrp = ".$row['nrp']." AND sesi = ".$id_sesi;
			$result6 = mysql_query($sql6);
			$fetch6 = mysql_fetch_array($result6);

			echo "<td>".$fetch5['namakelompok']."</td>";
			echo "<td>".$fetch4['nrp']."</td>";
			echo "<td>".$fetch4['nama']."</td>";
			echo "<td>".$fetch4['prodi']."</td>";


			echo "<td id='status".$i."'>";
			if($fetch6['kehadiran']==1){
			?>
				<button name="Hadir" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 1, '<?php echo $i; ?>')">Hadir</button>
			
			<?php } else { ?>
				<button name="TidakHadir" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 0, '<?php echo $i; ?>')">Tidak Hadir</button>
				
			<?php
			}		
			echo "</td>";
			echo "</tr>";
			$i++;
		}
 		echo "</table>";

	 }
	 
	
?>