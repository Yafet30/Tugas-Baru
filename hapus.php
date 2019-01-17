<?php
	//koneksi ke database
			include("connect.php");
	if ($_GET) {
		$id = $_GET['id'];
	}
	//menghapus data dari database
		$hapus = mysql_query("delete from tabel_db where id='$id'");
	header("location:Tabel.php");
	
?>