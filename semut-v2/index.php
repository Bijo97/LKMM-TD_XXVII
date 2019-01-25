<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | LKMM-TD XXVII - The Extraordinary Worker</title>

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
  <div id="dialog" title="PENGUMUMAN PENTING!" style="display: none;">
  	 <p><center>Setiap mahasiswa dimohon untuk mengecek jadwal pembagian shift Hari-H karena ada beberapa perubahan.<br>Terimakasih.</center></p>
  </div>
  <body style="overflow:hidden;">
    <div class="container-fluid">
      <div class="row">
        <ul class="topnav" id="myTopnav">
          <li><span class="logo"><img src="img/ukp.png" height=70><img src="img/logo_lkmmtd.png" height=100></span></li>
          <li class="menu"><a href="index.php" class="active">Home</a></li>
          <li class="menu"><a href="pengumuman.php">Pengumuman</a></li>
          <li class="menu"><a href="team.php">Teams</a></li>
          <li class="menu"><a href="contact.php">Contact Us</a></li>
          <li class="menu"><a href="about.php">About LKMM-TD</a></li>
          <li class="menu"><a href="faq.php">FAQ</a></li>
          <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()" style="font-size: 30px;">&#9776;</a>
          </li>
        </ul>
        <hr>
      </div>

    <div class="col-md-9 col-md-offset-2">
       <center><img src="img/logo_lkmmtd.png" style="width: 100%; margin-top:-5%;"></center>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
      /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */

      $( function() {
	    	$( "#dialog" ).dialog();
	  } );
	
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