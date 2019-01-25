<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teams | LKMM-TD XXVII - The Extraordinary Worker</title>

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

    <script>
          function showTeam(str) {
              if (str.length == 0) { 
                  document.getElementById("yourTeam").innerHTML = "";
                  return;
              } else {
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("yourTeam").innerHTML = this.responseText;
                      }
                  }
                  xmlhttp.open("GET", "beta/yourteam.php?nrp="+str, true);
                  xmlhttp.send();
              }
          }
      </script>
    
  </head>
  <!-- <div id="dialog" title="PENGUMUMAN PENTING!" style="display: none;">
     <p><center>Bagi mahasiwa baru yang kelompoknya beranggotakan kurang dari 5 orang, harap menghubungi panitia melalui 'Contact Us'. Segala macam komplain/protes kami terima maksimal hingga 7 Januari 2017.<br>Terimakasih.</center></p>
  </div> -->
  <body style="overflow:auto;">
    <div class="container-fluid">
      <div class="row">
        <ul class="topnav" id="myTopnav">
          <li><span class="logo"><img src="img/ukp.png" height=70><img src="img/logo_lkmmtd.png" height=100></span></li>
          <li class="menu"><a href="index.php">Home</a></li>
          <li class="menu"><a href="pengumuman.php">Pengumuman</a></li>
          <li class="menu"><a href="team.php" class="active">Teams</a></li>
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
        <center><h3>TEAMS</center>
        <center><form> 
            NRP: <input type="text" id="nrp" name="nrp" onkeypress="return runScript(event)">
            <button type="button" name="search" onclick="showTeam(document.getElementById('nrp').value)" class="btn btn-default">Search</button>
        </form>
        <div id="yourTeam"></div></center>
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

      function runScript(e) {
            if (e.keyCode == 13 || e.which == 13) {
                e.preventDefault();
                showTeam(document.getElementById('nrp').value);
            }
        }


    </script>

  </body>
</html>