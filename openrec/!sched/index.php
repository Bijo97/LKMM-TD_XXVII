<!DOCTYPE HTML>
<?php
	include("db.php");
?>

<html>
	<head>

		<link rel="shortcut icon" href="images/favicon.ico">
		<script>
			
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
				x.open("GET","panitia.php",true); 
				x.send();
			
			}
			function b()
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
				x.open("GET","panitia.php?tgl="+tgl,true); 
				x.send();
			
			}
			function next()
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
				x.open("GET","jadwal.php",true); 
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
						alert("Ini belom tak tambahin buat masuk ke db mahasiswa yang daftarrrr ");
						x.open("GET","header.php",true); 
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
		<title>SMS Broadcast</title>
	</head>
	<body data-twttr-rendered="true">
	<div id="box">
		Tanggal wawancara: <input type="date" onchange="b()" id="tgl">
	</div>
	<div id="hsl">
	</div>
		  
	</body>
</html> 