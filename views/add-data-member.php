<?php 

require '../services/functions.php';

$kdData = kodeOtomatis("SELECT max(kode_peminjam) as kodeTerbesar FROM tb_peminjam","M");

$fungsi = new member();

if(isset($_POST['btnTambah'])){


    if($fungsi->tambahData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'daftar-member.php';
        </script>
        
        ";

        

    }else{

        echo "
        
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'add-data-member.php';
            
        </script>
        
        ";

       
    }

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/dashboard/admin.css">

    <title>Tambah Data Member</title>
    
</head>

<body style="overflow-x: hidden;">

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

        <div class="col-md-10 p-5 pt-3">

            <h3><i class="bi bi-book-half me-2"></i>TAMBAH DATA MEMBER</h3><hr>

                <form action="" method="post" class="form">

                    <div class="mb-3 row">

                        <label for="kodeMember" class=" col-md-2 form-label fw-bold">Kode Member</label>

                            <div class="col-md-3">

                                <input readonly type="text" id="kodeMember" value="<?=$kdData;?>" name="kodeMember" autocomplete="off" class="form-control" required >

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="namaMember" class=" col-md-2 form-label fw-bold">Nama Member</label>

                            <div class="col-md-3">

                                <input type="text" id="namaMember" name="namaMember" autocomplete="off" class="form-control" required >


                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tempatLahir" class=" col-md-2 form-label fw-bold">Tempat Lahir</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="tempatLahir" name="tempatLahir" autocomplete="off" required>

                            </div>
                    
                    </div>
                    
                    <div class="mb-3 row">

                        <label for="tanggalLahir" class="col-md-2 form-label fw-bold">Tanggal Lahir</label>

                            <div class="col-md-3">

                                <input class="form-control" type="date" id="tanggalLahir" name="tanggalLahir" autocomplete="off"required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="jenisKelamin" class="col-md-2 form-label fw-bold">Jenis Kelamin</label>

                            <div class="col-md-3">

                            <div class="custom-control custom-radio">

                                <input type="radio" class="custom-control-input" value="Laki - Laki" id="lakiLaki" name="jenisKelamin">
                                <label class="custom-control-label" for="lakiLaki">Laki - Laki</label>

                            </div> 
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                            <div class="col-md-2">
                            
                            </div>

                            <div class="col-md-3">

                                <div class="custom-control custom-radio">

                                    <input type="radio" class="custom-control-input" value="Perempuan" id="lakiLaki" name="jenisKelamin">
                                    <label class="custom-control-label" for="lakiLaki">Perempuan</label>

                                </div> 
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="nomerHp" class="col-md-2 form-label fw-bold">Nomer HP</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="nomerHp" name="nomerHp" autocomplete="off"required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <div class="col-md-2">

                            <button name="btnTambah" class="btn btn-primary">Tambah</button>

                        </div>
                    
                    </div>

            </form>

        </div>

    </div>


  </div>



<script src="assets/bootstrap-5.0.0/js/bootstrap.min.js"></script>

</body>
</html>