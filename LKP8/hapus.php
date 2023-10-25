<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_GET['id'])){

	// ambil data dari formulir
	$id = $_GET['id'];
	// buat query
  $query = pg_query("DELETE FROM calonsiswa WHERE id=$id");

	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: daftarsiswa.php');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		die("gagal menghapus...");
	}


} else {
	die("Akses dilarang...");
}
?>
