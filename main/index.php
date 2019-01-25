<?php
include "assets.header.php";
if (isset($_GET['status'])){
  if ($_GET['status'] == 1){
    echo "<script>alert('Student MyBoard untuk shift 2 belum diaktifkan...');</script>";
  } else if ($_GET['status'] == 2){
    echo "<script>alert('NRP atau password salah...');</script>";
  } else if ($_GET['status'] == 3){
    echo "<script>alert('Pesan anda sudah terkirim...');</script>";
  } else if ($_GET['status'] == 4){
    echo "<script>alert('CAPTCHA BELUM DIISI ATAU SALAH!!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial3-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>LKMM-TD XXVII | The Extraordinary Worker</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <style>
    html{
     overflow: hidden;
   }
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
 function recaptchaCallback(){
   $('#submitBtn').removeAttr('disabled');
 };
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
  <div id="loader-wrapper">
    <center><div id="text">LKMM-TD XXVII<br>
      "THE EXTRAORDINARY WORKER"</div></center>
      <div class="loader"></div>
  </div>
    <div id="warning">
      <div class="container">
        <center><h4>Please change to landscape mode to view the website...</h4></center>
      </div>
    </div>
   <div id="tombol"><a href="#" class="klik"><img src="images/menuicon.png" style="width: 80%; height: 35%;"></a></div>
    <div id="menu">
      <!-- <img src="images/menubar.png" id="menumenu"> -->
      <div id="menumenu">
          <div class="link" id="close" style="text-align: right; line-height: 150%;"><br><a href="#" class="klik"><i class="fa fa-times" aria-hidden="true"></i></a></div>
          <div class="link"><a href="#home" class="tHome"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a></div>
          <div class="link"><a href="#about" class="tAbout"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp; About LKMM-TD</a></div>
          <div class="link"><a href="#news" class="tNews"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i>&nbsp; News</a></div>
          <div class="link"><a href="#team" class="tTeam"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp; Teams</a></div>
          <div class="link"><a href="#contact" class="tContactUs"><i class="fa fa-comments" aria-hidden="true"></i></i>&nbsp; Contact Us</a></div>
          <div class="link"><a href="#faq" class="tFAQ"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp; FAQ</a></div>
          <div class="link"><a href="#myboard" class="tStudentMyboard"><i class="fa fa-table" aria-hidden="true"></i>&nbsp; Student MyBoard</a></div>
          <div class="link"><a href="#credits" class="tCredits"><i class="fa fa-code" aria-hidden="true"></i>&nbsp; Developer Credits</a></div>
      </div>
  </div>
   <!-- HEADER START--> 
   <div id="wrapper">
    <?php
    $cektime = date('H', time());

    if($cektime >=6 && $cektime < 12){ $waktu = "pagi"; }
    else if($cektime >=12 && $cektime < 16){ $waktu = "siang"; }
    else if($cektime >=16 && $cektime < 19){ $waktu = "sore"; }
    else if($cektime >=19){ $waktu = "malam"; }
    else{ $waktu = "malam"; }

    echo "<style>
              #home{
    background: url('images/".$waktu."-home.png') no-repeat center center scroll;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
    margin-left: 0;
    position: relative;
    z-index: 15 !important;
  }

              #about{
  background: url('images/".$waktu."-about.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-news.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-team.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-contactus.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-faq.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-student.png') no-repeat center center scroll;
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
background: url('images/".$waktu."-developer.png') no-repeat center center scroll;
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
</style>";

if ($cektime >= 8 && $cektime < 12){
  echo "<style>
               #langit{
  background-color: #0099ff;
}
</style>";
} else if ($cektime >= 12 && $cektime < 16){
  echo "<style>
               #langit{
  background-color: #00ffff;
}
</style>";
} else if ($cektime >= 16 && $cektime < 18){
  echo "<style>
               #langit{
  background: -webkit-linear-gradient(#00ffff 1%, #ff9933 50%);
  background: -o-linear-gradient(#00ffff 1%, #ff9933 50%);
  background: -moz-linear-gradient(#00ffff 1%, #ff9933 50%);
  background: linear-gradient(#00ffff 1%, #ff9933 50%);
}
</style>";
} else if ($cektime >= 18 && $cektime < 20){
  echo "<style>
               #langit{
  background: -webkit-linear-gradient(#000066 10%, #ff9933 100%);
  background: -o-linear-gradient(#000066 10%, #ff9933 100%);
  background: -moz-linear-gradient(#000066 10%, #ff9933 100%);
  background: linear-gradient(#000066 10%, #ff9933 100%);
}
</style>";
} else if (($cektime >= 20 && $cektime <= 23) || $cektime > 23 || ($cektime >= 0 && $cektime < 4)){
  echo "<style>
               #langit{
  background-color: #000000;
}
</style>";
} else if ($cektime >= 4 && $cektime < 6){
  echo "<style>
               #langit{
  background: -webkit-linear-gradient(#660066 30%, #ff9933 100%);
  background: -o-linear-gradient(#660066 30%, #ff9933 100%);
  background: -moz-linear-gradient(#660066 30%, #ff9933 100%);
  background: linear-gradient(#660066 30%, #ff9933 100%);
}
</style>";
} else if ($cektime >= 6 && $cektime < 8){
  echo "<style>
               #langit{
  background: -webkit-linear-gradient(#0099ff 1%, #ff9933 60%);
  background: -o-linear-gradient(#0099ff 1%, #ff9933 60%);
  background: -moz-linear-gradient(#0099ff 1%, #ff9933 60%);
  background: linear-gradient(#0099ff 1%, #ff9933 60%);
}
</style>";
}
?>

<div id="langit">
<div class="wide"></div>
  <?php 
  if ($cektime >= 18){
   echo "<div id='stars'></div>
   <div id='stars2'></div>
   <div id='stars3'></div>";
 }

 echo "<div id='satelit'>";
 if ($cektime >= 10 && $cektime < 17){
  echo "<div id='sun'></div>";
} else if ($cektime >= 19 || ($cektime >= 0 && $cektime < 4)){
  echo "<div id='moon'><img src='images/moon.png' id='bulan'></div>";
}
echo "</div>";
?>
<div class="row" id="home">
  <div id="semutsemut">
    <img src="images/semut-fix.gif" id="semut">
    <img src="images/semut-fix.gif" id="semut2">
    <img src="images/semut-fix.gif" id="semut3"><!-- 
    <img src="images/semut-fix.gif" id="semut4"> -->
  </div>
  <div id="semutsemut2">
    <img src="images/semut-fix-2.gif" id="semut5">
    <img src="images/semut-fix-2.gif" id="semut6">
  </div>
  <div id="plane"><img src="images/plane-petra.png" id="planeplane"></div>
  <?php if ($cektime >= 20 || ($cektime >= 0 && $cektime < 5)){ ?>
    <div id="kunangkunang">
      <img src="images/kunang-fix.png" id="kunang">
    </div>
    <div id="kunangkunang2">
      <img src="images/kunang-fix.png" id="kunang2">
    </div>
   	<div id="kunangkunang3">
      <img src="images/kunang-fix.png" id="kunang3">
    </div>
    <div id="kunangkunang4">
      <img src="images/kunang-fix.png" id="kunang4">
    </div>
    <div id="kunangkunang5">
      <img src="images/kunang-fix.png" id="kunang5">
    </div>
    <div id="kunangkunang6">
      <img src="images/kunang-fix.png" id="kunang6">
    </div>
    <div id="kunangkunang7">
      <img src="images/kunang-fix.png" id="kunang7">
    </div>
  <?php } ?>
  <div id="awanawan">
   <?php if ($cektime >= 7 && $cektime < 18){ ?>
     <div class="cloud normal cloud-1">
       <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
     </div>
     <div class="cloud normal cloud-2">
       <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
     </div>
     <div class="cloud small cloud-3">
       <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
     </div>
     <div class="cloud small cloud-4">
       <div id="clouds"></div><div id="clouds"></div><div id="clouds"></div><div id="clouds"></div>
     </div>
                 <?php } ?>
               </div>
             </div>
           </div>

           <div class="row" id="about">
              <div class="wide"></div>
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
        <div id="semutsemut-about">
          <img src="images/semut-fix-2.gif" id="semut-about">
          <img src="images/semut-fix-2.gif" id="semut-about-2"><!-- 
          <img src="images/semut-fix-2.gif" id="semut-about-3"> -->
        </div>
      </div>


      <div class="row" id="news" >
        <div class="wide"></div>
        <!-- <div id="dialog" title="PENGUMUMAN PENTING!" style="display: none; position: absolute; z-index: 20;">
            <p><center>Mohon untuk mengecek barang bawaan wajib kelompok karena ada perubahan.<br>Terimakasih.</center></p>
        </div> -->
        <div id="semutsemut-news">
          <img src="images/semut-fix.gif" id="semut-news">
          <img src="images/semut-fix.gif" id="semut-news-2"><!-- 
          <img src="images/semut-fix.gif" id="semut-news-3"> -->
        </div>
        
        <div class="container" id="section-news">
          <div class="col-sm-12" id="section-news-header">
           <div class="col-sm-6 col-sm-offset-3">
            <center><h3>News</h3></center>
            <?php include "connect.php"; ?>
          </div>
        </div>
        <div class="col-sm-12" id="section-news-content" >
         <div class="container-fluid">
          <p>
           <?php
           $sql = "select * from berita order by id desc";
           $result = mysql_query($sql);
           $count=1;
           while($row=mysql_fetch_assoc($result)){
            $now = date("Y-m-d");
            $temp1 = strtotime($row['tanggal']);
            $temp2 = strtotime("+1 day", $temp1);
            $next = date("Y-m-d", $temp2);
             echo "<div id='wrap'>
              <div class='news'>
               <a data-toggle='collapse' href='#".$count."'>";
            if ($now >= $row['tanggal'] && $now <= $next){
              echo "<span style='color: orange;'>";
            } else {
              echo "<span>";
            }
              echo "<i id='plus1' class='glyphicon glyphicon-chevron-down'></i>
                " . $row["judul"]. " 
                </span>
              </a>
            </div>
          </div>
          <div id='".$count."' class='panel-collapse collapse'>
            <div class='news2'>
             " . $row["konten"]. "
           </p>
         </div>
       </div>";  
       $count=$count+1;
     }
     ?>
   </p>
 </div>
</div>
</div>
</div>



<div class="row" id="team">
<div class="wide"></div>
<div id="semutsemut-team">
  <img src="images/semut-fix-2.gif" id="semut-team">
  <img src="images/semut-fix-2.gif" id="semut-team-2"><!-- 
  <img src="images/semut-fix-2.gif" id="semut-team-3"> -->
</div>
  <div class="container" id="section-team">
   <div class="col-sm-12" id="judul-team">
    <div class="col-sm-6 col-sm-offset-3">
     <center><h3>Teams</h3></center>
   </div>
 </div>
 <center>
   <form id="form-kelompok">
    <input type="number" id="nrp" name="nrp" placeholder="NRP" style="width: 220px; margin: auto;" onkeypress="return runScript(event)">
    <button type="button" name="search" onclick="showTeam(document.getElementById('nrp').value)" class="btn btn-default" id="button-team">Search</button>
  </form>
  <div id="yourTeam"></div>
</center>
</div>
</div>

<div class="row" id="contact">
<div class="wide"></div>
<div id="semutsemut-contact">
  <img src="images/semut-fix.gif" id="semut-contact">
  <img src="images/semut-fix.gif" id="semut-contact-2"><!-- 
  <img src="images/semut-fix.gif" id="semut-contact-3"> -->
</div>

 <div class="container" id="section-contact">
  <div class="col-sm-12" id="section-contact-header">
   <div class="col-sm-6 col-sm-offset-3">
    <center><h3>Contact Us</h3></center>
  </div>
</div>
<div id="contact-mobile"><center>Maaf, Contact Us hanya dapat diakses melalui PC/Desktop...</center></div>
<div class="col-sm-12" id="section-contact-content">
 <div class="container-fluid">

  <form action="insert_contact.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" name="nama" class="form-control" id="fullname" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <label for="exampleInputNRP">NRP</label>
          <input type="number" name="nrp" class="form-control" id="nrp" placeholder="NRP" required>
        </div>
        <div class="col-md-6">
          <label for="exampleInputPassword1">Phone Number</label>
          <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Nomor Telepon">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email Address</label>
      <input name="email" type="email" class="form-control" id="mail" placeholder="Alamat Email" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Subject</label>
      <input name="subject" type="text" class="form-control" id="subject" placeholder="Judul Pesan" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Message</label>
      <textarea name="pesan" class="form-control" rows="4" placeholder="Isi Pesan" required></textarea>
    </div>
    <div class="form-group">
      <p><center>Note : Agar dapat submit, silahkan verifikasi captcha terlebih dahulu.</center></p>
      <label for="inputPassword3" class="col-md-4">Human Verification</label>
      <div class="col-md-12">
       <div class="col-md-6 col-sm-offset-4">
         <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfL5QwUAAAAAKkdANiXYE2HvNyNH143nHQRJ9uW" name="g-recaptcha-response"></div>
       </div>
     </div>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary pull-right" id="submitBtn" disabled>Submit</button>
  </div>
</form>

</div>
</div>
</div>
</div>

<div class="row" id="faq">
<div class="wide"></div>
<div id="semutsemut-faq">
  <img src="images/semut-fix-2.gif" id="semut-faq">
  <img src="images/semut-fix-2.gif" id="semut-faq-2"><!-- 
  <img src="images/semut-fix-2.gif" id="semut-faq-3"> -->
</div>
  <?php include "faq/connect.php";?>
  <div class="container" id="section-faq">
    <div class="col-sm-12" id="section-faq-header">
      <div class="col-sm-6 col-sm-offset-3">
        <center><h3>Frequently Asked Questions</h3></center>
      </div>
    </div>
    <div class="col-sm-12" id="section-faq-content">
       <div class="container-fluid">
        <p><?php
          $sqlfaq = "select * from faq";
          $resultfaq = mysql_query($sqlfaq);
          $countfaq=1;
          while($rowfaq=mysql_fetch_assoc($resultfaq)){
          if ($rowfaq['STATUS'] == 1){
            echo "

            <div id='question'>
             <a data-toggle='collapse' href='#faq".$countfaq."'>
              <span class='label label-success'>Q$countfaq</span>
              " . $rowfaq["QUESTION"]. "
            </a>
          </div>

          <div id='faq".$countfaq."' class='panel-collapse collapse'>

          <p><span class='label label-info'>A$countfaq</span>
             " . $rowfaq["ANSWER"]. "
           </p>

          </div>";
          $countfaq=$countfaq+1;
        }
      }
      ?><!-- <center>
          FAQ LKMM-TD sudah dipindahkan ke forum mahasiswa Universitas Kristen Petra. Untuk melihat FAQ, silahkan klik <a href="https://student.petra.ac.id/forum/e/pembinaan/lkmmtd/84-frequently-asked-questions-faq">di sini</a>.<br>
          <i>Note: Anda harus login dulu ke forum untuk dapat melihat FAQ.</i>
    </center> --></p>
  </div>
</div>
</div>
</div>

      <div class="row" id="myboard">
      <div class="wide"></div>
      <div id="semutsemut-myboard">
        <img src="images/semut-fix.gif" id="semut-myboard">
        <img src="images/semut-fix.gif" id="semut-myboard-2"><!-- 
        <img src="images/semut-fix.gif" id="semut-myboard-3"> -->
      </div>
      <div class="container" id="section-myboard">
          <div class="col-sm-12" id="section-myboard-header">
            <div class="col-sm-6 col-sm-offset-3">
              <center><h3>Student MyBoard</h3></center>
            </div>
          </div>
          <div class="col-sm-6 col-sm-offset-3" id="section-myboard-content">
            <div class="container-fluid">
            	<center>Silahkan klik <a href="https://student.petra.ac.id/my/board">di sini</a> untuk login ke Student MyBoard</center>
              <!-- <form action="myboard/login_myboard.php" method="post">
                <div class="form-group ">
                  <label for="inputNRP">NRP: </label>
                  <input name="t_user" type="number" class="form-control" placeholder="NRP" required>
                </div>
                <div class="form-group">
                  <label for="inputNRP">Password: </label>
                  <input name="p_user" type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                 <button type="submit" class="btn btn-primary pull-right" id="submitMyboard">Submit</button>
                </div>
              </form> -->
              <!-- <center>Coming Soon</center> -->
            </div>
          </div>
       </div>
      </div>

      <div class="row" id="credits">
      <div class="wide"></div>
      <div id="semutsemut-credits">
        <img src="images/semut-fix-2.gif" id="semut-credits">
        <img src="images/semut-fix-2.gif" id="semut-credits-2"><!-- 
        <img src="images/semut-fix-2.gif" id="semut-credits-3"> -->
      </div>
      <div class="container" id="section-credits">
          <div class="col-sm-12" id="section-credits-header">
            <div class="col-sm-6 col-sm-offset-3">
              <center><h3>IT Division LKMM-TD XXVII</h3></center>
            </div>
          </div>
          <div class="col-sm-12" id="section-credits-content">
    	
          <div class="ourTeam">
          	<!-- <div class="container"> -->
		    <div class="row">
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
  		            <h4>Billy Jonathan<br>
  		            <small>Koordinator Divisi IT</small></h4>
  		            Teknik Informatika 2015
  		            <div class="ourTeam-social">
  		                <a href="http://www.instagram.com/bijo97" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
  		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Kevin Nyoto<br>
		            <small>Sekben Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/kevinnyoto" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Alfred Louis<br>
		            <small>Anggota Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/alfredlouiss" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Antonio Chandra<br>
		            <small>Anggota Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/antoniochandra" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		      <!-- </div> -->
		    </div>
		    <div class="row" id="credits-2">
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Michael Aninditya<br>
		            <small>Anggota Divisi IT</small></h4>
		            Sistem Informasi Bisnis 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/michaelanindita" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Stephen Lukas<br>
		            <small>Anggota Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/stephenlukas" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Vincent Christian<br>
		            <small>Anggota Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="https://www.instagram.com/vcryo" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		        <div class="col-sm-3 memberIT" style="font-size: 15px;">
		        	<center>
		        	<div class="img-circle img-responsive member"></div>
		            <h4>Amelia Kezia<br>
		            <small>Anggota Divisi IT</small></h4>
		            Teknik Informatika 2015
		            <div class="ourTeam-social">
		                <a href="http://www.instagram.com/ameliakeziaa" class="ig"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		            </div>
		            </center>
		        </div>
		      <!-- </div> -->
		    </div>
		</div>

          </div>
      </div>
      </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive.js"></script>
<script src="js/animasi.js"></script>
<!-- <script src="js/jquery.nicescroll.js"></script> -->
<!-- <script src="js/jquery.nicescroll.min.js"></script> -->
<!-- <script src="https://use.fontawesome.com/64269f9d3f.js"></script> -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
<script>
  function runScript(e) {
    if (e.keyCode == 13 || e.which == 13) {
      e.preventDefault();
      showTeam(document.getElementById('nrp').value);
    }
  }
</script>
<script type="text/javascript">

	 //    $(document).ready(

		//   function() { 

		//     $("html").niceScroll({zindex: 10002});
		//     $("#section-about-content").niceScroll({zindex: 10002});
		//     $("#section-news-content").niceScroll({zindex: 10002});

		//   }

		// );
      	$(window).load(function(){
	      // $(".loader").css("display", "none");
	      $('#text').css('display', 'none');
	      $(".loader").css('display','none'); 
	      $("#loader-wrapper").slideUp(400, function(){
	      	$("html").css("overflow-y", "auto");
	      });
	    });

        // $('img').mousedown(function(e){
        //   if (e.button == 2){
        //     return false;
        //   }
        // });
    </script>
  </body>
  </html>
