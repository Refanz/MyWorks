<?php

require '../services/functions.php';

$kodeBuku = $_GET['kodeBuku'];

$dataBuku = tampilData("SELECT * FROM tb_buku WHERE kode_buku = '$kodeBuku'")[0];

if(isset($_POST['btnEdit'])){

    if(editData($_POST) > 0){

        echo 'Berhasil';


    }else{

        echo mysqli_error($koneksi);
        
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
</head>
<body>

<form action="" method="post">



<label for="judulBuku">Judul Buku</label>

    <input type="hidden" name="kodeBuku" value="<?=$dataBuku['kode_buku'];?>">

    <input type="text" id="judulBuku" name="judulBuku" value="<?=$dataBuku['judul_buku'];?>" autocomplete="off" >

    <br>
    <br>

    <label for="namaPengarang">Nama Pengarang</label>
    <input type="text" id="namaPengarang" name="namaPengarang" value="<?=$dataBuku['nama_pengarang'];?>" autocomplete="off" >

    <br>
    <br>

    <label for="tahunTerbit">Tahun Terbit</label>
    <input type="text" id="tahunTerbit" name="tahunTerbit" value="<?=$dataBuku['tahun_terbit'];?>" autocomplete="off">

    <br>
    <br>

    <label for="penerbit">Penerbit</label>
    <input type="text" id="penerbit" name="penerbit" value="<?=$dataBuku['penerbit'];?>" autocomplete="off">

    <br>
    <br>

    <button name="btnEdit">Edit</button>


</form>








</form>

</body>
</html>
