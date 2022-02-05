<?php
require 'functions.php';

//cek apakah tombol sudah ditekan atau belum
 if( isset($_POST["submit"]) ) {
    
//Data Berhasil ditambahkan atau tidak
   if(tambahform($_POST) >0 ) {
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
// var_dump($_POST)
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My Css -->

    <style>

  h1 {
    font-family: comic sans Ms;
    color: ;
    background-image: url("picture/background-03.jpg");
    text-align: center;
  }
  body {
      background-image: url("picture/12-01.jpg");
      background-size: 100%;
      background-repeat: repeat;
      background-position: center;
      padding: 50px;    }
  img{
    position: center;
    display: block;
    margin-right: auto;
    margin-left: auto;
  }
  h3{
    text-align: center;
    font-family:Arial;
  }
  h4{
    font-family: Comic Sans MS;
    text-align: Center;
  }
  h5{
    text-align: left;
    color: white;
  }
  ul{
    text-align: center;
  }
</style>

    <title>Formulir</title>
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
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="smkplussukaraja.php">SMK PLUS SUKARAJA</a>
          <a class="nav-link active" href="formulir.php">Formulir  <span class="sr-only">(current)</span></a>
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

<section id="head" class="head">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1>SMK PLUS SUKARAJA</h1>
          <img src="picture/logosmk.png" alt="SMK Plus Sukaraja" height="200"/>
          <p class=" text-center bold"> Di Smk Plus Sukaraja Terdapat 3 Jurusan </p> 

            <h1>FORMULIR PENDAFTARAN</h1>
            <h4>(TAHUN AJARAN 2019-2020)</h4>
      </div>
    </div>
  </div>
</section>

<section id="formulir" class="formulir">
    <div class="container">
        <div class="row">
            <div class="col-md-10 justify-content-center">
                <h3>A. IDENTITAS SISWA</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <form action="" method="post">
              <div class="form-group">
                <h5><label for="nopendaftar">1. No. Pendaftaran: </label><input type="number" class="form-control" name="nopendaftar" min="1" max="1000"><div><br>
              </div>
              <div class="form-group">
                <label for="nama">2. Nama (lengkap sesuai STTB):</label>
                <input type="text" class="form-control" name="nama"><div><br>
              </div>
              <div class="form-group">
                <label for="nisn">3. NISN SMP/MTs:</label>
                <input type="text" class="form-control" name="nisn"><div><br>
              </div>
              <div class="form-group">
                <label for="nis">4. NIS *):</label>
                <input type="text" class="form-control" name="nis"><div><br>
              </div>
              <div class="form-check">
                <label for="gender">5. Jenis Kelamin:</label><br>
                <input type="radio" name="gender" class="form-check-input" value="male" checked> Male <br>
                <input type="radio" name="gender" class="form-check-input" value="female"> Female <br>
              </div>
              <div class="form-group">
                  <label for="bday">6. Tempat Tanggal Lahir:</label> <br>
                  <label for="tempat"> Tempat :</label>
                  <input type="text" class="form-control" name="tempat"><div>
                  <label for="tgllahir">Tanggal Lahir:</label>
                  <input type="date" class="form-control" name="bday"><div><br>
              </div>
              <div class="form-group">
                  <label for="agama">7. Agama:</label>
                  <select name="agama" class="form-control">
                  <option value="Islam" class="form-control">Islam</option>
                  <option value="Katolik" class="form-control">Katolik</option>
                  <option value="Hindu" class="form-control">Hindu</option>
                  <option value="Budha" class="form-control">Budha</option>
                  <option value="Konghucu" class="form-control">Konghucu</option>
                  </select>
                  <div><br>
              </div>
              <div class="form-check">
                  <label for="blood">8. Golongan Darah:</label><br>
                  <input type="radio" class="form-check-input" name="blood" value="AB" checked> AB<br>
                  <input type="radio" class="form-check-input" name="blood" value="A"> A<br>
                  <input type="radio" class="form-check-input" name="blood" value="B"> B<br>
                  <input type="radio" class="form-check-input" name="blood" value="O"> O<div><br>
              <div class="form-group">
                  <label for="anakke">9. Anak Ke:</label>
                  <input type="number" name="anakke" min="1" max="50"> 
                  <label for="anakke">dari</label>
                  <input type="number" name="dari" min="1" max="50"> 
                  <label for="anakke">bersaudara</label>
              </div>
              <div class="form-group">
                  <label for="StatusDalamKeluarga">10. Status Dalam Keluarga:</label> <br>
                  <input type="radio" name="StatusDalamKeluarga" class="form-check-input" value="Anak Kandung" > Anak Kandung<br>
                  <input type="radio" name="StatusDalamKeluarga" class="form-check-input" value="Anak Tiri" > Anak Tiri<br>
                  <input type="radio" name="StatusDalamKeluarga" class="form-check-input" value="Anak Angkat" checked> Anak Angkat<div><br>
              </div>  
              <div class="form-group">
                  <label for="alamat">11. Alamat (Tempat Tinggal):</label>
                  <label for="alamat">Kampung/Jalan:</label><input type="text" name="kampung" class="form-control"><br>
                  <label for="alamat">Desa:</label> <input type="text" name="desa" class="form-control"><br>
                  Kecamatan: <input type="text" name="kecamatan" class="form-control"><br>
                  No. Telephone/HP: <input type="name" name="phone" class="form-control">
              </div> 
              <div class="form-group">
                  <label for="prestasi"> 12. Prestasi Yang Pernah Diraih:</label><br>
                  <label for="prestasi"> Juara:</label><input type="number" name="juara" min="1" max="3" class="form-control"> Bidang: <input type="text" name="bidang"class="form-control">
                  <label for="prestasi"> Juara:</label><input type="number" name="juara2" min="1" max="3" class="form-control"> Bidang: <input type="text" name="bidang2" class="form-control">
                  <label for="prestasi"> Juara:</label><input type="number" name="juara3" min="1" max="3" class="form-control"> Bidang: <input type="text" name="bidang3" class="form-control"><br>
                    Lampirkan Piagam/Sertifikatnya

                  </div>
              <div class="form-check">
                  <label for="prioritas">13. Prioritas Pilihan Kompetensi Keahlian:</label><br>
                  <input type="radio" name="jurusan"  id="jurusan" value="TSM"  class="form-check-input">
                  <label for="prestasi" class="form-check-label">TSM</label><br>
                  <input type="radio" name="jurusan" id="jurusan" value="Multimedia" class="form-check-input">
                  <label for="prestasi" class="form-check-label">Multimedia</label><br>
                  <input type="radio" name="jurusan" id="jurusan" id="jurusan" value="Farmasi" class="form-check-input">
                  <label for="prestasi" class="form-check-label">Farmasi</label><br>
                  <input type="radio" name="jurusan" id="jurusan"value="Akuntansi" class="form-check-input">
                  <label for="prestasi" class="form-check-label">Akuntansi</label><br>   
                  <input type="radio" name="jurusan" id="jurusan" value="RPL" class="form-check-input">
                  <label for="prestasi" class="form-check-label">RPL</label><br>
                </div>          
              <div class="form-group">
                  <label for="nis">14. Asal Sekolah:</label>
                  <br>
                    Nama Sekolah: <input type="text" name="asalsekolah" class="form-control"><br>
                    Alamat Sekolah: <input type="text" name="alamatsekolah" class="form-control"><br>
                    No STTB SMP/MTs: <input type="text" name="nosttb" class="form-control"><br>
                    Tahun: <input type="text" name="tahun" class="form-control"><br>
              </div>
              <h3>B.IDENTITAS ORANG TUA WALI</h3>
              <div class="form-group">
                <label for="namaayah">1. Nama Ayah Kandung:</label>
                <input type="text" name="namaayah" class="form-control">
              </div>
              <div class="form-group">
                <label for="namaibu"> 2. Nama Ibu Kandung:</label>
                <input type="text" name="namaibu" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaanayah"> 3. Pekerjaan Ayah :</label>
                <input type="text" name="pekerjaanayah" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaanibu">4. Pekerjaan Ibu :</label>
                <input type="text" name="pekerjaanibu" class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat">5. Alamat Orang Tua:</label>
                  <label for="alamat">Kampung/Jalan:</label><input type="text" name="kampung2" class="form-control"><br>
                  <label for="alamat">Desa:</label> <input type="text" name="desa2" class="form-control"><br>
                  Kecamatan: <input type="text" name="kecamatan2" class="form-control"><br>
                  No. Telephone/HP: <input type="name" name="phone2" class="form-control">
              </div>
              <div class="form-group">
                <label for="penghasilanibu">6. Penghasilan Orang Tua/Bulan:</label>
                <input type="text" name="penghasilan" class="form-control">
              </div>
              <div class="form-group">
                <label for="namawali">7. Nama Wali Siswa:</label>
                <input type="text" name="namawali" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaanwali">8. Pekerjaan Wali Siswa:</label>
                <input type="text" name="pekerjaanwali" class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat">9. Alamat Wali Siswa:</label>
                  <label for="alamat">Kampung/Jalan:</label><input type="text" name="kampung3" class="form-control"><br>
                  <label for="alamat">Desa:</label> <input type="text" name="desa3" class="form-control"><br>
                  Kecamatan: <input type="text" name="kecamatan3" class="form-control"><br>
                  No. Telephone/HP: <input type="text" name="phone3" class="form-control">
              </div>
              <div class="form-group">
                <label for="nis">10. Penghasilan Wali Siswa/Bulan:</label>
                <input type="text" name="penghasilan2" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button>
              </div>
              </div>              
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