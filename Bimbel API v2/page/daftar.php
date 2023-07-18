<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body class="back">
    <!-- navbar -->
    <?php include 'navbaruser.php'; ?>
    <!-- navbar end -->
    <!-- pendaftaran section start -->
    <section id="daftar" class="daftar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 text-center backDaftar">
                    <h1>pendaftaran <span>Bimbel API</span> cab. Paseh</h1>
                    <div class="row text-start justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Anak</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Anak</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kelas Berapa</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" />
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 text-center">
                            <img src="../img/daftar/daftar.png" alt="daftar" class="imgDaftar" />
                            <div class="TBody mt-3">
                                <table class="table table-borderless text-start kotak">
                                    <tbody class="tDaftar">
                                        <tr class="mb-5">
                                            <td>pendaftaran</td>
                                            <td class="text-end">Rp. 100.000</td>
                                        </tr>
                                        <tr class="mb-5">
                                            <td>Naik Level</td>
                                            <td class="text-end">Rp. 50.000</td>
                                        </tr>
                                        <tr class="mb-5">
                                            <td>Modul</td>
                                            <td class="text-end">Rp. 35.000</td>
                                        </tr>
                                        <tr class="mb-5">
                                            <td>KLS Mata Pelajaran</td>
                                            <td class="text-end">Rp. 15.000</td>
                                        </tr>
                                        <tr class="mb-5">
                                            <td>Biaya Les 1 Jaml</td>
                                            <td class="text-end">Rp. 12.500</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3>Rp. 212.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-xl-9 p-3">
                            <p>
                                Biaya pendaftaran les hanya untuk 1 program belajar/mata
                                pelajaran. Jika mengambil 2 program belajar, maka harus daftar
                                lagi.
                            </p>
                        </div>
                        <div class="col-12">
                            <a href="#daftar">
                                <button type="button" class="btnDaftar">Daftar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pendaftaran section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>