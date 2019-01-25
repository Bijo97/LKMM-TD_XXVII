<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}
$strID = substr($_SESSION['ID'], 1);
include "db_config.php";
//query cek nrp
$ceknrp = mysql_fetch_array(mysql_query("SELECT COUNT(*) as cek FROM tbl_regist WHERE nrp = $strID"));
$cek = $ceknrp['cek'];
echo $cek;
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
<link rel="stylesheet" href="files/faary.css" media="all">
<script type="text/javascript" src="files/jquery.js"></script>
<script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<style>
.itext{
	color: #000000 !important;
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="core.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {
		$('a.login-window').click(function() {
              //Getting the variable's value from a link 
    		var loginBox = $(this).attr('href');
	       //Fade in the Popup
		$(loginBox).fadeIn(300);
		//Set the center alignment padding + border see css style
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
    
		$(loginBox).css({ 
		'margin-top' : -popMargTop,
		'margin-left' : -popMargLeft
		});
    
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
    
		return false;
		});

		// When clicking on the button close or the mask layer the popup closed
		$('a.close, #mask').live('click', function() { 
		$('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
		}); 
		return false;
		});
		});
	</script>
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
   <li class='active'><a href='page=register.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php' target='_blank'><span>CETAK CV</span></a></li>
   <li><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<div  align="center" id="formreg">
