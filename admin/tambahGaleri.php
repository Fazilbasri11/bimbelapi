<?php
// Menghubungkan dengan file koneksi.php
include 'koneksi.php';

// Mengecek apakah ada data yang dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai yang dikirim melalui form
    $namaFoto = $_POST['nama_foto'];
    $deskripsi = $_POST['deskripsi'];

    // Mengambil informasi file yang diunggah
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $tmpFile = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];

    // Menentukan lokasi penyimpanan file yang diunggah
    $lokasiFile = '../assets/img/galeri/' . $namaFile;

    // Memeriksa apakah file berhasil diunggah
    if ($error === 0) {
        // Memindahkan file yang diunggah ke lokasi penyimpanan
        move_uploaded_file($tmpFile, $lokasiFile);

        // Menyimpan data ke dalam tabel galeri
        $query = "INSERT INTO galeri (nama_foto, deskripsi, foto) VALUES ('$namaFoto', '$deskripsi', '$namaFile')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Jika data berhasil disimpan, arahkan pengguna ke halaman galeri.html
            header('Location: galeri.php?pesan=success add galeri');
            exit();
        } else {
            // Jika terjadi kesalahan saat menyimpan data, tampilkan pesan error
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        // Jika terjadi kesalahan saat mengunggah file, tampilkan pesan error
        echo "Error uploading file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php include 'navbar.php'; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Amy NurRahayu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4 right">
                <div class="row my-5 justify-content-center">
                    <h3 class=" mb-3 fw-bold">Tambah Galeri</h3>

                    <div class="col-6">
                        <a class="btn btn-success mb-3" href="../page/galeri.html" type="button">Kembali</a>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Tambah Foto</label>
                                <input class="form-control" type="file" id="formFile" name="foto">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nama_foto">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                            </div>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>