<?php
session_start();
    include "connect.php";
     if(isset($_SESSION['namauser'])){
        $nrp=$_SESSION['namauser'];
     } 
     else{
        header('location:../login/index.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEK VALIDASI SEKRET</title>

    <link href="../main/css/bootstrap.min.css" rel="stylesheet">
    <script>
  </head>
  <body>

<div class="container">
<?php
	$hari = 2;
	$sql21 = "SELECT DISTINCT(nrp) FROM absensi_sekret WHERE shift LIKE '2%' ORDER BY nrp";
	$result21 = mysql_query($sql21);
	$sql2 = "SELECT * FROM sesi WHERE hari = ".$hari." AND id NOT IN(1,2,3,18)";
	$result2 = mysql_query($sql2);
?>

<table class="table table-striped" border="3">
	<tr>
			<td>Ruangan</td>
    		<?php
    			 while ($fetch2 = mysql_fetch_array($result2)){
            	  	echo "<td>Sesi ".$fetch2['nama_sesi']."</td>";
                }
    		?>
	</tr>
	<?php

		alert('a');
		
		while ($row21 = mysql_fetch_array($result21)){
		
			$sql11 = "SELECT * FROM absensi_sekret WHERE nrp = ".$row21['nrp']." AND (shift = '2A' OR shift = '2B')";
			$result11 = mysql_query($sql11);

			while ($row11 = mysql_fetch_array($result11)){	
				$sql12 = "SELECT * FROM sesi WHERE hari = ".$hari." AND id NOT IN(1,2,3,18)";
				$result12 = mysql_query($sql12);
				echo "<tr>
						<td>".$row11['nama_ruangan']."</td>";
						while ($row12 = mysql_fetch_array($result12)){
							$sql13 = "SELECT validasi FROM detailsekret WHERE nrp_sekret = ".$row11['nrp']." AND ruangan = '".$row11['nama_ruangan']."' AND sesi = ".$row12['id']." AND (shift LIKE '2A' OR shift LIKE '2B')";
							$result13 = mysql_query($sql13);
							$row13 = mysql_fetch_array($result13);

							if ($row13['validasi'] == 0){
								echo "<td>X</td>";
							} else {
								echo "<td>O</td>";
							}
						}	
				echo "</tr>";
			}
		}
	?>

</table>
  

    <div class="col-sm-2">
   <a href="sekret_logout.php"><button type="button" class="btn btn-warning pull-right">Log Out</button></a>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../main/js/bootstrap.min.js"></script>
    
  </body>
</html>