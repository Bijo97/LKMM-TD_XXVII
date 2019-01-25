<?php
		include("db.php");
		connect_db();
		$result = mysql_query("SELECT * FROM panitia");
		$jum=mysql_num_rows($result);
		echo $jum."<br>";
		echo "<form action='masukdb.php' method='post'>";
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