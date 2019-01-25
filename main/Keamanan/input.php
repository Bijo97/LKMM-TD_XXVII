<?php
	include "../connect.php";

	$nrp = $_POST['nrp'];
	$hari = $_POST['hari'];
	$pelanggaran = $_POST['mybox'];

	if(empty($pelanggaran)) 
    {
        echo "Registration Failed"; 
    } 
    else 
    {
       $N = count($pelanggaran);
        // echo("You selected $N : ");
        for($i=0; $i < $N; $i++)
        {
          $var=$pelanggaran[$i];
          if ($pelanggaran[$i] == 'A1'){
            $var1 = "Terlambat > 15 menit.";
          }
          else if ($pelanggaran[$i] == 'A2'){
            $var1 = "Tidak mengikuti sesi > 1 kali.";
          }
          else if ($pelanggaran[$i] == 'A3'){
            $var1 = "Tidak mengikuti seluruh rangkaian acara.";
          }
          else if ($pelanggaran[$i] == 'A4'){
            $var1 = "Dianggap tidak mengikuti sesi dikarenakan terlambat > 15 menit";
          }
          else if ($pelanggaran[$i] == 'B1'){
            $var1 = "Tidak membawa KTM";
          }
          else if ($pelanggaran[$i] == 'B2'){
            $var1 = "Tidak menggunakan keplek peserta";
          }
          else if ($pelanggaran[$i] == 'B3'){
            $var1 = "Tidak membawa barang sesuai daftar yang ditentukan";
          }
          else if ($pelanggaran[$i] == 'B4'){
            $var1 = "Membawa barang di luar daftar barang bawaan wajib dan opsional";
          }
          else if ($pelanggaran[$i] == 'B5'){
            $var1 = "Tidak bertanggung jawab terhadap barang bawaan";
          }
          else if ($pelanggaran[$i] == 'B6'){
            $var1 = "Barang tidak seusai ketentuan sehingga disita panitia";
          }
          else if ($pelanggaran[$i] == 'B7'){
            $var1 = "Barang bawaan tidak dimasukkan ke dalam tas ransel/selempang";
          }
          else if ($pelanggaran[$i] == 'C1'){
            $var1 = "Tidak memberikan tanda pengenal ketika meninggalkan ruang sesi";
          }
          else if ($pelanggaran[$i] == 'C2'){
            $var1 = "Ribut";
          }
          else if ($pelanggaran[$i] == 'C3'){
            $var1 = "Tidak memperhatikan pembicara";
          }
          else if ($pelanggaran[$i] == 'C4'){
            $var1 = "Melakukan aktivitas lain yang mengganggu kelancaran acara";
          }
          else if ($pelanggaran[$i] == 'C5'){
            $var1 = "Tidur selama sesi berlangsung";
          }
          else if ($pelanggaran[$i] == 'C6'){
            $var1 = "Makan dan minum selama sesi berlangsung";
          }
          else if ($pelanggaran[$i] == 'C7'){
            $var1 = "Menggunakan lift";
          }
          else if ($pelanggaran[$i] == 'D1'){
            $var1 = "Rambut tidak rapi";
          }
          else if ($pelanggaran[$i] == 'D2'){
            $var1 = "Memakai barang lain selain pomade/wax.";
          }
          else if ($pelanggaran[$i] == 'D3'){
            $var1 = "Kuku panjang/berwarna.";
          }
          else if ($pelanggaran[$i] == 'D4'){
            $var1 = "Memakai aksesoris.";
          }
          else if ($pelanggaran[$i] == 'D5'){
            $var1 = "Rambut tidak rapi (tidak diikat tunggal ke belakang / ikat rambut tidak polos tanpa aksesoris).";
          }
          else if ($pelanggaran[$i] == 'D6'){
            $var1 = "Rambut depan melebihi alis.";
          }
          else if ($pelanggaran[$i] == 'D7'){
            $var1 = "Menggunakan Make-Up  berlebihan.";
          }
          else if ($pelanggaran[$i] == 'D8'){
            $var1 = "Kuku panjang/berwarna.";
          }
          else if ($pelanggaran[$i] == 'D9'){
            $var1 = "Memakai aksesoris.";
          }
          else if ($pelanggaran[$i] == 'E1'){
            $var1 = "Tidak memakai pakaian standar LKMM-TD.";
          }
          else if ($pelanggaran[$i] == 'E2'){
            $var1 = "Tidak memakai kemeja.";
          }
          else if ($pelanggaran[$i] == 'E3'){
            $var1 = "Tidak memakai jas almamater.";
          }
          else if ($pelanggaran[$i] == 'E4'){
            $var1 = "Boleh memakai ikat pinggang.";
          }
          else if ($pelanggaran[$i] == 'E5'){
            $var1 = "Tidak memakai sepatu sneakers/kets.";
          }
          else if ($pelanggaran[$i] == 'E6'){
            $var1 = "Tidak memakai kaos kaki.";
          }
          else if ($pelanggaran[$i] == 'F1'){
            $var1 = "Tidak menghargai/menghormati/bersikap kooperatif dengan semua pihak yang terlibat dalam pelaksanaan LKMM-TD.";
          }
          else if ($pelanggaran[$i] == 'F2'){
            $var1 = "Tidak menggunakan bahasa yang baik dan sopan.";
          }
           else if ($pelanggaran[$i] == 'G1'){
            $var1 = "Tidak menjaga kebersihan area LKMM-TD.";
          }
           else if ($pelanggaran[$i] == 'G2'){
            $var1 = "Tidak menjaga dan memelihara fasilitas universitas dan properti LKMM-TD.";
          }
          else if ($pelanggaran[$i] == 'H1'){
            $var1 = "Membawa NAPZA, miras, rokok, dan senjata tajam.";
          }
          else if ($pelanggaran[$i] == 'H2'){
            $var1 = "Berkelahi, berjudi, mencuri, dan berbuat asusila.";
          }
          $sql="INSERT INTO rekap_pelanggaran(id,nrp,nama,shift,hari,pasal,pelanggaran) values ('','$nrp','','0','$hari','$var','$var1')";
         	$result = mysql_query($sql);        }

        // echo "successfully uploaded!..";
          header("Location: keamanan.php");
      }
?>