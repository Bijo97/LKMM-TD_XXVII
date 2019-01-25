<!DOCTYPE html>
<html>
<head>
	<title>Form Vege, Vegan dan Alergi Peserta LKMM-TD XXVII</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!------ js ------>
	<script src="../js/jquery.min.js"> </script>
	<!--- fonts --->
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
	<style>
	@font-face { font-family: TheBlackBox; font-weight:bold; src: url('../font/The_Black_Box-FFP.otf'); } 
	</style>
<!--- fonts -->
</head>

<body style="overflow-y:scroll;">
	<div id="home" class="header-top">
		<!--- container ---->
		<div class="container">
			<div class="header-logo">
			
				</div>
				<div class="row header-sub-text">
			<h2><font face="TheBlackBox">LKMM-TD XXVII</font></h2>
			<p><font face="TheBlackBox">"THE EXTRAORDINARY WORKER"</p></font>
			</div>
		<?php
		if(isset($_GET['available'])){
			echo "<font color='pink' size='6' >NRP sudah ada, anda sudah pernah melakukan pengisian data!</font>";
		}
		else{
			if(isset($_GET['empty'])){
				echo "<font color='pink' size='6' >Harap menuliskan data anda dengan lengkap!</font>";
			}	
			else{
				if (isset($_GET['done'])){
					echo "<font color='yellow' size='6' >Terima kasih, data telah diterima!</font>";
				}
			}
		}
		?>
		<div class="row" id="form">
	<p><b><font color="white">Form Vege, Vegan dan Alergi Peserta LKMM-TD XXVII</font></b></p>
		<form action="send.php" method="post" name="form">
			<div class="form-group">
			  <label for="nama"><font color="white">Nama:</font></label>
			  <input type="text" name="nama" class="form-control" required> <font color="white">*wajib diisi</font>
			</div>
			<div class="form-group">
			  <label for="nrp"><font color="white">NRP:</font></label>
			  <input type="number" name="nrp" class="form-control" required> <font color="white">*wajib diisi</font>
			</div>
			<div class="form-group">
			  <label for="jurusan"><font color="white">Jurusan:</font></label>
			  <input type="text" name="jurusan" class="form-control" required> <font color="white">*wajib diisi</font>
			</div>
			<div class="form-group">
			  <label for="no_hp"><font color="white">No. HP:</font></label>
			  <input type="text" name="no_hp" class="form-control" required> <font color="white">*wajib diisi</font>
			</div>
			<div class="form-group">
			  <label for="vevan"><font color="white">Vege / Vegan:</font></label>
			  <select name="vevan" class="form-control">
                    <option value="none">None</option>
					<option value="vege">Vege : non daging (bisa telur, susu, keju)</option>
					<option value="vegan">Vegan : hanya bisa sayur (tidak bisa bawang dan telur)</option>
				</select>
			</div>
			<div class="form-group">
			  <label for="alergi"><font color="white">Alergi:</font></label><br>
			  <input type="hidden" name="ayam" value="no">
						<input type="checkbox" name="ayam" value="yes"><font color="white">Ayam</font><br>
						
						<input type="hidden" name="telur_utuh" value="no">
						<input type="checkbox" name="telur_utuh" value="yes"><font color="white">Telur Utuh</font><br>
						
						<input type="hidden" name="telur_olahan" value="no">
						<input type="checkbox" name="telur_olahan" value="yes"><font color="white">Telur Olahan (contoh : roti)</font><br>
						
						<input type="hidden" name="udang" value="no">
						<input type="checkbox" name="udang" value="yes"><font color="white">Udang</font><br>
						
						<input type="hidden" name="udang_olahan" value="no">
						<input type="checkbox" name="udang_olahan" value="yes"><font color="white">Udang Olahan (contoh : kerupuk)</font><br>
						
						<input type="hidden" name="kacang" value="no">
						<input type="checkbox" name="kacang" value="yes"><font color="white">Kacang-kacangan</font><br>
						
						<input type="hidden" name="sapi" value="no">
						<input type="checkbox" name="sapi" value="yes"><font color="white">Sapi</font><br>
						
						<input type="hidden" name="santan" value="no">
						<input type="checkbox" name="santan" value="yes"><font color="white">Santan</font><br>
						
						<input type="hidden" name="nasi" value="no">
						<input type="checkbox" name="nasi" value="yes"><font color="white">Nasi</font><br>
						
						<input type="hidden" name="karbohidrat" value="no">
						<input type="checkbox" name="karbohidrat" value="yes"><font color="white">Karbohidrat</font>
			</div>
			<div class="form-group">
			  <label for="keteragan"><font color="white">Keterangan:</font></label>
			  <textarea name="keterangan" cols="60" rows="8" class="form-control"></textarea>
			</div><br>
			<button type="submit" class="btn btn-default" name="submit">Submit</button>&nbsp; &nbsp; &nbsp;
			<button onclick="window.location.href = '../index.php'" class="btn btn-default">Back to home</button><br><br>
		</form>
	</div>
	</div>
	</div>
</body>
</html>