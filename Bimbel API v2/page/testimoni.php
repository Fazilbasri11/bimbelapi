<?php
include 'koneksi.php'; // Sertakan file koneksi.php atau sesuaikan dengan file koneksi yang Anda gunakan

// Query untuk mendapatkan data testimoni
$query = "SELECT * FROM testimoni";
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil dijalankan
if (!$result) {
  die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body class="back">
  <!-- navbar -->
  <?php include 'navbaruser.php'; ?>
  <!-- navbar end -->
  <!-- testimoni start -->
  <section id="testimoni" class="testimoni">
    <div class="container">
      <h1 class="fw-bold text-center mx-auto">Testimoni</h1>
      <div class="row d-flex justify-content-center">
        <?php
        // Loop melalui hasil query dan menampilkan data testimoni
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="col-xl-3 col-md-5 col-sm-12 text-center mt-5">
            <div class="cardFasilitas">
              <img src="../../assets/img/userr/<?php echo $row['foto']; ?>" alt="child" />
              <div class="bodyCard">
                <h3 class="m-3"><?php echo $row['nama_pelajar']; ?></h3>
                <p>
                  "<?php echo $row['deskripsi']; ?>"
                </p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- testimoni end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>