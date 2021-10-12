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
$query = mysqli_query($db, $sql);
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

        <fieldset>

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
                <option <?php echo ($Tagihan == 'Biasa = 20.000') ? "selected": "" ?>>Biasa = 20.000</option>
                <option <?php echo ($Tagihan == 'Cukur + Keramas = 25.000') ? "selected": "" ?>>Cukur + Keramas = 25.000</option>
                <option <?php echo ($Tagihan == 'Jenggot = +3.000') ? "selected": "" ?>>Jenggot = +3.000</option>
            </select>
        </p>
        <p>
            
            <input type="submit" value="Simpan" name="Simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
