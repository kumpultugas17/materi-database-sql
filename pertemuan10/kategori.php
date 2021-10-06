<?php
require 'config.php';
$sql = $conn->query("SELECT * FROM kategori ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Kategori</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Perpus</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kategori</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="kategori_add.php" method="post">
                                    <div class="form-group">
                                        <label for="nama">Kategori</label>
                                        <input type="text" name="kategori" id="nama" class="form-control" placeholder="Nama Kategori" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-sm btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($sql as $row) : ?>
                                            <tr>
                                                <td width="40px" class="text-center"><?= $no++; ?></td>
                                                <td><?= $row['nama']; ?></td>
                                                <td width="130px" class="text-center">
                                                    <a href="kategori_edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>