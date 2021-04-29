<?php

require '../services/functions.php';

session_start();

if(!isset($_SESSION["login"])){
  header("Location: ../form-login.php");
  exit;

}

$kodeBuku = $_GET['kodeBuku'];

$query = "DELETE FROM tb_buku WHERE kode_buku ='$kodeBuku'";

$deleteData = mysqli_query($koneksi,$query);

if($deleteData){

    echo "

        <script>
            alert('Data berhasil dihapus');
            document.location.href='daftar-buku.php';
        </script>
    
    
    ";

}

?>