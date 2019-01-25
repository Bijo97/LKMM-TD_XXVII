<?php
	if(isset($_POST['submit'])){
		$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan") or die ("Could not connect");
		mysql_select_db("lkmmtd_database", $con) or die ("Could not find db");

		$nama = $_POST['nama'];
		$nrp = $_POST['nrp'];
		$jurusan = $_POST['jurusan'];
		$no_hp = $_POST['no_hp'];
		
		$query = mysql_query("SELECT nrp FROM survei_konsum_1 WHERE NRP = '$nrp'");
		$count = mysql_num_rows($query);
		
		if($nama == '' or $nrp == '' or $jurusan == '' or $no_hp == ''){
				header("Location: index.php");
				header("Location: index.php?empty=1");
		}
		else{
			if($count > 0){
				header("Location: index.php");
				header("Location: index.php?available=1");
			}
			else{
				$vevan = $_POST['vevan'];
				//$alergi = $_POST['alergi'];
				$ayam = $_POST['ayam'];
				$telur_utuh = $_POST['telur_utuh'];
				$telur_olahan = $_POST['telur_olahan'];
				$udang = $_POST['udang'];
				$udang_olahan = $_POST['udang_olahan'];
				$kacang = $_POST['kacang'];
				$sapi = $_POST['sapi'];
				$santan = $_POST['santan'];
				$nasi = $_POST['nasi'];
				$karbohidrat = $_POST['karbohidrat'];
				$keterangan = $_POST['keterangan'];
					
				$sql = "INSERT INTO survei_konsum_1 VALUES('', '".$nama."', ".$nrp.", '".$jurusan."', '".$no_hp."', '".$vevan."', '".$ayam."', '".$telur_utuh."', '".$telur_olahan."', '".$udang."', '".$udang_olahan."', '".$kacang."', '".$sapi."', '".$santan."', '".$nasi."', '".$karbohidrat."','".$keterangan."')";
				
				$result = mysql_query($sql);
				
				if ($result){
					header("Location: index.php");
					header("Location: index.php?done=1");
				} 
				else {
					header("Data gagal diterima");
				}	
			}
		}
	}
?>