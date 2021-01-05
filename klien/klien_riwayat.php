<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
        <h4>Riwayat Penjadwalan</h4>
        <hr class="w3-clear">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="panel-heading">
                             Tabel Riwayat Penjadwalan Anda
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
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
                                            <th width="10px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                            $no = 1;
                                            /*$id_jadwal = $_POST['id_jadwal'];*/
                                            $getusername = $_SESSION['klien']; 
                                     		$sql_sel = "select * from janji where username = '$getusername'";
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
                                                   <?php echo $sql_res['status'] == 1 ? 'approve' : 'decline'; ?>
                                                  </td>
                                            </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
        </div>
      </div>
        </div>
      </div>