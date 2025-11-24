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
    function edit_data($data, $files){
        $id_mahasiswa = $data['id_mahasiswa'];
            $nim = $data['nim'];
            $nama_mahasiswa = $data['nama'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $alamat = $data['alamat'];

            $queryShow = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
            $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($files['foto']['name'] == ""){     
                $foto = $result['foto_mahasiswa'];
            }else {
                $foto = $files['foto']['name'];
                unlink('img/'.$result['foto_mahasiswa']);
                move_uploaded_file($files['foto']['tmp_name'],'img/'.$files['foto']['name']);
            }

            $query = "UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin',
                        alamat='$alamat', foto_mahasiswa='$foto' WHERE id_mahasiswa='$id_mahasiswa';";

            $sql = mysqli_query($GLOBALS['conn'], $query);

            return true;
    }
    function hapus_data($data){
        $id_mahasiswa = $data['hapus'];
        $queryShow = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);
        unlink("img/".$result['foto_mahasiswa']);
        $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
?>