<?php
include("config.php");

if(isset($_POST['edit'])){
	$id = $_POST['id']; //variable id bakal nambung value dari form id
	$nama = $_POST['nama']; //$ itu buat declare variable
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$sekolah_asal = $_POST['sekolah_asal'];
	
	$query = pg_query("UPDATE calonsiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', sekolah_asal='$sekolah_asal' WHERE id=$id");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman daftarsiswa.php dengan status=sukses
		header('Location: daftarsiswa.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman index.ph dengan status=gagal
		die("gagal mengedit...");
	}

} else {
	die("Akses dilarang...");
}
?>
