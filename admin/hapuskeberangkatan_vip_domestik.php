<?php 
include 'menu.php';
include '../koneksi.php';
 ?>

<h2>Halaman Penduduk</h2>

<?php 
  $ambil= $koneksi->query("SELECT * FROM t1vipkeberangkatan WHERE id_keberangkatan='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM t1vipkeberangkatan WHERE id_kedberangkatan='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='terminalkeberangkatan_vip_domestik.php?';</script>";
?>