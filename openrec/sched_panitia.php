<?php
session_start();
if (!$_SESSION['ID'] && !$_SESSION['PASS']){ header("location:page=login.php");}else{
}
?>  
<!DOCTYPE html><head>
    <meta charset="utf-8">
<title>LKMM-TD XXVII: Open Recruitment</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<link rel="shortcut icon" href="iconukp.ico" type="image/x-icon" >
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    

<script src="index.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
</head>
<body >
<?php
error_reporting(0);
	include("sched_db.php");
	connect_db();
		if(isset($_GET['tgl']))
	{
		$tanggal=$_GET['tgl'];
		//echo "<h4>Anda Memilih Tanggal : ".$tanggal."</h4>";
		$i=0;
		$hit=1;
		$abc="select * from tbl_jamw";
		$rowk= mysql_query($abc);
		echo "<div id=zz><table border='1'>";
		echo "<tr>";
		echo "<td>";
		echo "</td>";
		while ($row1 = mysql_fetch_array($rowk)) 
		{
			echo "<td>";
			echo "{$row1['jam']}";
			echo "</td>";
		}
		echo "</tr>";
		//$bcd="select * from Tbl_Panitia ";
		$row= mysql_query("select * from tbl_panitia");

// $abcde="SELECT * FROM tbl_jadwalpanitia";
// $sawi= mysql_query($abcde);
// $rowx=mysql_fetch_array($sawi);
		while ($row1=mysql_fetch_array($row)) 
		{
			echo '<tr>';
			echo '<td>';
			echo "{$row1['namasamaran']}";
			$nrp=$row1['nrp'];
			$namasama=$row1['namasamaran'];
			echo "</td>";
			$j=0;
			for($v=1;$v<=18;$v++)
			{
				$arr[$v]=0;
			}
			$abcd="SELECT * FROM tbl_jadwalpanitia WHERE tgl = '{$tanggal}' AND nrp = '{$nrp}'";
			$saw= mysql_query($abcd);
			while ($row2 = mysql_fetch_array($saw)) 
			{
				$arr[$row2['id_jam']]=1;
			}
			$abcd="SELECT * FROM tbl_wawancara WHERE tgl = '{$tanggal}' AND nrp_panitia = '{$nrp}'";
			$saw= mysql_query($abcd);
			while ($row2 = mysql_fetch_array($saw)) 
			{
				if($row2['jam']=="08:00")
				{
					$ii=1;
				}
				else if($row2['jam']=="08:30")
				{
					$ii=2;
				}
				else if($row2['jam']=="09:00")
				{
					$ii=3;
				}
				else if($row2['jam']=="09:30")
				{
					$ii=4;
				}
				else if($row2['jam']=="10:00")
				{
					$ii=5;
				}
				else if($row2['jam']=="10:30")
				{
					$ii=6;
				}
				else if($row2['jam']=="11:00")
				{
					$ii=7;
				}
				else if($row2['jam']=="11:30")
				{
					$ii=8;
				}
				else if($row2['jam']=="12:00")
				{
					$ii=9;
				}
				else if($row2['jam']=="12:30")
				{
					$ii=10;
				}
				else if($row2['jam']=="13:00")
				{
					$ii=11;
				}
				else if($row2['jam']=="13:30")
				{
					$ii=12;
				}
				else if($row2['jam']=="14:00")
				{
					$ii=13;
				}
				else if($row2['jam']=="14:30")
				{
					$ii=14;
				}
				else if($row2['jam']=="15:00")
				{
					$ii=15;
				}
				else if($row2['jam']=="15:30")
				{
					$ii=16;
				}
				else if($row2['jam']=="16:00")
				{
					$ii=17;
				}
				else if($row2['jam']=="16:30")
				{
					$ii=18;
				}

				$arr[$ii]=0;

			}
			for($la=1;$la<=18;$la++)
			{

				if($arr[$la]!=0)
				{
					echo "<td>";
					echo "<input type='radio' onclick='' id='jj' name='ww' value='{$namasama}+{$tanggal}+{$la}'>";

					echo "</td>";
				}
				else
				{
					echo "<td>";
					echo "</td>";
				}
			}
			$i++;
			
			echo "</tr>";
		}

		
		echo "</table></div></br>";
		echo "<input onclick='check()' type='submit' value='Submit'>";
	}
?><br/><br/>
</body></html>