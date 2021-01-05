<?php

include_once("../config.php");
$id = $_GET['id_janji'];

$query = ("UPDATE janji SET status = '1' WHERE id_janji ='$id'");

 $result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
echo "<script>alert('Data berhasil diterima.');window.location='konselor_profil.php?url=history';</script>";
}

        
?>