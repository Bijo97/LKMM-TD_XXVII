<?php
  include "connect.php";
  $nama = $_POST['nama'];
  // if(isset($_SESSION['namauser'])){
  //    $nrp=$_SESSION['namauser'];
  // } 
  // else{
  //    header('location:login/index.php');
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBoard Fasilitator & Pemandu</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

<?php
    $ss=date("Y/m/d");
    if($ss>="2017/01/16" && $ss <= "2017/01/19"){
        $shift=1;
    }
    else{
        $shift=2;
    }

    $sql1 = "SELECT * FROM fasilitator WHERE nama_fasilitator = '".$nama."' AND (shift = '".$shift."A' OR shift = '".$shift."B')";
    $result1 = mysql_query($sql1);
    $row1 = mysql_fetch_array($result1);
?>
  </head>
  <body>
    <div id="wrapper">
      <table id="tabel" class="table table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>NRP</th>
            <th>Sesi 1</th>
            <th>Sesi 2</th>
            <th>Sesi 3</th>
            <th>Sesi 4</th>
            <th>Sesi 5</th>
            <th>Sesi 6</th>
            <th>Sesi 7</th>
            <th>Sesi 8</th>
            <th>Sesi 9</th>
            <th>Sesi 10</th>
            <th>Sesi 11</th>
            <th>Sesi 12</th>
            <th>Sesi 13</th>
            <th>Sesi 14</th>
            <th>Sesi 15</th>
            <th>Sesi 16</th>
            <th>Sesi 17</th>
            <th>Sesi 18</th>
            <th>Angket 1</th>
            <th>Angket 2</th>
            <th>Angket 3</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              $sql2 = "SELECT * FROM kelompok WHERE ruang = '".$row1['nama_ruangan']."' AND shift = '".$row1['shift']."'";
              $result2 = mysql_query($sql2);

              while ($row2 = mysql_fetch_array($result2)){
                $sql3 = "SELECT * FROM detailkelompok WHERE idkelompok = ".$row2['idkelompok']." AND shift = '".$row2['shift']."'";
                $result3 = mysql_query($sql3);

                while ($row3 = mysql_fetch_array($result3)){
                  $sql4 = "SELECT * FROM rekap_absen WHERE nrp = ".$row3['nrp'];
                  $result4 = mysql_query($sql4);
                  $row4 = mysql_fetch_array($result4);

                  $sql5 = "SELECT * FROM rekap_angket WHERE nrp = ".$row3['nrp'];
                  $result5 = mysql_query($sql5);
                  $row5 = mysql_fetch_array($result5);

                  $sql6 = "SELECT nama FROM peserta WHERE nrp = ".$row3['nrp'];
                  $result6 = mysql_query($sql6);
                  $row6 = mysql_fetch_array($result6);

                  $j = 1;
                  $k = 1;
                  echo "<tr>
                          <td>".$i."</td>
                          <td><a href='#' title='".$row6['nama']."'>".$row3['nrp']."</a></td>";
                        while ($j <= 18){
                          if ($row4['sesi'.$j] == 0){
                            echo "<td style='text-align: center;'><a href='#' title='Tidak Hadir'><i class='fa fa-times' aria-hidden='true' style='color: red;''></i></a></td>";
                          } else {
                            echo "<td style='text-align: center;'><a href='#' title='Hadir'><i class='fa fa-check' aria-hidden='true' style='color: green;''></i></a></td>";
                          }
                          $j++;
                        }
                        while ($k <= 3){
                          if ($row5['angket'.$k] == 0){
                            echo "<td style='text-align: center;'><a href='#' title='Belum Diisi'><i class='fa fa-times' aria-hidden='true' style='color: red;''></i></a></td>";
                          } else {
                            echo "<td style='text-align: center;'><a href='#' title='Sudah Diisi'><i class='fa fa-check' aria-hidden='true' style='color: green;''></i></a></td>";
                          }
                          $k++;
                        }
                  echo "</tr>";
                  $i++;
                }
              }
            ?>
          </tbody>
      </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $('#tabel').dataTable();
      });
    </script>
  </body>
</html>