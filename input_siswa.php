<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Pelanggan Mozalucky Barbershop</title>
    
    
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" id="mainNav">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="user.php">MOZALUCKY BARBERSHOP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" aria-current="page" href="user.php">HOME</a>
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
    
        <h2 align="center"><font color="#FF0000" style="alignment-baseline:" ><i><u>Input Pelanggan </u></i></font></h2>
        <table border="0" align="center">
        
        <tr><td>Nama</td> <td><input type="text" name="Nama" size="30" /></td></tr>
        <tr><td>Jenis Kelamin</td> <td><input type="radio" name="JK" value="Laki-Laki" />
        Laki-laki<input type="radio" name="JK" value="Perempuan" /> 
        Perempuan</td></tr>
        <tr><td>Nomor HP </td> <td><input type="text" size="30" name="NO_HP" /></td></tr>
        <tr><td>Service & Pricing </td> <td><select name="Tagihan">
        <option value="Premium Cut 25K"> Premium Cut (Wash,Hair Tonic,Pomade & Styling) 25K</option>
                <option value="Gentleman Cut 20K"> Gentleman Cut (Hair Cut Only) 20K</option>
                <option value="Hair Design 10K"> Hair Design (Free Hair Tonic, Pomade & Styling) 10K</option>
                <option value="Shaving 10K" selected> Shaving (Hot Towel & After Shave Product) 10K</option>
                <option value="Coloring (By Confirm)" selected> Coloring & Highlight (By Confirm)</option>
                </select></td></tr>
        <br>
        <br>
                
            <ul><button type="submit" name="Simpan" class="btn btn-primary">Simpan</button></ul>
        </p>

        </table>
        
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
