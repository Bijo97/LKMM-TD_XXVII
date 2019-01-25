<?php
include("db.php");
	if(isset($_POST['submit']))
	{
	
		$nama=$_POST['nama'];
		$namasamaran=$_POST['namasamaran'];
		$nrp=$_POST['nrp'];
		$jabatan=$_POST['jabatan'];
		$divisi=$_POST['divisi'];
			echo $nama ." ". $nrp ." ". $jabatan." ". $divisi ."<br>";
	
		$jad=$_POST['jadwal'];
		$a=count($_POST['jadwal']);
		for($i=0;$i<$a;$i++)
		{
			echo $jad[$i]."<br>";
		}
		connect_db();
		mysql_query("INSERT INTO `Tbl_Panitia`(`nrp`, `namasamaran`, `nama`,`jabatan`, `divisi`) VALUES ('{$nrp}','{$namasamaran}','{$nama}','{$jabatan}','{$divisi}')");
		for($i=0;$i<$a;$i++)
		{
			$potong=$jad[$i];
			$pieces = explode("+", $potong);
			echo	$pieces[0]."<br>";
			echo	$pieces[1]."<br><br>";	
			if($pieces[1]=="09.00")
			{
				$ij=4;
			}
			else if($pieces[1]=="09.30")
			{
				$ij=5;
			}
			else if($pieces[1]=="10.00")
			{
				$ij=6;
			}
			else if($pieces[1]=="10.30")
			{
				$ij=7;
			}
			else if($pieces[1]=="11.00")
			{
				$ij=8;
			}
			else if($pieces[1]=="11.30")
			{
				$ij=9;
			}
			else if($pieces[1]=="12.00")
			{
				$ij=10;
			}
			else if($pieces[1]=="12.30")
			{
				$ij=11;
			}else if($pieces[1]=="13.00")
			{
				$ij=12;
			}
			else if($pieces[1]=="13.30")
			{
				$ij=13;
			}
			else if($pieces[1]=="14.00")
			{
				$ij=14;
			}
			else if($pieces[1]=="14.30")
			{
				$ij=15;
			}
			else if($pieces[1]=="15.00")
			{
				$ij=16;
			}
			else if($pieces[1]=="15.30")
			{
				$ij=17;
			}
			else if($pieces[1]=="16.00")
			{
				$ij=18;
			}
			else if($pieces[1]=="16.30")
			{
				$ij=19;
			}
			else if($pieces[1]=="17.00")
			{
				$ij=20;
			}
			$ij-=3;
			mysql_query("INSERT INTO `Tbl_JadwalPanitia`(`nrp`, `tgl`, `jam`, `id_jam`) VALUES ('{$nrp}','{$pieces[0]}','{$pieces[1]}',{$ij})");
		}
		
	}
	



?>