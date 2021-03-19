<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN MAHASISWA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body onload="window.print()">
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
                 <div class="card-header">
                
                <h3 class="card-title">Status KRS</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item" ><ion-icon name="print-outline"></ion-icon><a class="page-link" href="pdf.php?nrp=" target="_BLANK">PRINT</a></li>
                    
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
                      <th>Status</th>
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
                     <td><?php echo $row['approval']; ?></td>
                     </tr>
                  </tbody>
                   <?php
                          
                          }
                                 ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- <a </a> -->
            <!-- <button class="btn btn-primary waves-effect" type="submit">Cetak</button> -->
            <!-- /.card -->

            
    </section>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
