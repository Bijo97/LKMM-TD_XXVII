<?php
	include("db.php");
	if(isset($_GET['tgl']))
	{
		$tanggal=$_GET['tgl'];
		echo $tanggal;
		connect_db();
		$i=0;
		$hit=1;
		$abc="select * from Tbl_Jamw";
		$rowk= mysql_query($abc);
		echo "<table border=1>";
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
		$bcd="select * from Tbl_Panitia ";
		$row= mysql_query($bcd);
		
		while ($row1 = mysql_fetch_array($row)) 
		{
			
			echo "<tr>";
			echo "<td>";
			echo "{$row1['namasamaran']}";
			$nrp=$row1['nrp'];
			$namasama=$row1['namasamaran'];
		//	echo "<br>{$nrp}<br>{$tanggal}";
			echo "</td>";
			$j=0;
			for($v=1;$v<=17;$v++)
			{
				$arr[$v]=0;
			}
			
			$abcd="SELECT * FROM Tbl_JadwalPanitia WHERE tgl = '{$tanggal}' AND nrp ='{$nrp}'";
			$saw= mysql_query($abcd);
			
			while ($row2 = mysql_fetch_array($saw)) 
			{
				$arr[$row2['id_jam']]=1;
			}
			for($la=1;$la<=17;$la++)
			{
				if($arr[$la]!=0)
				{
					echo "<td>";
					echo "<input type='radio' id='jj' name='ww' value='{$namasama}+{$tanggal}+{$la}'>";
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

		
		echo "</table></br>";
		echo "<button onclick='check()' value='Submit'>Submit</button>";
		
	}


?>