<?php
include 'koneksi.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambah"){

            $nim = $_POST['nim'];
            $nama_mahasiswa = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $foto = "image2.jpg";
            $alamat = $_POST['alamat'];

            $query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                // echo "berhasil <a href='index.php'>[Home] <a>";
            }else {
                echo $query;
            }

            // echo $nim."|" .$nama_mahasiswa."|".$jenis_kelamin."|".$foto."|".$alamat;

            // echo "tambah data <a href='index.php'>[Home] <a>";
        }elseif ($_POST['aksi'] == "edit"){
            echo "edit data <a href='index.php'>[Home] <a>";
        }
    }
    if(isset($_GET['hapus'])){
        $id_mahasiswa = $_GET['hapus'];
        $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
        $sql = mysqli_query($conn, $query);
        if($sql){
                header("location: index.php");
                // echo "berhasil <a href='index.php'>[Home] <a>";
            }else {
                echo $query;
            }   
            // echo "hapus data <a href='index.php'>[Home] <a>";
        }
?>