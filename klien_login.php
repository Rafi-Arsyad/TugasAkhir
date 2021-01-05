<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendaftaran Akun</h4>
      </div>
      <div class="modal-body">
        <br>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
              <p>
                Buat akun penjadwalan konseling anda
              </p>
          </div>
        </div>
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="Username">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Username</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Prodi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
    <?php
      include ("config.php");
      if(isset($_POST['submit'])){
       $nama = $_POST['nama'];
       $username = $_POST['username'];
       $prodi = $_POST['prodi'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       $sql = "insert into klien(nama,username,prodi,email,password) values ('$nama','$username','$prodi','$email','$password')";
       $query = mysqli_query($koneksi,$sql);
        if($query){
          echo "<script> alert(\"Daftar Berhasil. Silakan Login Untuk Memilih Jadwal....\"); window.location = \"index.php\"; </script>";
           }
        else
        {
          echo "<script> alert(\"Maaf!! Silakan Cek Kembali Form Yang Telah Anda Isi\"); window.location = \"index.php\"; </script>";
        }
      }
      ?>
  </div>
</div>
