<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<script>
    function showLogin(str) {
	      if (str.length == 0) { 
	            document.getElementById("Login").innerHTML = "";
	            return;
	        } else {
	            var xmlhttp = new XMLHttpRequest();
	            xmlhttp.onreadystatechange = function() {
	                if (this.readyState == 4 && this.status == 200) {
	                    document.getElementById("Login").innerHTML = this.responseText;
	                }
	            }
	            if(str==1){
	            	window.location.assign("http://lkmm-td.petra.ac.id/main/berita/webberitabaru/index.php");
	            }
	            else if(str==2){
	            	window.location.assign("http://lkmm-td.petra.ac.id/main/faq/index.php");
	            }
	            else if(str==3){
	            	 window.location.assign("http://lkmm-td.petra.ac.id/sekret/list_contact.php");
	            }
	            xmlhttp.send();
	        }
	    }
  </script>

  </head>
  <body>
    	<select id="drop">
    		<option value="0">Pilihan</option>
	  	<option value="1">Berita</option>
	  	<option value="2">FAQ</option>
	  	<option value="3">Contact Us</option>
	</select>
	
	<button onclick="showLogin(document.getElementById('drop').value)">OK</button>


	<div id="Login"></div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>