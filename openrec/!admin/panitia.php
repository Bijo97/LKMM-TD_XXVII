<?php
	echo "<form method='post' action='jadwal.php'>";
	echo "Nama Panitia:<input type='text' id='nama' name='nama' required><br>";
	echo "Nama samaran:<input type='text' id='namaran' name='namasamaran' required><br>";
	echo "NRP Panitia:<input type='text' id='nrp' name='nrp' max=8 required><br>";
	echo "Jabatan:";
	echo "<select id='jabatan' name='jabatan'>
		  <option value='Koordinator'>Koordinator</option>
		  <option value='Wakoor'>Wakoor</option>
		  <option value='Sub-Koor'>Sub-Koor</option>
		  <option value='Panitia'>Panitia</option>
		</select>";
	
	echo "<br>Divisi:";
	echo "<select id='divisi' name='divisi'>
		 <option value='Divisi Informasi (IT)'>Divisi Informasi (IT)</option>
		<option value='Divisi Evaluasi'>Divisi Evaluasi</option>
		<option value='Divisi Konsumsi'>Divisi Konsumsi</option>
		<option value='Divisi Kesehatan'>Divisi Kesehatan</option>
		<option value='Divisi Acara'>Divisi Acara</option>
		<option value='Divisi Sekretariat'>Divisi Sekretariat</option>
		<option value='Divisi Peran'>Divisi Peran</option>
		<option value='Divisi Perlengkapan'>Divisi Perlengkapan</option>
		<option value='Divisi Pubdekdok'>Divisi Pubdekdok</option>
		</select>";
	echo "<input type='submit' value='Next!' name='myButton'>";



?>