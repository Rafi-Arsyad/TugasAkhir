 <?php
 include ("../config.php");
 	session_start();
     if(isset($_POST['submit'])) {
        
        $chkarr = $_POST['id_jadwal'];
        $username = $_SESSION['klien'];

        foreach ($chkarr as $key => $id ) {

        	$checkQuery = mysqli_query($koneksi,"SELECT * FROM janji where id_jadwal = $id");
        	$jadwalQuery = mysqli_query($koneksi,"SELECT * FROM jadwal where id_jadwal = $id");
        	

        	// var_dump($checkQuery);
        	// die();
        	$checkNumRows = mysqli_num_rows($checkQuery);
        	// var_dump($checkNumRows);
        	// die();
        	$data = mysqli_fetch_array($checkQuery);
        	$getData = mysqli_fetch_array($jadwalQuery);
        	$getHari = $getData['hari'];
        	$getPsikolog = $getData['psikolog'];
        	// $queryDoang = "SELECT * FROM jadwal where id_jadwal <> $id AND hari = '$getHari'";
        	$rekomendasiJadwalQUery = mysqli_query($koneksi,"SELECT * FROM jadwal where id_jadwal <> $id AND (hari = '$getHari' OR psikolog = '$getPsikolog')") or die(mysqli_error($koneksi));
        	
        	$getRekomendasiJadwal = mysqli_fetch_all($rekomendasiJadwalQUery,MYSQLI_ASSOC);

        	if($checkNumRows == 0){
        		mysqli_query($koneksi,"INSERT INTO janji(id_jadwal,psikolog,sesi,tgl,hari,jam_awal,jam_akhir,username) SELECT id_jadwal, psikolog,sesi,tgl,hari,jam_awal,jam_akhir,'$username' from jadwal WHERE id_jadwal = $id ") or die(mysqli_error($koneksi));
        	}else{
        		$_SESSION['error'][$key] = $getData['psikolog'].' Sesi '.$getData['sesi'].' '.$getData['tgl'].' '. $getData['hari']. ' '.$getData['jam_awal'].'-'.$getData['jam_akhir'].' Sudah Penuh' ;
        		foreach ($getRekomendasiJadwal as $key => $value) {
        			# code...
        			$_SESSION['rekomendasi'][$key] = $value['psikolog'].' Sesi '.$value['sesi'].' '.$value['tgl'].' '. $value['hari']. ' '.$value['jam_awal'].'-'.$value['jam_akhir'].' rekomendasi' ; 
        		}
        		
        	}
        	// var_dump(count($data) > 1);
        	// die();
        	// if($data)
        	// echo "<pre>";
        	// var_dump($data);
        	// echo "</pre>";
        	// die();
            
        }
        header("location:klien_profil.php");
}
?>