<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}
$strID = substr($_SESSION['ID'], 1);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Ericson Thomas :: FILE</title>
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
   <li><a href='page=index.php'><span>BERANDA</span></a></li>
      <li><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php'><span>CETAK CV</span></a></li>
   <li><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li><a href='page=upload.php'><span>UPLOAD</span></a></li>
   <li class='active'><a href='adm_report.php'><span>REPORT</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<div id="info">


<center>
<div style="width:600px;"><br/>
<input type="text" style="width:70px;left:1px;" name="getNRP"/> - <input style="width:70px;left:1px;" type="text"  name="getNRP"/> - 
<input type="text"  style="width:70px;" name="getNRP"/> - <input style="width:140px;left:1px;" type="text"  name="getNRP"/> - <input type="text" style="width:70px;left:1px;" name="getNRP"/>&nbsp;--->&nbsp;<input style="height:25px;" type="submit">

</center>
</div>
<br><br/>

</article><br></div></div>
                    </div>
                </div>
</div></div></div></body></html>