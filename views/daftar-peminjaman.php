<?php

include_once('../services/session.php');

require '../services/functions.php';

 


?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
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

    <h3><i class="bi bi-list-task me-2"></i>DAFTAR PEMINJAMAN</h3><hr>

    </div>


    
</div>
</div>





    <script src="../assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dashboard/admin.js"></script>
      
  </body>

</html>