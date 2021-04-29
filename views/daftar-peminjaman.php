<?php

include_once('../services/session.php');

require '../services/functions.php';




$dataPeminjaman = tampilData("SELECT * FROM tb_data_peminjaman");



 


?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/data-table/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/FixedHeader-3.1.8/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Responsive-2.2.7/css/responsive.bootstrap4.min.css">


    <link rel="stylesheet" href="../assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/dashboard/admin.css">

    <title>Daftar Peminjaman</title>

  </head>

  <body style="overflow-x: hidden;">

  <div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

    <?php include 'dashboard-admin/sidebar.php'?>

    <div class="col-md-10 p-5 pt-3">

      <h3><i class="bi bi-list-task me-2"></i>DAFTAR PEMINJAMAN</h3><hr>

      <div class="row mb-2">

          <div class="col-md-4">

              <a href="add-data-peminjaman.php" class="btn btn-info text-white fw-bold">TAMBAH DATA PEMINJAMAN</a>
          
          </div>

      </div>

      <table id="table" class="table table-striped table-bordered nowrap"  style="width: 100%;">

            <thead>

                  <tr>
                      <th>KODE PINJAM</th>
                      <th>NAMA PEMINJAM</th>
                      <th>JUDUL BUKU</th>
                      <th>TANGGAL PINJAM</th>
                      <th>TANGGAL KEMBALI</th>
                      <th>STATUS</th>     
                      <th>AKSI</th> 
                  </tr>
      
            </thead>

            <tbody>

                <?php foreach($dataPeminjaman as $datas):?>

                <?php

                  $tglSekarang = date('Y-m-d');

                  $tglKembali = $datas['tanggal_kembali'];
                  
                  if($tglSekarang < $tglKembali){
                  
                      $status = "Sedang Di Pinjam";
                  
                  }else if($tglSekarang == $tglKembali){
                  
                      $status = "Waktu Pengembalian";
                  
                  }else if($tglSekarang > $tglKembali){
                  
                      $status = "Selesai";
                  }

                ?>

                  <tr>

                   
                      <td><?=$datas['kode_pinjam'];?></td>
                      <td><?=$datas['nama_peminjam'];?></td>
                      <td><?=$datas['judul_buku'];?></td>
                      <td><?=$datas['tanggal_pinjam'];?></td>
                      <td><?=$datas['tanggal_kembali'];?></td>
                      <td><?=$status;?></td>
                      <td>

                        <a href="edit-data-peminjaman.php?kodePinjam=<?=$datas['kode_pinjam'];?>"><i style="font-size: 20px;" class="bi bi-pencil-square"></i></a>
                        <a style="cursor: pointer;" onclick="hapus()"><i style="font-size: 20px; color: red;" class="bi bi-trash"></i></a>
                      
                      </td>
                  
                  </tr>

                  

                  <?php endforeach;?>

                 
            </tbody>
        
        
        </table>

    </div>


    
</div>
</div>





    <script src="../assets/data-table/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="../assets/data-table/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="../assets/data-table/DataTables-1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/FixedHeader-3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/Responsive-2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="../assets/Responsive-2.2.7/js/responsive.bootstrap4.min.js"></script>
    
   

    <script src="../assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dashboard/admin.js"></script>

    <script>

        $(document).ready(function(){
           var table =  $('#table').DataTable({

                responsive : true


           });

           new $.fn.dataTable.FixedHeader( table );

         
        });


        function hapus(){

          if(confirm("Apakah anda ingin menghapus data ini ?")){

              document.location.href = 'delete-data-peminjaman.php?kodePinjam=<?=$datas['kode_pinjam'];?>';

              exit;

          }

          }

       
    
    </script>
      
  </body>

</html>