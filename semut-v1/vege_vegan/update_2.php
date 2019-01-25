<html>
<body>
<p><b>OLD DATA : </b></p>
<?php
	if(isset($_POST['search'])){
		$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan") or die ("Could not connect");
		mysql_select_db("lkmmtd_database", $con) or die ("Could not find db");
	
		$searchq = $_POST['search'];	
		
		$tnrp = mysql_query("SELECT nrp FROM survei_konsum_1 WHERE NRP = '$searchq'");
		$count = mysql_num_rows($tnrp);
		if($count == 0){
			header("Location: update.php");
			header("Location: update.php?empty=1");
		}
		else{
			$tid = mysql_query("SELECT id FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tid)){
				$id = $row['id'];
				echo " ID : $id <br>";				
			}
			while($row = mysql_fetch_array($tnrp)){
				$nrp = $row['nrp'];
				echo "NRP : $nrp <br>";				
			}
			$tnama = mysql_query("SELECT nama FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tnama)){
				$nama = $row['nama'];
				echo "Nama : $nama <br>";				
			}
			$tjurusan = mysql_query("SELECT jurusan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tjurusan)){
				$jurusan = $row['jurusan'];
				echo "Jurusan : $jurusan <br>";				
			}
			$tno_hp = mysql_query("SELECT no_hp FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tno_hp)){
				$no_hp = $row['no_hp'];
				echo "No.hp : $no_hp <br>";				
			}
			$tvege_vegan = mysql_query("SELECT vege_vegan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tvege_vegan)){
				$vege_vegan = $row['vege_vegan'];
				echo "Vege/Vegan : $vege_vegan <br>";				
			}
			
			//Alergi
			echo "Alergi : <br>";
			$tayam = mysql_query("SELECT ayam FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tayam)){
				$ayam = $row['ayam'];
				echo "&emsp; Ayam : $ayam <br>";				
			}
			$ttelur_utuh = mysql_query("SELECT telur_utuh FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($ttelur_utuh)){
				$telur_utuh = $row['telur_utuh'];
				echo "&emsp; Telur Utuh : $telur_utuh <br>";				
			}
			$ttelur_olahan = mysql_query("SELECT telur_olahan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($ttelur_olahan)){
				$telur_olahan = $row['telur_olahan'];
				echo "&emsp; Telur Olahan : $telur_olahan <br>";				
			}
			$tudang = mysql_query("SELECT udang FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tudang)){
				$udang = $row['udang'];
				echo "&emsp; Udang : $udang <br>";				
			}
			$tudang_olahan = mysql_query("SELECT udang_olahan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tudang_olahan)){
				$udang_olahan = $row['udang_olahan'];
				echo "&emsp; Udang Olahan : $udang_olahan <br>";				
			}
			$tkacang = mysql_query("SELECT kacang FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tkacang)){
				$kacang = $row['kacang'];
				echo "&emsp; Kacang-kacangan : $kacang <br>";				
			}
			$tsapi = mysql_query("SELECT sapi FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tsapi)){
				$sapi = $row['sapi'];
				echo "&emsp; Sapi : $sapi <br>";				
			}
			$tsantan = mysql_query("SELECT santan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tsantan)){
				$santan = $row['santan'];
				echo "&emsp; Santan : $santan <br>";				
			}
			$tnasi = mysql_query("SELECT nasi FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tnasi)){
				$nasi = $row['nasi'];
				echo "&emsp; Nasi : $nasi <br>";				
			}
			$tkarbohidrat = mysql_query("SELECT karbohidrat FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tkarbohidrat)){
				$karbohidrat = $row['karbohidrat'];
				echo "&emsp; Karbohidrat : $karbohidrat <br>";				
			}
			
			$tketerangan = mysql_query("SELECT keterangan FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tketerangan)){
				$keterangan = $row['keterangan'];
				echo "Keterangan : $keterangan <br>";				
			}
		}
	}
?>
<form action ="update_3.php" method ="post">
	<p><b>NEW DATA : </b></p>

		ID : <?php 
			$tid = mysql_query("SELECT id FROM survei_konsum_1 WHERE NRP = '$searchq'");
			while($row = mysql_fetch_array($tid)){
				$id = $row['id'];
				echo "$id";				
			}
		?> <br><br>
		NRP (Unchageable) : <input type="text" name="nrp" value=<?php $searchq = $_POST['search']; echo "$searchq"; ?> readonly><br><br>
		Nama : &nbsp&nbsp<input type="text" name="nama"> <br><br>
		<!--Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="pria"> Pria
					   <input type="radio" name="jenis_kelamin" value="wanita"> Wanita <br><br>-->
		Jurusan : <input type="text" name="jurusan"> <br><br>
		No.HP : &nbsp <input type="text" name="no_hp"> <br><br>
		Vege/Vegan : 
					<select name="vevan">
						<option value="vege">Vege : non daging (bisa telur, susu, keju)</option>
						<option value="vegan">Vegan : hanya bisa sayur (tidak bisa bawang dan telur)</option>
						<option value=" ">None</option>
					 </select> <br><br>
		Alergi : <br>
					<input type="hidden" name="ayam" value="no">
					<input type="checkbox" name="ayam" value="yes">Ayam<br>
					
					<input type="hidden" name="telur_utuh" value="no">
					<input type="checkbox" name="telur_utuh" value="yes">Telur Utuh<br>
					
					<input type="hidden" name="telur_olahan" value="no">
					<input type="checkbox" name="telur_olahan" value="yes">Telur Olahan (contoh : roti)<br>
					
					<input type="hidden" name="udang" value="no">
					<input type="checkbox" name="udang" value="yes">Udang<br>
					
					<input type="hidden" name="udang_olahan" value="no">
					<input type="checkbox" name="udang_olahan" value="yes">Udang Olahan (contoh : kerupuk)<br>
					
					<input type="hidden" name="kacang" value="no">
					<input type="checkbox" name="kacang" value="yes">Kacang-kacangan<br>
					
					<input type="hidden" name="sapi" value="no">
					<input type="checkbox" name="sapi" value="yes">Sapi<br>
					
					<input type="hidden" name="santan" value="no">
					<input type="checkbox" name="santan" value="yes">Santan<br>
					
					<input type="hidden" name="nasi" value="no">
					<input type="checkbox" name="nasi" value="yes">Nasi<br>
					
					<input type="hidden" name="karbohidrat" value="no">
					<input type="checkbox" name="karbohidrat" value="yes">Karbohidrat<br><br>
		Keterangan (Dapat menambahkan alergi yang tidak disebutkan di atas) : <input type="text" name="keterangan"> <br><br>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp <button type="submit" name="update">Update</button><br><br>
</form>
</body>
</html>