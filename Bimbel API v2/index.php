<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Peralta&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Peralta&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- style -->
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/owl.carousel.min.css" />
  <link rel="stylesheet" href="style/owl.theme.default.min.css" />
  <!-- title -->
  <title>Bimbel API Cabang Paseh</title>
  <link rel="icon" href="img/logo.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body class="back">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.svg" alt="Logo" width="40" class="d-inline-block align-text-top me-2" />
        <span>Bimbel</span>API
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item me-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#tentang">Tentang Kami</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#kursus">Kursus</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#harga">Harga</a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link" href="#cabang">Cabang kami</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#testimoni">Testimoni</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              lainnya
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/TentangKami.php">Tentang
                  Kami</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/kursus.php">Kursus</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/pengajar.php">Pengajar</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/testimoni.php">Testimoni</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/fasilitas.php">Fasilitas</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/galeri.php">Galeri</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="/bimbelAPI_v2/bimbel API v2/page/kontakKami.php">Kontak
                  Kami</a>
              </li>
            </ul>
          </li>
        </ul>
        <button type="button" class="btn-navbar">harga</button>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- hero section start -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active hero">
        <div class="container">
          <div class="row">
            <div class="col-7 text-start">
              <div class="text-hero d-inline-block">
                <img src="img/hero-vector.png" alt="hero-vector" />
                <h1>
                  Mari kita belajar tentang <br />
                  <span>pengetahuan</span> & <span>kemampuan</span> baru
                </h1>
                <p>
                  let's discover new knowledge and new friends and have a
                  <br />
                  learning experience with beautiful teacher
                </p>
                <div class="btn-hero">
                  <a href="page/daftar.html"><button type="button" class="btn btn-top">
                      Daftar
                    </button></a>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success border border-success p-2 border-opacity-10" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-play-circle-fill"></i> Fasilitas
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal"="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Fasilitas Kami
                          </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid">
                            <video autoplay muted controls src="img/video/WhatsApp Video 2023-01-19 at 20.43.24.mp4" class="d-flex mx-auto img-thumbnail"></video>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <button type="button" class="btn btn-bot">
                      <i class="bi bi-play-circle-fill"></i> Success
                    </button> -->
                </div>
              </div>
            </div>
            <div class="col-md text-center">
              <div class="img-hero">
                <img src="img/hero-side1.png" alt="" />
                <img src="img/hero-side2.png" alt="" />
                <img src="img/hero-side3.png" alt="" />
                <img src="img/hero-side4.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item hero2">
        <div class="container">
          <div class="row">
            <div class="col-7 text-center mb-2">
              <div class="text-hero d-inline-block">
                <img src="img/hero-vector.png" alt="hero-vector" />
                <h1>
                  <span>Bimbel API</span> sekarang ada Program Unggulan lho!
                  Kalian bisa dapet materi pembelajaran lengkap dengan tutor
                  yang asik. Yuk gabung sekarang juga!
                </h1>
                <div class="btn-hero">
                  <a href="#visi"><button type="button" class="btn btn-top">
                      Lihat Selengkapnya
                    </button></a>
                </div>
              </div>
            </div>
            <div class="col-md text-center mt-3">
              <div class="img-hero2">
                <img src="img/hero2/picture-hero2.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- hero section end -->

  <!-- visi-misi section start -->
  <section id="visi" class="visi">
    <div class="container">
      <div class="row text-center misi">
        <div class="col">
          <h2>
            Visi <span>Misi</span> <br />
            Bimbel Anak Pintar Indonesia
          </h2>
          <div class="row mt-3 justify-content-center nice-jobs">
            <div class="col-12 col-xl-3 col-md-6">
              <h3>visi</h3>
              <p>
                Menjadikan Bimbingan belajar yang bersahabat, terpercaya,
                profesional dan amanah
              </p>
              <img src="img/visi-misi/down.png" alt="down" />
            </div>
            <div class="col-12 col-xl-3 col-md-6">
              <h3>Misi</h3>
              <ul class="text-start lh-base">
                <li>
                  Menjadi sahabat belajar dalam menghapi masalah belajar
                  disekolah
                </li>
                <li>
                  menjadi lembaga yang terpercaya dengan metode pembelajaran
                  yang edukatif
                </li>
                <li>
                  menjadikan lembaga profesional tepar waktu dengan tenaga
                  yang profesional
                </li>
                <li>menjadikan lembaga bimbingan yang amanah</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- visi-misi section end -->

  <!-- manfaat bimbel api start -->
  <section id="manfaat" class="manfaat mx-auto">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="text-manfaat text-center mx-auto position-relative lh-base">
            <h4>kenapa memilih kami</h4>
            <h3><span>Manfaat</span> dari Bimbel</h3>
            <h2>Layanan di <span>Bimbel API</span></h2>
            <img src="img/hero-vector.png" alt="line-manfaat" class="position-absolute bottom-1 end-0" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-5 col-xl-3 text-start">
            <div class="card-manfaat">
              <img src="img/New folder/guru.svg" alt="guru" />
              <div class="card-body">
                <h4>Guru Terbaik</h4>
                <p>
                  Guru diambil dari lulusan SI jadi belajarnya akan lebih
                  teratur dan di jamin aman belajar
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-xl-3 text-start">
            <div class="card-manfaat">
              <img src="img/New folder/pembayaran.svg" alt="guru" />
              <div class="card-body">
                <h4>Pembayaran</h4>
                <p>
                  pembayaran nya hanya sewaktu daftar 1x dan bayar
                  per/pertemuan tidak ada biaya bulanan
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-xl-3 text-start">
            <div class="card-manfaat">
              <img src="img/New folder/interaksi.svg" alt="guru" />
              <div class="card-body">
                <h4>Interaksi Belajar</h4>
                <p>
                  sistem belajar yang friendly lebih menekankan
                  pendekatan karakter anak
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-xl-3 text-start">
            <div class="card-manfaat">
              <img src="img/New folder/waktu.svg" alt="guru" />
              <div class="card-body">
                <h4>Waktu Belajar</h4>
                <p>
                  waktu les disesuaikan dengan kemauan siswa, jadwal tidak
                  baku dari pihak bimbel API
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- manfaat bimbel api end -->

  <!-- tentang bimbel api start -->
  <section id="tentang" class="tentang">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md position-relative tentang-flex">
          <img src="img/tentang-kami/guru.png" alt="guru" class="img-tentang-guru" />
          <img src="img/tentang-kami/child.png" alt="child" class="img-tentang-child" />
        </div>
        <div class="col-md tentang-flex">
          <img src="img/tentang-kami/line.png" alt="line" class="tentang-line" />
          <h2>Tentang Kami</h2>
          <h1>
            <span class="berbakat">Berbakat</span> dan Sangat
            <span class="berkualifikasi">Berkualifikasi</span> untuk Melayani
            Anda
          </h1>
          <p class="text-tentang">
            Lorem ipsum dolor sit amet consectetur. Amet ut sit aliquet morbi.
            Habitasse suspendisse ultrices sed consectetur egestas ac enim.
            Tortor ante facilisis tincidunt felis. Eget ac eu commodo morbi ac
            in porta aliquam. Semper odio non consectetur nunc elementum leo
            dictum nunc enim. Varius ultrices vitae risus blandit sagittis.
          </p>
          <a href="page/TentangKami.html">Lihat lainnya</a>
        </div>
      </div>
    </div>
  </section>
  <!-- tentang bimbel api end -->

  <!-- cabang kami start -->
  <section id="cabang" class="cabang text-center">
    <div class="container">
      <div class="text-kursus text-start">
        <img src="img/kursus/top.png" alt="top" class="line-top" />
        <h2 class="fw-bold">Cabang <span>Bimbel API</span></h2>
        <img src="img/kursus/line-bot.png" alt="bot" class="line-bot" />
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="img/cabang/Rectangle 15-1.png" class="card-img-top" alt="cabang" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">cabang kec. Paseh</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
                laborum!
              </p>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-geo-alt"></i></a>
              <a href="#"><i class="bi bi-telephone-fill"></i></a>
              <div class="bot mt-3">
                <a href="#" class="btnCabang">Lihat lainnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/cabang/Rectangle 15-1.png" class="card-img-top" alt="cabang" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">cabang Tomo</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
                laborum!
              </p>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-geo-alt"></i></a>
              <a href="#"><i class="bi bi-telephone-fill"></i></a>
              <div class="bot mt-3">
                <a href="#" class="btnCabang">Lihat lainnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/cabang/Rectangle 15-1.png" class="card-img-top" alt="cabang" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">cabang tanjungkerta</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
                laborum!
              </p>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-geo-alt"></i></a>
              <a href="#"><i class="bi bi-telephone-fill"></i></a>
              <div class="bot mt-3">
                <a href="#" class="btnCabang">Lihat lainnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="botCabang mt-4">
        <a href="/page/cabang.html">lihat lainnya</a>
      </div>
    </div>
  </section>
  <!-- cabang kami end -->

  <!-- Kursus kami start -->
  <section id="kursus" class="kursus">
    <div class="container">
      <div class="row justify-content-center mx-auto">
        <div class="col">
          <div class="text-kursus text-center">
            <img src="img/kursus/top.png" alt="top" class="line-top" />
            <h2>Kursus <span>Bimbel API</span></h2>
            <img src="img/kursus/line-bot.png" alt="bot" class="line-bot" />
          </div>
        </div>
      </div>

      <!-- daftar mapel -->
      <div class="row">
        <div class="col">
          <div class="owl-carousel">
            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/jari-aljabar.png" alt="aljabar" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Jari Aljabar</h3>
                    <p>
                      Pelatihan hitung cepat Jari Aljabar ini akan terasa
                      lebih manfaatnya jika pesertanya adalah guru/orang tua
                      murid guru/orang tua yang akan mengajarkan kembali
                      kepada murid/anak-anaknya.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus1">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/matematika.png" alt="matematika" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Matematika (SD/SMP)</h3>
                    <p>
                      Matematika dasar untuk anak SD merupakan salah satu
                      materi pelajaran yang sangat penting. Pelajaran
                      berhitung ini bahkan menjadi ilmu yang mesti kita
                      ajarkan kepada anak-anak sejak jaman kuno.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus2">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/TEMATIK.jpg" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Tematik</h3>
                    <p>
                      Pembelajaran tematik adalah bentuk model pembelajaran
                      terpadu yang menggabungkan suatu konsep dalam beberapa
                      materi, pelajaran atau bidang studi menjadi satu tema
                      atau topik pembahasan tertentu.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus3">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/bahasa.png" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Bahasa Inggris & Arab</h3>
                    <p>
                      Dengan mrnguasai bahasa asing kita tidak tertipu oleh
                      warga negar lain yang ingin menipu kita, dan yang paling
                      utama adalah Karena kedua bahasa ini adalah bahasa
                      internasional dan sangat penting untuk dikuasai.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus4">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/bacatulis.png" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Baca Tulis</h3>
                    <p>
                      Kemampuan membaca serta menulis menjadi hal yang sangat
                      penting diajarkan semenjak dini. Membaca serta menulis
                      sangat diperlukan buat menunjang kegiatan anak pada
                      bidang akademik.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus5">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/komputer.jpg" alt="komputer" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Komputer</h3>
                    <p>
                      Sulit rasanya membayangkan kehidupan masa kini tanpa
                      komputer. Tak heran kalau orang tua merasa perlu
                      memperkenalkan anak pada komputer sejak dini agar anak
                      tak tertinggal pesatnya perkembangan teknologi
                      informasi.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus8">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/ALBARQY.png" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Ngaji (Al Barqy)</h3>
                    <p>
                      Seperti kita ketahui bersama bahwa untuk belajar mengaji
                      dibutuhkan waktu yang sangat lama. Anak-anak harus
                      mengikuti Taman Pendidikan Al Qur’an (TPA) sore hari 3
                      kali seminggu.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus6">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/bakat-melukis-anak.jpg" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Melukis</h3>
                    <p>
                      Kegiatan melukis bukan sekedar hal yang menyenangkan
                      bagi anak. Melukis mempunyai berbagai manfaat baik bagi
                      pertumbuhan dan perkembangan mereka, yang akan
                      bermanfaat nantinya di kemudian hari.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus7">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="card-kursus">
                  <img src="img/kursus/tegak bersambung.jpg" alt="tematik" class="img-kursus mb-3" />
                  <div class="body-card text-center">
                    <h3>Tegak Bersambung</h3>
                    <p>
                      menulis huruf tegak bersambung sering dianggap tidak
                      relevan. Bahkan, sebagian orang tua kerap mengeluh
                      lantaran guru anaknya menggunakan huruf bersambung saat
                      menerangkan pelajaran.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-kursus" data-bs-toggle="modal" data-bs-target="#kursus9">
                      Baca selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="kursus1"="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Jari Aljabar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/jari-aljabar.png" alt="" />
          </div>
          <div class="text-modal">
            <h3>Jari Aljabar</h3>
            <p>
              Metode jari aljabar mengubah proses belajar mengajar matematika
              dari yang sulit dan menyusahkan menjadi lebih mudah, cepat,
              cerdas dan menyenangkan. Belajar dengan jari aljabar hanya
              menggunakan jari tangan, tanpa alat bantu, tanpa rumus, dan
              diajarkan dengan pendekatan ESQ.Jari aljabar mulai diperkenalkan
              kepada masyarakat pada April 2007 oleh Bahruddin MD.
            </p>
            <p>
              Jari aljabar diperuntukkan bagi anak-anak usia playgroup, taman
              kanak-kanak, hingga sekolah dasar dengan materi yang terdiri
              dari: level I (belajar mengenal angka dan lambang jari aljabar
              serta belajar penjumlahan, pengurangan sampai bilangan 10);
              level II (belajar berhitung penjumlahan dan pengurangan sampai
              bilangan 20 dengan variasi soal sampai 5 digit); level 3
              (belajar berhitung penjumlahan dan pengurangan sampai bilangan
              100 dengan variasi soal sampai 10 digit dan pengenalan soal
              cerita); level IV (belajar berhitung perkalian, pembagian sampai
              bilangan belasan, soal cerita, dan geometri); level V (belajar
              berhitung perkalian, pembagian sampai bilangan ratusan, bilangan
              bersisa atau pecahan, soal cerita, geometri).
            </p>
            <p>
              Gerakan-gerakan tangan cara jari aljabar dan jarimatika dapat
              di­ko­labo­rasikan sehingga akti­vitas otak anak menjadi
              me­ningkat dan terlatih. Di sini tugas guru adalah
              mengolaborasikan kedua me­tode itu sehingga men­jadi metode yang
              lebih cepat dan tepat sehingga aktivitas otak dapat berkembang
              se­cara optimal.
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 2 -->
  <div class="modal fade" id="kursus2" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Jari Aljabar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/matematika.png" alt="matematika" />
          </div>
          <div class="text-modal">
            <h3>Matematika (SD/SMP)</h3>
            <p>
              Matematika dasar untuk anak SD merupakan salah satu materi
              pelajaran yang sangat penting. Pelajaran berhitung ini bahkan
              menjadi ilmu yang mesti kita ajarkan kepada anak-anak sejak
              jaman kuno. Para filosof Yunani juga meletakkan ilmu berhitung
              bersama membaca dan menulis sebagai kemampuan dasar yang harus
              diajarkan sejak anak-anak.
            </p>
            <p>
              Materi pelajaran matematika dasar SD akan menjadi bekal yang
              sangat berharga bagi anak dalam menjalani kehidupan selanjutnya.
              Ada banyak displin ilmu lainnya yang akan lebih mudah dipelajari
              jika menguasai matematika. Ilmu berhitung ini juga sangat
              penting bagi setiap orang karena ada banyak aspek kehidupan yang
              berhubungan dengan kemampuan berhitung.
            </p>
            <p>
              Materi pembelajaran matematika di sekolah dasar akan diberikan
              secara bertahap sesuaikan tingkatan kelasnya. Dari kelas 1, 2
              hingga kelas 6 ada banyak materi yang menjadi dasar dari ilmu
              berhitung. Semua materi matematika dasar ini perlu dipelajari
              dan dikuasai anak.
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 3 -->
  <div class="modal fade" id="kursus3" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tematik</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/matematika.png" alt="matematika" />
          </div>
          <div class="text-modal">
            <h3>Tematik</h3>
            <p>
              Pembelajaran tematik adalah bentuk model pembelajaran terpadu
              yang menggabungkan suatu konsep dalam beberapa materi, pelajaran
              atau bidang studi menjadi satu tema atau topik pembahasan
              tertentu sehingga terjadi integrasi antara pengetahuan,
              keterampilan dan nilai yang memungkinkan siswa aktif menemukan
              konsep serta prinsip keilmuan secara holistik, bermakna dan
              otentik.
            </p>
            <p>
              Pembelajaran tematik merupakan pembelajaran terpadu yang
              menekankan keterlibatan siswa dalam pembelajaran. Pembelajaran
              ini melibatkan beberapa kompetensi dasar, hasil belajar dan
              indikator dari suatu mata pelajaran, atau bahkan beberapa mata
              pelajaran. Melalui pembelajaran tematik, siswa diharapkan dapat
              belajar dan bermain dengan kreativitas yang tinggi. Sebab, dalam
              pembelajaran tematik, belajar tidak semata-mata mendorong siswa
              untuk mengetahui (learning to know), tetapi belajar juga untuk
              melakukan (learning to do), untuk menjadi (learning to be), dan
              untuk hidup bersama (learning to live together).
            </p>
            <p>
              Pembelajaran tematik lebih menekankan pada penerapan konsep
              belajar sambil melakukan sesuatu (learning by doing). Oleh
              karena itu, guru perlu mengemas atau merancang pengalaman
              belajar yang akan mempengaruhi kebermaknaan belajar peserta
              didik. Pengalaman belajar yang menunjukkan kaitan unsur-unsur
              konseptual menjadikan proses pembelajaran lebih efektif. Kaitan
              konseptual antar mata pelajaran yang dipelajari akan membentuk
              skema, sehingga peserta didik akan memperoleh keutuhan dan
              kebulatan pengetahuan.
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 4 -->
  <div class="modal fade" id="kursus4" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Bahasa Inggris & Arab
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/bahasa.png" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Bahasa Inggris & Arab</h3>
            <ul>
              <li class="text-start fw-semibold">Bahasa Arab</li>
              <p>
                Karena pengaruh dan peranan Bahasa Arab dari hari kehari
                semakin menjadi besar. Bahasa Arab bukan hanya sebagai bahasa
                agama dan bahasa persatuan ummat islam,tetapi juga sebagaimana
                yang telah disebutkan diatas yaitu sebagai bahasa ilmu
                pengetahuan yang telah melahirkan karya-karya besar dalam
                berbagai bidang ilmu pengetahuan. Bahkan lebih dari itu,
                Bahasa Arab juga dapat dianggap sebagai peletak batu pertama
                bagi pertumbuhan ilmu pengetahun modern yang berkembang cepat
                saat ini.
              </p>
              <p>
                Dengan Bahasa Arab juga, kita dapat mensyiarkan agama islam.
                karena itu, berbagai literatur dan syiar agama islam
                menggunakan bahasa arab sebagai bahasanya. Mempelajari bahasa
                arab dapat membantu seorang muslim memahani agamanya dengan
                lebih baik. Di samping itu,bahasa sendiri merupakan salah satu
                bentuk syiar yang digunakan oleh islam(sebaik-baiknya syiar).
              </p>
            </ul>
            <ul>
              <li class="text-start fw-semibold">Bahasa Inggris</li>
              <p>
                Seperti yang sudah disebutkan diatas, bahasa inggris merupakan
                bahasa yang paling sering digunakan atau paling umum dipakai
                diseluruh dunia. Bahasa Inggris menjadi bahasa yang digunakan
                dalam sains, penerbangan, computer, diplomasi dan pariwisata.
                Bukan hanya terbatas untuk sektor-sektor tersebut, bahasa
                inggris juga digunakan untuk sektor lainnya.
              </p>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 5 -->
  <div class="modal fade" id="kursus5" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Baca Tulis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/bacatulis.png" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Baca Tulis</h3>
            <p>
              Kemampuan membaca serta menulis menjadi hal yang sangat penting
              diajarkan semenjak dini. Membaca serta menulis sangat diperlukan
              buat menunjang kegiatan anak pada bidang akademik, Jika membaca
              merupakan proses melihat wawasan melalui jendela yang terbuka
              dan menjadikannya menjadi pengetahuan eksklusif, maka menulis
              yaitu suatu cara menyajikan pulang khazanah yang diperoleh pada
              rakyat luas. salah satu hal yang sangat luar biasa jika
              anak-anak menumbuhkan minat baca tulisnya semenjak kecil.
            </p>
            <p>
              Pendidikan anak pada usia dini artinya waktu yg sangat baik
              dalam menumbuhkan minat baca tulis, yg mana sel motorik serta
              sensorik pada anak kecil masih sangat baik sebagai akibatnya
              cepat untuk menangkap pembelajaran yang diberikan. Selain buat
              menunjang kegiatan akademik pula memiliki poly dampak bagi anak
              usia dini, antara lain sebagai berikut:
            </p>
            <ul>
              <li class="text-start fw-normal">
                Membaca bisa berbagi otak anak sehingga mampu memahami sesuatu
                menggunakan cepat selama enam tahun pertama,umumnya diklaim
                menggunakan masa golden age.
              </li>
              <li class="text-start fw-normal">
                Dengan belajar membaca semenjak dini bisa menaikkan
                pengetahuan di anak usia dini.
              </li>
              <li class="text-start fw-normal">
                Menulis dengan tangan bisa membuat koneksi di dalam otak anak
                yg dapat melatih motorik halus di anak.
              </li>
              <li class="text-start fw-normal">
                Anak yang menulis semenjak dini akan mengetahui alfabet lebih
                cepat serta memudahkan belajar membaca dan mengeja.
              </li>
              <li class="text-start fw-normal">
                Segala hal yang ditulis oleh anak akan tersimpan dengan baik
                di memori anak dibandingkan mengetik.
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 6 -->
  <div class="modal fade" id="kursus6" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ngaji (Al Barqy)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/ALBARQY.png" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Ngaji (Al Barqy)</h3>
            <p>
              Sebagai umat Islam, maka memiliki kewajiban untuk membaca
              Alquran. Kebiasaan membaca Alquran pada anak-anak harus dimulai
              sedini mungkin sehingga bisa memberikan manfaat di hari
              kemudian. Apalagi manfaat membaca Alquran sangatlah banyak
              bahkan tak terhingga, terutama jika diamalkan dengan baik. Lalu
              apa saja manfaat yang didapatkan dari membaca Alquran?
            </p>
            <p>
              Sebagai orang tua, memiliki kewajiban dan tanggung jawab untuk
              memberikan bekal ilmu kepada anak, baik dunia maupun akhirat.
              Belajar tentang ilmu agama, termasuk membaca Alquran, merupakan
              hal utama yang perlu diajarkan kepada anak sejak kecil.
            </p>
            <ul>
              <li class="text-start fw-normal">
                Mendapatkan Pendidikan dan Pemahaman Keislaman
              </li>
              <li class="text-start fw-normal">Pikiran Menjadi Damai</li>
              <li class="text-start fw-normal">
                Mengeratkan Ikatan dengan Kedua Orang Tua
              </li>
              <li class="text-start fw-normal">
                Mendapatkan Syafaat Saat Hisab di Akhirat
              </li>
              <li class="text-start fw-normal">
                Menjadi Keluarga yang Disayang Allah
              </li>
              <li class="text-start fw-normal">
                Alquran Merupakan Obat Terbaik
              </li>
              <li class="text-start fw-normal">
                Mendapatkan Ilmu Pengetahuan
              </li>
              <li class="text-start fw-normal">Doa Mudah Dikabulkan</li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 7 -->
  <div class="modal fade" id="kursus7" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Melukis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/bakat-melukis-anak.jpg" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Melukis</h3>
            <p>
              Kegiatan melukis bukan sekedar hal yang menyenangkan bagi anak.
              Melukis mempunyai berbagai manfaat baik bagi pertumbuhan dan
              perkembangan mereka, yang akan bermanfaat nantinya di kemudian
              hari. Menurut Jola Sung, penasihat pendidikan di Affinity
              Education Group yang dikutip dari lll.edu, anak-anak adalah
              komunikator yang efektif, dan melalui karya seni, anak-anak
              belajar mengekspresikan ide dan perasaan mereka.
            </p>
            <h4 class="fw-semibold pb-2">
              Dampak Positif dari Kegiatan Melukis Bagi Anak
            </h4>
            <ul>
              <li class="text-start fw-normal">Meningkatkan Kreativitas</li>
              <li class="text-start fw-normal">Meningkatkan Imajinasi</li>
              <li class="text-start fw-normal">Melatih Otak</li>
              <li class="text-start fw-normal">Membangun kepercayaan diri</li>
              <li class="text-start fw-normal">Keterampilan Sensorik</li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 8 -->
  <div class="modal fade" id="kursus8" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Melukis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/komputer.jpg" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Komputer</h3>
            <p>
              Di Singapura, misalnya, sebagian orang tua dikabarkan mengalami
              sindrom “kiasu”, yaitu ketakutan berlebihan anak mereka akan
              tertinggal dari teman-temannya bila tidak diperkenalkan pada
              komputer sejak dini. Para orang tua ini berambisi agar anaknya
              menjadi jagoan komputer.
            </p>
            <p>
              Akhirnya, belajar komputer bagi anak menjadi suatu kewajiban.
              Tentu saja ini kurang tepat, karena belajar komputer seharusnya
              dilakukan tanpa paksaan agar menjadi pengalaman menyenangkan
              bagi anak. Namun yang jelas, bisa mengoperasikan komputer telah
              menjadi realitas penting yang tak bisa dibantah.
            </p>
            <h4 class="fw-semibold pb-2">
              keuntungan belajar komputer sejak dini bagi anak?
            </h4>
            <ul>
              <li class="text-start fw-normal">
                Meningkatkan keterampilan belajar. Penelitian menunjukkan,
                anak yang menggunakan komputer memiliki performa akademis
                lebih baik.
              </li>
              <li class="text-start fw-normal">
                Menstimulasi kreativitas dan imajinasi. Pemrograman komputer,
                walau sederhana akan terasa menantang bagi anak. Anak belajar
                mengidentifikasi masalah, menganalisa pilihan, dan memilih
                solusi terbaik. Batasan anak dalam membuat program hanyalah
                imajinasinya sendiri.
              </li>
              <li class="text-start fw-normal">
                Meningkatkan perkembangan kepribadian. Program komputer
                memungkinkan anak melakukan kesalahan, memperbaiki, dan
                mencoba lagi tanpa takut dimarahi. Anak jadi terbiasa berani
                mengambil risiko, memiliki sifat yang lebih independen, dan
                lebih percaya diri.
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- kursus 8 -->
  <div class="modal fade" id="kursus9" id="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tegak Bersambung</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modalkursus text-center">
          <div class="img-modal p-2">
            <img src="img/kursus/tegak bersambung.jpg" alt="bahasa" />
          </div>
          <div class="text-modal">
            <h3>Tegak Bersambung</h3>
            <p>
              Di zaman sekarang, menulis huruf tegak bersambung sering
              dianggap tidak relevan. Bahkan, sebagian orang tua kerap
              mengeluh lantaran guru anaknya menggunakan huruf bersambung saat
              menerangkan pelajaran. <br />Padahal, Katy Steinmentz—penulis
              bahasa dari San Fransisco—mengatakan, huruf sambung masih perlu
              dipraktikkan oleh anak-anak.
            </p>
            <h4 class="fw-semibold pb-2">
              alasan perlunya belajar menulis huruf tegak bersambung untuk
              anak
            </h4>
            <ul>
              <li class="text-start fw-semibold">
                Meningkatkan Kemampuan Motorik Anak
              </li>
              <p>
                Saat anak membuat tulisan dengan huruf tegak bersambung,
                konsentrasinya meningkat. Hal ini membuat sel-sel otak lebih
                aktif. Dampak positifnya, keaktifan tersebut mampu
                menstimulasi perkembangan otak yang meliputi sensasi motorik
                halus, kemampuan berpikir, dan gerak kontrol.
              </p>
            </ul>
            <ul>
              <li class="text-start fw-semibold">
                Membantu Anak Memahami Dokumen Bersejarah
              </li>
              <p>
                Anda pernah mengajak anak mengunjungi museum? Biasanya, di
                museum terdapat dokumen bersejarah. Sebagian besar tulisan di
                dokumen tersebut menggunakan huruf tegak bersambung.
              </p>
            </ul>
            <ul>
              <li class="text-start fw-semibold">
                Menstimulasi Otak untuk Menyimpan Banyak Informasi
              </li>
              <p>
                Ketika anak menulis dengan huruf tegak bersambung, ia sedang
                melakukan dua hal. Pertama, anak harus mencatat secara cepat
                agar tidak tertinggal dari kawan-kawannya. Kedua, ia mesti
                cermat memilih info yang ingin ditulis.
              </p>
            </ul>
            <ul>
              <li class="text-start fw-semibold">
                Melatih Anak untuk Membuat Tanda Tangan
              </li>
              <p>
                Siapa bilang, anak kecil belum waktunya belajar membuat tanda
                tangan? Justru, Anda harus melatihnya sejak dini supaya bisa
                menciptakan tanda tangan yang bagus. Salah satu caranya dengan
                membiasakan menulis huruf tegak bersambung.
              </p>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Kursus kami end -->

  <!-- harga section start -->
  <section id="harga" class="harga">
    <div class="container position-relative">
      <div class="row">
        <div class="col text-center">
          <div class="textHarga mx-auto">
            <img src="img/kursus/top.png" alt="top" class="line-top" />
            <h2>Biaya Les di <span>Bimbel API</span></h2>
            <img src="img/kursus/line-bot.png" alt="bot" class="line-bot" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col">
            <h3 class="textUp text-center pt-5 mx-auto">
              Biaya pendaftaran les hanya untuk 1 program belajar/mata
              pelajaran. Jika mengambil 2 program belajar, maka harus daftar
              lagi.
            </h3>
            <div class="row justify-content-center">
              <div class="col-12 col-xl-6 col-sm-12">
                <?php
                // Menginclude file koneksi.php
                include 'koneksi.php';

                // Query untuk mengambil data dari tabel harga
                $query = "SELECT * FROM harga";
                $result = mysqli_query($koneksi, $query);

                // Memeriksa apakah query berhasil dieksekusi
                if ($result) {
                  // Mengambil data harga dari hasil query
                  $row = mysqli_fetch_assoc($result);

                  // Menyimpan nilai harga dalam variabel
                  $pendaftaran = $row['pendaftaran'];
                  $naik_level = $row['naik_level'];
                  $modul = $row['modul'];
                  $kls_mapel = $row['kls_mapel'];
                  $biaya_les = $row['biaya_les'];

                  // Menghitung total harga
                  $total = $pendaftaran + $naik_level + $modul + $kls_mapel + $biaya_les;
                } else {
                  // Menampilkan pesan error jika query gagal dieksekusi
                  echo "Error: " . mysqli_error($koneksi);
                }

                // Menutup koneksi database
                mysqli_close($koneksi);
                ?>

                <div class="cardHarga text-center">
                  <h4>Rp. <?php echo number_format($total, 0, ',', '.'); ?></h4>
                  <div class="hargaBody">
                    <table class="table table-borderless text-start kotak">
                      <tbody>
                        <tr>
                          <td>pendaftaran</td>
                          <td class="text-end">Rp. <?php echo $pendaftaran; ?></td>
                        </tr>
                        <tr>
                          <td>Naik Level</td>
                          <td class="text-end">Rp. <?php echo $naik_level; ?></td>
                        </tr>
                        <tr>
                          <td>Modul</td>
                          <td class="text-end">Rp. <?php echo $modul; ?></td>
                        </tr>
                        <tr>
                          <td>KLS Mata Pelajaran</td>
                          <td class="text-end">Rp. <?php echo $kls_mapel; ?></td>
                        </tr>
                        <tr>
                          <td>Biaya Les 1 Jam</td>
                          <td class="text-end">Rp. <?php echo $biaya_les; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="#">Daftar</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <h3 class="textUp text-center p-4 mx-auto">
          Bagi yang anaknya 3 bulan tidak les tanda izin, maka otomatis akan
          di kelurkan dari BIMBEL API. jika mau masuk lagi, harus membayar
          biaya pendaftaran lagi
        </h3>
      </div>
      <img src="img/harga/harga-back.png" alt="gambarbot" class="position-absolute bottom-0 end-0 gambarBot" />
    </div>
  </section>
  <!-- harga section end -->
  <!-- testimoni section start -->
  <section id="testimoni" class="testimoni">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="textTestimoni text-center">
            <img src="img/kursus/top.png" alt="top" class="line-top" />
            <h2>Testimoni <span>Bimbel API</span></h2>
            <img src="img/kursus/line-bot.png" alt="bot" class="line-bot" />
            <p>yang dikatakan pelajaran tentang kami</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col">
          <?php
          // Menginclude file koneksi.php
          include 'koneksi.php';

          // Query untuk mengambil data testimoni
          $query = "SELECT foto, nama_pelajar, deskripsi FROM testimoni";
          $result = mysqli_query($koneksi, $query);

          // Memeriksa apakah query berhasil dieksekusi
          if ($result) {
            // Mengambil data testimoni dari hasil query
            $row = mysqli_fetch_assoc($result);

            // Menyimpan nilai testimoni dalam variabel
            $foto = $row['foto'];
            $nama_pelajar = $row['nama_pelajar'];
            $deskripsi = $row['deskripsi'];
          } else {
            // Menampilkan pesan error jika query gagal dieksekusi
            echo "Error: " . mysqli_error($koneksi);
          }

          // Menutup koneksi database
          mysqli_close($koneksi);
          ?>

          <div class="testimoniChild text-center p-3">
            <img src="../assets/img/userr/<?php echo $foto; ?>" alt="child" class="child img-thumbnail" />
            <div class="testBody p-2">
              <h3><?php echo $nama_pelajar; ?></h3>
              <h5>Murid Sekolah Dasar</h5>
              <div class="start">
                <img src="img/testimoni/start.png" alt="star" />
                <img src="img/testimoni/start.png" alt="star" />
                <img src="img/testimoni/start.png" alt="star" />
                <img src="img/testimoni/start.png" alt="star" />
                <img src="img/testimoni/start.png" alt="star" />
              </div>
              <p><?php echo $deskripsi; ?></p>
              <a href="#">Lihat lainnya...</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- testimoni section end -->

  <!-- kontak kami section start -->
  <section id="kontak" class="kontak">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="textKontak text-center">
            <img src="img/kursus/top.png" alt="top" class="line-top" />
            <h2>Kontak Kami</h2>
            <img src="img/kursus/line-bot.png" alt="bot" class="line-bot" />
            <p>
              Jika ada pertanyaan tentang Bimbel API bisa di sampaikan di
              bawah sini
            </p>
          </div>
        </div>
        <div class="row backKontak">
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d619.6581322614682!2d108.01787770879882!3d-6.8080830070225495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d56a7d3067e7%3A0x5ec3d2587b2ae59c!2sButik%20Adibah%20Shop!5e1!3m2!1sid!2sid!4v1685083647898!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
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
            <form method="POST" action="">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label good">Nama</label>
                <input type="text" class="form-control nice" id="exampleFormControlInput1" name="nama" placeholder="Nama" required />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label good">Email</label>
                <input type="email" class="form-control nice" id="exampleFormControlInput2" name="email" placeholder="name@example.com" required />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label good">Pesan</label>
                <textarea class="form-control nicetwo" id="exampleFormControlTextarea1" name="pesan" rows="3" required></textarea>
              </div>
              <input class="btnKontak" type="submit" value="Kirim" />
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- kontak kami section end -->
  <footer>
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Bimbel <span>API</span></h2>
          <ul class="footer-nav d-flex justify-content-center">
            <li class="footer-item active me-3">
              <a class="footer-link active" aria-current="page" href="#tentang">Tentang Kami</a>
            </li>
            <li class="footer-item me-3">
              <a class="footer-link" href="#kursus">Kursus</a>
            </li>
            <li class="footer-item me-3">
              <a class="footer-link" href="#harga">Harga</a>
            </li>
            <li class="footer-item me-3">
              <a class="footer-link" href="#testimoni">Testimoni</a>
            </li>
          </ul>
          <div class="sosmed p-3">
            <a href="#" class="me-4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="me-4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="me-4"><i class="bi bi-whatsapp"></i></a>
          </div>
          <p class="p-2">© 2022 Copyright | Consuly. All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="js/script.js"></script>
</body>

</html>ript src="js/script.js"></script>
</body>

</html>