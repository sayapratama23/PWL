<?php 
session_start();

    include("koneksi.php");
    include("fungsion.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                               
    <title>Halaman User</title>
        
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" id="mainNav">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="tentang.php">MOZALUCKY BARBERSHOP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
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
            </li>
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" href="harga.php">SERVICES & PRICES</a>
            <li>  
            </li>
            <li class="nav-item">
            <a class="nav-link js-scrool-trigger" href="list.php">LIST PELANGGAN</a>
            <li>              
        </ul>
        <br>
            <a href="logout.php">Logout</a>

            
        </div>
    </div>
            
    </nav>
    
    <div class=container>
    <div class="p-5 mb-4 bg-light rounded-3">
    
      <div class="container-fluid py-5">
      Hello, <?php echo $user_data['username']; ?>
        <h1 class="display-5 fw-bold">Selamat Datang di Website Kami</h1>
        <p class="col-md-8 fs-4">EXPLORE YOURSELF WITH <br>MOZALUCKY BARBERSHOP</p>
        <p class="col-md-8 fs-4">Rambut menjadi daya tarik identitas seseorang, konsultasikan style rambutmu, yuk langsung ke @mozalucky_barbershop. kami berikan saran style rambut terbaik untuk kamu yang pastinya kekinian, dengan kualitas hasil dan pelayanan terbaik.</p>
        <p class="col-md-8 fs-4">Mozalucky Barbershop</p>
        <p class="col-md-8 fs-4">Jln Pisang Candi no 73</p>
        
      </div>
    </div>
    
     
    </body>
</html>