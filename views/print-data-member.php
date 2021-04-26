<?php

require '../services/functions.php';

$kodeMember = $_GET['kodeMember'];

$dataMember = tampilData("SELECT * FROM tb_peminjam WHERE kode_peminjam = '$kodeMember'")[0];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/dashboard/admin.css">
    <link rel="stylesheet" href="../assets/data-table/datatables.min.css">

    <title>Cetak Data Member</title>
</head>
<body>




    <div class="container mt-5">

        <div class="row">

        <div class="col-md-12">

        <div class="card">
                <h5 class="card-header text-center">KARTU MEMBER</h5>
                <div class="card-body">
                    <div class="row">
                        <p class="fw-bold">Nama Member : <?=$dataMember['nama_peminjam'];?></p>
                        <p class="fw-bold">Jenis Kelamin : <?=$dataMember['jenis_kelamin'];?></p>
                        <p class="fw-bold">Tanggal Lahir :  <?=$dataMember['tanggal_lahir'];?></p>
                        <p class="fw-bold">Tempat Lahir : <?=$dataMember['tempat_lahir'];?></p>
                        <p class="fw-bold">Nomer HP : <?=$dataMember['nomer_hp'];?></p>

                    </div>
                </div>
            </div>

        </div>
        
        </div>
    
    </div>












    <script src="../assets/data-table/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="../assets/data-table/datatables.min.js"></script>
    <script src="../assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dashboard/admin.js"></script>

<script>

    window.print();

</script>
    
</body>
</html>