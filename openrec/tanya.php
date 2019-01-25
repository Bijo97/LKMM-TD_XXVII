<?php
session_start();
/*if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}*/
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
<title>WGG 2014 :: OPEN REC</title>
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
   <li><a href='page=index.php'><span>BERANDA</span></a></li>
   <li class='active'><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php' target='_blank'><span>CETAK CV</span></a></li>
   <li ><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<center>
<h1>Apakah Anda Seorang <u>Astor</u> ?</h1><br/>
<a href="page=astor.php"><img id="bulet" src="images/Yes.jpg" title"Ya, Saya Seorang Astor"></a>&nbsp;<a href="page=register.php"><img id="bulet" src="images/No.jpg" title"Tidak, Saya Bukan Seorang Astor"></a>
</center>
<div id="info">
<h3>Informasi Penting !</h3>
<h5>
* Berkas CV dan Kelengkapan dimasukan dalam MAP Berwarna Biru (<font color="blue">Biru</font>), <u>Jika Anda Astor</u><br/>
<font color="red">&nbsp;&nbsp;[ ! ] Untuk Frontline Non - Astor, dapat memilih 2 Divisi, Untuk Astor Hanya diperbolehkan 1 Divisi, Divisi Frontline</font><br/>
* Berkas CV dan Kelengkapan dimasukan dalam MAP Berwarna Merah (<font color="red">Merah</font>), <u>Jika Bukan Astor</u><br/><br/>
* Jika anda salah memasukan data, atau ingin mengubah data, pada form pendaftaran klik "Delete Temporary Data",<br/>&nbsp;&nbsp;Lalu isilah kembali Form yang ada ! :D<br/>
</h5>
</div>
<br/><br/>
</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>