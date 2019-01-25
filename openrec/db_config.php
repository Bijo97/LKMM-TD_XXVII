<?php
$server   = "lkmm-td.petra.ac.id";
$database = "lkmmtd_database";
$username = "lkmmtd";
$password = "kapokmukapan";

$mysqlConnection = mysql_connect($server, $username, $password);
if (!$mysqlConnection)
{
  echo "Please try later.";
}
else
{
mysql_select_db($database, $mysqlConnection);
}
?>