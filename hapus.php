<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pelanggan WHERE id=$id";
    $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: tampil_siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>