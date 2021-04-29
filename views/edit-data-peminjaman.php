<?php 

include_once('../services/session.php');

require '../services/functions.php';

$fungsi = new peminjaman();

$kodePinjam = $_GET['kodePinjam'];

$dataPeminjaman3 = tampilData("SELECT * FROM tb_data_peminjaman WHERE kode_pinjam ='$kodePinjam'")[0];


if(isset($_POST['btnUbah'])){


    if($fungsi->editData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'daftar-peminjaman.php';
        </script>
        
        ";

        

    }else{

        echo "
        
        <script>
            alert('Data gagal diubah');
            document.location.href = 'edit-data-peminjaman.php';
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

    <title>Ubah Data Peminjaman</title>
    
</head>

<body style="overflow-x: hidden;">

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

        <div class="col-md-10 p-5 pt-3">

            <h3><i class="bi bi-book-half me-2"></i>UBAH DATA PEMINJAMAN</h3><hr>

                <form action="" method="post" class="form">

                    <div class="mb-3 row">

                        <label for="kodePinjam" class=" col-md-2 form-label fw-bold">Kode Pinjam</label>

                            <div class="col-md-3">

                                <input readonly type="text" id="kodePinjam" name="kodePinjam" autocomplete="off" class="form-control" value="<?=$dataPeminjaman3['kode_pinjam'];?>" required >

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="namaPeminjam" class=" col-md-2 form-label fw-bold">Nama Peminjam</label>

                            <div class="col-md-3">


                                <input readonly value="<?=$dataPeminjaman3['nama_peminjam'];?>" class="form-control" type="text" id="namaPeminjam" name="namaPeminjam" autocomplete="off" required>


                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="judulBuku" class=" col-md-2 form-label fw-bold">Judul Buku</label>

                            <div class="col-md-3">

                            <input readonly value="<?=$dataPeminjaman3['judul_buku'];?>" class="form-control" type="text" id="judulBuku" name="judulBuku" autocomplete="off" required>

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tanggalPinjam" class="col-md-2 form-label fw-bold">Tanggal Pinjam</label>

                            <div class="col-md-3">

                                <input readonly value="<?=$dataPeminjaman3['tanggal_pinjam'];?>" class="form-control" type="date" id="tanggalPinjam" name="tanggalPinjam" autocomplete="off" required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tanggalKembali" class="col-md-2 form-label fw-bold">Tanggal Kembali</label>

                            <div class="col-md-3">

                                <input  value="<?=$dataPeminjaman3['tanggal_kembali'];?>" class="form-control" type="date" id="tanggalKembali" name="tanggalKembali" autocomplete="off"required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <div class="col-md-2">

                            <button name="btnUbah" class="btn btn-primary">Ubah</button>

                        </div>
                    
                    </div>


                    


            </form>

        </div>

    </div>


  </div>



<script src="assets/bootstrap-5.0.0/js/bootstrap.min.js"></script>

</body>
</html>