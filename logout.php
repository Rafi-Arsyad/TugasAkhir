<?php
session_start();
if(isset($_SESSION['konselor'])){
	unset($_SESSION['konselor']);
	}
elseif(isset($_SESSION['klien'])){
	unset($_SESSION['klien']);
	}

echo "<script language='javascript'>alert('Terima kasih, Anda Berhasil Logout'); document.location='index.php';</script>";
?>
