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
 <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD - BS5</a>
    </div>
 </nav>
 <!-- judul -->
  <div class="container">
        <h1 class="mt-4">Data Mahasiswa</h1>
        <figure>
        <blockquote class="blockquote">
            <p>berisi data yang telah disimpan didatabase</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update Delete</cite>
        </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-4">
            tambah data
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th>Nama mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="align-bottom">
                    <td><center>1.</center></td>
                    <td>Nayla Amelia</td>
                    <td>perempuan</td>
                    <td><img src="img/nayla.jpg" style="width: 50px; "></td>
                    <td>cimahi</td>
                    <td>
                        <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                            edit
                        </a>
                        <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
                            hapus
                        </a>
                    </td>
                </tr>
                <tr class="align-bottom">
                    <td><center>2.</center></td>
                    <td>Moch Fadhlil</td>
                    <td>Laki-Laki</td>
                    <td><img src="img/fadil.jpg" style="width: 50px; "></td>
                    <td>bandung</td>
                    <td>
                        <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                            edit
                        </a>
                        <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm">
                            hapus
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
  </div>


</body>
</html>
