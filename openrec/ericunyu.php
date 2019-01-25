<?php
session_start();
if (!$_SESSION['IDADM'] && !$_SESSION['PASSADM']){ header("location:page=login.php");}else{

}
$strID = substr($_SESSION['ID'], 1);
?>
<DIV ALIGN="RIGHT"><h1>INFORMATION CONTROL - KA+WAKABID IT 2014&nbsp;&nbsp;</H1></DIV>
<h3>LIST PENDAFTAR PANITIA : </h3>
<?php
include 'db_config.php';
$result = mysql_query("SELECT * FROM Tbl_Peserta Order By IPKTerakhir DESC");
$i=1;
while($row = mysql_fetch_array($result)){
  if($i<10){
  echo "00".$i.". # "."0W-GG14-<b><font color='red'>".$row['NRP']."</font> | IPK : ".$row['IPKTerakhir']." | ".$name= ucwords(strtolower($row['NamaLengkap']))."</b> | ".$row['NomorTelepon']." | ".$row['AlamatEmail']." | ".$row['DateTime'];
}
else if($i>=10 && $i<100){
  echo "0".$i.". # "."0W-GG14-<b><font color='red'>".$row['NRP']."</font> | IPK : ".$row['IPKTerakhir']." | ".$name= ucwords(strtolower($row['NamaLengkap']))."</b> | ".$row['NomorTelepon']." | ".$row['AlamatEmail']." | ".$row['DateTime'];
}
else{
echo $i.". # "."0W-GG14-<b><font color='red'>".$row['NRP']."</font> | IPK : ".$row['IPKTerakhir']." | ".$name= ucwords(strtolower($row['NamaLengkap']))."</b> | ".$row['NomorTelepon']." | ".$row['AlamatEmail']." | ".$row['DateTime'];
}
  echo "<br>";
  $i++;
  }
?><br/><br/>
<h3>LIST INTERVIEW : </h3>
<?php
include 'db_config.php';
$results = mysql_query("SELECT * FROM Tbl_Wawancara order by tgl,jam");
$iw=1;
while($row2 = mysql_fetch_array($results))
  {
 if($iw<10){
  echo "0".$iw.". # 0W-GG14-<font color='red'>".$x=substr($row2['nrp_peserta'], 1)."</font> Pada Tanggal : <font color='red'>".$row2['tgl']." </font>Jam : <font color='red'>".$row2['jam']."</font> Interviewer : <font color='red'>".$row2['namasamaran']."</font> NRP Panitia : <font color='red'>".$row2['nrp_panitia'];
}
else{
echo $iw.". # 0W-GG14-<font color='red'>".$x=substr($row2['nrp_peserta'], 1)."</font> Pada Tanggal : <font color='red'>".$row2['tgl']." </font>Jam : <font color='red'>".$row2['jam']."</font> Interviewer : <font color='red'>".$row2['namasamaran']."</font> NRP Panitia : <font color='red'>".$row2['nrp_panitia'];
}
  echo "</font><br>";
  $iw++;
  }
?><br>