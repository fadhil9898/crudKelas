<?php 
    include 'koneksi.php';

    function tambah_data($data, $files){

            $nim = $data['nim'];
            $nama_mahasiswa = $data['nama'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $foto = $files['foto']['name'];
            $alamat = $data['alamat'];

            $dir = "img/";
            $tmpFile = $files['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

            $query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($GLOBALS['conn'], $query);

            return true;
    }
?>