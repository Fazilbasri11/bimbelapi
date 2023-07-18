<?php
// Menghubungkan dengan file koneksi.php
include 'koneksi.php';

// Menghapus galeri berdasarkan id_galeri yang diterima melalui parameter POST
if (isset($_POST['delete']) && $_POST['delete'] === 'true' && isset($_POST['id_galeri'])) {
    $idGaleri = $_POST['id_galeri'];

    // Query untuk menghapus data galeri
    $query = "DELETE FROM galeri WHERE id_galeri='$idGaleri'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo 'Data galeri berhasil dihapus.';
    } else {
        echo 'Terjadi kesalahan saat menghapus data galeri.';
    }
}

// Query untuk mengambil data dari tabel galeri
$query = "SELECT * FROM galeri";
$result = mysqli_query($koneksi, $query);
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
                <div class="row my-5">
                    <h3 class=" mb-3 fw-bold">Galeri Bimbingan API</h3>
                    <?php
                    if (isset($_GET['pesan'])) {
                        $pesan = $_GET['pesan'];
                        echo '<div class="alert alert-success">' . htmlspecialchars($pesan) . '</div>';
                    }
                    ?>
                    <div class="col">
                        <a class="btn btn-success mb-3" href="tambahGaleri.php" type="button">Tambah</a>
                        <table class="table bg-white rounded shadow-sm  table-striped table-hover text-start">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                // Mengambil data dari hasil query dan menampilkan dalam tabel
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $idGaleri = $row['id_galeri'];
                                    $namaFoto = $row['nama_foto'];
                                    $deskripsi = $row['deskripsi'];
                                    $foto = $row['foto'];
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><img src="../assets/img/galeri/<?php echo $foto; ?>" alt=""></td>
                                    <td><?php echo $namaFoto; ?></td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a href="editGaleri.php?id_galeri=<?php echo $idGaleri; ?>"><button
                                                    class="btn btn-primary" type="button">Edit</button></a>
                                            <button class="btn btn-danger" type="button"
                                                onclick="deleteGaleri(<?php echo $idGaleri; ?>)">Delete</button>
                                        </div>
                                    </td>
                                </tr>

                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <script>
                        function deleteGaleri(idGaleri) {
                            if (confirm('Apakah Anda yakin ingin menghapus data galeri ini?')) {
                                // Kirim permintaan penghapusan data menggunakan AJAX
                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', 'galeri.php', true);
                                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        window.location
                                            .reload(); // Muat ulang halaman setelah berhasil menghapus data
                                    } else {
                                        alert('Terjadi kesalahan saat menghapus data galeri.');
                                    }
                                };
                                xhr.send('id_galeri=' + idGaleri + '&delete=true');
                            }
                        }
                        </script>

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