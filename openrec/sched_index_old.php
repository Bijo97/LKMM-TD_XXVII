<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{
echo $_SESSION['ID'];
}
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
   <li><a href='tanya.php'><span>PENDAFTARAN</span></a></li>
   <li><a href='page=cetak.php'><span>CETAK CV</span></a></li>
   <li class='active'><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li><a href='page=upload.php'><span>UPLOAD</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<?php	include("sched_db.php");?>
<script>
			var stat=0;
			function myFunction()
			{
				if(stat!=0)
				{
				setInterval(function(){b()},3000);
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
				alert(0);
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
				var tgl = hr + " " + mon +" "+res[0]; 
				//alert(tgl);
				x.open("GET","sched_panitia.php?tgl="+tgl,true); 
				x.send();
myFunction();
			
			}
			function next()
			{
				stat=1;
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
								  mon="09.00";
				}
				else if(lala=="2")
				{
								  mon="09.30";
					
				}
				else if(lala=="3")
				{
									  mon="10.00";
				}	
				else if(lala=="4")
				{
								  mon="09.30";
					
				}
				else if(lala=="5")
				{
									  mon="11.00";
				}
				else if(lala=="6")
				{
								  mon="11.30";
					
				}
				else if(lala=="7")
				{
									  mon="12.00";
				}	
				else if(lala=="8")
				{
								  mon="12.30";
					
				}
				else if(lala=="9")
				{
									  mon="13.00";
				}
				else if(lala=="10")
				{
								  mon="13.30";
					
				}
				else if(lala=="11")
				{
									  mon="14.00";
				}	
				else if(lala=="12")
				{
								  mon="14.30";
					
				}
				else if(lala=="13")
				{
									  mon="15.00";
				}
				else if(lala=="14")
				{
								  mon="15.30";
					
				}
				else if(lala=="15")
				{
									  mon="16.00";
				}	
				else if(lala=="16")
				{
								  mon="16.30";
					
				}
				else if(lala=="17")
				{
									  mon="17.00";
				}			
				//alert(mon);
				  var isi="Jadwal wawancara anda adalah\nTanggal: "+ res[1]+"\nPukul: "+mon+"\nPewawancara: "+res[0];
					var r=confirm(isi);
					if (r==true)
					  {
						alert("Anda Berhasil Menambahkan daftar wawancara!");
						x.open("GET","sched_header.php",true); 
						x.send();
						}
					else
					  {
					  x="You pressed Cancel!";
					  }

				}
				else
				{
					alert("Anda belum memilih jadwal!");
				}
			
			}
			
			
		</script>
		
		<div id="box">Tanggal wawancara: <input type="date" onchange="b()" id="tgl"><br/><br/>
(pilihan anda akan otomatis hilang dalam waktu 3 detik autorefresh)
</div>
		<div id="hsl"></div>
		</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>