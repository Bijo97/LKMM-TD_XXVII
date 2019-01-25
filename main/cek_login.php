<?php
include "koneksi.php";

$login  = mysql_query("SELECT * FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['namauser']=$r['id_user'];
  $_SESSION['passuser']=$r['password'];
  if($r['priority']==1){
  header('location:it.php');
  }
  else if($r['priority']==2){
  header('location:fasilitator.php');
  }
  else if($r['priority']==3){
  header('location:acara.php');
  }
  else if($r['priority']==4){
  header('location:../sekret/list_contact.php');
  }
}
else{
  echo "<center>Login gagal! Username & password salah<br>";
  echo "<a href=login.php><b>ULANGI LAGI</b></a></center>";
}
?>