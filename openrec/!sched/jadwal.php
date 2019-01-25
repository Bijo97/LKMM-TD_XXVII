<html>
<head>
<meta http-equiv="refresh" content="1">
</head>
<body>
<body>
</html>
<?php
	include("db.php");
	connect_db();
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
		echo "<form action='masukdb.php' method='post'>";
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