<?php

			//koneksi ke database
			include("connect.php");
			//mengambil data dari tabel barang
			$tampil = mysql_query("select * from barang");
			while ($data = mysql_fetch_array($tampil)){
 			echo $data;
			}
		?>
