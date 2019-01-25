<?php
$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan");
mysql_select_db("lkmmtd_database", $con);

// echo "update";
$nrpZ = $_GET['nrpZ'];
$str = $_GET['absen'];
$no = $_GET['no'];

if ($str == 0) { 
             	$sql = "UPDATE absensi_sesi SET kehadiran=1 WHERE nrp=".$nrpZ;
				$kueri = mysql_query($sql);
		?>
				<button value="Hadir" onclick="CAbsen('<?php echo $nrpZ; ?>', 1, '<?php echo $no; ?>')">Hadir</button>
        <?php } else {
                $sql = "UPDATE absensi_sesi SET kehadiran=0 WHERE nrp=".$nrpZ;
				$kueri = mysql_query($sql);
		?>
				<button value="TidakHadir" onclick="CAbsen('<?php echo $nrpZ; ?>', 0, '<?php echo $no; ?>')">Tidak Hadir</button>
	    <?php }
		
?>