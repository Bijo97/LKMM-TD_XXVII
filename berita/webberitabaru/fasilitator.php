<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            xmlhttp.open("GET", "yourfasilitator.php?id_fasilitator="+str+"&sesi="+sesi+"&shift="+shift, true);
            xmlhttp.send();
        }
    }
</script>
<script>
	function CAbsen(nrpZ, str, no) {
		 var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("status"+no).innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "updateabsensi.php?nrpZ="+nrpZ+"&absen="+str+"&no="+no, true);
            xmlhttp.send();
    }
</script>

<?php
	$id=1;

?>
  </head>
  <body>
  	<select id="shift">
	  	<option value="1A">Shift 1A</option>
	  	<option value="1B">Shift 1B</option>
	  	<option value="2A">Shift 2A</option>
	  	<option value="2B">Shift 2B</option>
	</select>

    <select onchange="showTeam(<?php echo $id; ?>,this.value,document.getElementById('shift').value)">
	  	<option value="1">Sesi 1</option>
	  	<option value="2">Sesi 2</option>
	  	<option value="3">Sesi 3</option>
	  	<option value="4">Sesi 4</option>
	</select>

	<div id="yourFasilitator"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>