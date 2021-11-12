<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Pelanggan Barbershop</title>

</head>

<body>
<div class="p-3 mb-2 bg-warning text-dark bg-opacity-75">
    <br>
    <br>
    <header>
        <center>
        <h3><u>DAFTAR PELANGGAN</u></h3>
        </center>
        
        <br>
        <br>
    </header>
    <form action="input_siswa.php" method="POST">

      
    <button type="submit"class="btn btn-primary">Tambah Baru</button>
    
    <body> 
    <br>
    <br>
    <table class="table table-dark table-sm">
    <thead>
        <tr class="table-active">
            
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NO HP</th>
            <th>Service&Price</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pelanggan";
        $query = mysqli_query($con, $sql);

        while($pelanggan = mysqli_fetch_array($query)){
            echo "<tr>";

            
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>    
    </body>
</html>