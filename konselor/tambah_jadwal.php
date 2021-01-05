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
    include"navbar.php";
     ?>
  <div class="container">
    <?php
    include "konselor_login.php";
     ?>
     
     <?php
    include ("../config.php");
    if(isset($_POST['submit'])){
     $psikolog = $_POST['psikolog'];
     $sesi = $_POST['sesi'];
     $tgl = $_POST['tgl'];
     $hari = $_POST['hari'];
     $jam_awal = $_POST['jam_awal'];
     $jam_akhir = $_POST['jam_akhir'];

     $sql = "insert into jadwal(psikolog,sesi,tgl,hari,jam_awal,jam_akhir) values ('$psikolog','$sesi','$tgl','$hari','$jam_awal','$jam_akhir')";
     $query = mysqli_query($koneksi,$sql);
      if($query){
        echo "<script> alert(\"Tambah Jadwal Berhasil.....\"); window.location = \"konselor_profil.php\"; </script>";
    		 }
    	else
    	{
    echo "<script> alert(\"Maaf!! Silakan Cek Kembali Form Yang Telah Anda Isi\"); window.location = \"tambah_jadwal.php\"; </script>";
	}
}
  ?>
    <h5><b>Tambah Jadwal</b></h5>
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
          <h3><b>Menambah Jadwal Konseling</b></h3>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-3" for="email">Nama Konselor</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="psikolog" id="pwd" placeholder="Nama Konselor" required>
        </div>
        <div class="col-sm-4"></div>
      </div>
      
       <div class="form-group">
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-3" for="email">Sesi</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="sesi" id="pwd" placeholder="Username" required>
        </div>
        <div class="col-sm-4"></div>
      </div>

      <div class="form-group">
            <div class="col-sm-3"></div>
            <label class="control-label col-sm-1" for="prodi">Tanggal</label>
            <div class="col-sm-4">
              <input type="datepicker" class="form-control" name="tgl" id="prodi" placeholder="YYYY-MM-DD" required>
            </div>
            <div class="col-sm-4"></div>
          </div>

			<div class="form-group">
            <div class="col-sm-3"></div>
            <label class="control-label col-sm-1" for="email">Hari</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="hari" id="hari" placeholder="Hari" required>
            </div>
            <div class="col-sm-4"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <label class="control-label col-sm-3" for="jam_awal">Jam Awal</label>
            <div class="col-sm-4">
              <input type="timepicker" class="form-control" id="jam_awal" name="jam_awal" placeholder="Jam Awal" required>
            </div>
            <div class="col-sm-4"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <label class="control-label col-sm-3" for="jam_akhir">Jam Akhir</label>
            <div class="col-sm-4">
              <input type="timepicker" class="form-control" id="jam_akhir" name="jam_akhir" placeholder="Jam Akhir" required>
            </div>
            <div class="col-sm-4"></div>
          </div>
              <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-danger btn-block" name="submit">Tambah</button>
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
