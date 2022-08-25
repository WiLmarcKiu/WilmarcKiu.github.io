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
            <h1>Edit Data T1A Keberangkatan Domestik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Data T1A Kedatangan Domestik</li>
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
                  $ambil= $koneksi->query("SELECT * FROM t1keberangkatan WHERE id_keberangkatan='$_GET[id]'");
                  $pecah = $ambil->fetch_assoc();
                  ?>

                 <form method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Tanggal Keberangkatan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="tanggal_keberangkatan" value="<?php echo $pecah ['tanggal_keberangkatan']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jumlah Pesawat</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="jlhpesawat_keberangkatan" value="<?php echo $pecah ['jlhpesawat_keberangkatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Pax Keberangkatan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="pax_keberangkatan" value="<?php echo $pecah ['pax_keberangkatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Personil Keberangkatan</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="personil_keberangkatan" value="<?php echo $pecah ['personil_keberangkatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Validasi Manual</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="validasimanual_keberangkatan" value="<?php echo $pecah ['validasimanual_keberangkatan']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Validasi Peduli Lindungi</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="validasipl_keberangkatan" value="<?php echo $pecah ['validasipl_keberangkatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Berobat Klinik</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="berobatklinik_keberangkatan" value="<?php echo $pecah ['berobatklinik_keberangkatan']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>LT Hamil</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="lthamil" value="<?php echo $pecah ['lthamil']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>LT Umum</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="ltumum" value="<?php echo $pecah ['ltumum']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>TLT Hamil</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="tlthamil" value="<?php echo $pecah ['tlthamil']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>TLT Umum</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="tltumum" value="<?php echo $pecah ['tltumum']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Rujuk Klinik</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="rujukklinik" value="<?php echo $pecah ['rujukklinik']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Laporan Kasus Covid-19</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="laporankasus_covid" value="<?php echo $pecah ['laporankasus_covid']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Jumlah Petugas</label>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="jlhpetugas" value="<?php echo $pecah ['jlhpetugas']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Relawan Pagi</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="relawanpagi" value="<?php echo $pecah ['relawanpagi']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Relawan Malam</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="relawanmalam" value="<?php echo $pecah ['relawanmalam']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Dokumen Pendukung</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="dokpendukung" value="<?php echo $pecah ['dokpendukung']; ?>" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2">
                      <label>Informasi Lain</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="informasilain" value="<?php echo $pecah ['informasilain']; ?>" required="">
                    </div>
                  </div>


                  
                  <button class="btn btn-sm btn-primary" name="ubah"><i class="fa fa-check"></i>&nbsp;Edit</button>
                </form>

                <?php 
                  if (isset($_POST['ubah'])) 
                  { 
                    $koneksi->query("UPDATE t1keberangkatan SET tanggal_keberangkatan = '$_POST[tanggal_keberangkatan]', jlhpesawat_keberangkatan = '$_POST[jlhpesawat_keberangkatan]',pax_keberangkatan = '$_POST[pax_keberangkatan]' ,personil_keberangkatan = '$_POST[personil_keberangkatan]',validasimanual_keberangkatan = '$_POST[validasimanual_keberangkatan]' ,validasipl_keberangkatan = '$_POST[validasipl_keberangkatan]' ,berobatklinik_keberangkatan = '$_POST[berobatklinik_keberangkatan]' ,lthamil = '$_POST[lthamil]' ,ltumum = '$_POST[ltumum]' ,tlthamil = '$_POST[tlhamil]' ,tltumum = '$_POST[tltumum]' ,rujukklinik = '$_POST[rujukklinik]' ,laporankasus_covid = '$_POST[laporankasus_covid]' ,jlhpetugas = '$_POST[jlhpetugas]' ,relawanpagi = '$_POST[relawanpagi]' ,relawanmalam = '$_POST[relawanmalam]' ,dokpendukung = '$_POST[dokpendukung]' ,informasilain = '$_POST[informasilain]' WHERE id_keberangkatan ='$_GET[id]'");


                    echo "<script>alert('Data Berhasil Diubah');</script>";
                    echo "<script>location='t1akeberangkatan.php';</script>";

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
