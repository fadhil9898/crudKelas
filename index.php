<?php
    include 'koneksi.php';

    $query = "select * from mahasiswa;";
    $sql = mysqli_query($conn,$query);
    $no = 0;
    
?>

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
                        <th>Nim</th>
                        <th>Nama mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($result = mysqli_fetch_assoc($sql)){
                    ?>
                <tr class="align-bottom">
                    <td><center>
                        <?php echo ++$no; ?>
                    </center></td>
                    <td>
                        <?php echo $result['NIM']; ?>
                    </td>
                    <td>
                        <?php echo $result['nama_mahasiswa']; ?>
                    </td>
                    <td>
                        <?php echo $result['jenis_kelamin']; ?>
                    </td>
                    <td><img src="img/<?php echo $result['foto_mahasiswa']; ?>" style="width: 50px; "></td>
                    <td><?php echo $result['alamat']; ?></td>
                    <td>
                        <a href="kelola.php?ubah=<?php echo $result['id_mahasiswa']; ?>" type="button" class="btn btn-success btn-sm">
                            edit
                        </a>
                        <a href="proses.php?hapus=<?php echo $result['id_mahasiswa']; ?>" type="button" class="btn btn-danger btn-sm"
                        onclick="return confirm('apakah anda yakin ingin menghapus data')">
                            hapus
                        </a>
                    </td>
                </tr>
                <?php
                 }
                ?>
                </tbody>
            </table>
        </div>
  </div>


</body>
</html>
