<?php 

include_once('../services/session.php');

require '../services/functions.php';

$fungsi = new member();

$kodePeminjam = $_GET['kodeMember'];

$dataMember = tampilData("SELECT * FROM tb_peminjam WHERE kode_peminjam = '$kodePeminjam'")[0];

if(isset($_POST['btnEdit'])){

    if($fungsi->ediData($_POST) > 0){

        echo "
        
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'daftar-member.php';
        </script>
        
        ";


    }else{

        echo "
        
        <script>
            alert('Data gagal diubah');
            document.location.href = 'edit-data-member.php';
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

    <title>Edit Data Member</title>
    
</head>

<body style="overflow-x: hidden;">

<div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

        <div class="col-md-10 p-5 pt-3">

            <h3><i class="bi bi-book-half me-2"></i>EDIT DATA MEMBER</h3><hr>

                <form action="" method="post" class="form">

                    <div class="mb-3 row">

                        <label for="kodeMember" class=" col-md-2 form-label fw-bold">Kode Member</label>

                            <div class="col-md-3">

                                <input readonly type="text" id="kodeMember" value="<?=$dataMember['kode_peminjam'];?>" name="kodeMember" autocomplete="off" class="form-control" required >

                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="namaMember" class=" col-md-2 form-label fw-bold">Nama Member</label>

                            <div class="col-md-3">

                                <input type="text" id="namaMember" value="<?=$dataMember['nama_peminjam'];?>" name="namaMember" autocomplete="off" class="form-control" required >


                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="tempatLahir" class=" col-md-2 form-label fw-bold">Tempat Lahir</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="tempatLahir" value="<?=$dataMember['tempat_lahir'];?>" name="tempatLahir" autocomplete="off" required>

                            </div>
                    
                    </div>
                    
                    <div class="mb-3 row">

                        <label for="tanggalLahir" class="col-md-2 form-label fw-bold">Tanggal Lahir</label>

                            <div class="col-md-3">

                                <input class="form-control" type="date" id="tanggalLahir" value="<?=$dataMember['tanggal_lahir'];?>" name="tanggalLahir" autocomplete="off"required>
                            
                            </div>
                    
                    </div>

                    <?php

                        $jk = $dataMember['jenis_kelamin'];

                        if($jk == "Laki - Laki"){

                            $ck1 = "checked";
                            $ck2 = "";

                           
                        }else if($jk == "Perempuan"){

                            $ck2 = "checked";
                            $ck1 = "";
                        }

                    ?>

                    <div class="mb-3 row">

                        <label for="jenisKelamin" class="col-md-2 form-label fw-bold">Jenis Kelamin</label>

                            <div class="col-md-3">

                            <div class="custom-control custom-radio">

                                <input <?=$ck1;?>  type="radio" class="custom-control-input" value="Laki - Laki" id="lakiLaki" name="jenisKelamin">
                                <label class="custom-control-label" for="lakiLaki">Laki - Laki</label>

                            </div> 
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                            <div class="col-md-2">
                            
                            </div>

                            <div class="col-md-3">

                                <div class="custom-control custom-radio">

                                    <input <?=$ck2;?>  type="radio" class="custom-control-input" value="Perempuan" id="lakiLaki" name="jenisKelamin">
                                    <label class="custom-control-label" for="lakiLaki">Perempuan</label>

                                </div> 
                            
                            </div>
                    
                    </div>

                    <div class="mb-3 row">

                        <label for="nomerHp" class="col-md-2 form-label fw-bold">Nomer HP</label>

                            <div class="col-md-3">

                                <input class="form-control" type="text" id="nomerHp" value="<?=$dataMember['nomer_hp'];?>" name="nomerHp" autocomplete="off"required>
                            
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