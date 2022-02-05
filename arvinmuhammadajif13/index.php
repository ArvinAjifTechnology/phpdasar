<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol Cari Di Tekan
if(isset($_POST["cari"]) ) {
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
        padding: 50px;    }
      </style>
  </head>
  <body class="mt-5">
  <?php require 'navbar.php'; ?>
 
  <form action="" method="post"size="30" >
        <div class="form-group">
        <!-- <label for="name">Nama</label> -->
        <input type="text" class="form-control" name = "keyword" id="keyword" aria-describedby="keywordHelp" placeholder="Masukkan Keyword Pencarian..." autocomplete="off" required autofocus>
        </div>
        <button type="submit" name="cari" class="btn btn-primary" placeholder >Cari!</button>
        </form>
        <br>
<section id="tabel" class="tabel" class="mx-auto">
    <div class="container" >
        <div class="row">
        <div class="col-md-10">
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
                    <?php $i=1;?>
                    <?php foreach($mahasiswa as $row): ?>
                    <tr>
                        <td><?=$i;?></td>
                        <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>&&?gambar=<?=$row["gambar"]; ?>" class="btn btn-primary">Ubah</a>
                        <a href="hapusdatamahasiswa.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?');"> Hapus</a>
                        </td>
                        <td><img src="img/<?=$row["gambar"];?>" width="50"></td>
                        <td><?=$row["nim"]?></td>
                        <td><?=$row["nama"]?></td>
                        <td><?=$row["kelas"]?></td>
                        <td><?=$row["email"]?></td>
                        <td><?=$row["jurusan"]?></td>
                        <!-- <td><p><?=$row["tatanya"]?></p></td> -->
                    </tr>
                    <?php $i++;?>
                    <?php endforeach;?>


                    </Table>
                            </div>
                        </div>
                    </div>

</section>


<?php include 'footer.php'; ?>


























   
  </body>
</html>