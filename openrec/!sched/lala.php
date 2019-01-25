<?php
	include("db.php");

		connect_db();
			$abcd="SELECT * FROM Tbl_JadwalPanitia WHERE tgl = '{$tanggal}' AND nrp ='{$nrp}'";
			$saw= mysql_query($abcd);
			
			if (!$saw) {
				die('Invalid query: ' . mysql_error());
			}
			$row2 = mysql_fetch_assoc($saw);
			print_r($row);
			while ($row2 = mysql_fetch_assoc($saw)) 
			{
				echo "lala";
				echo "<h1>{$row2['id_jam']}</h1>";
				$arr[$row2['id_jam']]=1;
			}
			?>