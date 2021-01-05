<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap online -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt="logo" style="width:110px">
      </a>  
    <ul class="navbar-nav ml-auto">
      <a href="../daftar.php" class="btn btn-danger">Daftar</a>
    </ul>   
  </nav>
  <br>
<div class="container">
 <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Sesi</th>
        <th>Tanggal</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      include '../config.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from jadwal");
      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['psikolog']; ?></td>
        <td><?php echo $d['sesi']; ?></td>
        <td><?php echo $d['tgl']; ?></td>
        <td><?php echo $d['hari']; ?></td>
        <td><?php echo $d['jam_awal']; ?></td>
        <td><?php echo $d['jam_akhir']; ?></td>
      </tr>
      <?php 
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html> 