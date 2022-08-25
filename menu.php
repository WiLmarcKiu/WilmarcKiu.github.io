<?php 
include 'koneksi.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="font-family: 'Bad Script', cursive; font-size: 25px; font-weight: 800;">
      Si Deket
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tentang_kami.php">TENTANG KAMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kegiatan.php">KEGIATAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kabarterbaru.php">KEGIATAN TERBARU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="berita.php">BERITA</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BERITA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->&nbsp;&nbsp;
        <a href="home.php" class="btn btn-sm justify-content-center align-items-center" style="border-radius: 12px; height: 28px; margin-top: 5px; background-color: #00FFFF;">&nbsp;&nbsp;Login&nbsp;&nbsp;</a>

      </ul>
    </div>
</nav>
<!-- end nav -->
