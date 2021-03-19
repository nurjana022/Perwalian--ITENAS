 <section class="content">
      <div class="container-fluid">
       
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
							<h5 class="text-center">Tahun Ajaran <?= Ajaran(); ?></h5>
                <h3 class="card-title">Pilih Semester</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                   <li class="page-item"><a class="page-link" href="<?= site_url('jadwal1')?>">1</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal2')?>">2</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal3')?>">3</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal4')?>">4</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal5')?>">5</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal6')?>">6</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal7')?>">7</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwal8')?>">8</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('jadwalsemua')?>">Semua</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kode Matakuliah</th>
                      <th>Matakuliah</th>
                      <th>SKS</th>
                      <th>Kelas</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                     <?php
										 $no=1;
										 $current = date('Y-m-d');
										 $bulan = date("m", strtotime($current));
                         foreach ($daftarjadwal8 as $row) {
													if($bulan >= 2 && $bulan <=5) {
                             ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                     <td><?php echo $row['kode_mk']; ?></td>
                     <td><?php echo $row['nama_mk']; ?></td>
                     <td><?php echo $row['sks']; ?></td>
                     <td><?php echo $row['kelas']; ?></td>
                     <td><?php echo $row['hari']; ?></td>
                     <td><?php echo $row['jam']; ?></td>    

                     </td>
                     </tr>
													<?php }
                          }
                                 ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
    </section>
