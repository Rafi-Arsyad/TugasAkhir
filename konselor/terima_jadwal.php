<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
        <h4>Penjadwalan</h4>
        <hr class="w3-clear">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="panel-heading">
                             Terima Penjadwalan Klien
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
                                            <th>Nama Klien</th>
                                            <th width="10px">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            /*$id_jadwal = $_GET['id_jadwal'];*/
                                            $no = 1;
                                            $nama_konselor = $_SESSION['konselorname'];

                                            $sql_sel = "select * from janji where psikolog = '$nama_konselor' AND status_riwayat = 0";
                                            $query_sel = mysqli_query($koneksi,$sql_sel);
                                            while($sql_res = mysqli_fetch_array($query_sel)){
                                                                                
                                        ?>
                                            <tr>
                                                 <td><?php echo $no++ ?></td>
                                                 <input type="hidden" name="id_jadwal" value="<?php echo $sql_res['id_jadwal'] ?>">
                                                 <td><?php echo $sql_res['psikolog']; ?></td>
                                                 <td><?php echo $sql_res['sesi']; ?></td>
                                                 <td><?php echo $sql_res['tgl']; ?></td>
                                                 <td><?php echo $sql_res['hari']; ?></td>
                                                 <td><?php echo $sql_res['jam_awal']; ?></td>
                                                 <td><?php echo $sql_res['jam_akhir']; ?></td>
                                                 <td><?php echo $sql_res['username']?></td>

                                                  <td>
                                                    <?php if($sql_res['status'] != 1): ?>
                                                    <a class="approve"  href="proses.php?id_janji=<?php echo $sql_res['id_janji']; ?>">Approve</a> 

                                                    <a class="hapus" href="hapus.php?id=<?php echo $sql_res['id_janji']; ?>">Decline</a> 
                                                    <?php else: ?>
                                                        <a class="selesai" href="proses_riwayat.php?id_janji=<?php echo $sql_res['id_janji']; ?>"> Selesai </a>
                                                    <?php endif; ?>
                                                  </td>
                                            </tr>
                                      <?php } ?> 
                                    </tbody>
                                </table>

        </div>
      </div>
        </div>
      </div>