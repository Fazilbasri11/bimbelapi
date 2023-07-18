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
                    <h3 class=" mb-3 fw-bold">Harga Belajar Bimbingan API</h3>
                    <?php
                    if (isset($_GET['pesan'])) {
                        $pesan = $_GET['pesan'];
                        echo '<div class="alert alert-success">' . htmlspecialchars($pesan) . '</div>';
                    }
                    ?> <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-striped table-hover text-start">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Pendaftaran</th>
                                    <th scope="col">Naik level</th>
                                    <th scope="col">modul</th>
                                    <th scope="col">KLS_Mapel</th>
                                    <th scope="col">Biaya Les</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Menghubungkan ke database
                                include('koneksi.php');

                                // Query untuk mendapatkan data harga
                                $query = "SELECT * FROM harga";
                                $result = mysqli_query($koneksi, $query);

                                // Cek apakah query berhasil dijalankan
                                if (!$result) {
                                    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                }

                                $no = 1; // Nomor urut

                                // Looping untuk menampilkan data dalam tabel
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $no . "</th>";
                                    echo "<td>" . $row['harga'] . "</td>";
                                    echo "<td>" . $row['pendaftaran'] . "</td>";
                                    echo "<td>" . $row['naik_level'] . "</td>";
                                    echo "<td>" . $row['modul'] . "</td>";
                                    echo "<td>" . $row['kls_mapel'] . "</td>";
                                    echo "<td>" . $row['biaya_les'] . "</td>";
                                    echo "<td>";
                                    echo "<div class='d-grid gap-2 d-md-block'>";
                                    echo "<a href='editHarga.php?id_harga=" . $row['id_harga'] . "' class='btn btn-primary' type='button'>Edit</a>";
                                    echo "<button class='btn btn-danger' type='button' onclick='deleteData(" . $row['id_harga'] . ")'>Delete</button>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";

                                    $no++; // Increment nomor urut
                                }


                                // Menutup koneksi database
                                mysqli_close($koneksi);
                                ?>
                                <script>
                                function deleteData(id_harga) {
                                    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                        // Kirim permintaan penghapusan ke file prosesDeleteHarga.php
                                        var xhr = new XMLHttpRequest();
                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState === 4 && xhr.status === 200) {
                                                // Tampilkan pesan sukses atau error setelah penghapusan
                                                alert(xhr.responseText);

                                                // Refresh halaman setelah penghapusan berhasil
                                                window.location.reload();
                                            }
                                        };
                                        xhr.open("GET", "prosesDeleteHarga.php?id_harga=" + id_harga, true);
                                        xhr.send();
                                    }
                                }
                                </script>

                            </tbody>
                        </table>
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