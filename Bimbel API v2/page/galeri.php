<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body class="back">

    <!-- navbar -->
    <?php include 'navbaruser.php'; ?>
    <!-- navbar end -->

    <!-- fasilitas -->
    <section id="fasilitas" class="fasilitas">
        <div class="container">
            <h1 class="fw-bold text-center mx-auto">Galeri kami</h1>
            <div class="row">
                <div class="col-xl-4 col-md-3 col-sm-4">
                    <?php
                    // Mengimport file koneksi.php
                    require 'koneksi.php';

                    // Mengambil data dari tabel galeri
                    $query = "SELECT foto, nama_foto, deskripsi FROM galeri";
                    $result = mysqli_query($koneksi, $query);

                    // Memeriksa apakah query berhasil dieksekusi
                    if ($result) {
                        // Memeriksa apakah ada data yang ditemukan
                        if (mysqli_num_rows($result) > 0) {
                            // Melakukan iterasi untuk setiap baris data
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Menyimpan nilai kolom ke dalam variabel
                                $foto = $row['foto'];
                                $nama_foto = $row['nama_foto'];
                                $deskripsi = $row['deskripsi'];

                                // Menampilkan data dalam format HTML
                                echo '<div class="card text-center position-relative">';
                                echo '<img src="../../assets/img/galeri/' . $foto . '" alt="fasilitas" />';
                                echo '<div class="overlay position-absolute top-50 start-50 translate-middle w-100 h-100">';
                                echo '<h3 class="m-3">' . $nama_foto . '</h3>';
                                echo '<p>' . $deskripsi . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo 'Tidak ada data yang ditemukan.';
                        }
                    } else {
                        echo 'Terjadi kesalahan dalam eksekusi query.';
                    }

                    // Menutup koneksi ke database
                    mysqli_close($koneksi);
                    ?>

                </div>


            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>