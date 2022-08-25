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
            <h1>Data T1A Kedatangan VIP Internasional</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data T1 Kedatangan VIP Internasional</li>
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
              <div class="card-header">
                <a href="tambahkedatangan_vip_internasional.php" class="btn btn-sm btn-success"><i class="fa fa-plus" title="Tambah Data"></i>&nbsp;Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Tanggal Kedatangan</th>
                    <th>Jumlah Pesawat</th>
                    <th>Pax Kedatangan</th>
                    <th>Personil Kedatangan</th>
                    <th>Scan Peduli Lindungi</th>
                    <th>Scan PL Hasil Hijau</th>
                    <th>Scan PL Hasil Merah</th>
                    <th>Tidak Scan PL</th>
                    <th>Vaksin Lengkap WNI</th>
                    <th>Vaksin Lengkap WNA</th>
                    <th>Vaksin Tidak Lengkap WNI</th>
                    <th>Vaksin Tidak Lengkap WNA</th>
                    <th>Jumlah Pax PCR WNI</th>
                    <th>Jumlah Pax PCR WNA</th>
                  </tr>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM t1vipintlkedatangan");?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>

                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td>
                        <div class="btn-group btn-group-sm" style="text-align: center;">
                        <a href="penduduk.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal<?php echo $pecah ['id_penduduk']; ?>"><i class="fas fa-envelope" title="Buat Surat"></i></a>


                        <!-- The Modal -->
                        <div class="modal fade" id="myModal<?php echo $pecah ['id_penduduk']; ?>">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <p class="modal-title" style="font-weight: 50px;"><b>Surat Keterangan</b></p>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="list-group">
                                  <a href="sk_belum_menikah.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK BELUM MENIKAH</a>
                                  <a href="sk_domisili.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK DOMISILI</a>
                                  <a href="sk_kelahiran.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK KELAHIRAN</a>
                                  <a href="sk_kelakuan_baik.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK KELAKUAN BAIK</a>
                                  <a href="sk_kematian.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK KEMATIAN</a>
                                  <a href="sk_pindah.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK PINDAH PENDUDUK</a>
                                  <a href="sk_tidak_mampu.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK TIDAK MAMPU</a>
                                  <a href="sk_usaha.php?id=<?php echo $pecah ['id_penduduk']; ?>" class="list-group-item list-group-item-action list-group-item-warning">SK USAHA</a>
                                </div>
                              </div>
                              
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>


                        <a href="editkedatangan_vip_internasional.php?id=<?php echo $pecah ['id_kedatangan']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit" title="Edit"></i></a>
                        <a href="hapuskedatangan_vip_internasional.php?id=<?php echo $pecah ['id_kedatangan']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt" title="Hapus"></i></a>
                        </div>
                      </td>
                      <td><?php echo date("d F Y", strtotime($pecah ['tanggal_kedatangan'])) ?></td>
                      <td><?php echo $pecah ['jlhpesawat_kedatangan']; ?></td>
                      <td><?php echo $pecah ['pax_kedatangan']; ?></td>
                      <td><?php echo $pecah ['personil_kedatangan']; ?></td>
                      <td><?php echo $pecah ['scan_pl']; ?></td>
                      <td><?php echo $pecah ['scanpl_hasilhijau']; ?></td>
                      <td><?php echo $pecah ['scanpl_hasilmerah']; ?></td>
                      <td><?php echo $pecah ['tidak_scanpl']; ?></td>
                      <td><?php echo $pecah ['vaksinlengkap_wni']; ?></td>
                      <td><?php echo $pecah ['vaksinlengkap_wna']; ?></td>
                      <td><?php echo $pecah ['vaksintidaklengkap_wni']; ?></td>
                      <td><?php echo $pecah ['vaksintidaklengkap_wna']; ?></td>
                      <td><?php echo $pecah ['jlhpaxpcr_wni']; ?></td>
                      <td><?php echo $pecah ['jlhpaxpcr_wna']; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                  </tbody>

                </table>
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
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
