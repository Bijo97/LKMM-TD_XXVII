<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}
else
{
	$tgl=$_GET['tgl'];
	$pukul=$_GET['pukul'];
	$pewawancara=$_GET['pewawancara'];
	$nrp=$_GET['nrp'];
	include("sched_db.php");
	connect_db();
	$abc="select * from tbl_panitia where namasamaran='{$pewawancara}'";
	$rowk= mysql_query($abc);
	while ($row2 = mysql_fetch_array($rowk)) 
	{
		$nrp_pan=$row2['nrp'];
	}
	
	if(mysql_query("INSERT INTO tbl_wawancara VALUES ('','{$nrp_pan}','{$nrp}','{$tgl}','{$pukul}','{$pewawancara}')"))
	{
	echo "<h1>Data anda telah masuk ke dalam database kami :D</h1>";
	}
//x.open("GET","sched_header.php?tgl='"+res[1]+"'&pukul='"+mon+"'&pewawancara='"+res[0]+"'&nrp='"+nrp+"'",true); 

}
?>  