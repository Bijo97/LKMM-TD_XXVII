<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Us | LKMM-TD XXVII - The Extraordinary Worker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      function recaptchaCallback(){
        $('#submitBtn').removeAttr('disabled');
      };
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body style="overflow-x:hidden;">
    <div class="container-fluid">
      <div class="row">
        <ul class="topnav" id="myTopnav">
          <li><span class="logo"><img src="img/ukp.png" height=70><img src="img/logo_lkmmtd.png" height=100></span></li>
          <li class="menu"><a href="index.php">Home</a></li>
          <li class="menu"><a href="pengumuman.php">Pengumuman</a></li>
          <li class="menu"><a href="team.php">Teams</a></li>
          <li class="menu"><a href="contact.php" class="active">Contact Us</a></li>
          <li class="menu"><a href="about.php">About LKMM-TD</a></li>
          <li class="menu"><a href="faq.php">FAQ</a></li>
          <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()" style="font-size: 30px;">&#9776;</a>
          </li>
        </ul>
        <hr>
      </div>

      <div class="container">
        <div class="container">
          <div class="col-md-6 col-md-offset-3">
            <center><h3>CONTACT US</h3></center><br>
            <center>Silahkan mengisi contact form di bawah ini bila anda memiliki pertanyaan, pertanyaan anda akan dijawab oleh panitia melalui email anda.</center><br>
            <?php
              if(isset($_GET['status'])){
                if ($_GET['status'] == 3){
                  echo "<font color='green' size='6'>Pesan berhasil dikirim!<br></font>";
                }
              }
            ?>
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
                
              <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                  <select name="kategori" class="form-control">
                    <option>Pilih Kategori</option>
                    <option value="1">Informasi WGG</option>
                    <option value="2">Kritik dan Saran</option>
                  </select>
              </div> -->
              <div class="form-group">
                <label for="exampleInputPassword1">Subject</label>
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Judul Pesan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea name="pesan" class="form-control" rows="4" placeholder="Isi Pesan" required></textarea>
              </div>
              <div class="form-group">
                <small><b>Note : Agar dapat submit, silahkan verifikasi captcha terlebih dahulu.</b></small>
                <label for="inputPassword3" class="col-md-4">Human Verification</label>
                <div class="col-md-6">
                  <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfL5QwUAAAAAKkdANiXYE2HvNyNH143nHQRJ9uW"></div>
                </div>
              </div>
              <br><br><br><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right" id="submitBtn" disabled>Submit</button>
              </div>
            </form>
            <br><br><br>
            <hr>
            <div class="col-md-12" style="font-size: 110%;">
              <p><b>LKMM-TD XXVII</b><br>
              Petra Christian University,<br>
              Siwalankerto 121-131, 60236 Surabaya, East Java</p>
            </div>
          </div>
        </div>
      </div><br><br>

    
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
