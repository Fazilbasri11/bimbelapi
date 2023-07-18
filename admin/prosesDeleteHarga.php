<?php
include 'koneksi.php';

if (isset($_GET['id_harga'])) {
    $id_harga = $_GET['id_harga'];

    // Query untuk menghapus data harga
    $query = "DELETE FROM harga WHERE id_harga = '$id_harga'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
