<?php
	include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rekap Keamanan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4">
  		<div class="login-panel panel panel-default">
  		 <div class="panel-body">
  		 		<h4><center>Rekap</center></h4>
 			<form method="post" action="input.php">
	   
	      <div class="form-group">
	        <label for="exampleInputEmail1">NRP</label>
	        <input type="text" name="nrp" class="form-control" id="InputNRP" placeholder="nrp">
	      </div>

		    Hari :  
			<select name="hari" id="hari">
			<option name=one value=1> 1 </option>
			<option name=two value=2> 2 </option>
			<option name=three value=3> 3 </option>
			<option name=four value=4> 4 </option>
			</select>
			 
			<br>
			<br>
			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#1">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal A : Kehadiran
						</a>
				</div>
				<div id="1" class="panel-collapse collapse">
					<div id="wrap">
						<input type="checkbox" name=mybox[] value="A1" >1. Terlambat >15 menit.
						<br><input type="checkbox" name=mybox[] value="A2" >2. Tidak mengikuti sesi >1 kali.
						<br><input type="checkbox" name=mybox[] value="A3" >3. Tidak mengikuti seluruh rangkaian acara.
						<br><input type="checkbox" name=mybox[] value="A4" >4. Dianggap tidak mengikuti sesi dikarenakan terlambat >15 menit.
				</div>
			</div>  
	
			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#2">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal B : Barang
						</a>
				</div>
				<div id="2" class="panel-collapse collapse">
					<div id="wrap">
						<input type="checkbox" name=mybox[] value="B1" >1. Tidak membawa KTM
						<br><input type="checkbox" name=mybox[] value="B2" >2. Tidak menggunakan keplek peserta.
						<br><input type="checkbox" name=mybox[] value="B3" >3. Tidak membawa barang sesuai daftar yang ditentukan.
						<br><input type="checkbox" name=mybox[] value="B4" >4. Membawa barang di luar daftar barang bawaan wajib dan opsional.
						<br><input type="checkbox" name=mybox[] value="B5" >5. Tidak bertanggung jawab terhadap barang bawaan.
						<br><input type="checkbox" name=mybox[] value="B6" >6. Barang tidak seusai ketentuan sehingga disita panitia.
						<br><input type="checkbox" name=mybox[] value="B7" >7. Barang bawaan tidak dimasukkan ke dalam tas ransel/selempang.
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#3">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal C : Kelancaran Acara
						</a>
				</div>
				<div id="3" class="panel-collapse collapse">
					<div id="wrap">
						<input type="checkbox" name=mybox[] value="C1" >1. Tidak memberikan tanda pengenal ketika meninggalkan ruang sesi.
						<br><input type="checkbox" name=mybox[] value="C2" >2. Ribut.
						<br><input type="checkbox" name=mybox[] value="C3" >3. Tidak memperhatikan pembicara.
						<br><input type="checkbox" name=mybox[] value="C4" >4. Melakukan aktivitas lain yang mengganggu kelancaran acara.
						<br><input type="checkbox" name=mybox[] value="C5" >5. Tidur selama sesi berlangsung.
						<br><input type="checkbox" name=mybox[] value="C6" >6. Makan dan minum selama sesi berlangsung.
						<br><input type="checkbox" name=mybox[] value="C7" >7. Menggunakan lift.
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#4">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal D : Penampilan
						</a>
				</div>
				<div id="4" class="panel-collapse collapse">
					<div id="wrap">
						1. Pria : 
						<br><input type="checkbox" name=mybox[] value="D1" >Rambut tidak rapi ( rambut belakang mengenai kerah baju, rambut samping menutupi telinga, rambut depan melebihi alis.
						<br><input type="checkbox" name=mybox[] value="D2" >Memakai barang lain selain pomade/wax.
						<br><input type="checkbox" name=mybox[] value="D3" >Kuku panjang/berwarna.
						<br><input type="checkbox" name=mybox[] value="D4" >Memakai aksesoris.
						<br>2. Wanita :
						<br><input type="checkbox" name=mybox[] value="D5" >Rambut tidak rapi (tidak diikat tunggal ke belakang / ikat rambut tidak polos tanpa aksesoris)
						<br><input type="checkbox" name=mybox[] value="D6" >Rambut depan melebihi alis.
						<br><input type="checkbox" name=mybox[] value="D7" >Menggunakan Make-Up  berlebihan.
						<br><input type="checkbox" name=mybox[] value="D8" >Kuku panjang/berwarna.
						<br><input type="checkbox" name=mybox[] value="D9" >Memakai aksesoris
						
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#5">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal E : Pakaian
						</a>
				</div>
				<div id="5" class="panel-collapse collapse">
					<div id="wrap">
						
						<input type="checkbox" name=mybox[] value="E1" >1. Tidak memakai pakaian standar LKMM-TD
						<br><input type="checkbox" name=mybox[] value="E2" >2. Tidak memakai kemeja.
						<br><input type="checkbox" name=mybox[] value="E3" >3. Tidak memakai jas almamater.
						<br><input type="checkbox" name=mybox[] value="E4" >4. Boleh memakai ikat pinggang.
						<br><input type="checkbox" name=mybox[] value="E5" >5. Tidak memakai sepatu sneakers/kets.
						<br><input type="checkbox" name=mybox[] value="E6" >6. Tidak memakai kaos kaki.
						
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#6">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal F : Sikap
						</a>
				</div>
				<div id="6" class="panel-collapse collapse">
					<div id="wrap">
						
						<input type="checkbox" name=mybox[] value="F1" >1. Tidak menghargai/menghormati/bersikap kooperatif dengan semua pihak yang terlibat dalam pelaksanaan LKMM-TD.
						<br><input type="checkbox" name=mybox[] value="F2" >2. Tidak menggunakan bahasa yang baik dan sopan.

						
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#7">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal G : Kebersihan
						</a>
				</div>
				<div id="7" class="panel-collapse collapse">
					<div id="wrap">
						
						<input type="checkbox" name=mybox[] value="G1" >1. Tidak menjaga kebersihan area LKMM-TD.
						<br><input type="checkbox" name=mybox[] value="G2" >2. Tidak menjaga dan memelihara fasilitas universitas dan properti LKMM-TD.

						
					</div>
				</div>
			</div>  

			<div id="wrap">
				<div id="question">
						<a data-toggle="collapse" href="#8">
							<i id="plus1" class="glyphicon glyphicon-chevron-down"></i>
							Pasal H : Anarkis
						</a>
				</div>
					<div id="8" class="panel-collapse collapse">
						<div id="wrap">
						
						<input type="checkbox" name=mybox[] value="H1" >1. Membawa NAPZA, miras, rokok, dan senjata tajam.
						<br><input type="checkbox" name=mybox[] value="H2" >2. Berkelahi, berjudi, mencuri, dan berbuat asusila.
						
					</div>
				</div>
			</div>  

	 			<input type="submit" value="Submit" >
	 		

    			</form>
    		</div>
    		</div>
    		</div>
    	</div>

   		<div class="row">
   			<table class="table table-striped">
   				<tr>
   				<td> NRP </td>
   				<td> Hari </td>
   				<td> Pasal </td>
   				<td> Pelanggaran </td>
   				<td> Action </td>   				
   				</tr>

   				<?php
   					$sql = "select * from rekap_pelanggaran ORDER BY id DESC";
   					$result = mysql_query($sql);

   					while($a = mysql_fetch_array($result)){
   						echo "<tr>
   							<td>".$a['nrp']."</td>
   							<td>".$a['hari']."</td>
   							<td>".$a['pasal']."</td>
   							<td>".$a['pelanggaran']."</td>
   							<td><a href='delete.php?id=".$a['id']."'><button type='button'>Delete</button></a></td>

   						</tr>";
   					}	
   				?>
   			</table>
   		</div> 	

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>