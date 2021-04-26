<?php

    session_start();

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }



    require 'services/functions.php';

    if(isset($_POST['login'])){

        login();

    }


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/dashboard/admin.css">
    <link rel="stylesheet" href="assets/data-table/datatables.min.css">

    <title>Menu Login</title>
</head>
<body>

<div class="container">



<div class="position-absolute top-50 start-50 translate-middle">

    <div class="row">
    
        <div class="col-md-12 col-sm-12">

            <div class="card">
            <div class="card-header">
                <h3 class="fw-bold text-center">FORM LOGIN</h3>
                <?php if(isset($error)):?>

                    <p class="text-danger fst-italic text-center">Username / Password salah</p>

                <?php endif;?>
            </div>
            <div class="card-body">

                <form action="" method="post">
                    <div class="row mb-2">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control"  id="username" name="username">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control"  id="pwd" name="password">
                            </div> 
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <a style="text-decoration: none;" href="form-registrasi.php">Belum punya akun ? Registrasi dulu</a>
                            </div> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>  
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </form>
                
            </div>
            </div>
        
        </div>
    </div>

</div>

</div>


















<script src="assets/data-table/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script src="assets/data-table/datatables.min.js"></script>
<script src="assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/dashboard/admin.js"></script>
    
</body>
</html>