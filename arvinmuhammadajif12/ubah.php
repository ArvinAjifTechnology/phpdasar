<?php
  include "functions.php";
  // Ambil Data Di URL
  $id = $_GET["id"];
  //   Query Data Mahasiswa Berdasarkan id
  $ambildata = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id = $id");
  $data=mysqli_fetch_array($ambildata);

  
  


  // cek apakah tombol sudah ditekan atau belum

if( isset($_POST["submit"])) {
  $nama = htmlspecialchars($_POST["nama"]);
  $nim = htmlspecialchars($_POST["nim"]);
  $kelas = htmlspecialchars($_POST["kelas"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar= htmlspecialchars($_POST["gambar"]);

  mysqli_query($conn,"UPDATE mahasiswa SET
   nim = '$nim',
   nama = '$nama',
   kelas = '$kelas',
   email = '$email',
   jurusan = '$jurusan',
   gambar = '$gambar'
  WHERE id = '$id'
") or die(mysqli_error($conn));
  echo "
        <script >
            alert('Data Berhasil Diubah!');
              document.location.href= 'index.php';
        </script>
        ";
// }else{
//           echo" 
//           <script > 
//               alert('Data Gagal Diubah!');
//               document.location.href= 'index.php';
//           </script>";
    }
  // //Data Berhasil diubah atau tidak
  //   if(ubah($_POST) > 0 ) {
  //       echo "
  //     <script >
  //         alert('Data Berhasil Diubah!');
  //           document.location.href= '#';
  //     </script>
  //     ";
  //   }else
  //       echo" 
  //       <script > 
  //           alert('Data Gagal Diubah!');
  //           document.location.href= '#';
  //       </script>";   
  // }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <br>
    
    <section id="contact" class="contact bg-m">
        <div class="container pb-5">
            <div class="row">
            <!-- <button type="submit" href="tambah.php" name="submit" class="btn btn-primary" placeholder >Kirim Sekarang</button> -->
            <div class="col text-center pt-4 mb-4">
            <h1>Ubah Data Mahasiswa</h1>
            </div>
        </div>    
    <div class="col-lg-3">
        <input type="hidden" name="id" value="<?= $data["id"]; ?>"> 
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name = "nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" required value="<?= $data["nama"];?>">
        </div>
        <div class="form-group">
          <label for="nim">NIM </label>
          <input type="text" class="form-control" name = "nim" id="nim" aria-describedby="nimHelp" placeholder=" Masukan NIM" required value="<?= $data["nim"];?>" >
        </div>
        <div class="form-group">
                  <label for="kelas">Kelas:</label>
                  <select name="kelas" class="form-control" >
                  <option value="">--Pilih Kelas--</option>
                  <option value="A"  <?php if($data["kelas"] == 'A'){ echo 'selected';}?> class="form-control">A</option>
                
                  <option value="B"  <?php if($data["kelas"] == 'B'){ echo 'selected';}?>class="form-control">B</option>
                  <option value="C"  <?php if($data["kelas"] == 'C'){ echo 'selected';}?>class="form-control">C</option>
                  <option value="D"  <?php if($data["kelas"] == 'D'){ echo 'selected';}?>class="form-control">D</option>
                  <option value="E"  <?php if($data["kelas"] == 'E'){ echo 'selected';}?>class="form-control">E</option>
                  </select>
                  <div><br>
              </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="email" class="form-control" name = "email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" required value="<?= $data["email"];?>">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
                  <label for="jurusan">Jurusan:</label>
                  <select name="jurusan" class="form-control" >
                  <option value="" class="form-control">--Pilih Jurusan--</option>
                  <option value="S1 - Teknik Informatika" <?php if($data["jurusan"] == 'S1 - Teknik Informatika'){ echo 'selected';}?>class="form-control">S1 - Teknik Informatika</option>
                  <option value="S1 - Teknik Industri" <?php if($data["jurusan"] == 'S1 - Teknik Industri'){ echo 'selected';}?>class="form-control">S1 - Teknik Industri</option>
                  <option value="S1 - Teknik Sipil" <?php if($data["jurusan"] == 'S1 - Teknik Sipil'){ echo 'selected';}?>class="form-control">S1 - Teknik Sipil</option>
                  <option value="S1 - Arsitek" <?php if($data["jurusan"] == 'S1 - Arsitek'){ echo 'selected';}?>class="form-control">S1 - Arsitek</option> 
                  <option value="S1 - Sistem Informasi" <?php if($data["jurusan"] == 'S1 - Sistem Informasi'){ echo 'selected';}?>class="form-control">S1 - Sistem Informasi</option>
                  </select>
                  <div><br>
              </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <!-- <textarea name="gambar" id=gambar class="form-control"  placeholder="Masukan Gambar Anda" required "></textarea> -->
          <input type="text" class="form-control" name = "gambar" id="gambar" aria-describedby="gambarHelp" placeholder="Masukan Email" required value="<?= $data["gambar"];?>">
        </div>
          <button type="submit" name="submit" class="btn btn-primary" placeholder >Ubah Data!</button>
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