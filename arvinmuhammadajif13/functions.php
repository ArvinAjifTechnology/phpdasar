<?php
// Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "arvinmuhammadajif");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    // $gambar= htmlspecialchars($data["gambar"]); 
    //$sukses=[""];
    //$error=[""];

    $query = "INSERT INTO mahasiswa 
   VALUES
   ('', '$nama','$nim', '$kelas', '$email', '$jurusan', '$gambar')";
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

    $q1 = mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{

    // $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $namaFile = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah ada gambar/tidak

    if ($error === 4) {
        echo "
        <script >
            alert('Silahkan Pilih Gambar!');
            document.location.href= 'index.php';
        </script>
        ";
        return false;
    }
    // Cek apakah yangDiupload Gambar/Bukan
    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    // $ekstensiGambarvalid = array('jpg', 'jpeg', 'png');
    $x = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($x));
    if (!in_array($ekstensiGambar, $ekstensiGambarvalid)) {
        echo "
        <script >
            alert('Silahkan Pilih Gambar Dengan gambar yang valid!');
        </script>
        ";
       return false;
    }
    // var_dump(explode('.', $namaFile));
    // die;
     
    // Cek Jika Ukuran Nya Terlalu Besar
    if ($ukuranFile > 100000000) {
        echo "
    <script >
        alert('Ukuran Gambar Terlalu Besar!');
    </script>
    ";
        return false;
    } 

    //Lolos Pengecekan, Gambar Siap :Di Upload
    //Generate Uniq ID
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'img/'. $namaFileBaru);
    return $namaFileBaru;
}



function tambahform($data)
{
    global $conn;

    $nopendaftar = $data["nopendaftar"];
    $nama = $data["nama"];
    $nisn = $data["nisn"];
    $nis = $data["nis"];
    $gender = $data["gender"];
    $tempat = $data["tempat"];
    $bday = $data["bday"];
    $agama = $data["agama"];
    $blood = $data["blood"];
    $anakke = $data["anakke"];
    $dari = $data["dari"];
    $StatusDalamKeluarga = $data["StatusDalamKeluarga"];
    $kampung = $data["kampung"];
    $desa = $data["desa"];
    $kecamatan = $data["kecamatan"];
    $phone = $data["phone"];
    $juara = $data["juara"];
    $juara2 = $data["juara2"];
    $juara3 = $data["juara3"];
    $bidang = $data["bidang"];
    $bidang2 = $data["bidang2"];
    $bidang3 = $data["StatusDalamKeluarga"];
    $jurusan = $data["jurusan"];
    $asalsekolah = $data["asalsekolah"];
    $alamatsekolah = $data["alamatsekolah"];
    $nosttb = $data["nosttb"];
    $tahun = $data["tahun"];
    $namaayah = $data["namaayah"];
    $namaibu = $data["namaibu"];
    $pekerjaanayah = $data["pekerjaanayah"];
    $kampung2 = $data["kampung2"];
    $desa2 = $data["desa2"];
    $kecamatan2 = $data["kecamatan2"];
    $phone2 = $data["phone2"];
    $penghasilan = $data["penghasilan"];
    $namawali = $data["namawali"];
    $pekerjaanwali = $data["pekerjaanwali"];
    $pekerjaanibu = $data["pekerjaanibu"];
    $kampung3 = $data["kampung3"];
    $desa3 = $data["desa3"];
    $kecamatan3 = $data["kecamatan3"];
    $phone3 = $data["phone3"];
    $penghasilan2 = $data["penghasilan2"];





    $query = "INSERT INTO form
   VALUES
   ('', '$nopendaftar', '$nama', '$nisn', '$nis', '$gender', '$tempat', '$bday', '$agama', '$blood', '$anakke', '$dari', '$StatusDalamKeluarga', '$kampung', '$desa', '$kecamatan', '$phone','$bidang', '$jurusan', '$asalsekolah', '$alamatsekolah', '$nosttb', '$tahun', '$namaayah', '$namaibu', '$pekerjaanayah', '$pekerjaanibu', '$kampung2', '$desa2', '$kecamatan2', '$phone2', '$penghasilan', '$namawali', '$pekerjaanwali', '$kampung3', '$desa3', '$kecamatan3', '$phone3', '$penghasilan2')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hubungi2($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $email = htmlspecialchars($data["email"]);
    $subjek = htmlspecialchars($data["subjek"]);
    $tatanya = htmlspecialchars($data["tatanya"]);

    $query = "INSERT INTO hubungi2 
   VALUES
   ('', '$nama','$nohp', '$email', '$subjek', '$tatanya')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahdatakontak($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $subjek = htmlspecialchars($data["subjek"]);
    $tatanya = htmlspecialchars($data["tatanya"]);

    $query = "INSERT INTO hubungi2 
   VALUES
   ('', '$nama','$nim', '$email', '$subjek', '$tatanya')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM hubungi WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus2($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM hubungi2 WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapusdatamahasiswa($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;
        // $id = htmlspecialchars($data["id"]);
        $id = $_GET["id"];
        // $gambar = $_GET["gambar"];
        // $gambarlama=mysqli_fetch_array($gambar);
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // $gambar2 = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE gambar = $gambar2");
        // $gambarlama=mysqli_fetch_array($gambar2);
        // $gambarlama =$data["gambar"];
        // var_dump($gambar2);
        // die;
//         $gambar= htmlspecialchars($data["gambar"]); 
//         $nama = htmlspecialchars($_POST["nama"]);
//         $nim = htmlspecialchars($_POST["nim"]);
//         $kelas = htmlspecialchars($_POST["kelas"]);
//         $email = htmlspecialchars($_POST["email"]);
//         $jurusan = htmlspecialchars($_POST["jurusan"]);
            $gambarlama= htmlspecialchars($data["gambar"]);
        // $gambar = htmlspecialchars($data["gambar"]);
        // Ada Gambar/Tidak
        if ( $_FILES['gambar']['error'] === 4) {
        // if ( $_FILES['gambar']) {
            $gambar = $gambarlama;
        //     // $gambar;
        }else {
            $gambar = upload();
        //     // if ($gambar === false) {
        //     //   // $gambar = $gambarLama;
        //     //   $gambar;
        //     // }
        }
        // if (is_file("img/" . $data['gambar'])) {
        //     unlink("img/" . $data['gambar']);
        // }

       $query = "UPDATE mahasiswa SET
                    nim = '$nim',
                    nama = '$nama',
                    kelas = '$kelas',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    WHERE  id = '$id'
                ";

//     mysqli_query($conn,"UPDATE mahasiswa SET
//     nim = '$nim',
//     nama = '$nama',
//     kelas = '$kelas',
//     email = '$email',
//     jurusan = '$jurusan',
//     gambar = '$gambar'
//     WHERE id = '$id'
// ") 
// // }
// or die(mysqli_error($conn));
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);



}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
    ";

    return query($query);
}
