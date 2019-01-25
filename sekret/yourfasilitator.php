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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<br/>
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
	$i = 1;
	while($fetch2 = mysql_fetch_array($result2)){
		
		$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift = '".$id_shift."'";
		$result3 = mysql_query($sql3);



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

			$sql7 = "SELECT * FROM detailsekret WHERE nrp_sekret = ".$nrp." AND shift = '".$id_shift."' AND sesi = ".$id_sesi." AND ruangan = '".$id_ruangan."'";
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
					<button type="button" name="Hadir" class="btn btn-success" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 1, '<?php echo $i; ?>', '<?php echo $id_sesi; ?>')">Hadir</button>
				
				<?php } else { ?>
					<button type="button" name="TidakHadir" class="btn btn-danger" onclick="CAbsen('<?php echo $fetch6['nrp']; ?>', 0, '<?php echo $i; ?>', '<?php echo $id_sesi; ?>')">Tidak Hadir</button>
					
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
 		echo "<div class='col-sm-4 col-sm-offset-4'><button type='submit' name='submit' class='btn btn-warning form-control'>Validasi</button></div><br><br>";
 	} else {
 		echo "Anda sudah validasi<br><br>";
 	}
	
?><script>
	    $(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>