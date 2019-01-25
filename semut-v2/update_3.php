<?php
	
	if(isset($_POST['update'])){
		$hostname = "lkmm-td.petra.ac.id";
		$username = "lkmmtd";
		$password = "kapokmukapan";
		$databaseName = "lkmmtd_database";
		
		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		
		$nrp = $_POST['nrp'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$no_hp = $_POST['no_hp'];
		$vevan = $_POST['vevan'];
		
		//Alergi
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
		
		$sql = "UPDATE survei_konsum_1 SET nama='".$nama."', jurusan ='".$jurusan."',no_hp='".$no_hp."', vege_vegan='".$vevan."', ayam='".$ayam."', telur_utuh='".$telur_utuh."', telur_olahan='".$telur_olahan."', udang='".$udang."', udang_olahan='".$udang_olahan."', kacang='".$kacang."', sapi='".$sapi."',	santan='".$santan."', nasi='".$nasi."', karbohidrat='".$karbohidrat."', keterangan='".$keterangan."'  WHERE NRP=".$nrp."";
	
		$result = mysqli_query($connect, $sql);
		if($result){
			header("Location: update.php");
			header("Location: update.php?done=1");
		}
		else{
			echo "Data gagal diupdate";
		}
		mysqli_close($connect);
	}
?>