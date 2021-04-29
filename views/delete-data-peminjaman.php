<?php

include_once('../services/session.php');

require '../services/functions.php';

$kodePinjam = $_GET['kodePinjam'];

$query = "DELETE FROM tb_data_peminjaman WHERE kode_pinjam ='$kodePinjam'";

$deleteData = mysqli_query($koneksi,$query);

if($deleteData){

    echo "

        <script>
            alert('Data berhasil dihapus');
            document.location.href='daftar-peminjaman.php';
        </script>
    
    
    ";

}

?>