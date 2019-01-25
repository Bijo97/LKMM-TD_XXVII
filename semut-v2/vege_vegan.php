<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Vege Vegan Alergi | LKMM-TD XXVII - The Extraordinary Worker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
  </head>
  <body style="overflow-x:hidden;">
    <div class="container-fluid">
      <div class="row">
        <ul class="topnav" id="myTopnav">
          <li><span class="logo"><img src="img/ukp.png" height=70><img src="img/logo_lkmmtd.png" height=100></span></li>
          <li class="menu"><a href="index.php">Home</a></li>
          <li class="menu"><a href="pengumuman.php">Pengumuman</a></li>
          <!-- <li class="menu"><a href="vege_vegan.php">Form Vege Vegan</a></li>
          <li class="menu"><a href="jadwal.php">Jadwal Kegiatan</a></li>
          <li class="menu"><a href="peraturan.php">Peraturan Peserta</a></li>
          <li class="menu"><a href="obat.php">Pendaftaran Obat</a></li> -->
          <li class="menu"><a href="contact.php">Contact Us</a></li>
          <li class="menu"><a href="about.php">About LKMM-TD</a></li>
          <li class="menu"><a href="faq.php">FAQ</a></li>
          <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()" style="font-size: 30px;">&#9776;</a>
          </li>
        </ul>
        <hr>
      </div>

    <div class="row">
        <?php
    if(isset($_GET['available'])){
      echo "<font color='red' size='6' >NRP sudah ada, anda sudah pernah melakukan pengisian data!";
    }
    else{
      if(isset($_GET['empty'])){
        echo "<font color='red' size='6' >Harap menuliskan data anda dengan lengkap!";
      } 
      else{
        if (isset($_GET['done'])){
          echo "<font color='green' size='6' >Terima kasih, data telah diterima!";
        }
      }
    }
    ?>
    <div class="container">
	    <div class="container">
		    <div class="col-md-6 col-md-offset-3">
		        <div class="row" id="form">
		        <center><H3><b>Form Vege, Vegan dan Alergi Peserta LKMM-TD XXVII</b></H3></center><br><br>
		        <form action="send.php" method="post" name="form">
		          <div class="form-group">
		            <label for="nama">Nama: </label>
		            <input type="text" name="nama" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label for="nrp">NRP:</label>
		            <input type="number" name="nrp" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label for="jurusan">Jurusan:</label>
		            <input type="text" name="jurusan" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label for="no_hp">No. HP:</label>
		            <input type="text" name="no_hp" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <label for="vevan">Vege / Vegan:</label>
		            <select name="vevan" class="form-control">
		              <option value="none">None</option>
		              <option value="vege">Vege : non daging (bisa telur, susu, keju)</option>
		              <option value="vegan">Vegan : hanya bisa sayur (tidak bisa bawang dan telur)</option>
		            </select>
		          </div>
		          <div class="form-group">
		            <label for="alergi">Alergi:</label><br>
			        <div class="row">
			        	<div class="col-md-6">
			            	<input type="hidden" name="ayam" value="no">
			                <input type="checkbox" name="ayam" value="yes"> Ayam<br>
			                
			                <input type="hidden" name="telur_utuh" value="no">
			                <input type="checkbox" name="telur_utuh" value="yes"> Telur Utuh<br>
			                
			                <input type="hidden" name="telur_olahan" value="no">
			                <input type="checkbox" name="telur_olahan" value="yes"> Telur Olahan (contoh : roti)<br>
			                
			                <input type="hidden" name="udang" value="no">
			                <input type="checkbox" name="udang" value="yes"> Udang<br>
			                
			                <input type="hidden" name="udang_olahan" value="no">
			                <input type="checkbox" name="udang_olahan" value="yes"> Udang Olahan (contoh : kerupuk)<br>
			            </div>
			            <div class="col-md-6">
			                <input type="hidden" name="kacang" value="no">
			                <input type="checkbox" name="kacang" value="yes"> Kacang-kacangan<br>
			                
			                <input type="hidden" name="sapi" value="no">
			                <input type="checkbox" name="sapi" value="yes"> Sapi<br>
			                
			                <input type="hidden" name="santan" value="no">
			                <input type="checkbox" name="santan" value="yes"> Santan<br>
			                
			                <input type="hidden" name="nasi" value="no">
			                <input type="checkbox" name="nasi" value="yes"> Nasi<br>
			                
			                <input type="hidden" name="karbohidrat" value="no">
			                <input type="checkbox" name="karbohidrat" value="yes"> Karbohidrat
			            </div>
			        </div>
		          </div>
		          <div class="form-group">
		            <label for="keteragan">Keterangan:</label>
		            <textarea name="keterangan" cols="60" rows="8" class="form-control"></textarea>
		          </div><br>
		          <button type="submit" class="btn btn-info pull-right" name="submit">Submit</button>
		        </form>
		        <button onclick="window.location.href = 'pengumuman.php'" class="btn btn-default pull-right">Back</button>
		    </div>
		    <br><br>
		    </div>
	    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
      function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
              x.className += " responsive";
          } else {
              x.className = "topnav";
          }
      }
    </script>
  </body>
</html>
