<?php 
require 'functions.php';
$pelajar = query("SELECT * FROM hubungi2")
?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Tabel Kontak SMK PLUS SUKARAJA</title>
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

<section id="tabel" class="tabel">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <Table border="1" class="table  table-striped table-success mt-5">
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                    </tr>
                    <?php $i=1;?>
                    <?php foreach($pelajar as $row): ?>
                    <tr>
                        <td><?=$i;?></td>
                        <td>
                        <a href=""> Ubah</a>l 
                        <a href="hapusdatasmk.php?id=<?=$row["id"]?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?');"> Hapus</a>
                        </td>
                        <td><?=$row["nama"]?></td>
                        <td><?=$row["nohp"]?></td>
                        <td><?=$row["email"]?></td>
                        <td><?=$row["subjek"]?></td>
                        <td><p><?=$row["tatanya"]?></p></td>
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