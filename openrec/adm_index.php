<?php
session_start();
if (!$_SESSION['IDADM'] && !$_SESSION['PASSADM']){ header("location:page=login.php");}else{
}
$strIDMOD = substr($_SESSION['ID'], 1);
$strID = substr($_SESSION['ID'], 1);
?>  
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>WGG 2014 :: OPEN REC</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="shortcut icon" href="iconukp.ico" type="image/x-icon" >
<script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


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
   <li class='active'><a href='adm_index.php'><span>BERANDA</span></a></li>
   <li><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php'><span>CETAK CV</span></a></li>
   <li><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li><a href='page=upload.php'><span>UPLOAD</span></a></li>
   <li><a href="adm_report.php"><span>REPORT</span></a></li>
      <li><a href="!admin/index.php"><span>SCHED ADMIN</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<div id="formreg"><br/><br/>
<div id="info">
<h3>KELENGKAPAN PENDAFTARAN :</h3><br/>
* CV (Curriculum Vitae) | Silahkan Registrasi di Menu "PENDAFTARAN"<br/>
* Transkrip KHS (IPK >= 2.25 ) | Silahkan PrintScreen di SIM Petra<br/>
* Lulus P3KMABA<br/>
* Foto 3 x 4 (2 Lembar, 1 lembar ditempel di CV)<br/>
* Scan Kartu Tanda Mahasiswa UK. Petra<br/>

</div><br/><br/></div></article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>