<?php
$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan");
mysql_select_db("lkmmtd_database", $con);

	$nrp = $_GET['nrp'];

	$cekquery = mysql_query("SELECT COUNT(*) as cek FROM detailkelompok WHERE nrp = ".$nrp);
	$fetchquery = mysql_fetch_array($cekquery);
	if ($fetchquery['cek'] == 0) {
		 echo "
		 <div class='container-fluid' id='error-team'>
		 	<div class='col-sm-4 col-sm-offset-4' style='margin-top: 10%;'>
		 		<h4>Data tidak ditemukan.</h4>
		 	</div>
		 </div>
		 ";
	}
	else {
			$sql1 = "SELECT * FROM detailkelompok WHERE nrp = ".$nrp;
			$result1 = mysql_query($sql1);
			$fetch1 = mysql_fetch_array($result1);
			//echo $fetch1['shift'];
			$sql2 = "SELECT * FROM kelompok WHERE idkelompok = ".$fetch1['idkelompok']." AND shift LIKE '".$fetch1['shift']."'";
			$result2 = mysql_query($sql2);
			$fetch2 = mysql_fetch_array($result2);

			$sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$fetch2['idkelompok']." AND shift LIKE '".$fetch2['shift']."'";
			$result3 = mysql_query($sql3);

			// while ($row = mysql_fetch_array($result3)){
			// 	echo $row['nrp']."<br>";
			// }

		?>
			<div class="container-fluid" id="your-team">
			<div class="col-sm-12 col-xs-12" style="text-align: center;" id="detail-kelompok">
				<div class="row">
					<div class="col-sm-5 col-xs-5"><p><?php echo "Kelompok ". $fetch2['idkelompok'] .": ". $fetch2['namakelompok']; ?></p></div>
					<div class="col-sm-3 col-xs-3"><p><?php	echo "Shift: ". $fetch2['shift']; ?></p></div>
					<div class="col-sm-4 col-xs-4"><p><?php echo "Ruang: ". $fetch2['ruang']; ?></p></div>
				</div>
			</div>
			<div class="container-fluid" id="tabel-kelompok">
		<?php
		    echo "<table class='table table-striped' style='text-align: center;'>
		    		<thead>
		   			<tr>
		   			<td class='col-sm-3 col-xs-3 table-team'>NRP</td>
		   			<td class='col-sm-7 col-xs-7 table-team'>Nama</td>
		   			<td class='col-md-2 col-xs-2 table-team'>Status</td>
		   			</tr>
		   			</thead>
		   			<tbody>";
		    while ($fetch3 = mysql_fetch_array($result3)){
				$sql4 = "SELECT * FROM peserta WHERE nrp = ".$fetch3['nrp'];
				$result4 = mysql_query($sql4);
				$fetch4 = mysql_fetch_array($result4);

				echo "<tr>";

				if ($fetch3['ketua'] == 1){
					echo "
					<td class='table-team'><b>".$fetch4['nrp']."</b></td>
		    		<td class='table-team'><b>".$fetch4['nama']."</b></td>
		    		<td class='table-team'><b>Ketua</b></td>";
		    	} else {
		    		echo"
		    		<td class='table-team'>".$fetch4['nrp']."</td>
		    		<td class='table-team'>".$fetch4['nama']."</td>
		    		<td class='table-team'>Anggota</td>";
		    	}

		    	echo "</tr>";
		    }
		    echo "</tbody></table>";
		?>
			</div>
			</div>
		<?php
	}
		?>