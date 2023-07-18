<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $messageId = $_POST['id_pesan'];

    // Delete the row from the database using $messageId
    $deleteQuery = "DELETE FROM pesan WHERE id_pesan = $messageId";
    mysqli_query($koneksi, $deleteQuery);
}

mysqli_close($koneksi);