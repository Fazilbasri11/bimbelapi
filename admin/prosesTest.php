<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
  $namaFoto = $_FILES['foto']['name'];
  $tmpFoto = $_FILES['foto']['tmp_name'];
  $lokasiFoto = "../assets/img/userr/" . $namaFoto; // Ganti dengan path yang sesuai

  if (move_uploaded_file($tmpFoto, $lokasiFoto)) {
    $namaPelajar = $_POST['nama'];
    $deskripsi = $_POST['desk'];

    $query = "INSERT INTO testimoni (foto, nama_pelajar, deskripsi) VALUES ('$namaFoto', '$namaPelajar', '$deskripsi')";
    $result = mysqli_query($koneksi, $query);

    // Set pesan berhasil atau gagal
    if ($result) {
      $pesan = "Data testimoni berhasil ditambahkan!";
    } else {
      $pesan = "Error: " . mysqli_error($koneksi);
    }

    // Redirect kembali ke halaman index.php dengan parameter pesan
    header("Location: index.php?pesan=" . urlencode($pesan));
    exit();
  } else {
    echo "Error uploading foto.";
  }
}

mysqli_close($koneksi);
