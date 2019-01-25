<?php
	if(isset($_POST['myButton']))
	{
	
		$nama=$_POST['nama'];
		$nrp=$_POST['nrp'];
		$jabatan=$_POST['jabatan'];
		$divisi=$_POST['divisi'];
		$namasamaran=$_POST['namasamaran'];
	
		echo $nama ." ". $nrp ." ". $jabatan." ". $divisi ."<br>";
		$hari=array("1 April 2014","2 April 2014","3 April 2014","4 April 2014","5 April 2014","7 April 2014","8 April 2014","9 April 2014","10 April 2014","11 April 2014","12 April 2014","13 April 2014");
		echo "<form action='masukdb.php' method='post'>";
		$jam=array("09.00","09.30","10.00","10.30","11.00","11.30","12.00","12.30","13.00","13.30","14.00","14.30","15.00","15.30","16.00","16.30");
		$id_jam=array("4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20");
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
					echo "<center><input type='checkbox' name='jadwal[]' value='{$hari[$j]}+{$jam[$i]}' /></center>";
					echo "</td>";
				
					}
				
			}	
			echo "</tr>";
		}
	echo "</table>";
	
	echo "<input type='hidden' value='{$nama}' name='nama'>";
	echo "<input type='hidden' value='{$namasamaran}' name='namasamaran'>";
	echo "<input type='hidden' value='{$nrp}' name='nrp'>";
	echo "<input type='hidden' value='{$jabatan}' name='jabatan'>";
	echo "<input type='hidden' value='{$divisi}' name='divisi'>";
	echo "<input type='submit' value='submit' name='submit'></form>";
	}
	else
	{
	echo "Anda tidak dapat membuka halaman ini!";
	
	}












?>