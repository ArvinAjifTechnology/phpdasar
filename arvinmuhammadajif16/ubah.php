<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
include "functions.php";
// Ambil Data Di URL
$id = $_GET["id"];
// $gambar = $_GET["gambar"];
// $gambar = $_GET["gambar"];
//   Query Data Mahasiswa Berdasarkan id
$ambildata = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
// $data = mysqli_fetch_array($ambildata);
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// $gambar2 = htmlspecialchars($data["gambar"]);




// cek apakah tombol sudah ditekan atau belum

if (isset($_POST["submit"])) {

  //   $nama = htmlspecialchars($_POST["nama"]);
  //   $nim = htmlspecialchars($_POST["nim"]);
  //   $kelas = htmlspecialchars($_POST["kelas"]);
  //   $email = htmlspecialchars($_POST["email"]);
  //   $jurusan = htmlspecialchars($_POST["jurusan"]);
  //   $gambarLama = htmlspecialchars($_POST["gambarLama"]);
  //   // Ada Gambar/Tidak
  //   if ( $_FILES['gambar']['error'] === 4) {
  //     $gambar = $gambarLama;
  //     // // $gambar;
  //   }else {
  //     $gambar = upload();
  //     // if ($gambar === false) {
  //     //   // $gambar = $gambarLama;
  //     //   $gambar;
  //     // }
  //   }

  //   mysqli_query($conn,"UPDATE mahasiswa SET
  //    nim = '$nim',
  //    nama = '$nama',
  //    kelas = '$kelas',
  //    email = '$email',
  //    jurusan = '$jurusan',
  //    gambar = '$gambar'
  //   WHERE id = '$id'
  // ") or die(mysqli_error($conn));
  //   echo "
  //         <script >
  //             alert('Data Berhasil Diubah!');
  //               document.location.href= 'index.php';
  //         </script>
  //         ";
  // // }else{
  // //           echo" 
  // //           <script > 
  // //               alert('Data Gagal Diubah!');
  // //               document.location.href= 'index.php';
  // //           </script>";
  //     }
  //Data Berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
      <script >
          alert('Data Berhasil Diubah!');
            document.location.href= 'index.php';
      </script>
      ";
  } else
    echo " 
        <script > 
            alert('Data Gagal Diubah!');
            document.location.href= 'index.php';
        </script>";
}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <title>Ubah Data Mahasiswa</title>
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
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
          <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" required value="<?= $mhs["nama"]; ?>">
          </div>
          <div class="form-group">
            <label for="nim">NIM </label>
            <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nimHelp" placeholder=" Masukan NIM" required value="<?= $mhs["nim"]; ?>">
          </div>
          <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select name="kelas" class="form-control">
              <option value="<?= $mhs["kelas"]; ?>"><?= $mhs["kelas"]; ?></option>
              <option value="A" <?php if ($mhs["kelas"] == 'A') {
                                  echo 'selected';
                                } ?> class="form-control">A</option>

              <option value="B" <?php if ($mhs["kelas"] == 'B') {
                                  echo 'selected';
                                } ?>class="form-control">B</option>
              <option value="C" <?php if ($mhs["kelas"] == 'C') {
                                  echo 'selected';
                                } ?>class="form-control">C</option>
              <option value="D" <?php if ($mhs["kelas"] == 'D') {
                                  echo 'selected';
                                } ?>class="form-control">D</option>
              <option value="E" <?php if ($mhs["kelas"] == 'E') {
                                  echo 'selected';
                                } ?>class="form-control">E</option>
            </select>
            <div><br>
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input type="email" class="form-control" name="email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" required value="<?= $mhs["email"]; ?>">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan:</label>
              <select name="jurusan" class="form-control">
                <option value="<?= $mhs["jurusan"]; ?>" class="form-control"><?= $mhs["jurusan"]; ?></option>
                <option value="S1 - Teknik Informatika" <?php if ($mhs["jurusan"] === 'S1 - Teknik Informatika') {
                                                          echo 'selected';
                                                        } ?>class="form-control">S1 - Teknik Informatika</option>
                <option value="S1 - Teknik Industri" <?php if ($mhs["jurusan"] == 'S1 - Teknik Industri') {
                                                        echo 'selected';
                                                      } ?>class="form-control">S1 - Teknik Industri</option>
                <option value="S1 - Teknik Sipil" <?php if ($mhs["jurusan"] === 'S1 - Teknik Sipil') {
                                                    echo 'selected';
                                                  } ?>class="form-control">S1 - Teknik Sipil</option>
                <option value="S1 - Arsitek" <?php if ($mhs["jurusan"] == 'S1 - Arsitek') {
                                                echo 'selected';
                                              } ?>class="form-control">S1 - Arsitek</option>
                <option value="S1 - Sistem Informasi" <?php if ($mhs["jurusan"] == 'S1 - Sistem Informasi') {
                                                        echo 'selected';
                                                      } ?>class="form-control">S1 - Sistem Informasi</option>
              </select>
              <div><br>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label><br>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["gambar"]; ?>" width="50"> <br>
                <!-- <textarea name="gambar" id=gambar class="form-control"  placeholder="Masukan Gambar Anda" required "></textarea> -->
                <input type="file" class="form-control" name="gambar" id="gambar" aria-describedby="gambarHelp" placeholder="Masukan Email" aria-label="Upload" aria-selected="<?= $mhs["gambar"]; ?>">
              </div>
              <br>
              <button type="submit" name="submit" class="btn btn-primary" placeholder>Ubah Data!</button>
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