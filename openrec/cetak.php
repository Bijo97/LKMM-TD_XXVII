<?php
session_start();
$strID = substr($_SESSION['ID'], 1);
?>
<?php include 'db_config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LKMM-TD XXVII: Open Recruitment</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include 'db_config.php';
		$K_Name=mysql_query("SELECT * FROM Tbl_Config" ); 
		$row6 = mysql_fetch_array($K_Name);
		$gTitle=$row6['W_Title'];
		$gFavicon=$row6['W_Favicon'];
		
		echo '<link rel="shortcut icon" href="';echo $gFavicon; echo '" type="image/x-icon" />';
		echo '<title>';echo $gTitle; echo'</title>';
		?>
<script>
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<font color='000000' face='Orator std'> "+daym+" "+montharray[month]+" "+year+" </font>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}
</script>

<style type="text/css">
#paperx{
	background:url('!eric/paper.png');
	background-size:cover;
	background-repeat:no-repeat;
	opacity:0.4;
filter:alpha(opacity=40); /* For IE8 and earlier */
}
#clean{
	
}
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	width:190px;
	height:24px;
	z-index:1;
	left: 693px;
	top: 741px;
}
#foto{
	position:absolute;
	margin-right: 15px;
	top: 115px;
	float:right;
	align:right;
}
td{
	font-size:large;
	padding:1px;
	font-face:Orator std;
}
table{
	font-face:Orator std;
}
#layers{
margin-left:30px;
margin-top:20px;
}
#apDiv3 {
	position:absolute;
	width:240px;
	height:104px;
	z-index:2;
	right: 15px;
	top: 100px;
float:right;
}
</style>
</head>

<body onLoad="goforit()"><div id="layers">

<?php
$F_Name=mysql_query( "SELECT * FROM tbl_regist where NRP = {$strID}" );
$row = mysql_fetch_array($F_Name);
$Name_F =  $row['NamaLengkap'];
$NRP_F =  $row['nrp'];
$JenisKelamin_F =  $row['JenisKelamin'];
$ADD_F = $row['AlamatTinggal'];
$TTL_F =  $row['TTL'];
$TELP_F =  $row['NomorTelepon'];
$ID_LINE = $row['IDLine'];
$IPK_F =  $row['IPKTerakhir'];
$MOD_F = $row['Motivasi'];
$KEL_F = $row['Kelebihan'];
$KEK_F = $row['Kekurangan'];
$EXP1_F = $row['EXP'];
$DIV1_F = $row['Prioritas1'];
$DIV2_F = $row['Prioritas2'];
$KOM_F = $row['Komitmen'];
$time_F = '<span id="clock"></span>';
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:20px;" align="center"><b>CURRICULUM VITAE</b></td>
  </tr>
  <tr>
    <td style="margin-top:20px;" align="center"><b>LKMM-TD XXVII</b></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> </tr>
</table>
<table style="left:30px;" width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="32%">&nbsp;</td>
    <td width="0%">&nbsp;</td>
    <td width="68%">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td>:&nbsp;</td>
    <td><?php echo $Name_F;?></td>
    <td rowspan=15 valign="top"><img src="./!eric/frame.png" width=100 height=133 style="margin-right: 50px;"/></td>
  </tr>
  <tr>
    <td>NRP</td>
    <td>:&nbsp;</td>
    <td><?php echo $NRP_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:&nbsp;</td>
    <td><?php echo $JenisKelamin_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Alamat Tinggal</td>
    <td>:&nbsp;</td>
    <td><?php echo $ADD_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>:&nbsp;</td>
    <td><?php echo $TTL_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Nomor Handphone</td>
    <td>:&nbsp;</td>
    <td><?php echo $TELP_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>ID Line</td>
    <td>:&nbsp;</td>
    <td><?php echo $ID_LINE;?></td>
    <td></td>
  </tr>
  <tr>
    <td>IPK Terakhir</td>
    <td>:&nbsp;</td>
    <td><?php echo $IPK_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Motivasi</td>
    <td>:&nbsp;</td>
    <td><?php echo $MOD_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Kelebihan</td>
    <td>:&nbsp;</td>
    <td><?php echo $KEL_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Kekurangan</td>
    <td>:&nbsp;</td>
    <td><?php echo $KEK_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Pengalaman Organisasi</td>
    <td>:</td>
    <td><?php echo $EXP1_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Pilihan Divisi Pertama</td>
    <td>:&nbsp;</td>
    <td><?php echo $DIV1_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Pilihan Divisi Kedua</td>
    <td>:&nbsp;</td>
    <td><?php echo $DIV2_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Komitmen</td>
    <td>:&nbsp;</td>
    <td><?php echo $KOM_F;?></td>
    <td></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="justify" style="margin-right:20px;" ><p style="font-size: 9pt;">Informasi yang telah saya berikan sebagaimana tertulis diatas, secara keseluruhan adalah jujur dan benar adanya, tanpa rekayasa apapun serta tanpa ada paksaan dari pihak manapun. Apabila dikemudian hari ditemukan ketidaksesuaian data, saya yang bertandatangan dibawah ini bersedia menerima segala konsekuensi yang diberikan.</p></td>
  </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="40%" align="center"><p style="font-size: 9pt;">Surabaya, <?php echo date("d/m/Y", time());    ?></p><br/></br/><br/></br/><br/></br/><?php //echo $Name_F;?></td
  >
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="15%"></td>
    <td width="40%" align="center">(<?php echo $Name_F; ?>)</td>
  </tr>
</table>

<div id="paperx clean">
</div>
</body>



</html>