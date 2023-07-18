<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
  $idTestimoni = $_POST['id'];
  $namaPelajar = $_POST['nama_pelajar'];
  $deskripsi = $_POST['desk'];

  // Menghandle gambar baru jika ada
  if ($_FILES['foto']['name']) {
    $namaFile = $_FILES['foto']['name'];
    $tmpFile = $_FILES['foto']['tmp_name'];
    $folderTujuan = "../assets/img/userr/";
    $pathFile = $folderTujuan . $namaFile;

    // Memindahkan file yang diupload ke folder tujuan
    if (move_uploaded_file($tmpFile, $pathFile)) {
      // Proses update data testimoni
      $query = "UPDATE testimoni SET foto='$namaFile', nama_pelajar='$namaPelajar', deskripsi='$deskripsi' WHERE id_testimoni='$idTestimoni'";
      $result = mysqli_query($koneksi, $query);

      if ($result) {
        // Redirect ke halaman index.php dengan pesan sukses
        header("Location: index.php?pesan=success update");
        exit();
      } else {
        echo "Error: " . mysqli_error($koneksi);
      }
    } else {
      echo "Error: Gagal mengupload gambar";
    }
  } else {
    // Proses update data testimoni tanpa mengubah gambar
    $query = "UPDATE testimoni SET nama_pelajar='$namaPelajar', deskripsi='$deskripsi' WHERE id_testimoni='$idTestimoni'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      // Redirect ke halaman index.php dengan pesan sukses
      header("Location: index.php?pesan=success");
      exit();
    } else {
      echo "Error: " . mysqli_error($koneksi);
    }
  }
}

mysqli_close($koneksi);
