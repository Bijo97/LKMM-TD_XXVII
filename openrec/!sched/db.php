<?php
	function connect_db() {
		$hostname = 'localhost';
		$username = 'p3kmaba_2014';
		$password = 'ericganteng';

		$db = mysql_connect($hostname, $username, $password) or die("Ayib! Ga iso nyambung MySQL");
		@mysql_select_db("p3kmaba_OpenReg") or die("Ayib! Database masalah ini!");
	}
	function close_db() {
		mysql_close();
	}
?>