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


    function registrasi($data){

        global $koneksi;

        $username = strtolower(stripslashes($data["username"]));
        
        $password1 = mysqli_real_escape_string($koneksi,$data["password1"]);

        $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

        

        //cek username sudah ada apa belum

        $cekUser = mysqli_query($koneksi,"SELECT nama_admin FROM tb_admin WHERE nama_admin = '$username'");

        if(mysqli_fetch_assoc($cekUser)){

            echo "

            <script>
                alert('Username sudah terdaftar !!!');
            </script>
        
            
            ";

            return false;

        }

        //cek konfirmasi password

        if($password1 !== $password2){

            echo "
            <script>
                alert('Konfirmasi password tidak sesuai !!!');
            </script>
            
            ";

            return false;

        
        }

        //enkripsi password

        $password1 = password_hash($password1, PASSWORD_DEFAULT);

        //tambahkan user baru ke database 

        mysqli_query($koneksi,"INSERT INTO tb_admin (nama_admin,sandi_admin) VALUES ('$username','$password1')");

        return mysqli_affected_rows($koneksi);



    }


    function login(){

        global $koneksi;

        $username = $_POST['username'];

        $password = $_POST['password'];

        $cekLogin = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE nama_admin = '$username'");

        $row = mysqli_fetch_assoc($cekLogin);

        //cek username

        if(mysqli_num_rows($cekLogin) === 1){

            //cek password

            if(password_verify($password,$row['sandi_admin'])){

                //set session

                $_SESSION["login"] = true;

                echo "

                <script>
                    alert('Berhasil login');
                    document.location.href = 'index.php';
                </script>
                
        
                ";

                exit;

            }
        }

        $error = true;


    }




 


?>