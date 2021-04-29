<?php 

include_once('../services/session.php');

require '../services/functions.php';

$kdData = kodeOtomatis("SELECT max(kode_pinjam) as kodeTerbesar FROM tb_data_peminjaman","P");

$dataPeminjaman1 = tampilData("SELECT * FROM tb_peminjam");

$dataPeminjaman2 = tampilData("SELECT * FROM tb_buku");

$tglSekarang = date('Y-m-d');

$date = strtotime("+7 day");

$tglKembali = date('Y-m-d',$date);

$fungsi = new peminjaman();

if(isset($_POST['btnTambah'])){


    if($fungsi->tambahData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'daftar-peminjaman.php';
        </script>
        
        ";

        

    }else{

        echo "
        
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'add-data-peminjaman.php';
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

    <title>Tambah Data Peminjaman</title>
    
</head>

<body style="overflow-x: hidden;">

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

        <div class="col-md-10 p-5 pt-3">

            <h3><i class="bi bi-book-half me-2"></i>TAMBAH DATA PEMINJAMAN</h3><hr>

                <form action="" method="post" class="form">

                    <div class="mb-3 row">

                        <label for="kodePinjam" class=" col-md-5 form-label fw-bold text-danger">* Tanggal Kembali +7 dari Tanggal Pinjam (Dapat Diubah di Menu Edit)</label>


                    </div>

                    <div class="mb-3 row">

                        <label for="kodePinjam" class=" col-md-2 form-label fw-bold">Kode Pinjam</label>

                            <div class="col-md-3">

                                <input readonly type="text" id="kodePinjam" name="kodePinjam" autocomplete="off" class="form-control" value="<?=$kdData;?>" required >

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="namaPeminjam" class=" col-md-2 form-label fw-bold">Nama Peminjam</label>

                            <div class="col-md-3">

                            <select style="width: 100%;" class="custom-select" name="namaPeminjam" id="">

                                    <option value=""></option>

                                <?php foreach($dataPeminjaman1 as $datas):?>

                                    <option value="<?=$datas["nama_peminjam"];?>"><?=$datas["nama_peminjam"];?></option>

                                <?php endforeach;?>

                            </select>


                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="judulBuku" class=" col-md-2 form-label fw-bold">Judul Buku</label>

                            <div class="col-md-3">

                                <select style="width: 100%;" class="custom-select" name="judulBuku" id="">

                                        <option value=""></option>

                                    <?php foreach($dataPeminjaman2 as $datas):?>

                                        <option value="<?=$datas["judul_buku"];?>"><?=$datas["judul_buku"];?></option>

                                    <?php endforeach;?>

                                </select>

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tanggalPinjam" class="col-md-2 form-label fw-bold">Tanggal Pinjam</label>

                            <div class="col-md-3">

                                <input readonly value="<?=$tglSekarang;?>" class="form-control" type="date" id="tanggalPinjam" name="tanggalPinjam" autocomplete="off" required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tanggalKembali" class="col-md-2 form-label fw-bold">Tanggal Kembali</label>

                            <div class="col-md-3">

                                <input readonly value="<?=$tglKembali;?>" class="form-control" type="date" id="tanggalKembali" name="tanggalKembali" autocomplete="off"required>
                            
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