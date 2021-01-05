<div id="Modal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Masuk Akun Konselor</h4>
      </div>
      <div class="modal-body">
        <br>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
              <p>
                Masuk dengan akun Konselor Anda
              </p>
          </div>
        </div>
        <form class="form-horizontal" method="post" action="">
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Username</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" id="pwd" placeholder="Enter email or username" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <a href="operator/opt_lupa.php">Lupa password?</a>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary" name="loginkonselor"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Masuk</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
    <?php 
  include ("../config.php");
  if(isset($_POST['loginkonselor'])){
    $username = $_POST['username'];
    $email = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from konselor where username = '$username' or email = '$email' ";
    $query = mysqli_query($koneksi,$sql);
    
    $cek = mysqli_num_rows($query);
    
    if($cek <> 0 ){
      $sql_sel = mysqli_fetch_array($query);
      $cekuser = $sql_sel['username'];
      $ceknama = $sql_sel['nama'];
      $cekemail = $sql_sel['email'];
      $cekpass = $sql_sel['password'];
      
        if($username == $cekuser || $email == $cekemail){
          if($_POST['password'] == $cekpass){
            session_start();
            $_SESSION['konselorname']=$ceknama;
            $_SESSION['konselor']=$cekuser;
              echo "<script> window.location = \"index.php\"; </script>";
            } else {
              echo "<script> alert(\"Password Salah\"); window.location = \"index.php\"; </script>";
            }
          } else {
            echo "<script> alert(\"Username atau Email Salah\"); window.location = \"index.php\"; </script>"; 
          }
      } else {
        echo "<script> alert(\"Username atau Email tidak ditemukan\"); window.location = \"index.php\"; </script>";
        }
  
  }
  ?>
    

  </div>
</div>
