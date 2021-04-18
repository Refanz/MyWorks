<?php 

require '../services/functions.php';

if(isset($_POST['btnTambah'])){


    if(tambahData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'daftar-buku.php';
        </script>
        
        ";

        

    }else{

        echo "
        
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'add-data-buku.php';
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

    <title>Tambah Data Buku</title>
    
</head>

<body>

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

        <div class="col-md-10 p-5 pt-3">

            <h3><i class="bi bi-book-half me-2"></i>TAMBAH DATA BUKU</h3><hr>

                <form action="" method="post" class="form">

                    <div class="mb-3 row">

                        <label for="kodeBuku" class=" col-md-2 form-label fw-bold">Kode Buku</label>

                            <div class="col-md-3">

                                <input type="text" id="kodeBuku" name="kodeBuku" autocomplete="off" class="form-control" required >

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="judulBuku" class=" col-md-2 form-label fw-bold">Judul Buku</label>

                            <div class="col-md-3">

                                <input type="text" id="judulBuku" name="judulBuku" autocomplete="off" class="form-control" required >


                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="namaPengarang" class=" col-md-2 form-label fw-bold">Nama Pengarang</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="namaPengarang" name="namaPengarang" autocomplete="off" required>

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tahunTerbit" class="col-md-2 form-label fw-bold">Tahun Terbit</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="tahunTerbit" name="tahunTerbit" autocomplete="off" required>
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="penerbit" class="col-md-2 form-label fw-bold">Penerbit</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="penerbit" name="penerbit" autocomplete="off"required>
                            
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