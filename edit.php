<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tampil_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pelanggan WHERE id=$id";
$query = mysqli_query($con, $sql);
$pelanggan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Pelanggan</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Pelanggan</h3>
    </header>

    <form action=" simpan_siswa.php" method="POST">

        <table>

            <input type="hidden" name="Id" value="<?php echo $pelanggan['Id'] ?>" />

        <p>
            <label for="Nama">Nama: </label>
            <input type="text" name="Nama" placeholder="Masukkan Nama" value="<?php echo $pelanggan['Nama'] ?>" />
        </p>
        <p>
            <label for="NO_HP">No Handphone: </label>
            <textarea name="NO_HP"><?php echo $pelanggan['NO_HP'] ?></textarea>
        </p>
        <p>
            <label for="JK">Jenis Kelamin: </label>
            <?php $jk = $pelanggan['JK']; ?>
            <label><input type="radio" name="JK" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="JK" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="Tagihan">Tagihan: </label>
            <?php $Tagihan = $pelanggan['Tagihan']; ?>
            <select name="Tagihan">
                <option <?php echo ($Tagihan == 'Premium Cut 25K') ? "selected": "" ?>>Premium Cut (Wash,Hair Tonic,Pomade & Styling) 25K</option>
                <option <?php echo ($Tagihan == 'Gentleman Cut 20K') ? "selected": "" ?>>Gentleman Cut (Hair Cut Only) 20K</option>
                <option <?php echo ($Tagihan == 'Hair Design 10K') ? "selected": "" ?>>Hair Design (Free Hair Tonic, Pomade & Styling) 10K</option>
                <option <?php echo ($Tagihan == 'Shaving 10K') ? "selected": "" ?>>Shaving (Hot Towel & After Shave Product) 10K</option>
                <option <?php echo ($Tagihan == 'Coloring (By Confirm)') ? "selected": "" ?>>Coloring & Highlight (By Confirm)</option>
            </select>
        </p>
        <p>
            
            <input type="submit" value="Simpan" name="Simpan" />
        </p>

</table>


    </form>

    </body>
</html>
