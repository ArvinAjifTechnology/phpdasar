<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET["id"];

if(hapusdatamahasiswa ($id) > 0 ) {
    echo "
     <script >
        alert('Data Berhasil Dihapus!');
          document.location.href= 'index.php';
    </script>
     ";
} else {
    echo "
    <script >
       alert('Data Gagal Dihapus!');
         document.location.href= 'inde.php';
   </script>
    ";
}
