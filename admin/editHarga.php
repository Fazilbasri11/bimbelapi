<?php
// Include file koneksi.php
include 'koneksi.php';

// Cek apakah ada data yang dikirimkan melalui metode POST
if (isset($_POST['submit'])) {
    // Ambil nilai dari form
    $pendaftaran = $_POST['pendaftaran'];
    $naikLevel = $_POST['naik_level'];
    $modul = $_POST['modul'];
    $klsMapel = $_POST['kls_mapel'];
    $biayaLes = $_POST['biaya_les'];

    // Query untuk mengupdate data harga
    $query = "UPDATE harga SET pendaftaran='$pendaftaran', naik_level='$naikLevel', modul='$modul', kls_mapel='$klsMapel', biaya_les='$biayaLes' WHERE id_harga='" . $_GET['id_harga'] . "'";
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil dijalankan
    // Cek apakah query berhasil dijalankan
    if ($result) {

        // Redirect ke halaman harga.php jika berhasil disimpan
        header("Location: harga.php?pesan=success update");
        exit;
    } else {
        // Tampilkan pesan error jika terjadi kesalahan dalam penyimpanan
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Menampilkan form edit harga
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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <h3 class="mb-3 fw-bold">Edit Harga</h3>

                    <div class="col-6">
                        <a class="btn btn-success mb-3" href="harga.php" type="button">Kembali</a>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="pendaftaran" class="form-label">Pendaftaran</label>
                                <input required type="text" class="form-control" id="pendaftaran" name="pendaftaran">
                            </div>
                            <div class="mb-3">
                                <label for="naikLevel" class="form-label">Naik Level</label>
                                <input required type="text" class="form-control" id="naikLevel" name="naik_level">
                            </div>
                            <div class="mb-3">
                                <label for="modul" class="form-label">Modul</label>
                                <input required type="text" class="form-control" id="modul" name="modul">
                            </div>
                            <div class="mb-3">
                                <label for="klsMapel" class="form-label">KLS_Mapel</label>
                                <input required type="text" class="form-control" id="klsMapel" name="kls_mapel">
                            </div>
                            <div class="mb-3">
                                <label for="biayaLes" class="form-label">Biaya les</label>
                                <input required type="text" class="form-control" id="biayaLes" name="biaya_les">
                            </div>

                            <button class="btn btn-success" type="submit" name="submit">Simpan</button>
                        </form>
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