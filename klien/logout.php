<?php
session_start();
unset($_SESSION['klien']);
echo "<script language='javascript'>alert('Terima kasih, Anda Berhasil Logout'); document.location='../index.php';</script>";
?>
