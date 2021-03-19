 <section class="content">
      <div class="container-fluid">
       
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <form id="form_pemberi" method="POST">
              <div class="card-header">
                
                <h3 class="card-title">Daftar Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>NRP</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No. Telepon</th>
                      <th>Batas Studi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                      <!-- <th style="width: 40px">Pilih</th> -->
                    </tr>
                  </thead>
                  <tbody>
                     
                     <?php
                     $no=1;
                      
                           foreach ($daftarmahasiswa as $row) {
                             ?>
                             <tr>
                      <td><?php echo $no++; ?></td>
                     <td><?php echo $row['nrp']; ?></td>
                     <td><?php echo $row['nama_mhs']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['no_telp']; ?></td>
                     <td><?php echo $row['batas_studi']; ?></td>
                     <td><?php echo $row['status']; ?></td>
                     <td><a class="btn btn-primary" type="button" href="<?= site_url('detail/').$row['nrp']; ?> ">Detail</a></td>
                    </tr>
                     <?php
                            }
                                 ?>
                  </tbody>
                  <!-- <td> <a href </a></td> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      <!-- <button class="btn btn-primary waves-effect" type="submit">Simpan</button> -->
                            </form>
            
    </section>