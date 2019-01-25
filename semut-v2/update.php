<!DOCTYPE html>
<html>
<head>
	<title>Update Form Vege, Vegan dan Alergi Peserta LKMM-TD XXVII</title>
</head>
<body>
	<form action ="update_2.php"method ="post">
		<p><b>Update Form Vege, Vegan dan Alergi Peserta LKMM-TD XXVII</b></p>
		NRP : <input type="text" name="search" placeholder="Search NRP" required/>
		<input type ="submit" value =">>"/><br><br>
		<?php
		if (isset($_GET['empty'])){
			echo "NRP tidak ditemukan";
		}
		else{
			if(isset($_GET['done'])){
				echo"Data berhasil diupdate";
			}
		}
		?>
	</form>
</body>
</html>