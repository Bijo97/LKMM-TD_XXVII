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
    	<center><h3>Maaf, waktu pengisian form vege/vegan dan alergi sudah ditutup, terima kasih.</h3></center>
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
