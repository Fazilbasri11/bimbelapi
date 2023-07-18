<?php
include('koneksi.php');

// Memeriksa apakah parameter ID testimoni telah diterima
if (isset($_GET['id'])) {
  $idTestimoni = $_GET['id'];

  // Membuat query untuk menghapus testimoni berdasarkan ID
  $query = "DELETE FROM testimoni WHERE id_testimoni = '$idTestimoni'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    $pesan = "Testimoni berhasil dihapus!";
  } else {
    $pesan = "Error: " . mysqli_error($koneksi);
  }
}

mysqli_close($koneksi);

// Redirect kembali ke halaman index.php dengan parameter pesan
header("Location: index.php?pesan=" . urlencode($pesan));
exit();
