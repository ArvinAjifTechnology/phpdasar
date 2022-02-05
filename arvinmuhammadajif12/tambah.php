<?php
  require 'functions.php';
  

  // cek apakah tombol sudah ditekan atau belum

  if( isset($_POST["submit"]) >0) {
      //     $nama = htmlspecialchars($_POST["nama"]);
      //     $nim = htmlspecialchars($_POST["nim"]);
      //     $kelas = htmlspecialchars($_POST["kelas"]);
      //     $email = htmlspecialchars($_POST["email"]);
      //     $jurusan = htmlspecialchars($_POST["jurusan"]);
      //     $gambar= htmlspecialchars($_POST["gambar"]); 
      //     $sukses=[""];
      //     $error=[""];
           
      // //    $query = "INSERT INTO mahasiswa 
      // //    VALUES
      // //    ('', '$nama','$nim', '$kelas', '$email', '$jurusan', '$gambar')";
      //  if ($nama && $kelas && $email && $jurusan && $gambar) {
      //     $query = "INSERT INTO mahasiswa 
      //    VALUES
      //    ('', '$nama','$nim', '$kelas', '$email', '$jurusan', '$gambar')";
      //    $q1 = mysqli_query($conn,$query);
      //    if ($q1) {
      //        $sukses ="Berhasil Memasukan Data Baru";
      //    } else {
      //     $error ="Gagal Memasukan Data Baru";
      //    }
         
      //  } else {
      //      $error ="Silahkan Memasukan Semua Data";
      //  }
       
      // $q1 = mysqli_query($conn,$query);
      // return mysqli_affected_rows($conn);
      
      
      // }
     
  // Data Berhasil ditambahkan atau tidak
    if(tambah($_POST) >0 ) {
        echo "
      <script >
          alert('Data Berhasil Ditambahkan!');
            document.location.href= 'index.php';
      </script>
      ";
    }else 
        echo" 
        <script >
            alert('Data Gagal Ditambahkan!');
            document.location.href= 'index.php';
        </script>";   
  }

  // if(tambah($_POST) >0 ) {
      // echo"<div class='alert alert-success' role='alert'>
      //   Data Berhasil Di Tambahkan
      // </div>";
  //   }else
  //     echo "<div class='alert alert-danger' role='alert'>
  //       Data Gagal Di Tambahkan
  //       </div>";
  
  // }
  $sukses=("Data Berhasil Ditambahkan!");
  $error=("Data Berhasil Ditambahkan!");

  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello Wolrd</title>
  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <br>
    
    <section id="contact" class="contact bg-m">
      
        <div class="container pb-5">
            <div class="row">
            <!-- <button type="submit" href="tambah.php" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button> -->
            <div class="col text-center pt-4 mb-4">
            <h1>Tambah Data Mahasiswa</h1>
            </div>
        </div> 
    <div class="col-lg-3">
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name = "nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" required>
        </div>
        <div class="form-group">
          <label for="nim">NIM </label>
          <input type="text" class="form-control" name = "nim" id="nim" aria-describedby="nimHelp" placeholder=" Masukan No Hp" required>
        </div>
        <div class="form-group">
                  <label for="kelas">Kelas:</label>
                  <select name="kelas" class="form-control">
                  <option name="kelas" class="form-control" value="">--Pilih Kelas--</option>
                  <option value="A" class="form-control">A</option>
                  <option value="B" class="form-control">B</option>
                  <option value="C" class="form-control">C</option>
                  <option value="D" class="form-control">D</option>
                  <option value="E" class="form-control">E</option>
                  </select>
                  <div><br>
              </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="email" class="form-control" name = "email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
                  <label for="jurusan">Jurusan:</label>
                  <select name="jurusan" class="form-control">
                  <option value="" class="form-control">--Pilih Jurusan--</option>
                  <option value="S1 - Teknik Informatika" class="form-control">S1 - Teknik Informatika</option>
                  <option value="S1 - Teknik Industri" class="form-control">S1 - Teknik Industri</option>
                  <option value="S1 - Teknik Sipil" class="form-control">S1 - Teknik Sipil</option>
                  <option value="S1 - Arsitek" class="form-control">S1 - Arsitek</option>
                  <option value="S1 - Sistem Informasi" class="form-control">S1 - Sistem Informasi</option>
                  </select>
                  <div><br>
              </div>
              <div class="form-group">
          <label for="gambar">Gambar</label>
          <!-- <textarea name="gambar" id=gambar class="form-control"  placeholder="Masukan Gambar Anda" required "></textarea> -->
          <input type="text" class="form-control" name = "gambar" id="gambar" aria-describedby="gambarHelp" placeholder="Masukan Email" required >
        </div>

          <button type="submit" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button>
      </form>
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
    <?php include 'footer.php'; ?>
  </body>
</html>