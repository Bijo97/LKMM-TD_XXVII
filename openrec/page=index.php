<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>LKMM-TD XXVII: Open Recruitment</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<link rel="shortcut icon" href="iconukp.ico" type="image/x-icon" >
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

    <script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

    <style>
      #title{
        font-weight: bbold;
      }
    </style>
</head>
<body >
<div id="ErcSysmain">
    <div class="ErcSyssheet clearfix">
            <div class="ErcSyslayout-wrapper">
                <div class="ErcSyscontent-layout">
                    <div class="ErcSyscontent-layout-row">
                        <div class="ErcSyslayout-cell ErcSyscontent"><article class="ErcSyspost ErcSysarticle">
                   		<div class="ErcSyspostcontent ErcSyspostcontent-0 clearfix">
<div id="logo"></div>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='page=index.php'><span>BERANDA</span></a></li>
   <li><a href='page=register.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php' target='_blank'><span>CETAK CV</span></a></li>
   <li><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<div id="formreg"><br/><br/>
<div id="info">
<h3>Informasi Divisi :</h3><br/>
          <div id="division" style="margin-right: 5px;">
                <h3>Divisi IT</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/IT.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Membuat website LKMM-TD XXVII, membuat program sistem absesnsi, dan membantu divisi lain yang membutuhkan sistem online.
                </div>
                <h3>Divisi Sekretariat</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/sekretariat.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Membuka pendaftaran untuk mahasiswa lama, menyiapkan sistem absensi untuk peserta, fasilitator dan pemandu dan menjawab petanyaan-pertanyaan peserta di website LKMM-TD XXVII.
                </div>
                <h3>Divisi Acara</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/acara.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Merencanakan konsep setiap acara, membuat breakdown acara, mencari & mengatur pengisi acara (band,dance,dll) dan berkoordinasi dengan setiap divisi dalam menjalankan acara.
                </div>
                <h3>Divisi Materi</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/materi.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Menyiapkan perlengkapan materi meliputi games dan analisa kasus serta seminar untuk peserta.
                </div>
                <h3>Divisi Keamanan</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/keamanan.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Membuat peraturan  untuk peserta dan panitia, dan menjaga ketertiban supaya acara dapat berjalan dengan lancar.
                </div>
                <h3>Divisi Pubdekdok</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/pubdekdok.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Melakukan publikasi LKMM-TD XXVII, menyiapkan seluruh dekorasi yang diperlukan, dan melakukan dokumentasi selama LKMM-TD berlangsung.
                </div>
                <h3>Divisi Perlengkapan</h3>
                <div class="col-sm-2" style="margin-top: 2%;"><img src="logo/perlengkapan.png" class="img-responsive" id="logo"></div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                  Menyiapkan setiap ruangan yang diperlukan dan segala keperluan-keperluan yang dibutuhkan dalam menjalankan acara LKMM-TD XXVII.
                </div>
                <h3>Divisi Konsumsi & Kesehatan</h3>
                <div class="col-sm-2" style="margin-top: 2%;">
                  <img src="logo/konsumsi.png" id="logo" class="img-responsive" style="margin-bottom: 15px;">
                  <img src="logo/kesehatan.png" id="logo" class="img-responsive">
                </div>
                <div class="col-sm-10" style="margin-top: 2%; margin-bottom: 5%;">
                Menyiapkan konsumsi untuk peserta, panitia, fasilitator, dan pemandu, dan siap sedia dalam melayani peserta/panitia/pemandu/fasilitator yang kesehatannya terganggu.
                </div>
          </div>
</div><br/>
</div></article></div>
                    </div>
                    
                </div>
                
</div></div><br/><br/>

</div><script type="text/javascript">
var __lc = {};
__lc.license = 4174001;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script></body></html>