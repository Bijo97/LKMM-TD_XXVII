<?php
session_start();
/*if (!$_SESSION['IDMOD'] && !$_SESSION['PASSMOD']){ header("location:page=login.php");}else{

}*/
//$strID = substr($_SESSION['IDMOD'], 1);
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
   <li><a href='mod_index.php'><span>BERANDA</span></a></li>

   <li class='active'><a href="page=wawancara.php"><span>LOG WAWANCARA</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>

<div id="info">
<?php
include 'db_config.php';
$result = mysql_query("SELECT * FROM wawancara where nrp_panitia='{$strID}' Order By tgl,jam");
$i=0;
echo "<h3>List Mahasiswa yang akan <u>INTERVIEW</u> Bersama Saya : </h3>";
while($row = mysql_fetch_array($result))
  {
  echo "<h5>";
  echo "[ $i ] - ".$row['namasamaran']." - ".$row['nrp_panitia']." <font color='red'>|</font> ".$row['nrp_peserta'].", Tanggal : ".$row['tgl']." -- Pukul : ".$row['jam'];
  echo "</h5>";
  $i++;
  }
?>
</div><br/></article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>