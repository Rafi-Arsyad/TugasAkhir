<!DOCTYPE html>
<html lang="en">
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
			padding-top: 50px;
			background-color:#FFF;	
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
       color: #312E81;
    }

    .footer{

      height: : 50px;
    }

   #sidebar{
    float: right;
    width: 350px;
    margin: 0 auto;
    padding: 10px;
}
    
    /* Add a gray background color and some padding to the footer */
  </style>
</head>
<body>
  <?php
    include "navbar.php";
    include "klien_login.php";
    include "konselor_login.php";
  ?>

<div class="container-fluid" >
     <br>
	<h3 class="display-2 text-center" >Penjadwalan Konseling</h3>
</div>
        <!-- Page Container -->
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
       <img src="assets/images/wallpaper.png" alt="logo" style="width:650px" height="300px">
    <div id="sidebar" >
      <div class="row">
        <div class="col">
          <form action="" method="post">
            
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="username"class="form-control" placeholder="Masukkan Username" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan password" id="pwd">
            </div>
            <div class="form-group form-check">
              <label>
                <a href="" data-toggle="modal" data-target="#Modal2">Masuk Sebagai Konselor</a>
              </label>
            </div>
                <button type="submit" class="btn btn-primary" name="loginklien">Login</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Registrasi</button>
                     <?php
          include ("config.php");
          if(isset($_POST['loginklien'])){
            $username = $_POST['username'];
            $email = $_POST['username'];
            $password = $_POST['password'];

            $sql = "select * from klien where username = '$username' or email = '$email' ";
            $query = mysqli_query($koneksi,$sql);
            
            $cek = mysqli_num_rows($query);
            
            if($cek <> 0 ){
              $sql_sel = mysqli_fetch_array($query);
              $cekuser = $sql_sel['username'];
              $cekemail = $sql_sel['email'];
              $cekpass = $sql_sel['password'];

                if($username == $cekuser || $email == $cekemail){
                  if($_POST['password'] == $cekpass){
                    $_SESSION['klien']=$cekuser;
                      echo "<script> window.location = \"home.php\"; </script>";
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
          </form>  
        </div>
        <br>
       <center><a href="" data-toggle="modal" data-target="#Modal2" class="text-center">Forget Password</a></center>
      </div>
  </div>
  
</div>		       
  <br>
<?php include ("footer.php"); ?>
</body>
</html>
