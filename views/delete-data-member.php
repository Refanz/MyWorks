<?php

require '../services/functions.php';

session_start();

if(!isset($_SESSION["login"])){
  header("Location: ../form-login.php");
  exit;

}

$kodeMember = $_GET['kodeMember'];

$query = "DELETE FROM tb_peminjam WHERE kode_peminjam ='$kodeMember'";

$deleteData = mysqli_query($koneksi,$query);

if($deleteData){

    echo "

        <script>
            alert('Data berhasil dihapus');
            document.location.href='daftar-member.php';
        </script>
    
    
    ";

}

?>