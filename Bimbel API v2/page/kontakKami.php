<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body class="back">
    <!-- navbar -->
    <?php include 'navbaruser.php'; ?>
    <!-- navbar end -->

    <!-- kontak kami section start -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <div class="textKontak text-center">
                        <img src="/img/kursus/top.png" alt="top" class="line-top" />
                        <h2>Kontak Kami</h2>
                        <img src="/img/kursus/line-bot.png" alt="bot" class="line-bot" />
                        <p>
                            Jika ada pertanyaan tentang Bimbel API bisa di sampaikan di
                            bawah sini
                        </p>
                    </div>
                </div>
                <div class="col-12 p-5">
                    <h2 class="text-center fw-bold">Social Media</h2>
                    <div class="sosmed">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="row text-start backKontak">
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d619.6581322614682!2d108.01787770879882!3d-6.8080830070225495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d56a7d3067e7%3A0x5ec3d2587b2ae59c!2sButik%20Adibah%20Shop!5e1!3m2!1sid!2sid!4v1685083647898!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="map"></iframe>
                    </div>
                    <?php
          // Menginclude file koneksi.php
          include 'koneksi.php';

          // Memeriksa apakah ada permintaan POST dari form
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Mengambil data dari form
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];

            // Menghindari serangan SQL Injection dengan menggunakan prepared statement
            $query = "INSERT INTO pesan (nama, email, isi) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

            // Menjalankan pernyataan prepared statement
            $result = mysqli_stmt_execute($stmt);

            // Memeriksa apakah data berhasil disimpan
            if ($result) {
              echo "Pesan telah berhasil dikirim.";
            } else {
              echo "Terjadi kesalahan saat mengirim pesan.";
            }

            // Menutup pernyataan prepared statement
            mysqli_stmt_close($stmt);
          }

          // Menutup koneksi database
          mysqli_close($koneksi);
          ?>

                    <div class="col-md-6 mediumKontak">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label good">Nama</label>
                                <input type="text" class="form-control nice" id="nama" name="nama" placeholder="Nama" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label good">Email</label>
                                <input type="email" class="form-control nice" id="email" name="email"
                                    placeholder="name@example.com" />
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label good">Pesan</label>
                                <textarea class="form-control nicetwo" id="pesan" name="pesan" rows="3"></textarea>
                            </div>
                            <input class="btnKontak" type="submit" value="Kirim" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- kontak kami section end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>