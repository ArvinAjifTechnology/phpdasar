<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol Cari Di Tekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>








<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Data Mahasiswa</title>
    <style>
        body {
            background-image: url("picture/12-01.jpg");
            background-size: 100%;
            background-repeat: repeat;
            background-position: center;
            padding: 50px;
        }
    </style>
</head>

<body class="mt-5">
    <?php require 'navbar.php'; ?>

    <form action="" method="post" size="30" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" name="keyword" id="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autocomplete="off" required autofocus />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" name="cari">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    </form>
    <br>
    <br>
    <br>
    <section id="tabel" class="tabel" class="mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                    <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
                </div>

                <div class="col-md-10">
                    <Table border="1" class="table  table-striped table-success mt-5">
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Gambar</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <!-- <th>Pesan</th> -->
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $row["id"]; ?>&&?gambar=<?= $row["gambar"]; ?>" class="btn btn-primary">Ubah</a>
                                    <a href="hapusdatamahasiswa.php?id=<?= $row["id"] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?');"> Hapus</a>
                                </td>
                                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                                <td><?= $row["nim"] ?></td>
                                <td><?= $row["nama"] ?></td>
                                <td><?= $row["kelas"] ?></td>
                                <td><?= $row["email"] ?></td>
                                <td><?= $row["jurusan"] ?></td>
                                <!-- <td><p><?= $row["tatanya"] ?></p></td> -->
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>


                    </Table>
                </div>
            </div>
        </div>

    </section>


    <?php include 'footer.php'; ?>



























</body>

</html>