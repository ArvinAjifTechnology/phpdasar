<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
require 'functions.php';


// cek apakah tombol sudah ditekan atau belum

if (isset($_POST["submit"]) > 0) {
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
  if (tambah($_POST) > 0) {
    echo "
      <script >
          alert('Data Berhasil Ditambahkan!');
            document.location.href= 'index.php';
      </script>
      ";
  } else
    echo " 
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
$sukses = ("Data Berhasil Ditambahkan!");
$error = ("Data Berhasil Ditambahkan!");



?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nameHelp" placeholder="Masukan Nama Anda" required value="<?= $faker->name; ?>">
          </div>
          <div class="form-group">
            <label for="nim">NIM </label>
            <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nimHelp" placeholder=" Masukan NIM Anda" required">
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
              <input type="email" class="form-control" name="email" id="enail" aria-describedby="emailHelp" placeholder="Masukan Email" required value="<?= $faker->email; ?>">
              <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
                <input type="file" class="form-file" name="gambar" id="gambar" aria-describedby="gambarHelp" placeholder="" aria-label="Upload" required>
              </div>
              <!-- <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" name="gambar"id="gambar">
              </div> -->

              <button type="submit" name="submit" class="btn btn-primary" placeholder>Kirim Sekarang</button>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>


</body>

</html>