<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hill Cipher</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url(background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .table-container {
            margin-top: 20px;
        }

        .table th {
            background-color: #00BFFF;
            color: white;
            border: 1px solid white; /* Tambahkan border 1px solid putih untuk garis tepi */
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h5 class="mb-3 text-center" style="color: white;">Data Nama Nasabah Bank of Central</h5>
                <!-- Konten tabel dan lainnya di sini -->
                <div class="table-container">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="table-warning">
                            <tr>
                                <th>No</th>
                                <th>Nama Nasabah/Plainteks</th>
                                <th>Key</th>
                                <th>Mode</th>
                                <th>Hasil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Koneksi ke Database
                            $db_host = 'localhost';
                            $db_user = 'root';
                            $db_pass = '';
                            $db_name = 'hill_chiper';

                            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                            if (!$conn) {
                                die("Koneksi ke database gagal: " . mysqli_connect_error());
                            }

                            // Query untuk mengambil data dari database
                            $query = "SELECT * FROM data_nama_nasabah";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                $key = str_replace(array('[', ']', ','), '', $row['key']);
                                echo "<td>" . $key . "</td>";
                                echo "<td>" . $row['mode'] . "</td>";
                                echo "<td>" . $row['hasil'] . "</td>";
                                echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a></td>";
                                echo "</tr>";
                            }

                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="create.php">
                    < Kembali Ke Menu</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"
        integrity="sha384-LxRHzFGwDA5CfAPQGKpao4QhjNJlnI9l6H5hCR0zOX0w8UbZJJ15EN1uIvt9n6Ed" crossorigin="anonymous"></script>
</body>

</html>
