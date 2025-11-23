<!DOCTYPE html>

<?php 
include 'koneksi.php';

        $id_mahasiswa = '';
        $nim = '';
        $nama_mahasiswa = '';
        $jenis_kelamin = '';
        $alamat = '';

    if(isset($_GET['ubah'])){
        $id_mahasiswa = $_GET['ubah'];
        
        $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);

        $nim = $result['NIM'];
        $nama_mahasiswa = $result['nama_mahasiswa'];
        $jenis_kelamin = $result['jenis_kelamin'];
        $alamat = $result['alamat'];


    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styele.css">
</head>
<body>
 <nav class="navbar navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD - BS5</a>
    </div>
 </nav>
 <div class="container">
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id_mahasiswa; ?>" name="id_mahasiswa">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input required type="text" name="nim" class="form-control" id="nim" value="<?php echo $nim; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="namaMahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="namaMahasiswa" value="<?php echo $nama_mahasiswa; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select  required id="jk" name="jenis_kelamin" class="form-select" >
                        <option <?php if($jenis_kelamin == 'Laki-laki'){echo "selected";} ?> value="Laki-Laki">Laki-Laki</option>
                        <option <?php if($jenis_kelamin == 'perempuan'){echo "selected";} ?> value="perempuan">perempuan</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 form-label">Foto Mahasiswa</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";}?> class="form-control" name="foto" type="file" id="foto" accept="image/*" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
            <div class="col-sm-10">
                <textarea required rows="3" name="alamat" class="form-control" id="alamat" ><?php echo $alamat; ?></textarea>
            </div>
        </div>

        <div class="mb-3 row mt-4">
            <div class="col ">
                <?php 
                if(isset($_GET['ubah'])){
                ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                    Simpan Data
                </button>
                <?php
                    } else{
                ?>
                    <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                        Tambah Data
                    </button>
                <?php
                    }
                ?>
            <a href="index.php" type="button" class="btn btn-danger ">
                Batal
            </a>
            </div>
        </div>
    </form>
 </div>
</body>
</html>