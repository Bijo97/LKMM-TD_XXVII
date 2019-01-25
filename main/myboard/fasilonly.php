<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Fasilitator</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>Halaman Fasilitator</h1>
      <form method="post" action="studentfasil.php">
        <?php
          $tgl = date("Y-m-d");
          if ($tgl >= "2017-01-15" && $tgl <= "2017-01-19"){
            $shift = 1;
          } else {
            $shift = 2;
          }

          $sql = "SELECT * FROM fasilitator WHERE shift = '".$shift."A' OR shift = '".$shift."B'";
          $result = mysql_query($sql);
        ?>
        <select id="nama" name="nama">
          <option>Pilih Nama Fasilitator</option>
          <?php
            while ($row = mysql_fetch_array($result)){
              echo "<option value='".$row['nama_fasilitator']."'>".$row['nama_fasilitator']."</option>";
            }
          ?>
        </select>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>