<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{

}
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
	
	$temp = mysql_query("SELECT lastname as nrp FROM {$namatable} where completed='Y'");
		while ($row = mysql_fetch_array($temp)) 
		{
			$tempnrp=$row['nrp'];
			$check=mysql_query("SELECT count(*) as hit FROM {$namatable} where nrp='{$tempnrp}'");
			while ($row1 = mysql_fetch_array($check)) 
			{
				//echo "{$row1['hit']}<br><br>";
				if($row1['hit']!=0)
				{
					$query="UPDATE mahasiswa SET status=1 WHERE nrp='{$tempnrp}'";
					$edit=mysql_query($query);
					//echo "{$tempnrp} {$check} {$row1['hit']}<br>";
				}
			}
		}		
	
		
		$nama=$_POST['nama'];
		$nrp=$_POST['nrp'];
		$jabatan=$_POST['jabatan'];
		$divisi=$_POST['divisi'];
	
		echo $nama ." ". $nrp ." ". $jabatan." ". $divisi ."<br>";
		$hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$jam=array("07.30","08.30","09.30","10.30","11.30","12.30","13.30","14.30","15.30","16.30","17.30","18.30","19.30");
		echo "<form action='sched_send.php' method='post'>";
		echo "<table border=1>";
		for($i=-1;$i<count($jam);$i++)
		{
		
				echo "<tr>";
				if($i==-1)
				{
				echo "<td>";
				echo "jam/hari";
				echo "</td>";
				
				}
				else
				{		
				echo "<td>";
				echo $jam[$i];
				echo "</td>";
				}
			for($j=0;$j<count($hari);$j++)
			{
				
					if($j==-1)
					{
					echo "<td>";
					echo "</td>";
				
					}
					else if($i==-1)
					{
					echo "<td>";
					echo $hari[$j];
					echo "</td>";
					}
					else
					{
					echo "<td>";
					echo "<input type='checkbox' name='jadwal[]' value='{$hari[$j]} {$jam[$i]}' />";
					echo "</td>";
				
					}
				
			}	
			echo "</tr>";
		}
	echo "</table>";
	
	echo "<input type='hidden' value='{$nama}' name='nama'>";
	echo "<input type='hidden' value='{$nrp}' name='nrp'>";
	echo "<input type='hidden' value='{$jabatan}' name='jabatan'>";
	echo "<input type='hidden' value='{$divisi}' name='divisi'>";
	echo "<input type='submit' value='submit' name='submit'></form>";












?>
</article></div>
                    </div>
                </div>
</div></div><br/><br/></div></body></html>