<?php

include_once('../services/session.php');

require '../services/functions.php';

$dataMember = tampilData("SELECT * FROM tb_peminjam");


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

    <title>Daftar Member</title>

  </head>

  <body style="overflow-x: hidden;">

  <div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

        <?php include 'dashboard-admin/sidebar.php'?>

    <div class="col-md-10 p-5 pt-3 ">

        <h3><i class="bi bi-person-fill me-2"></i>DAFTAR MEMBER</h3><hr>

    <div class="row mb-2">

        <div class="col-md-3">

             <a href="add-data-member.php" class="btn btn-info text-white fw-bold">TAMBAH DATA MEMBER</a>
        
        </div>

    </div>


        <table id="table2" class="table table-striped table-bordered nowrap"  style="width: 100%;">

            <thead>

                  <tr>
                      
                      <th>KODE MEMBER</th>
                      <th>NAMA MEMBER</th>
                      <th>TEMPAT LAHIR</th>
                      <th>TANGGAL LAHIR</th>
                      <th>JENIS KELAMIN</th>
                      <th>NOMER HP</th>     
                      <th>AKSI</th> 
                  </tr>
      
            </thead>

            <tbody>

                <?php foreach($dataMember as $datas):?>

                  <tr>

                   
                      <td><?=$datas['kode_peminjam'];?></td>
                      <td><?=$datas['nama_peminjam'];?></td>
                      <td><?=$datas['tempat_lahir'];?></td>
                      <td><?=$datas['tanggal_lahir'];?></td>
                      <td><?=$datas['jenis_kelamin'];?></td>
                      <td><?=$datas['nomer_hp'];?></td>
                      <td>

                        <a href="edit-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>"><i style="font-size: 20px;" class="bi bi-pencil-square"></i></a>
                        <a onclick="hapus()"><i style="font-size: 20px; color: red;" class="bi bi-trash"></i></a>
                        <a href="print-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>"><i style="font-size: 20px; color:green;" class="bi bi-printer"></i></a>
                      
                      </td>
                  
                  </tr>

                  

                  <?php endforeach;?>

    
          
            </tbody>
        
        
        </table>



      



     
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
           var table =  $('#table2').DataTable({

                responsive : true


           });

           new $.fn.dataTable.FixedHeader( table );

         
        });

        function hapus(){

            if(confirm("Apakah anda ingin menghapus data ini ?")){

                document.location.href = 'delete-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>';

                exit;

            }

        }
    
    </script>
      
  </body>

</html>