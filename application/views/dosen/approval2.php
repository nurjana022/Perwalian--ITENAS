<section class="content">
      <div class="container-fluid">
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <form id="form_approval" method="POST" action="<?= base_url('insertapproval')?>">
              <div class="card-header">
                
                <h3 class="card-title">Daftar Mahasiswa</h3>

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
                      <th>Approve</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                          $no=1;
                           foreach ($detail as $row) { 
                              ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                     <td><?php echo $row['kode_mk']; ?></td>
                     <td><?php echo $row['nama_mk']; ?></td>
                     <td><?php echo $row['sks']; ?></td>
                     <td><?php echo $row['kelas']; ?></td>
                     <td><?php echo $row['hari']; ?></td>
                     <td><?php echo $row['jam']; ?></td>
                     <td> <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="materialInline<?php echo $no; ?>" name="approval[<?php echo $row['id_krsbaru'] ?>]" value="Terima">
                        <label class="form-check-label" for="materialInline<?php echo $no; ?>">Terima</label>
                      </div>

                      <!-- Material inline 2 -->
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="materialInline<?php echo $no+1; ?>" name="approval[<?php echo $row['id_krsbaru'] ?>]" value="Tolak">
                        <label class="form-check-label" for="materialInline<?php echo $no+1; ?>">Tolak</label>
                      </div>
                            </td>
                            <input type='hidden' name='nrp' value='<?php echo $row['nrp']?>'>
                                               </tr>

                     <?php
                            
                           }    
                                 ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      <button class="btn btn-primary waves-effect" type="submit" name="submit">Simpan</button>
                            </form>

     <?php
       ?>
            
    </section>