<?php
include 'koneksi.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambah"){


            $nim = $_POST['nim'];
            $nama_mahasiswa = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $foto = $_FILES['foto']['name'];
            $alamat = $_POST['alamat'];

            $dir = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

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

        $queryShow = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);
        unlink("img/".$result['foto_mahasiswa']);

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