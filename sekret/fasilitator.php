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
    <title>Absensi Kelas</title>

    <link href="../main/css/bootstrap.min.css" rel="stylesheet">
    <script>
    function showTeam(str,sesi,shift) {
       
        if (str.length == 0) { 
            document.getElementById("yourFasilitator").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("yourFasilitator").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "yourfasilitator.php?id_ruangan="+str+"&sesi="+sesi+"&shift="+shift, true);
            xmlhttp.send();
        }
    }
	</script>
	
	<script>
		function Validate(str,sesi,shift) {
			if (confirm("Anda yakin mau validasi sekarang? karena jika di validasi maka tidak bisa di ubah kembali, jika tetap ingin melanjutkan tekan tombol OK!") == true) {
				if (str.length == 0) { 
				document.getElementById("updateValidate").innerHTML = "";
				return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("updateValidate").innerHTML = this.responseText;
							alert('aasdasda');
						}
					}
					alert('aasdasda');
					xmlhttp.open("GET", "updatevalidate.php?id_ruangan="+str+"&sesi="+sesi+"&shift="+shift, true);
					xmlhttp.send();
				}
			} else {
				
			}
			
		}
	</script>
	
	<script>
		function Direct(str,sesi,shift) {
			window.location.replace('http://lkmm-td.petra.ac.id/yourfasilitator.php?id_ruangan=$str&sesi=$sesi&shift=$shift');
		}
	</script>
	<script>
		function CAbsen(nrpZ, str, no, sesi) {
			 var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("status"+no).innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "updateabsensi.php?nrpZ="+nrpZ+"&absen="+str+"&no="+no+"&sesi="+sesi, true);
				xmlhttp.send();
		}
	</script>

<?php
    $ss=date("Y/m/d");
    if($ss>="2017/01/16" && $ss <= "2017/06/19"){
        $n=1;
    }
    else {
        $n=2;
    }

    if ($ss == "2017/01/16" || $ss == "2017/01/20"){
        $hari = 1;
    } else if ($ss == "2017/01/17" || $ss == "2017/01/21"){
        $hari = 2;
    } else if ($ss == "2017/01/18" || $ss == "2017/01/23"){
        $hari = 3;
    } else if ($ss == "2017/01/19" || $ss == "2017/01/24"){
        $hari = 4;
    } else {
        $hari = 1;
    }


    $shift1 = $n."A";
    $shift2 = $n."B";
    echo $shift;
	
	$sql2 = "SELECT * FROM sesi WHERE hari = ".$hari." AND id NOT IN(1,2,3,18)";
	$result2 = mysql_query($sql2);

	$sql3 = "SELECT * FROM sesi WHERE hari = ".$hari." AND id NOT IN(1,2,3,18)";
	$result3 = mysql_query($sql3);
?>
  </head>
  <body>

<div class="container">

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
		$sql11 = "SELECT * FROM absensi_sekret WHERE nrp = ".$nrp." AND (shift = '".$shift1."' OR shift = '".$shift2."')";
        $result11 = mysql_query($sql11);

		while ($row11 = mysql_fetch_array($result11)){
			$sql12 = "SELECT * FROM sesi WHERE hari = ".$hari." AND id NOT IN(1,2,3,18)";
			$result12 = mysql_query($sql12);
			echo "<tr>
					<td>".$row11['nama_ruangan']."</td>";
					while ($row12 = mysql_fetch_array($result12)){
						$sql13 = "SELECT validasi FROM detailsekret WHERE nrp_sekret = ".$nrp." AND ruangan = '".$row11['nama_ruangan']."' AND sesi = ".$row12['id']." AND (shift LIKE '".$shift1."' OR shift LIKE '".$shift2."')";
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
	?>

</table>
  <form method="post" action="confirmvalidate.php">
    <div class="col-sm-10">
        <select id="nn" name="nn">
            <option>Pilih Shift</option>
            <option value="<?php echo $shift1; ?>"><?php echo $shift1; ?></option>
            <option value="<?php echo $shift2; ?>"><?php echo $shift2; ?></option>
        </select>

      	<select id="sesi" name="sesi">
            <option>Pilih Sesi</option>
    		<?php
    			 while ($fetch3 = mysql_fetch_array($result3)){
            	  	echo "<option value='".$fetch3['id']."'>".$fetch3['nama_sesi']."</option>";
                }
    		?>
    	</select>

        <select id="ruangan" name="ruangan">
             <option>Pilih Ruangan</option>
            <?php
                $sql1 = "SELECT * FROM absensi_sekret WHERE nrp = ".$nrp." AND (shift = '".$shift1."' OR shift = '".$shift2."')";
                $result1 = mysql_query($sql1);
                while ($fetch1 = mysql_fetch_array($result1)){
            	  	echo "<option value='".$fetch1['nama_ruangan']."'>".$fetch1['nama_ruangan']."</option>";
                }
    			$cek=3;
            ?>
    	</select>

	
	<button type="button" class="btn btn-primary" onclick="showTeam(document.getElementById('ruangan').value,document.getElementById('sesi').value,document.getElementById('nn').value)">Submit</button>
    </div>

    <div class="col-sm-2">
   <a href="sekret_logout.php"><button type="button" class="btn btn-warning pull-right">Log Out</button></a>
    </div>

    	<div id="yourFasilitator"></div>
    	<div id="updateValidate"></div>
    </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../main/js/bootstrap.min.js"></script>
    
  </body>
</html>