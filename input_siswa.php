<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Pelanggan Mozalucky Barbershop</title>
    
    
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" id="mainNav">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MOZALUCKY BARBERSHOP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger"href="input_siswa.php">INPUT PELANGGAN</a>
            <li>
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" href="edit.php">EDIT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" href="tentang.php">TENTANG KAMI</a>
            <li>
             
            </ul>
            </li>
            
            </li>
        </ul>
        
        </form>
        </div>
    </div>
    </nav>


    <form action="simpan_siswa.php" method="POST">
    
        <fieldset>
            <br>
            <br>
            <br>
            <br>
        <p>
           <ul> <label for="Nama"> <ul> Nama: </ul></label>
            <input type="text" name="Nama" placeholder="Masukkan Nama" /></ul>
        </p>
        <p>
            <ul><label for="NO_HP"> <ul> No Handphone: </ul></label>
            <input type="text" name="NO_HP" placeholder="Nomor Handphone"/></ul>
        </p>
        <p>
            <ul><label for="JK"><ul> Jenis Kelamin: </ul></label>
            <label><input type="radio" name="JK" value="Laki-Laki">Laki-Laki</label>
            <label><input type="radio" name="JK" value="Perempuan">Perempuan</label></ul>
        </p>
        <p>
            <ul><label for="Tagihan"><ul> Harga: </ul></label>
            <select name="Tagihan">

                <option>Biasa = 20.000</option>
                <option>Cukur + Keramas = 25.000</option>
                <option>Jenggot = +3.000</option>
                
            </select></ul>
        </p>
        <p>
            <br>
            
            <ul><input type="submit" value="Simpan" name="Simpan" /></ul>
        </p>

        </fieldset>
        
    </form>
    
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input Data Pelanggan Berhasil";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>
