<!DOCTYPE html>
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
    <form action="proses.php" method="POST">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="nim" class="form-control" id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="namaMahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="namaMahasiswa">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select id="jk" name="jenis_kelamin" class="form-select">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="perempuan">perempuan</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fotoMahasiswa" class="col-sm-2 form-label">Foto Mahasiswa</label>
            <div class="col-sm-10">
                <input class="form-control" name="foto" type="file" id="fotoMahasiswa" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
            <div class="col-sm-10">
                <textarea rows="3" name="alamat" class="form-control" id="alamat"></textarea>
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