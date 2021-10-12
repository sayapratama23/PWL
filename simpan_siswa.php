<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Simpan'])){

    // ambil data dari formulir
    $Nama = $_POST['Nama'];
    $JK = $_POST['JK'];
    $NO_HP = $_POST['NO_HP'];
    $Tagihan = $_POST['Tagihan'];

    // buat query
    $sql = "INSERT INTO pelanggan (Nama, JK, NO_HP, Tagihan) VALUE ('$Nama', '$JK', '$NO_HP', '$Tagihan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: input_siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>