<section class="content">
      <div class="container-fluid">
       
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
              <form id="perwalian" method="POST" action="<?= site_url('batal') ?>">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">BDATM</h3>

                 <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="<?= site_url('perwalian') ?>">Tambah Matakuliah</a></li>
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
                      <th>Batal</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                     <?php
                     $no=1;

                           foreach ($daftarkrs as $row) {
                             $nrp = $row["nrp"];
                             ?>
                    <td><?php echo $no++; ?></td>
                     <td><?php echo $row['kode_mk']; ?></td>
                     <td><?php echo $row['nama_mk']; ?></td>
                     <td><?php echo $row['sks']; ?></td>
                     <td><?php echo $row['kelas']; ?></td>
                     <td><?php echo $row['hari']; ?></td>
                     <td><?php echo $row['jam']; ?></td>
                     <td><input type="checkbox" value="<?php echo $row['id_krsbaru']; ?>" name="batal[]"></td>
                     </tr>
                  </tbody>
                   <?php
                          
                          }
                                 ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <button class="btn btn-primary waves-effect" type="submit" name="delete">Simpan</button>
            <!-- /.card -->
                              </form>
                               </form>
        <?php
   
       ?>
            
    </section>