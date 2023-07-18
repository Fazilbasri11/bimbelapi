<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $idTestimoni = $_GET['id'];

    // Membuat query untuk mengambil data testimoni berdasarkan ID
    $query = "SELECT * FROM testimoni WHERE id_testimoni = '$idTestimoni'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
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
                    <h3 class=" mb-3 fw-bold">Tambah Testimoni</h3>

                    <div class="col-6">
                        <a class="btn btn-success mb-3" href="index.php" type="button">Kembali</a>
                        <!-- form -->
                        <form action="prosesEdit.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input required name="id" value="<?php echo $data['id_testimoni']; ?>" hidden />
                                <label for="formFile" class="form-label">Tambah Foto</label>
                                <img src="gambar/<?php echo $data['foto']; ?>"
                                    style="width: 120px; float: left; margin-bottom: 5px;">
                                <input required type="file" name="foto" />
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input required type="text" class="form-control" id="nama" name="nama_pelajar"
                                    placeholder="Masukkan Nama" autofocus=""
                                    value="<?php echo $data['nama_pelajar']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="desk" class="form-label">Deskripsi</label>
                                <textarea required class="form-control" id="desk" name="desk" rows="3"
                                    autofocus=""><?php echo $data['deskripsi']; ?></textarea>
                            </div>
                            <button class="btn btn-success" type="submit" name="submit">Simpan</button>
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