<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

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
   <li><a href='page=cetak.php' target='_blank'><span>CETAK CV</span></a></li>
   <li class='active'><a href='page=interview.php'><span>INTERVIEW</span></a></li>
   <li class='last'><a href='page=logout.php'><span>LOGOUT</span></a></li>
</ul>
</div>
<?php
		include("sched_db.php");
		connect_db();
		$result = mysql_query("SELECT * FROM Tbl_Panitia");
		$jum=mysql_num_rows($result);
		echo $jum."<br>";
		echo "<form action='sched_send.php' method='post'>";
		echo "<table border=1>";
		$namasamaran=array("HAWKEYE","THE THING","THE SILVER SURFER","DAREDEVIL","CAPTAIN AMERICA","THOR","THE INCREDIBLE HULK","WOLVERINE","IRONMAN","SPIDERMAN","Wonder Woman","Catwoman","Supergirl","Invisible Girl "," Lara Croft","Elektra","Green Lantern");
		$k=count($namasamaran);
		$jam=array("07.30","08.00","08.30","09.00","09.30","10.00","10.30","11.00","11.30","12.00","12.30","13.00","13.30","14.00","14.30","15.00","15.30","16.00","16.30","17.00","17.30","18.00","18.30","19.00","19.30");

		for($i=-1;$i<count($jam);$i++)
		{
		
				echo "<tr>";
				if($i==-1)
				{
				echo "<td>";
				echo "jam/kode";
				echo "</td>";
				
				}
				else
				{		
				echo "<td>";
				echo $jam[$i];
				echo "</td>";
				}
			for($j=0;$j<$jum;$j++)
			{
				
					if($j==-1)
					{
					echo "<td>";
					echo "</td>";
				
					}
					else if($i==-1)
					{
					echo "<td>";
					echo $namasamaran[$j];
					echo "</td>";
					}
					else
					{
					echo "<td>";
					echo "<input type='radio' name='jpeserta' value='{$namasamaran[$j]} {$jam[$i]}' />";
					echo "</td>";
				
					}
				
			}	
			echo "</tr>";
		}
	echo "</table>";
		/*while ($row = mysql_fetch_assoc($result)) {
			echo $row["nama"];
			echo $row["nrp"];
			echo $row["jabatan"];
			echo $row["divisi"];
		}
*/
		//mysql_free_result($result);
	//	echo $temp['jum'];





?>
</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>