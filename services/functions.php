<?php

    $koneksi = mysqli_connect("localhost","root","","db_perpustakaan");

    function lihatData($query){

        global $koneksi;
    
        $dataBuku = mysqli_query($koneksi,$query);
    
        return $dataBuku;
    
      }
    


    function tampilData($query){

        global $koneksi;

        $rakBuku = mysqli_query($koneksi,$query);

        $kotakBuku = [];

        while($buku = mysqli_fetch_assoc($rakBuku)){

            $kotakBuku[] = $buku;

        }

        return $kotakBuku;

    }


    function tambahData($data){

        global $koneksi;

        $kodeBuku = htmlspecialchars($data['kodeBuku']);

        $judulBuku = htmlspecialchars($data['judulBuku']);

        $namaPengarang = htmlspecialchars($data['namaPengarang']);

        $kotaTerbit = htmlspecialchars($data['tahunTerbit']);

        $penerbit = htmlspecialchars($data['penerbit']);

        $query = "INSERT INTO tb_buku (
                        kode_buku,
                        judul_buku,
                        nama_pengarang,
                        tahun_terbit,
                        penerbit) 
                  VALUES (
                        '$kodeBuku',
                        '$judulBuku',
                        '$namaPengarang',
                        '$kotaTerbit',
                        '$penerbit')";

        $tambahData = mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);

    }

    function editData($data){

        global $koneksi;

        $kodeBuku = $data['kodeBuku'];

        $judulBuku = htmlspecialchars($data['judulBuku']);

        $namaPengarang = htmlspecialchars($data['namaPengarang']);

        $tahunTerbit = htmlspecialchars($data['tahunTerbit']);

        $penerbit = htmlspecialchars($data['penerbit']);

        $query = "UPDATE 
                        tb_buku 
                  SET 
                        judul_buku = '$judulBuku',
                        nama_pengarang = '$namaPengarang',
                        tahun_terbit    = '$tahunTerbit',
                        penerbit = '$penerbit'

                  WHERE 
                        kode_buku = '$kodeBuku'
                        ";
        
        $editData = mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);

    }




 


?>