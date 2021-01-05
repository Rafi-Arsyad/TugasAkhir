<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
        <h4>Penjadwalan</h4>
        <hr class="w3-clear">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="panel-heading">
                             Pilih Penjadwalan Anda
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="proses.php" method="post">
                                <?php 
                                  if(isset($_SESSION['error'])){

                                
                                ?>

                                  <div class="alert">
                                    Jadwal Penuh
                                    <ul>
                                      <?php foreach ($_SESSION['error'] as $key => $value) {
                                        ?>
                                      <li>
                                        <?php echo $value ?>
                                      </li>

                                      <?php } ?>
                                    <ul>
                                  </div>
                                <?php

                                  }
                                  unset($_SESSION['error']); 

                                ?>

                                <?php 
                                  if(isset($_SESSION['rekomendasi'])){

                                
                                ?>
                                  <div class="alert">
                                    Jadwal Rekomendasi
                                    <ul>
                                      <?php foreach ($_SESSION['rekomendasi'] as $recommend) {
                                        ?>
                                      <li>
                                        <?php echo $recommend ?>
                                      </li>

                                      <?php } ?>
                                    <ul>
                                  </div>
                                <?php

                                  }
                                  unset($_SESSION['rekomendasi']); 

                                ?>


                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Sesi</th>
                                            <th>Tanggal</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th width="10px">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                            $no = 1;
                                            //$id_jadwal = $_POST['id_jadwal'];
                                            $sql_sel = "SELECT * FROM jadwal";
                                            $sql_janji = "SELECT * FROM janji where status = 1";

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
                                               <td>
                                                  <input type='checkbox' class='check-item' name='id_jadwal[]' value="<?php echo $sql_res['id_jadwal'] ?>" >
                                               </td>
                                               <!-- <td>
                                                  <input type='checkbox' class='check-item' name='id_jadwal[]' value="<?php echo $sql_res['id_jadwal'] ?>" <?php echo in_array($sql_res['id_jadwal'], $array_map_janji) ? "disabled" : ""; ?> >
                                               </td> -->
                                            </tr>
                                      <?php } ?> 
                                    </tbody>
                                </table>
                                <ul align="center">
                                    <input type="submit" name="submit" value="Kirim">
                                </ul>
                            </form>

        </div>
      </div>
        </div>
      </div>