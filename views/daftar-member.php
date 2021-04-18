<?php

    require '../services/functions.php';

    $dataMember = tampilData("SELECT * FROM tb_peminjam");

    $no = 1;

?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/dashboard/admin.css">
    <link rel="stylesheet" href="../assets/data-table/datatables.min.css">

    <title>Index</title>

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

            <button class="btn btn-info text-white">TAMBAH DATA MEMBER</button>
        
        </div>

    </div>


        <table id="table2" class="table table-striped" border="1" cellpadding = "10" cellspacing = "10">

            <thead>

                  <tr>
                      <th>NO</th>
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

                      <td><?=$no++;?></td>
                      <td><?=$datas['kode_peminjam'];?></td>
                      <td><?=$datas['nama_peminjam'];?></td>
                      <td><?=$datas['tempat_lahir'];?></td>
                      <td><?=$datas['tanggal_lahir'];?></td>
                      <td><?=$datas['jenis_kelamin'];?></td>
                      <td><?=$datas['nomer_hp'];?></td>
                      <td>

                        <a href="views/edit-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>"><i style="font-size: 20px;" class="bi bi-pencil-square"></i></a>
                        <a href="views/delete-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>"><i style="font-size: 20px; color: red;" class="bi bi-trash"></i></a>
                        <a href="views/edit-data-member.php?kodeMember=<?=$datas['kode_peminjam'];?>"><i style="font-size: 20px; color:green;" class="bi bi-printer"></i></a>
                      
                      </td>
                  
                  </tr>

                  

                  <?php endforeach;?>

                  <?php $no;?>
          
            </tbody>
        
        
        </table>



      



     
</div>


</div>





    <script src="../assets/data-table/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="../assets/data-table/datatables.min.js"></script>
    <script src="../assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dashboard/admin.js"></script>

    <script>

        $(document).ready(function(){
            $('#table2').DataTable();
        });
    
    </script>
      
  </body>

</html>