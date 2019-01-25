<?php
$con = mysql_connect("lkmm-td.petra.ac.id", "lkmmtd", "kapokmukapan");
mysql_select_db("lkmmtd_database", $con);

// echo "update";
$nrpZ = $_GET['nrpZ'];
$str = $_GET['absen'];
$no = $_GET['no'];
$sesi = $_GET['sesi'];

if ($str == 0) { 
             	$sql = "UPDATE absensi_sesi SET kehadiran=1 WHERE nrp=".$nrpZ." AND sesi = ".$sesi;
				$kueri = mysql_query($sql);
		?>
				<button type="button" value="Hadir" class="btn btn-success" onclick="CAbsen('<?php echo $nrpZ; ?>', 1, '<?php echo $no; ?>', '<?php echo $sesi; ?>')">Hadir</button>
        <?php } else {
                $sql = "UPDATE absensi_sesi SET kehadiran=0 WHERE nrp=".$nrpZ." AND sesi = ".$sesi;
				$kueri = mysql_query($sql);
		?>
				<button type="button" value="TidakHadir" class="btn btn-danger" onclick="CAbsen('<?php echo $nrpZ; ?>', 0, '<?php echo $no; ?>', '<?php echo $sesi; ?>')">Tidak Hadir</button>
	    <?php }
		
?>