<br/>
<br/>
<script type="text/javascript">
<!--
	function isEmailValid(email){
		var e = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return e.test(email);
	}
	function sendForm(){
		
		
		jQuery("#imessageOK, #imessageERROR").hide();
		jQuery(".required").removeClass("required");
		if(jQuery("#NamaLengkap").val()==""){jQuery("#NamaLengkap").addClass("required");window.scroll(0,0);return false;}if(jQuery("#AlamatEmail").val()==""){jQuery("#AlamatEmail").addClass("required");window.scroll(0,0);return false;}if(!isEmailValid(jQuery("#AlamatEmail").val())){jQuery("#AlamatEmail").addClass("required");window.scroll(0,0);return false;}if(jQuery("#AlamatTinggal").val()==""){jQuery("#AlamatTinggal").addClass("required");window.scroll(0,0);return false;}if(jQuery("#NRP").val()==""){jQuery("#NRP").addClass("required");window.scroll(0,0);return false;}if(jQuery("#IPKTerakhir").val()==""){jQuery("#IPKTerakhir").addClass("required");window.scroll(0,0);return false;}if(jQuery("#TTL").val()==""){jQuery("#TTL").addClass("required");window.scroll(0,0);return false;}if(jQuery("#JenisKelamin").val()==""){jQuery("#JenisKelamin").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Agama").val()==""){jQuery("#Agama").addClass("required");window.scroll(0,0);return false;}if(jQuery("#NomorTelepon").val()==""){jQuery("#NomorTelepon").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Komitmen").val()==""){jQuery("#Komitmen").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Kelebihan").val()==""){jQuery("#Kelebihan").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Kekurangan").val()==""){jQuery("#Kekurangan").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Prioritas1").val()==""){jQuery("#Prioritas1").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Motivasi").val()==""){jQuery("#Motivasi").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Prioritas2").val()==""){jQuery("#Prioritas2").addClass("required");window.scroll(0,0);return false;}if(jQuery("#Motivasi").val()==""){jQuery("#Motivasi").addClass("required");window.scroll(0,0);return false;}jQuery("#SimpandataPendaftaran").val("Please Wait...");		var AddDetails; AddDetails+="&NamaLengkap="+encodeURIComponent(jQuery("#NamaLengkap").val());AddDetails+="&AlamatEmail="+encodeURIComponent(jQuery("#AlamatEmail").val());AddDetails+="&AlamatTinggal="+encodeURIComponent(jQuery("#AlamatTinggal").val());AddDetails+="&NRP="+encodeURIComponent(jQuery("#NRP").val());AddDetails+="&IPKTerakhir="+encodeURIComponent(jQuery("#IPKTerakhir").val());AddDetails+="&TTL="+encodeURIComponent(jQuery("#TTL").val());AddDetails+="&JenisKelamin="+encodeURIComponent(jQuery("#JenisKelamin").val());AddDetails+="&Agama="+encodeURIComponent(jQuery("#Agama").val());AddDetails+="&NomorTelepon="+encodeURIComponent(jQuery("#NomorTelepon").val());AddDetails+="&PinBBSocialChat="+encodeURIComponent(jQuery("#PinBBSocialChat").val());AddDetails+="&Komitmen="+encodeURIComponent(jQuery("#Komitmen").val());AddDetails+="&Kelebihan="+encodeURIComponent(jQuery("#Kelebihan").val());AddDetails+="&Kekurangan="+encodeURIComponent(jQuery("#Kekurangan").val());AddDetails+="&Prioritas1="+encodeURIComponent(jQuery("#Prioritas1").val());AddDetails+="&Motivasi1="+encodeURIComponent(jQuery("#Motivasi").val());AddDetails+="&Prioritas2="+encodeURIComponent(jQuery("#Prioritas2").val());AddDetails+="&Motivasi2="+encodeURIComponent(jQuery("#Motivasi").val());		
			}
-->
</script>
<?php 
	if ($cek == 0) {
?>
<form method="post" action="send_reg.php" onsubmit="return:false" class="iform">

<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><ul><br/><br/>
<li><label for="NamaLengkap">*Nama Lengkap</label><input class="itext" type="text" name="NamaLengkap" id="NamaLengkap" /></li>
<li><label for="NRP">*NRP</label><input class="itext" type="text" name="NRP" id="NRP"  value="<?php echo $strID;?>" disabled/></li>
<li><label for="JenisKelamin">*Jenis Kelamin</label><select class="iselect" name="JenisKelamin" id="JenisKelamin" >
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select></li>
<li><label for="AlamatTinggal">*AlamatTinggal</label><input class="itext" type="text" name="AlamatTinggal" id="AlamatTinggal" /></li>
<li><label for="TTL">*TTL</label><input class="itext" placeholder="Ex : Surabaya, 6 Juni 1995" type="text" name="TTL" id="TTL" /></li>
<li><label for="NomorTelepon">*Ph. Number</label><input class="itext" type="text" name="NomorTelepon" id="NomorTelepon" /></li>
<li><label for="Line">*ID Line</label><input class="itext" type="text" name="id_line" id="id_line" /></li>
<li><label for="IPKTerakhir">*IPK Terakhir</label><input class="itext" type="text" name="IPKTerakhir" id="IPKTerakhir" /></li>
<li><label for="Motivasi">*Motivasi</label><textarea placeholder="Motivasi Anda mengikuti kepanitiaan LKMM-TD XXVII" class="itextarea" name="Motivasi" id="Motivasi toggleMe" ></textarea></li>
<li><label for="Kelebihan">*Kelebihan</label><input class="itext" type="text" name="Kelebihan" id="Kelebihan" /></li>
<li><label for="Kekurangan">*Kekurangan</label><input class="itext" type="text" name="Kekurangan" id="Kekurangan" /></li>
<li><label for="EXP">*Pengalaman Organisasi</label><textarea placeholder="Pengalaman Organisasi yang pernah anda ikuti" class="itextarea" name="EXP" id="Pengalaman" ></textarea></li>
<li><label for="Prioritas1">*Prioritas 1</label>
<select class="iselect" name="Prioritas1" id="Prioritas1" >
<option value="IT">Divisi IT</option>
<option value="Keamanan">Divisi Keamanan</option>
<option value="Konsumsi dan Kesehatan">Divisi Konsumsi dan Kesehatan</option>
<option value="Acara">Divisi Acara</option>
<option value="Sekretariat">Divisi Sekretariat</option>
<option value="Perlengkapan">Divisi Perlengkapan</option>
<option value="Pubdekdok">Divisi Pubdekdok</option>
<option value="Materi">Divisi Materi</option>
</select></li>
<li><label for="Prioritas2">*Prioritas 2</label>
<select class="iselect" name="Prioritas2" id="Prioritas2" >
<option value="IT">Divisi IT</option>
<option value="Keamanan">Divisi Keamanan</option>
<option value="Konsumsi dan Kesehatan">Divisi Konsumsi dan Kesehatan</option>
<option value="Acara">Divisi Acara</option>
<option value="Sekretariat">Divisi Sekretariat</option>
<option value="Perlengkapan">Divisi Perlengkapan</option>
<option value="Pubdekdok">Divisi Pubdekdok</option>
<option value="Materi">Divisi Materi</option>
</select></li>
<li><label for="Komitmen">*Komitmen</label><textarea class="itextarea" name="Komitmen" id="Komitmen" ></textarea></li>

<br/>
<input type="submit" name="Submit" value="Submit Data" /> <!--<input onclick="window.location = 'reset_data.php'" type="reset" name="Submit2" value="Delete Temporary Data" />-->
</ul></td>
    
  </tr>
</table>
</form>
<?php
	} else {

		$data = mysql_fetch_array(mysql_query("SELECT * FROM tbl_regist WHERE nrp = $strID"));
		$NamaLengkap = $data['NamaLengkap'];
		$JenisKelamin = $data['JenisKelamin'];
		$AlamatTinggal = $data['AlamatTinggal'];
		$TTL = $data['TTL'];
		$NomorTelepon = $data['NomorTelepon'];
		$IDLine = $data['IDLine'];
		$IPKTerakhir = $data['IPKTerakhir'];
		$Motivasi = $data['Motivasi'];
		$Kelebihan = $data['Kelebihan'];
		$Kekurangan = $data['Kekurangan'];
		$EXP = $data['EXP'];
		$Prioritas1 = $data['Prioritas1'];
		$Prioritas2 = $data['Prioritas2'];
		$Komitmen = $data['Komitmen'];
?>
<form method="post" action="update.php" onsubmit="return:false" class="iform">

<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><ul><br/><br/>
<li><label for="NamaLengkap">*Nama Lengkap</label><input class="itext" type="text" name="NamaLengkap" id="NamaLengkap" value="<?php echo $NamaLengkap;?>"/></li>
<li><label for="NRP">*NRP</label><input class="itext" type="text" name="NRP" id="NRP" value="<?php echo $strID;?>" disabled/></li>
<li><label for="JenisKelamin">*Jenis Kelamin</label>
<select class="iselect" name="JenisKelamin" id="JenisKelamin" >
<?php if ($JenisKelamin == "Pria") { ?>
<option value="Pria" selected="selected">Pria</option>
<option value="Wanita">Wanita</option>
<?php } else { ?>
<option value="Pria">Pria</option>
<option value="Wanita" selected="selected">Wanita</option>
<?php } ?>
</select>
</li>
<li><label for="AlamatTinggal">*AlamatTinggal</label><input class="itext" type="text" name="AlamatTinggal" id="AlamatTinggal" value="<?php echo $AlamatTinggal;?>"/></li>
<li><label for="TTL">*TTL</label><input class="itext" placeholder="Ex : Surabaya, 6 Juni 1995" type="text" name="TTL" id="TTL" value="<?php echo $TTL;?>"/></li>
<li><label for="NomorTelepon">*Ph. Number</label><input class="itext" type="text" name="NomorTelepon" id="NomorTelepon" value="<?php echo $NomorTelepon;?>"/></li>
<li><label for="Line">*ID Line</label><input class="itext" type="text" name="id_line" id="id_line" value="<?php echo $IDLine;?>"/></li>
<li><label for="IPKTerakhir">*IPK Terakhir</label><input class="itext" type="text" name="IPKTerakhir" id="IPKTerakhir" value="<?php echo $IPKTerakhir;?>"/></li>
<li><label for="Motivasi">*Motivasi</label><textarea class="itextarea" name="Motivasi" id="Motivasi toggleMe"><?php echo $Motivasi;?></textarea></li>
<li><label for="Kelebihan">*Kelebihan</label><input class="itext" type="text" name="Kelebihan" id="Kelebihan" value="<?php echo $Kelebihan;?>" /></li>
<li><label for="Kekurangan">*Kekurangan</label><input class="itext" type="text" name="Kekurangan" id="Kekurangan" value="<?php echo $Kekurangan;?>"/></li>
<li><label for="EXP">*Pengalaman Organisasi</label><textarea class="itextarea" name="EXP" id="Pengalaman"><?php echo $EXP;?></textarea></li>
<li><label for="Prioritas1">*Prioritas 1</label>
<select class="iselect" name="Prioritas1" id="Prioritas1">
<?php
	if ($Prioritas1 == "IT") {
?>
	<option value="IT" selected="selected">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Keamanan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan" selected="selected">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Konsumsi") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi" selected="selected">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Acara") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara" selected="selected">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Sekretariat") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat" selected="selected">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Perlengkapan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan" selected="selected">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Pubdekdok") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok" selected="selected">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Kesehatan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan" selected="selected">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas1 == "Peran") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran" selected="selected">Divisi Peran</option>
