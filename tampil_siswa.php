<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan Barbershop</title>

    <style>
        body{
            background-color: aquamarine;
        }
        button,input[type=Tambah_Baru]
        {
            font-family: sans-serif;
            font-size: 15px;
            background: #22a4cf;
            color: Black;
            
            padding: 12px 20px;
            margin-top: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <h3>Daftar Pelanggan</h3>
    </header>
    <form action="input_siswa.php" method="POST">

    <button>  
        <input type="submit" value="Tambah Baru" name="Tambah Baru">
    </button>

    <table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NO HP</th>
            <th>Tagihan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pelanggan";
        $query = mysqli_query($db, $sql);

        while($pelanggan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pelanggan['Id']."</td>";
            echo "<td>".$pelanggan['Nama']."</td>";
            echo "<td>".$pelanggan['JK']."</td>";
            echo "<td>".$pelanggan['NO_HP']."</td>";
            echo "<td>".$pelanggan['Tagihan']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$pelanggan['Id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pelanggan['Id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>