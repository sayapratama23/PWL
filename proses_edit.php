<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Simpan'])){

    // ambil data dari formulir
    $Nama = $_POST['Nama'];
    $JK = $_POST['JK'];
    $NO_HP = $_POST['NO_HP'];
    $Tagihan = $_POST['Tagihan'];


    // buat query update
    $sql = "UPDATE pelanggan SET Nama='$Nama', JK='$JK', NO_HP='$NO_HP', Tagihan='$Tagihan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>