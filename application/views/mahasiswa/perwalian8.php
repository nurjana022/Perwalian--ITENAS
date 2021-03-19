<section class="content">
      <div class="container-fluid">
       
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <form id="perwalian" method="POST" action="<?= base_url('insertperwalian')?>" >
              <div class="card-header">
                
                <h3 class="card-title">Pilih Semester</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                  <li class="page-item"><a class="page-link" href="<?= site_url('perwalian1')?>">1</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian2')?>">2</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian3')?>">3</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian4')?>">4</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian5')?>">5</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian6')?>">6</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian7')?>">7</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian8')?>">8</a></li>
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwaliansemua')?>">Semua</a></li>
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
                      <th style="width: 40px">Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no=1;
                     $j=0;
                           foreach ($daftar8 as $row) {
                             ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                     <td><?php echo $row['kode_mk']; ?></td>
                     <td><?php echo $row['nama_mk']; ?></td>
                     <td><?php echo $row['sks']; ?></td>
                     <td><?php echo $row['kelas']; ?></td>
                     <td><?php echo $row['hari']; ?></td>
                     <td><?php echo $row['jam']; ?></td>
                     <input type="hidden" name="kode[<?php echo $j; ?>][kelas]" value="<?php echo $row['id_jadwal']; ?>">
                     <td><input type="checkbox" class="<?php echo $row['kode_mk']; ?> check" id="<?php echo $row['kode_mk'].$j; ?>" value="<?php echo $row['kode_mk']; ?>" name="kode[<?php echo $j; ?>][kode_mk]" onclick="myCheck('<?php echo $row['kode_mk'].$j; ?>')"></td>
                     <td>
                       

                     </td>
                     </tr>
                             <?php
                          $j++; 
                          }
                                 ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <button class="btn btn-primary waves-effect" type="submit" name="submit" value="simpan">Simpan</button>
      </form>          
    </section>
