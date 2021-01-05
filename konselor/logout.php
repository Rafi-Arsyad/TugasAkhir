<?php
session_start();
unset($_SESSION['konselor']);
unset($_SESSION['konselorname']);
echo "<script language='javascript'>alert('Terima kasih, Anda Berhasil Logout'); document.location='../index.php';</script>";
?>
