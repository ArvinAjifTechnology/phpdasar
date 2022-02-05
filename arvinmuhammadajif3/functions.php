<?php 
// Koneksi Ke Database
$conn=mysqli_connect("localhost" , "root", "", "arvinmuhammadajif");

function query($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) )  {
        $rows [] = $row;
    }
    return $rows;
}


function hubungi($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $email = htmlspecialchars($data["email"]);
    $subjek = htmlspecialchars($data["subjek"]);
    $tatanya= htmlspecialchars($data["tatanya"]); 
     
   $query = "INSERT INTO hubungi 
   VALUES
   ('', '$nama','$nohp', '$email', '$subjek', '$tatanya')";
 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);


}

function tambahform($data) {
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
    $StatusDalamKeluarga= $data["StatusDalamKeluarga"];
    $kampung= $data["kampung"];
    $desa= $data["desa"];
    $kecamatan= $data["kecamatan"];
    $phone= $data["phone"];
    $juara= $data["juara"];
    $juara2= $data["juara2"];
    $juara3= $data["juara3"];
    $bidang= $data["bidang"];
    $bidang2= $data["bidang2"];
    $bidang3= $data["StatusDalamKeluarga"];
    $jurusan= $data["jurusan"];
    $asalsekolah= $data["asalsekolah"];
    $alamatsekolah= $data["alamatsekolah"];
    $nosttb= $data["nosttb"];
    $tahun= $data["tahun"];
    $namaayah= $data["namaayah"];
    $namaibu= $data["namaibu"];
    $pekerjaanayah= $data["pekerjaanayah"];
    $kampung2= $data["kampung2"];
    $desa2= $data["desa2"];
    $kecamatan2= $data["kecamatan2"];
    $phone2= $data["phone2"];
    $penghasilan= $data["penghasilan"];
    $namawali= $data["namawali"];
    $pekerjaanwali= $data["pekerjaanwali"];
    $pekerjaanibu= $data["pekerjaanibu"];
    $kampung3= $data["kampung3"];
    $desa3= $data["desa3"];
    $kecamatan3= $data["kecamatan3"];
    $phone3= $data["phone3"];
    $penghasilan2= $data["penghasilan2"];





    $query = "INSERT INTO form
   VALUES
   ('', '$nopendaftar', '$nama', '$nisn', '$nis', '$gender', '$tempat', '$bday', '$agama', '$blood', '$anakke', '$dari', '$StatusDalamKeluarga', '$kampung', '$desa', '$kecamatan', '$phone','$bidang', '$jurusan', '$asalsekolah', '$alamatsekolah', '$nosttb', '$tahun', '$namaayah', '$namaibu', '$pekerjaanayah', '$pekerjaanibu', '$kampung2', '$desa2', '$kecamatan2', '$phone2', '$penghasilan', '$namawali', '$pekerjaanwali', '$kampung3', '$desa3', '$kecamatan3', '$phone3', '$penghasilan2')";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);





}


function hubungi2($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $email = htmlspecialchars($data["email"]);
    $subjek = htmlspecialchars($data["subjek"]);
    $tatanya= htmlspecialchars($data["tatanya"]); 
     
   $query = "INSERT INTO hubungi2 
   VALUES
   ('', '$nama','$nohp', '$email', '$subjek', '$tatanya')";
 
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);


}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM hubungi WHERE id = $id");
    return mysqli_affected_rows($conn); 
}

function hapus2($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM hubungi2 WHERE id = $id");
    return mysqli_affected_rows($conn); 
}
    









?>