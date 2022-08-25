<?php

require 'koneksi.php';

// jika ada tombol login (tombol login ditekan)
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	// lakukan query cek akun di tabel admint1a pada database
	$result = mysqli_query($koneksi, "SELECT * FROM admint1a WHERE username = '$username' AND password = 
	'$password'");

	// hitung akun yang terresult
	$akunyangcocok = $result->num_rows;

	// jika 1 akun yang cocok maka diloginkan
	if ($akunyangcocok == 1) {
		//anda sukses login
		// mendapatkan akun dalam bentuk array
		$akun = mysqli_fetch_assoc($result);

		// simpan di session admint1a
		$_SESSION["admint1a"] = $akun;
		echo "<script>alert('Selamat Datang $akun[nama_lengkap]');</script>";
		echo "<script>location='admin/index.php';</script>";
	} else {
		// lakukan query cek akun di tabel admint2 pada database
		$result = mysqli_query($koneksi, "SELECT * FROM admint2 WHERE username = '$username' AND password = '$password'");

		// hitung akun yang terresult
		$akunyangcocok = $result->num_rows;

		// jika 1 akun yang cocok maka diloginkan
		if ($akunyangcocok == 1) {
			//anda sukses login
			// mendapatkan akun dalam bentuk array
			$akun = mysqli_fetch_assoc($result);

			// simpan di session admin
			$_SESSION["admint2"] = $akun;
			echo "<script>alert('Selamat Datang $akun[nama_lengkap]');</script>";
			echo "<script>location='indexAdmin.php';</script>";
		} else {
			// anda gagal login
			echo "<script>alert('Anda Gagal Login Mohon Periksa Kembali Akun Anda');</script>";
			echo "<script>location='adminterminaldua/index.php';</script>";
		}
	}
}
