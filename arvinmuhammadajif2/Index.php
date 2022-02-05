<?php
require 'functions.php';

// cek apakah tombol sudah ditekan atau belum

if( isset($_POST["submit"]) ) {
    
//Data Berhasil ditambahkan atau tidak
  if(hubungi($_POST) >0 ) {
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!--My Css -->
  <style type="text/css" media="all">
    section {
      min-height: 420px;
    }
    .bg-s{
      background-color:#137835;
    }
    .bg-c{
      background-color:#20cc5acf;
    }
    form{
      color: white;
    }
    body{
      background-color:#20cc5a;
    }
  </style>
    <title>Arvin Muhammad Ajif</title>
  </head>
  <body class="mt-5">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
  <div class="container">
  <a class="navbar-brand" href="#">Arvin Muhammad Ajif </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="smkplussukaraja.php">SMK PLUS SUKARAJA</a>
      <a class="nav-link" href="formulir.php">Formulir</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hubungi.php">Tabel Kontak Home</a>
          <a class="dropdown-item" href="hubungismk.php">Tabel Kontak SMK PLUS SUKARAJA</a>
          <!-- <div class="dropdown-divider"></div> -->
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
    </div>
  </div>
  </div>
</nav>
<section id="jumbotron">
<div class="jumbotron jumbotron-fluid bg-s pb-5" >
  <div class="container text-center">
    <img src="picture/arvinmajif.jpg" width="25%" class="rounded-circle img-thumbnail">
    <h6 class="display-4">Arvin Muhammad Ajif</h6>
    <p class="lead">Selamat Datang Di Website Arvin Muhammad Ajif.</p>
  </div>
</div>
</section>


<section id="mybiodata" class="mybiodata bg-c pb-3">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h1> My Biodata</h1>
    </div>
  </div>
 <div class="row justify-content-center">
    <div class="col-md-5 text-center">
      <em>Hello Guys!
      <br><br><br><br><br><br>
        <h1>Izinkeun Sim Kuring Ngenalkeun Diri Kuring<fh1>
        <h2> Nami Abdi Arvin Muhammad Ajif</h2>
        <h3>Kuring Lahir Di Garut 16 Mei 2003</h3>
        <h4>Alamat Bumi Abdi Di Kampung Calingcing No. 407 RT 02 RW 06 Ds. Cimurah Kec. Karangpawitan Kab. Garut 44182</h4>
        <h2>Saya Suka Membaca Buku</h2>
        <h2>Abdi Ti ..</h2>
        <h1>XII Multimedia B</h1>
        <h2>SMK PLUS SUKARAJA</h2><br><br></em>
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
            <li class="list-group-item">My Home </li>
            <li class="list-group-item">Jl. Kp. Calingcing Ds. Cimurah Kec. Karangpawitan Kab. Garut </li>
            <li class="list-group-item">Jawa Barat, Indonesia</li>
            <li class="list-group-item">082122828906</li>
          </ul>
        </div>
     <div class="col-lg-6">
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Nama :</label>
          <input type="text" class="form-control" name = "nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" Required>
        </div>
        <div class="form-group">
          <label for="nohp">No Hp :</label>
          <input type="telp" class="form-control" name = "nohp" id="nohp"aria-describedby="nohpHelp" placeholder=" Masukan No Hp"  Required >
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" name = "email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" Required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="subjek">Subjek :</label>
          <input type="text" class="form-control"  name = "subjek" id="subjek"aria-describedby="subjekHelp" placeholder="Masukan Subjek" Required>
        </div>
        <div class="form-group">
          <label for="pesan">Pesan :</label>
          <textarea name="tatanya" id=tatanya class="form-control" placeholder="Masukan Pesan Anda"></textarea>
        </div>
          <button type="submit" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button>
      </form>
    </div>
    </div>
</div>
</section>

<footer class="bg-success text-white">
  <div class="container pt-3 ">
    <div class="row text-center">
      <div class="col">
        <p> Copyright © 2020.</p>
      </div>
    </div>
  </div>
</footer>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>