<?php
error_reporting(0);
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

	echo "<input type='hidden' id='nrp_peserta' value='{$_SESSION['ID']}'>";
	$strID = substr($_SESSION['ID'], 1);
	//echo $strID;
}
include("sched_db.php");
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

<script>
			var stat=0;
			function myFunction()
			{
				if(stat!=0)
				{
				setTimeout(function(){b()},5000);
				}
				else
				{
				document.getElementById('hsl').innerHTML="";
				}
			}
			function move()
			{
				var x;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("box").innerHTML= x.responseText;
					}
				}
				x.open("GET","sched_panitia.php",true); 
				x.send();
			
			}
			function b()
			{

				var x; stat=1;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("hsl").innerHTML= x.responseText;
					}
				}
				var ku=document.getElementById("tgl").value;
				var res = ku.split("-");
				var lala=res[1]%12;
				//alert (res[1]);
				var mon;
				switch (lala)
				{
				case 01:
				  mon="Januari";
				  break;
				case 02:
				  mon="Februari";
				  break;
				case 03:
				  mon="Maret";
				  break;
				case 04:
				  mon="April";
				  break;
				case 05:
				  mon="Mei";
				  break;
				case 06:
				  mon="Juni";break;
				case 07:
				  mon="Juli";
				  break;
				case 08:
				  mon="Agustus";
				  break;
				case 09:
				  mon="September";
				  break;
				case 10:
				  mon="Oktober";
				  break;
				case 11:
				  mon="November";
				  break;
				case 12:
				  mon="Desember";
				  break;
				}
				var hr=res[2]%31;
				var tgl = res[0] + "-0" + lala +"-"+hr; 
				//alert(tgl);
				x.open("GET","sched_panitia.php?tgl="+tgl,true); 
				x.send();
				myFunction();
			
			}
			function next()
			{
				stat=0;
				var x;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("box").innerHTML= x.responseText;
					}
				}
				x.open("GET","sched_jadwal.php",true); 
				x.send();
			
			}
			function check()
			{
				var x;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("box").innerHTML= x.responseText;
					}
				}
				//var jj=document.getElementById("jj").value;
				var jj=document.querySelector('input[name="ww"]:checked').value;
				if(jj)
				{
					var res = jj.split("+");
//					alert(res[0]);
					//alert(res[1]);
		//			alert(res[2]);
					var lala = res[2];
				//alert(lala);
				var mon;
				if(lala=="1")
				{
								  mon="08:00";
				}
				else if(lala=="2")
				{
								  mon="08:30";
					
				}
				else if(lala=="3")
				{
									  mon="09:00";
				}	
				else if(lala=="4")
				{
								  mon="09:30";
					
				}
				else if(lala=="5")
				{
									  mon="10:00";
				}
				else if(lala=="6")
				{
								  mon="10:30";
					
				}
				else if(lala=="7")
				{
									  mon="11:00";
				}	
				else if(lala=="8")
				{
								  mon="11:30";
					
				}
				else if(lala=="9")
				{
									  mon="12:00";
				}
				else if(lala=="10")
				{
								  mon="12:30";
					
				}
				else if(lala=="11")
				{
									  mon="13:00";
				}	
				else if(lala=="12")
				{
								  mon="13:30";
					
				}
				else if(lala=="13")
				{
									  mon="14:00";
				}
				else if(lala=="14")
				{
								  mon="14:30";
					
				}
				else if(lala=="15")
				{
									  mon="15:00";
				}	
				else if(lala=="16")
				{
								  mon="15:30";
					
				}
				else if(lala=="17")
				{
									  mon="16:00";
				}			
				//alert(mon);
						var nrp=document.getElementById('nrp_peserta').value;
//alert(nrp);
				  var isi="Jadwal wawancara anda adalah\nTanggal: "+ res[1]+"\nPukul: "+mon+"\nPewawancara: "+res[0];
					var r=confirm(isi);
					if (r==true)
					  {
						alert("Anda Berhasil Menambahkan daftar wawancara!");
						document.getElementById('box').innerHTML="";
						document.getElementById('hsl').innerHTML="";
						x.open("GET","sched_header.php?tgl="+res[1]+"&pukul="+mon+"&pewawancara="+res[0]+"&nrp="+nrp,true); 
						x.send();
						stat=0;
						}
					else
					  {
					  x="You pressed Cancel!";
					  stat=1;
					  }
					  myFunction();

				}
				else
				{
					alert("Anda belum memilih jadwal!");
				}
			
			}
			
			
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
   <li><a href='page=register.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php' target='_blank'><span>CETAK CV</span></a></li>
   <li class='active'><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>

		<div id="info">
		<?php
			connect_db();
			$abc="SELECT COUNT(*) AS jumlah from tbl_wawancara where nrp_peserta='{$strID}'";
			$rowk= mysql_query($abc);
			// $sql = "SELECT COUNT(*) AS find FROM tbl_wawancara WHERE nrp_peserta = '{$_SESSION['ID']}'";
			// $result = mysql_query($sql);
			//$row = mysql_fetch_array($result);
			//$tt=mysql_num_rows($rowk);
			$row = mysql_fetch_array($rowk);
			if($row['jumlah'] >= 1)
			{
				$abc="SELECT * from tbl_wawancara where nrp_peserta='{$_SESSION['ID']}'";
				$rowk= mysql_query($abc);
				while ($row2 = mysql_fetch_array($rowk)) 
				{
					$nrp_pan=$row2['nrp_panitia'];
					//(`nrp_peserta`, `tgl`, `jam`, `namasamaran`, `nrp_panitia`)
					$nrp_peserta=$row2['nrp_peserta'];
					$tgl=$row2['tgl'];
					$jam=$row2['jam'];
					$namasamaran=$row2['namasamaran'];
				}
				echo "<div id='box'>
					<h4>Anda telah memilih Jadwal Wawancara :</h4>
					Tanggal : {$tgl}<br>
					Pukul	: {$jam}<br>
					Pewawancara : {$namasamaran}, Selasar B<br/><br/>
				</div>";
			}
			else
			{
			?>
		<div id="box"><br/>Tanggal wawancara: <input type="date" onchange="b()" id="tgl"><br/>(pilihan anda akan otomatis hilang dalam waktu 3 detik autorefresh) | Jika browser crash saat membuka halaman ini, disarankan untuk reload kembali halaman ini, Terima Kasih <br/><br/>
		</div>
		<!--<div id="box">
			Pilih tanggal wawancara: 
			<select name="tgl">
				<?php
					/*$sql = "SELECT *"
					echo "<option></option>";*/
				?>
			</select>
		</div>-->
		<div id="hsl"></div></div><?php } ?>
		</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>