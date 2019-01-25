<?php
	function connect_db() {
		$hostname = 'lkmm-td.petra.ac.id';
		$username = 'lkmmtd';
		$password = 'kapokmukapan';

		$db = mysql_connect($hostname, $username, $password) or die("Ayib! Ga iso nyambung MySQL");
		@mysql_select_db("lkmmtd_database") or die("Ayib! Database masalah ini!");
	}
	function close_db() {
		mysql_close();
	}
?>