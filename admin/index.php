<?php
include('koneksi.php');


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
            <!-- isi -->
            <div class="container-fluid px-4">
                <div class="row my-5 right">
                    <h3 class="fw-bold fs-3">Testimoni</h3>
                    <?php
                    if (isset($_GET['pesan'])) {
                        $pesan = $_GET['pesan'];
                        echo '<div class="alert alert-success">' . htmlspecialchars($pesan) . '</div>';
                    }
                    ?>

                    <div class="halaman">
                        <a href="tambahTest.php">
                            <button type="button" class="btn btn-success mb-3 mt-2">Tambah Testimoni</button>
                        </a>
                        <form class="row g-3 mb-3" method="get">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci"
                                    name="katakunci" id="katakunci" />
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col-1" width="50">No</th>
                                    <th scope="col-3">Foto</th>
                                    <th scope="col-6">Nama Foto</th>
                                    <th scope="col-3">Deskripsi</th>
                                    <th scope="col-3">aksi</th>
                                </tr>
                            </thead>
                            <tbody id="hasilPencarian">
                                <?php
                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                                $query = "SELECT * FROM testimoni ORDER BY id_testimoni ASC";
                                $result = mysqli_query($koneksi, $query);
                                //mengecek apakah ada error ketika menjalankan query
                                if (!$result) {
                                    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                }

                                //buat perulangan untuk element tabel dari data mahasiswa
                                $no = 1; //variabel untuk membuat nomor urut
                                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                // kemudian dicetak dengan perulangan while
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr class="data-row">
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><img src="../assets/img/userr/<?php echo $row['foto']; ?>"
                                            style="width: 120px;"></td>
                                    <td><?php echo $row['nama_pelajar']; ?></td>
                                    <td><?php echo $row['deskripsi']; ?></td>
                                    <td>
                                    <td>
                                        <a class="btn btn-warning" href="editTest.php?id=<?= $row["id_testimoni"] ?>"
                                            role="button">Edit</a>
                                        <a class="btn btn-danger btn-hapus"
                                            href="hapusTest.php?id=<?= $row["id_testimoni"]; ?>"
                                            data-id="<?= $row["id_testimoni"]; ?>"
                                            onclick="return confirm('kamu yakin ?');">Hapus</a>
                                    </td>

                                    </td>
                                </tr>
                                <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                $(document).ready(function() {
                    $('#katakunci').on('keyup', function() {
                        var searchText = $(this).val().toLowerCase();
                        $('.data-row').each(function() {
                            var deskripsi = $(this).find('td:nth-child(4)').text()
                                .toLowerCase();
                            if (deskripsi.indexOf(searchText) === -1) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            }
                        });
                    });
                });
                </script>
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