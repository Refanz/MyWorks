<?php

include_once('../services/session.php');

require '../services/functions.php';

$kodeBuku = $_GET['kodeBuku'];

$dataBuku = tampilData("SELECT * FROM tb_buku WHERE kode_buku = '$kodeBuku'")[0];

if(isset($_POST['btnEdit'])){

    if(editData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'daftar-buku.php';
        </script>
        
        ";


    }else{

        echo mysqli_error($koneksi);
        
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
    <title>Edit Data Buku</title>
</head>

<body style="overflow-x: hidden;">

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

        <div class="row no-gutters">

            <?php include 'dashboard-admin/sidebar.php'?>

                <div class="col-md-10 p-5 pt-3">

                <h3><i class="bi bi-book-half me-2"></i>EDIT DATA BUKU</h3><hr>

                    <form action="" method="post">

                    <div class="mb-3 row">

                        <label for="kodeBuku" class=" col-md-2 form-label fw-bold">Kode Buku Buku</label>

                            <div class="col-md-3">

                                <input class="form-control" id="kodeBuku" readonly type="text" name="kodeBuku" value="<?=$dataBuku['kode_buku'];?>">  

                            </div>

                    </div>

                    <div class="mb-3 row">

                        <label for="judulBuku" class=" col-md-2 form-label fw-bold">Judul Buku</label>

                            <div class="col-md-3">

                                <input type="hidden" name="kodeBuku" value="<?=$dataBuku['kode_buku'];?>">  

                                <input type="text" id="judulBuku" name="judulBuku" autocomplete="off" class="form-control" value="<?=$dataBuku['judul_buku'];?>" required >

                            </div>

                    </div>


                    <div class="mb-3 row">

                        <label for="namaPengarang" class=" col-md-2 form-label fw-bold">Nama Pengarang</label>

                            <div class="col-md-3">

                                <input type="text" id="namaPengarang" name="namaPengarang" autocomplete="off" class="form-control" value="<?=$dataBuku['nama_pengarang'];?>" required >

                            </div>

                    </div>

                    <div class="mb-3 row">

                        <label for="tahunTerbit" class="col-md-2 form-label fw-bold">Tahun Terbit</label>

                            <div class="col-md-3">

                                <input class="form-control" type="number" id="tahunTerbit" name="tahunTerbit" value="<?=$dataBuku['tahun_terbit'];?>" autocomplete="off" required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="penerbit" class="col-md-2 form-label fw-bold">Penerbit</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="penerbit" value="<?=$dataBuku['penerbit'];?>" name="penerbit" autocomplete="off"required>
                            
                            </div>
                    
                    </div>

                     <div class="mb-3 row">

                        <div class="col-md-2">

                            <button name="btnEdit" class="btn btn-primary">Edit</button>

                        </div>
                    
                    </div>

            </form>

        </div>

    </div>

  </div>









<script src="assets/bootstrap-5.0.0/js/bootstrap.min.js"></script>

</body>
</html>
