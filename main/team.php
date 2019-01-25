<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script>
    function showTeam(str) {
        if (str.length == 0) { 
            document.getElementById("yourTeam").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("yourTeam").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "yourteam.php?nrp="+str, true);
            xmlhttp.send();
        }
    }
</script>

  </head>
  <body>
<form> 
    NRP: <input type="text" id="nrp" name="nrp">
    <button type="button" name="search" onclick="showTeam(document.getElementById('nrp').value)" class="btn btn-default">Search</button>
</form>
<p>Your Team: </p>
<div id="yourTeam"></div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>