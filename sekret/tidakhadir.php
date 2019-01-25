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
    function cariNRP(sesi) {
       
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("yourSekret").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "tidakhadir2.php?id_sesi="+sesi, true);
            xmlhttp.send();
        
    }
	</script>

<?php
    $ss=date("Y/m/d");
    if($ss>="2017/01/16" && $ss <= "2017/01/19"){
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

  <form method="post" action="confirmvalidate.php">
    <div class="col-sm-10">

      	<select id="sesi" name="sesii">
            <option>Pilih Sesi</option>
    		<?php
    			 while ($fetch3 = mysql_fetch_array($result3)){
            	  	echo "<option value='".$fetch3['id']."'>".$fetch3['nama_sesi']."</option>";
                }
    		?>
    	</select>

	
	<button type="button" class="btn btn-primary" onclick="cariNRP(document.getElementById('sesi').value)">Submit</button>
    </div>

    <div class="col-sm-2">
   <a href="sekret_logout.php"><button type="button" class="btn btn-warning pull-right">Log Out</button></a>
    </div>

    	<div id="yourSekret"></div>
    </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../main/js/bootstrap.min.js"></script>
    
  </body>
</html>