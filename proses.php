<?php
include 'koneksi.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambah"){

            $nim = $_POST['nim'];
            $nama_mahasiswa = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $foto = $_POST['foto'];
            $alamat = $_POST['alamat'];

            $query = "INSERT into mahasiswa values(null '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($conn, $query);
            if($sql){
                echo "berhasil <a href='index.php'>[Home] <a>";
            }else $query{
                echo $query;
            }

            echo $nim."|" .$nama_mahasiswa."|".$jenis_kelamin."|".$foto."|".$alamat;

            echo "tambah data <a href='index.php'>[Home] <a>";
        }elseif ($_POST['aksi'] == "edit"){
            echo "edit data <a href='index.php'>[Home] <a>";
        }
    }
    if(isset($_GET['hapus'])){
            echo "hapus data <a href='index.php'>[Home] <a>";
        }
?>