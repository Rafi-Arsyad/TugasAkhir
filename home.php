<!DOCTYPE html>
<html>
<head>
  <title>Penjadwalan Konseling || Home</title>
  <link rel="shortcut icon" href="assets/images/logo2.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/w3.css">
  <link rel="stylesheet" href="assets/css/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <style>
    body { 
      padding-top: 100px;
      background-color:#FFFF;  
     }
    .modal-title {
      color: #424e5e;
    }
    .img-responsive {
    height: auto;
    width: auto;
    max-height: 72px;
    max-width: 250px;
    }
    a {
      color: #870000;
    }

    @font-face{
      font-family: 'font';
      src:url(Dashing-PersonalUse.otf);
    }

    h3{
       font-family: 'font';
       font-size: 50pt;
    }

    #footer{
     
      height: 50px;
    }

   #sidebar{
    float: right;
    width: 250px;
    margin: 0 auto;
    padding: 10px;
}
    
    /* Add a gray background color and some padding to the footer */
  </style>
</head>
<body>
 <?php
    include "navbar.php";
 ?>
 <div class="container">
   <div class="card">
     <div class="card-body">
      <table class="table table-bordered table-striped">
        <caption>List Jadwal Konseling</caption>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Sesi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam Mulai</th>
            <th scope="col">Jam Selesai</th>
          </tr>
        </thead>
        <tbody>
          <?php
           $no = 1;
          //$id_jadwal = $_POST['id_jadwal'];
          $sql_sel = "SELECT * FROM jadwal";
          $sql_janji = "SELECT * FROM janji";

          $query_janji = mysqli_query($koneksi,$sql_janji);
          $janji_data = mysqli_fetch_all($query_janji,MYSQLI_ASSOC);
          $array_map_janji = array_column($janji_data,"id_jadwal");
          //var_dump($array_map_janji);
          $query_sel = mysqli_query($koneksi,$sql_sel);
          while($sql_res = mysqli_fetch_array($query_sel)){
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $sql_res['psikolog']; ?></td>
            <td><?php echo $sql_res['sesi']; ?></td>
            <td><?php echo $sql_res['tgl']; ?></td>
            <td><?php echo $sql_res['hari']; ?></td>
            <td><?php echo $sql_res['jam_awal']; ?></td>
            <td><?php echo $sql_res['jam_akhir']; ?></td>
          </tr>
          <?php } ?> 
        </tbody>
      </table>
     </div>
   </div>
 </div>
 <br>
 <br>
 <?php include ("footer.php"); ?>
</body>
</html>