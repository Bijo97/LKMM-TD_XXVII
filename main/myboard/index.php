<?php
error_reporting(0);
  include 'connect.php';
  session_start();
  if (isset($_SESSION['nrp'])) {
	  $datapribadi = mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE nrp = ".$_SESSION['nrp']));
	  $kelompok = mysql_fetch_array(mysql_query("SELECT * FROM detailkelompok WHERE nrp = ". $_SESSION['nrp']));
	  $datakelompok = mysql_fetch_array(mysql_query("SELECT * FROM kelompok WHERE idkelompok = ".$kelompok['idkelompok']." AND shift = '".$kelompok['shift']."'"));

	  $sql = "SELECT * FROM rekap_pelanggaran WHERE nrp = ".$_SESSION['nrp'];
	  $result = mysql_query($sql);

	  $sql2 = "SELECT count(*) as cek FROM vw_rekapangket WHERE nrp = ".$_SESSION['nrp'];
	  $kueri = mysql_query($sql2);
	  $fets = mysql_fetch_array($kueri);

	  $sql3 = "SELECT * FROM vw_rekapangket WHERE nrp = ".$_SESSION['nrp'];
	  $kueri3 = mysql_query($sql3);
	  $fets3 = mysql_fetch_array($kueri3);

	  $temp = $datakelompok['ruang'];
	  $temp2 = $datakelompok['shift'];
	  $sql4 = "SELECT * FROM fasilitator WHERE nama_ruangan='$temp' and shift = '$temp2' ";
	  $kueri4 = mysql_query($sql4);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Myboard</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Selamat datang, <?php echo $datapribadi['nama'];?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="logout.php">Logout</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title"><center>Informasi Pribadi</center></h3>
		  </div>
		  <div class="panel-body">
		  	<center>
		    	Nama: <?php echo $datapribadi['nama']?><br>
		    	NRP: <?php echo $_SESSION['nrp'];?> |
		    	Jurusan: <?php echo $datapribadi['prodi'];?><br>
		    	Kelompok <?php echo $datakelompok['idkelompok'];?>: <?php echo $datakelompok['namakelompok'];?><br>
		    	Shift: <?php echo $datakelompok['shift'];?> | 
		    	Ruangan: <?php echo $datakelompok['ruang'];?> <br>
		    	Pemandu: <?php while($rows = mysql_fetch_assoc($kueri4)) { echo $rows['nama_fasilitator']." | ";}?>
		    </center>
		  </div>
		</div>
	
		<div class="panel panel-default" style="overflow-x: auto;">
		  <div class="panel-heading" style="width: 100%;">
		    <h3 class="panel-title"><center>Catatan Kehadiran</center></h3>
		  </div> 
		 
		  		<table class="table table-bordered" style="text-align: center;">
		  			<tbody>
		  			 <?php
						if($fets['cek']==1)
						{
						?>
		  				<tr>
		  					<td><a href="#" title="Opening & Polbangmawa">Sesi 1</a></td>
		  					<td><a href="#" title="Pendidikan Anti Korupsi">Sesi 2</a></td>
		  					<td><a href="#" title="Seminar Ide Kreatif">Sesi 3</a></td>
		  					<td><a href="#" title="Kontrak Belajar & Perkenalan Pemandu - Fasilitator">Sesi 4</a></td>
		  					<td><a href="#" title="Hakekat Motivasi & Latihan">Sesi 5</s></td>
		  					<td><a href="#" title="Analisa Kondisi Lingkungan, Gagasan Awal, & Latihan">Sesi 6</a></td>
		  					<td><a href="#" title="Tolok Ukur Keberhasilan & Latihan">Sesi 7</a></td>
		  					<td><a href="#" title="Pembentukan Kepanitiaan & Latihan">Sesi 8</a></td>
		  					<td><a href="#" title="Penyusunan Rencana Kegiatan & Latihan">Sesi 9</a></td>
		  					<td><a href="#" title="Komunikasi Antar Unit Kerja & Latihan">Sesi 10</a></td>
		  					<td><a href="#" title="Pengambilan Keputusan & Latihan">Sesi 11</a></td>
		  					<td><a href="#" title="Manajemen Konflik & Latihan">Sesi 12</a></td>
		  					<td><a href="#" title="Administrasi Kesekretariatan & Latihan">Sesi 13</a></td>
		  					<td><a href="#" title="Administrasi Keuangan & Latihan">Sesi 14</a></td>
		  					<td><a href="#" title="Pengantar Penyusunan Proposal Kegiatan">Sesi 15</a></td>
							<td><a href="#" title="Penyusunan Proposal Kegiatan">Sesi 16</a></td>
							<td><a href="#" title="Presentasi Penyusunan Proposal Kegiatan">Sesi 17</a></td>
		  					<td><a href="#" title="Closing">Sesi 18</a></td>
		  				</tr>
		  				<tr>
		  					<?php
		  						$data = mysql_fetch_array(mysql_query("SELECT * FROM rekap_absen WHERE nrp = ".$_SESSION['nrp']));
		  						$i = 1;
		  						while ($i <= 18) {
		  							echo "<td>";
		  								if ($data['sesi'.$i] == 0) {
		  									echo '<a href="#" title="Tidak Hadir"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></a>';
		  								}
		  								else {
		  									echo '<a href="#" title="Hadir"><i class="fa fa-check" aria-hidden="true" style="color: green;"></i></a>';
		  								}
		  							echo "</td>";
		  							$i++;
		  						}
		  					?>
		  				</tr>
		  				<?php
							}
							else 
							{
								?>
								<tr> <td> Maaf Anda belum mengisi angket Pre-Test </td> </tr>
								<?php
								
							}
						?>
		  			</tbody>
				</table>
		</div>
    
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Pelanggaran Peserta</h3>
  </div>
   
         <b><center><p> Belum ada data tersedia </p></center></b>
          
</div>

<?php
  $waktu = date("Y-m-d H");
  $shift = $kelompok['shift'];
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Status Pengisian Angket</h3>
  </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>Jenis Angket</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Angket Pre-Test 
          <?php
          	if($fets['cek']==1)
          	{
          		echo "<b>( Nilai: ".$fets3['NPRE_TEST'].")</b>";
          	}
          	?>
          </td>
          <td><?php if ($fets['cek'] == 1){
              echo "<span style='color: green;'>Sudah diisi</span>";
            } else {
              echo "<span style='color: red;'>Belum diisi</span>";
            } ?></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Angket Post-Test</td>
          <td><span style='color: green;'>Sudah diisi</span></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Angket Evaluasi</td>
          <td><span style='color: green;'>Sudah diisi</span></td>
        </tr>
      </tbody>
    </table>
	</div>
</div>

 <center><p>Informasi kelulusan peserta dapat dilihat pada saat Closing LKMMTD Shift 2</p></center>
 <center><p>Halaman ini hanya digunakan oleh shift 1 LKMMTD</center>
<br/><br/>
</body>
</html>
<?php } else { header("Location: http://lkmm-td.petra.ac.id/main"); } ?>