<?php
	session_start();
	include "connect.php";

	$id_ruangan = $_GET['id_ruangan'];
	$id_sesi = $_GET['sesi'];
	$id_shift = $_GET['shift'];
	$nrp = $_SESSION['namauser'];
	// $sql1 = "SELECT * FROM absensi_sekret WHERE id = ".$id_sekret;
	// $result1 = mysql_query($sql1);
	// $fetch1 = mysql_fetch_array($result1);

	$sql2 = "SELECT * FROM kelompok WHERE ruang = '".$id_ruangan."' AND shift = '".$id_shift."'";
	$result2 = mysql_query($sql2);
?>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script>
	    $(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
	<table class='table table-striped' id='example'>
		 <thead>
   			<tr>
			<th>Nama Kelompok</th>
   			<th>NRP</th>
   			<th>Nama</th>
			<th>Prodi</th>
			<th>Action</th>
   			</tr>
   		</thead><tbody>
<?php 
	while($fetch2 = mysql_fetch_array($result2)){
		
		$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift = '".$id_shift."'";
		$result3 = mysql_query($sql3);



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

			$sql7 = "SELECT * FROM detailsekret WHERE nrp_sekret = ".$nrp." AND shift = '".$id_shift."' AND sesi = ".$id_sesi;
 			$result7 = mysql_query($sql7);
 			$fetch7 = mysql_fetch_array($result7);

			echo "<tr><td>".$fetch5['namakelompok']."</td>";
			echo "<td>".$fetch4['nrp']."</td>";
			echo "<td>".$fetch4['nama']."</td>";
			echo "<td>".$fetch4['prodi']."</td>";


			echo "<td id='status".$i."'>";
			if($fetch7['validasi']==0){
				if($fetch6['kehadiran']==1){
				?>
					<button type="button" name="Hadir" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 1, '<?php echo $i; ?>')">Hadir</button>
				
				<?php } else { ?>
					<button type="button" name="TidakHadir" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 0, '<?php echo $i; ?>')">Tidak Hadir</button>
					
				<?php
				}
			} else {
				if($fetch6['kehadiran']==1){
					echo "<span style='color: green;'>Hadir</span>";
				} else {
					echo "<span style='color: red;'>Tidak Hadir</span>";
				}
			}		
			echo "</td>";
			echo "</tr>";
			$i++;
		}
 		
	 }

	echo "</tbody></table>";

	 if ($fetch7['validasi'] == 0){
 		echo "<button type='submit' name='submit'>Validate</button>";
 	} else {
 		echo "Anda sudah validasi";
 	}
	
?>