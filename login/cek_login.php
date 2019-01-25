<?php
session_start();
include "koneksi.php";

$login  = mysql_query("SELECT * FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  //session_start();
  $_SESSION['namauser']=$r['username'];
  $_SESSION['passuser']=$r['password'];
  if($r['priority']==1){
  header('location:../main/it.php');
  }
  else if($r['priority']==2){
  header('location:../fasilitator.php');
  }
  else if($r['priority']==3){
  header('location:../main/berita/webberitabaru/index.php');
  }
  else if($r['priority']==4){
  header('location:../sekret/fasilitator.php');
  }
   else if($r['priority']==5){
  header('location:../Keamanan/keamanan.php');
  }
   else if($r['priority']==0){
  header('location:../anton/coba.php');
  }
  else if($r['priority']==11){
  header('location:../sekret/tidakhadir.php');
  }
}
else{
  echo "<center>Login gagal! Username & password salah<br>";
  echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
?>