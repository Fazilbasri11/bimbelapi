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
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4 right">
                <div class="row my-5">
                    <h3 class="mb-3 fw-bold">Pesan Bimbingan API</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-striped table-hover text-start">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi.php';

                                $query = "SELECT id_pesan, nama, email, isi FROM pesan";
                                $result = mysqli_query($koneksi, $query);

                                if ($result) {
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id_pesan = $row['id_pesan'];
                                        $nama = $row['nama'];
                                        $email = $row['email'];
                                        $isi = $row['isi'];

                                        echo "<tr>";
                                        echo "<th scope='row'>" . $no . "</th>";
                                        echo "<td>" . $nama . "</td>";
                                        echo "<td>" . $email . "</td>";
                                        echo "<td>" . $isi . "</td>";
                                        echo "<td>";
                                        echo "<div class='d-grid gap-2 d-md-block'>";
                                        echo "<button class='btn btn-danger delete-button' data-id='$id_pesan'>Delete</button>";

                                        echo "
                    </div>";
                                        echo "</td>";
                                        echo "</tr>";

                                        $no++;
                                    }

                                    mysqli_free_result($result);
                                } else {
                                    echo "Error: " . mysqli_error($koneksi);
                                }

                                mysqli_close($koneksi);
                                ?>
                            </tbody>
                        </table>
                        <script>
                        var deleteButtons = document.getElementsByClassName("delete-button");
                        for (var i = 0; i < deleteButtons.length; i++) {
                            deleteButtons[i].addEventListener("click", function() {
                                var messageId = this.getAttribute("data-id");
                                deleteRow(messageId);
                            });
                        }

                        function deleteRow(messageId) {
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "deletePesan.php", true);
                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Reload the page or update the table dynamically
                                    location.reload();
                                }
                            };
                            xhr.send("id_pesan=" + messageId);
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