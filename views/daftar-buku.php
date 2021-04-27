
<?php

require '../services/functions.php';

$dataBuku = tampilData("SELECT * FROM tb_buku");

$no = 1;


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
    

    

    

    <title>Index</title>

  </head>

  <body style="overflow-x: hidden;">

  <div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

    <?php include 'dashboard-admin/sidebar.php'?>

    <div class="col-md-10 p-5 pt-3">

    <h3><i class="bi bi-book-half me-2"></i>DAFTAR BUKU</h3><hr>

    <div class="row mb-2">

      <div class="col-md-3">

      <a href="add-data-buku.php" class="btn btn-info text-white fw-bold">TAMBAH DATA BUKU</a>

      </div>
    
    </div>
    
    <div class="row">

      <table id="table1"  class="table table-striped table-bordered nowrap" style="width: 100%;">

      <thead>
          <tr>
              <th>NO</th>
              <th>KODE BUKU</th>
              <th>JUDUL BUKU</th>
              <th>NAMA PENGARANG</th>
              <th>TAHUN TERBIT</th>
              <th>PENERBIT</th>
              <th>AKSI</th>
          </tr>
      </thead>

      <tbody>

      <?php foreach($dataBuku as $datas):?>

          <tr>

              <td><?=$no++;?></td>
              <td><?=$datas['kode_buku'];?></td>
              <td><?=$datas['judul_buku'];?></td>
              <td><?=$datas['nama_pengarang'];?></td>
              <td><?=$datas['tahun_terbit'];?></td>
              <td><?=$datas['penerbit'];?></td>
              <td>
                  <a href="edit-data-buku.php?kodeBuku=<?=$datas['kode_buku'];?>"><i style="font-size: 20px;" class="bi bi-pencil-square"></i></a>
                  <a name="hapusData" onclick="hapus()"><i style="font-size: 20px; color: red;" class="bi bi-trash"></i></a>
              </td>

          </tr>

          <?php endforeach;?>

          <?php $no;?>
      
      </tbody>


  </table>
    
    </div>

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
            var table = $('#table1').DataTable({

              responsive : true

            });

            new $.fn.dataTable.FixedHeader( table );
        });

        function hapus(){

            if(confirm("Apakah anda ingin menghapus data ini ?")){

              document.location.href = 'delete-data-buku.php?kodeBuku=<?=$datas['kode_buku'];?>';

              exit;

            }

        }
    
    </script>
  

  </body>

</html>