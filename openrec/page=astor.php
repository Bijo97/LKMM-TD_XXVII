<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{
}
$strID = substr($_SESSION['ID'], 1);
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
<link rel="stylesheet" href="files/faary.css" media="all">
<script type="text/javascript" src="files/jquery.js"></script>
<script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<style>

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
   <li><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
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
<form method="post" action="send_reg.php" onsubmit="return:false" class="iform">

<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><ul><br/><br/>
<li><label for="NamaLengkap">*Full Name</label><input class="itext" type="text" name="NamaLengkap" id="NamaLengkap" /></li>
<li><label for="NRP">*NRP</label><input class="itext" type="text" name="NRP" id="NRP" value="<?php echo $strID;?>"/></li>
<li><label for="IPKTerakhir">*IPK Terakhir</label><input class="itext" type="text" name="IPKTerakhir" id="IPKTerakhir" /></li>
<li><label for="TTL">*TTL</label><input class="itext" placeholder="Ex : Surabaya, 6 Juni 1995" type="text" name="TTL" id="TTL" /></li>
<li><label for="JenisKelamin">*Jenis Kelamin</label><select class="iselect" name="JenisKelamin" id="JenisKelamin" >
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select></li>

<li><label for="Agama">*Agama</label><select class="iselect" name="Agama" id="Agama" >
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Islam">Islam</option>
<option value="Budha">Budha</option>
<option value="Hindhu">Hindhu</option>
<option value="Konghucu">Konghucu</option>
</select></li>





<li><label for="NomorTelepon">*Ph. Number</label><input class="itext" type="text" name="NomorTelepon" id="NomorTelepon" /></li>
<li><label for="Komitmen">*Komitmen</label><textarea class="itextarea" name="Komitmen" id="Komitmen" ></textarea></li>
<li><label for="Kelebihan">*Kelebihan</label><input class="itext" type="text" name="Kelebihan" id="Kelebihan" /></li>
<li><label for="Kekurangan">*Kekurangan</label><input class="itext" type="text" name="Kekurangan" id="Kekurangan" /></li>
    <li><label for="AlamatEmail">*Email</label><input class="itext" type="text" name="AlamatEmail" id="AlamatEmail" /></li>
<li><label for="AlamatTinggal">*Alamat Tinggal</label><input class="itext" type="text" name="AlamatTinggal" id="AlamatTinggal" /></li><br/>
<li><img src="!barcode/" width="385" /></li>

</ul></td>
    <td width="50%"><ul>
<br/><br/>

<li><label for="Prioritas1">*Prioritas 1</label>
<select class="iselect" name="Prioritas1" id="Prioritas1" >
<option value="Divisi Frontline">Divisi Peran</option>
</select></li>

<li><label for="Motivasi">*Motivasi</label>
<textarea class="itextarea" name="Motivasi1" placeholder="Mohon Isi Motivasi Anda atas Pilihan Divisi Nomor 1" id="Motivasi" ></textarea></li>

<li><label for="Prioritas2">*Prioritas 2</label>
<select class="iselect" name="Prioritas2" id="Prioritas2" disabled>
<option value="-">Divisi Peran</option>
</select></li>
<li><label for="Motivasi">*Motivasi</label><textarea placeholder="Mohon Isi Motivasi Anda atas Pilihan Divisi Nomor 2" class="itextarea" name="Motivasi2" id="Motivasi" value="-" disabled ></textarea></li>
<li><label for="EXP1">*Pengalaman Org. di Luar Petra</label><textarea placeholder="Pengalaman Organisasi di Luar Petra yang pernah anda ikuti "class="itextarea" name="EXP1" id="Motivasi" ></textarea></li>
<li><label for="EXP2">*Pengalaman Org. di Dalam Petra</label><textarea placeholder="Pengalaman Organisasi di Dalam Petra yang pernah anda ikuti" class="itextarea" name="EXP2" id="Motivasi" ></textarea></li>
<?php
$NamaLengkap = $_POST['NamaLengkap'];
$NRP = $_POST['NRP'];
$IPKTerakhir = $_POST['IPKTerakhir'];
$TTL = $_POST['TTL'];
$JenisKelamin = $_POST['JenisKelamin'];
$Agama = $_POST['Agama'];
$NomorTelepon = $_POST['NomorTelepon'];
$PinBBSocialChat = $_POST['PinBBSocialChat'];
$Komitmen = $_POST['Komitmen'];
$Kelebihan = $_POST['Kelebihan'];
$Kekurangan = $_POST['Kekurangan'];
$AlamatEmail = $_POST['AlamatEmail'];
$AlamatTinggal = $_POST['AlamatTinggal'];
$Prioritas1 = $_POST['Prioritas1'];
$Motivasi1 = $_POST['Motivasi1'];
$Prioritas1 = $_POST['Prioritas2'];
$Motivasi1 = $_POST['Motivasi2'];
$EXP1 = $_POST['EXP1'];
$EXP2 = $_POST['EXP2'];
?>
<li><label>&nbsp;</label><input type="submit" name="Submit" value="Submit Data" /> <input onclick="window.location = 'reset_data.php'" type="reset" name="Submit2" value="Delete Temporary Data" /></li><br/><br/>
</ul></td>
  </tr>
</table>
</form>
<br/><br/>
</div>

</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>