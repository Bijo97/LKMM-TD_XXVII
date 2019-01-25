<!DOCTYPE HTML>
<?php
	include("db.php");
?>

<html>
	<head>

		<link rel="shortcut icon" href="images/favicon.ico">
		<script>
			
			function move()
			{
				var x;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("box").innerHTML= x.responseText;
					}
				}
				x.open("GET","panitia.php",true); 
				x.send();
			
			}
			function next()
			{
				var x;
				if(window.XMLHttpRequest)	{ 
					x= new XMLHttpRequest();
				}
				else {
					x= new ActiveXObject("Microsoft.XMLHTTP");
				}
				x.onreadystatechange = function () {
					if (x.readyState == 4 && x.status==200)	{
						document.getElementById("box").innerHTML= x.responseText;
					}
				}
				x.open("GET","jadwal.php",true); 
				x.send();
			
			}
			
		</script>
		<title>SMS Broadcast</title>
	</head>
	<body data-twttr-rendered="true">
	<div id="box">
		<button class="btn h1-b" onclick="move()">input jadwal kosong panitia</button>
		<button class="btn h1-b" onclick="b()">Send SMS</button>
	</div>
		  
		  <!--ini javascriptnya flatui+bootstrap-->
		<script src="./js/jquery-1.8.3.min.js"></script>
		<script src="./js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="./js/jquery.ui.touch-punch.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/bootstrap-select.js"></script>
		<script src="./js/bootstrap-switch.js"></script>
		<script src="./js/flatui-checkbox.js"></script>
		<script src="./js/flatui-radio.js"></script>
		<script src="./js/jquery.tagsinput.js"></script>
		<script src="./js/jquery.placeholder.js"></script>
		<script src="./js/jquery.stacktable.js"></script>
		<script src="./js/application.js"></script>
	</body>
</html> 