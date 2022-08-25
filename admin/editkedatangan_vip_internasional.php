<?php 
include 'menu.php';
include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | SI Deket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data T1A Kedatangan Internasional</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Data T1 Kedatangan VIP Internasional</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- <div class="card-header">
                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus" title="Penduduk Tetap"></i>&nbsp;Tambah Data</a>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                  $ambil= $koneksi->query("SELECT * FROM t1vipintlkedatangan WHERE id_kedatangan='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Tanggal Kedatangan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="tanggal_kedatangan" value="<?php echo $pecah ['tanggal_kedatangan']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jumlah Pesawat</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="jlhpesawat_kedatangan" value="<?php echo $pecah ['jlhpesawat_kedatangan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Pax Kedatangan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="pax_kedatangan" value="<?php echo $pecah ['pax_kedatangan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Personil Kedatangan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="personil_kedatangan" value="<?php echo $pecah ['personil_kedatangan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Scan PL</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="scan_pl" value="<?php echo $pecah ['scan_pl']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Scan PL Hasil Hijau</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="scanpl_hasilhijau" value="<?php echo $pecah ['scanpl_hasilhijau']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Scan PL Hasil Merah</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="scanpl_hasilmerah" value="<?php echo $pecah ['scanpl_hasilmerah']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Tidak Scan PL</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="tidak_scanpl" value="<?php echo $pecah ['tidak_scanpl']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Vaksin Lengkap WNI</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="vaksinlengkap_wni" value="<?php echo $pecah ['vaksinlengkap_wni']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Vaksin Lengkap WNA</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="vaksinlengkap_wna" value="<?php echo $pecah ['vaksinlengkap_wna']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Vaksin Tidak Lengkap WNI</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="vaksintidaklengkap_wni" value="<?php echo $pecah ['vaksintidaklengkap_wni']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Vaksin Tidak Lengkap WNI</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="vaksintidaklengkap_wna" value="<?php echo $pecah ['vaksintidaklengkap_wna']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jumlah Pax PCR WNI</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="jlhpaxpcr_wni" value="<?php echo $pecah ['jlhpaxpcr_wni']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jumlah Pax PCR WNA</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="jlhpaxpcr_wna" value="<?php echo $pecah ['jlhpaxpcr_wna']; ?>">
                    </div>
                  </div>

                  
                  <button class="btn btn-sm btn-primary" name="ubah"><i class="fa fa-check"></i>&nbsp;Edit</button>
                </form>

                <?php 
                  if (isset($_POST['ubah'])) 
                  { 
                    $koneksi->query(" UPDATE t1vipintlkedatangan SET tanggal_kedatangan = '$_POST[tanggal_kedatangan]', jlhpesawat_kedatangan = '$_POST[jlhpesawat_kedatangan]',pax_kedatangan = '$_POST[pax_kedatangan]' ,personil_kedatangan = '$_POST[personil_kedatangan]',scan_pl = '$_POST[scan_pl]',scanpl_hasilhijau = '$_POST[scanpl_hasilhijau]',scanpl_hasilmerah = '$_POST[scanpl_hasilmerah]',tidak_scanpl = '$_POST[tidak_scanpl]',vaksinlengkap_wni = '$_POST[vaksinlengkap_wni]',vaksinlengkap_wna = '$_POST[vaksinlengkap_wna]',vaksintidaklengkap_wni = '$_POST[vaksintidaklengkap_wni]',vaksintidaklengkap_wna = '$_POST[vaksintidaklengkap_wna]',jlhpaxpcr_wni = '$_POST[jlhpaxpcr_wni]',jlhpaxpcr_wna = '$_POST[jlhpaxpcr_wna]' WHERE id_kedatangan ='$_GET[id]'");


                    echo "<script>alert('Data Berhasil Diubah');</script>";
                    echo "<script>location='terminalkedatangan_vip_internasional.php';</script>";

                  }
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Desa Ketenger</b>
    </div>
    <strong>Copyright &copy; 2022 | Sistem Informasi Desa Ketenger</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