<?php
	}
?>
</select></li>
<li><label for="Prioritas2">*Prioritas 2</label>
<select class="iselect" name="Prioritas2" id="Prioritas2">
<?php
	if ($Prioritas2 == "IT") {
?>
	<option value="IT" selected="selected">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Keamanan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan" selected="selected">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Konsumsi") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi" selected="selected">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Acara") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara" selected="selected">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Sekretariat") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat" selected="selected">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Perlengkapan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan" selected="selected">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Pubdekdok") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok" selected="selected">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Kesehatan") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan" selected="selected">Divisi Kesehatan</option>
	<option value="Peran">Divisi Peran</option>
<?php
	} else if ($Prioritas2 == "Peran") {
?>
	<option value="IT">Divisi IT</option>
	<option value="Keamanan">Divisi Keamanan</option>
	<option value="Konsumsi">Divisi Konsumsi</option>
	<option value="Acara">Divisi Acara</option>
	<option value="Sekretariat">Divisi Sekretariat</option>
	<option value="Perlengkapan">Divisi Perlengkapan</option>
	<option value="Pubdekdok">Divisi Pubdekdok</option>
	<option value="Kesehatan">Divisi Kesehatan</option>
	<option value="Peran" selected="selected">Divisi Peran</option>
<?php
	}
?></select></li>
<li><label for="Komitmen">*Komitmen</label><textarea class="itextarea" name="Komitmen" id="Komitmen"><?php echo $Komitmen;?></textarea></li>

<br/>
<input type="submit" name="Submit" value="Update Data" />
<?php
	}
?>
<br/><br/>
</div>

</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>