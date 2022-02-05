<?php
  require '../functions.php';

  // cek apakah tombol sudah ditekan atau belum

  if( isset($_POST["submit"]) ) {
      
  //Data Berhasil ditambahkan atau tidak
    if(hubungi2($_POST) >0 ) {
        echo "
      <script >
          alert('Data Berhasil Ditambahkan!');
            document.location.href= '#';
      </script>
      ";
    }else
        echo" 
        <script >
            alert('Data Gagal Ditambahkan!');
            document.location.href= '#';
        </script>";   
  }


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require 'navbar.php'; ?>
    
      
  

    <title>SMK PLUS SUKARAJA</title>
  </head>
  <body class="mt-5">
<section id="head" class="head">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1>SMK PLUS SUKARAJA</h1>
          <img src="picture/logosmk.png" alt="SMK Plus Sukaraja" height="200"/>
          <p class=" text-center bold"> Di Smk Plus Sukaraja Terdapat 3 Jurusan </p> 
      </div>
    </div>
  </div>
</section>


<section id="pilihan" class="pilihan">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2> Pilihlah Jurusan Yang Ada Di Sukaraja:</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
         <ul class="list-group">
            <li class="list-group-item"> <a href="www.multimedia.sch.id " target="_blank">Multimedia</a></li>
            <li class="list-group-item"><a href="www.farmasi.sch.id" target="_blank"> Farmasi</a> </li>
            <li class="list-group-item"> <a href="www.tsm.sch.id" target="_blank">Teknik Sepeda Motor</a></li>
            <li class="list-group-item"> <a href="www.yayasansukaraja.sch.id" target="_blank"> Pesantren Sukaraja</a></li>
          </ul>
      </div>
    </div>
  </div>
</section>



<section id="tabel" class="tabel">
  <div class="container">
    <div class="row">
      <div class="col pt-5">
        <table border="1" class="table table-striped table-success">
            <!--Untuk Tabel Harga-->
            <tr>
                <td>Multimedia</td>
                <td>Farmasi</td>
                <td> Teknik Sepeda Motor</td>
                <td>Pesantren Sukaraja</td>
            </tr>
            <tr>
                <td>Rp. 85.800/Bulan</td>
                <td>Rp. 75.000/Bulan</td>
                <td> Rp. 75.000/Bulan</td>
                <td>Rp. 200.000/Bulan</td>
            </tr>
            <tr>
                <td>Website</td>
                <td>Obat</td>
                <td> Otomotif</td>
                <td>Tahsin</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact bg-s">
  <div class="container pb-5">
    <div class="row">
      <div class="col text-center pt-4 mb-4">
        <h2> Contact Us</h2>
      </div>
     </div>
     <div class="row justify-content-center">
       <div class="col-lg-4 text-center">
          <div class="card text-white bg-info mb-3">
            <div class="card-body">
              <h5 class="card-title">Contact Me </h5>
              <p class="card-text">Jika Ada Keluhan Atau Masalah Boleh Hubungi Saya Dibawah Ini Atau Mengisi Form Ini </p>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"> <h1>Alamat</h1></li>
            <li class="list-group-item">SMK PLUS SUKARAJA</li>
            <li class="list-group-item">Jl. KH Zaenal Arief KM 3  </li>
            <li class="list-group-item">Jawa Barat, Indonesia</li>
            <li class="list-group-item">082122828906</li>
          </ul>
        </div>
     <div class="col-lg-6">
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name = "nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" required>
        </div>
        <div class="form-group">
          <label for="nohp">No Hp </label>
          <input type="text" class="form-control" name = "nohp" id="nohp" aria-describedby="nohpHelp" placeholder=" Masukan No Hp" required>
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="email" class="form-control" name = "email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="subjek">Subjek</label>
          <input type="text" class="form-control"  name = "subjek" id="subjek"aria-describedby="subjekHelp" placeholder="Masukan Subjek" required>
        </div>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea name="tatanya" id=tatanya class="form-control"  placeholder="Masukan Pesan Anda" required></textarea>
        </div>
          <button type="submit" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button>
      </form>
    </div>
    </div>
</div>
</section>





































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