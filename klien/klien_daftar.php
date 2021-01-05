<!DOCTYPE html>
<html lang="en">
<head>
  <title>Penjadwalan Konseling</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../assets/images/logo2.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <style media="screen">
  	body { padding-top: 70px; }
    h3, h5 {

      color: #424e5e;
    }
    h4{
      color: 	#d34e5b;
    }

  </style>
</head>
<body>
    <?php
    include "navbar.php";
     ?>
  <div class="container">
    <?php
    include "klien_login.php";
    include "konselor_login.php";
     ?>
     
     <?php
include ("../config.php");
if(isset($_POST['submit'])){
 $nama = $_POST['nama'];
 $username = $_POST['username'];
 $prodi = $_POST['prodi'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $sql = "insert into klien(nama,username,prodi,email,password) values ('$nama','$username','$prodi','$email','$password')";
 $query = mysqli_query($koneksi,$sql);
  if($query){
    echo "<script> alert(\"Daftar Berhasil. Silakan Login Untuk Memilih Jadwal....\"); window.location = \"klien_daftar.php\"; </script>";
		 }
	else
	{
    echo "<script> alert(\"Maaf!! Silakan Cek Kembali Form Yang Telah Anda Isi\"); window.location = \"klien_daftar.php\"; </script>";
	}
}
  ?>
    <h5><b>Form Registrasi</b></h5>
    <hr>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-3"></div>
      <div class="col-sm-8">

      </div>
    </div>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <div class="col-sm-1"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
          <h3><b>Sekarang Anda Mendaftar Sebagai Klien</b></h3>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-3" for="name">Nama Lengkap</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nama" id="pwd" placeholder="Nama Lengkap" required>
        </div>
        <div class="col-sm-4"></div>
      </div>
      
       <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-3" for="username">Username</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="username" id="pwd" placeholder="Username" required>
        </div>
        <div class="col-sm-4"></div>
      </div>

      <div class="form-group">
            <div class="col-sm-3"></div>
            <label class="control-label col-sm-1" for="prodi">Prodi</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi" required>
            </div>
            <div class="col-sm-4"></div>
          </div>

			<div class="form-group">
            <div class="col-sm-3"></div>
            <label class="control-label col-sm-1" for="email">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" name="email" id="pwd" placeholder="Email" required>
            </div>
            <div class="col-sm-4"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <label class="control-label col-sm-3" for="password">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-sm-4"></div>
          </div>
              <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-danger btn-block" name="submit">Daftar</button>
                </div>
                <div class="col-sm-5"></div>
              </div>

    </form>
    
  </div>
  <br><br><br><br><br>
</body>
<!-- jQuery -->
    <script src="../admin/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../admin/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../admin/assets/vendors/nprogress/nprogress.js"></script>
  <!-- jQuery Smart Wizard -->
    <script src="../admin/assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../admin/assets/build/js/custom.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/min/moment.min.js"></script>
    <script src="../admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../assets/js/moment.js"></script>
<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#datetimepicker').datetimepicker({
					format: 'DD MMMM YYYY HH:mm',
                });
				
				$('#datepicker').datetimepicker({
					format: 'YYYY-MM-DD',
				});
				
				$('#timepicker').datetimepicker({
					format: 'HH:mm'
				});
			});
		</script>

</html>
