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
        <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
        
        
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
                        <a href="ubah.php?id=<?= $row["id"];  ?>" class="btn btn-primary">Ubah</a>
                        <a href="hapusdatamahasiswa.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?');"> Hapus</a>
                        </td>
                        <td><img src="img/ <?=$row["gambar"];?>" width="50"></td>
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


























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>