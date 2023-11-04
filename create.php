<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hill Cipher</title>
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
            justify-content: center;
            align-items: center;
        }

        .card {
            border: 1px solid #555843;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #9932CC;
            color: #fff;
        }

        .card-header {
            background-color: #00BFFF;
            text-align: center;
            font-size: 24px;
        }

        .form-control {
            border: 1px solid #6c757d;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #555843;
        }

        .matrix {
            font-family: monospace;
            font-size: 18px;
        }

        .label-white {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="process.php">
                            <h5 class="card-header label-white">Hill Cipher Nama Nasabah</h5>
                            <div class="mb-2">
                                <label for="text" class="label-white">Masukkan Nama:</label>
                                <input type="text" class="form-control" id="text" name="text" autocomplete="off"
                                    required>
                            </div>
                            <h6 class="label-white">Masukkan Key (2 x 2):</h6>
                            <div class="col-sm-4 mb-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control text-center" id="key00" name="key00"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control text-center" id="key01" name="key01"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control text-center" id="key10" name="key10"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control text-center" id="key11" name="key11"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <h6 class="label-white">Pilih Mode:</h6>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="encrypt" name="mode" value="encrypt"
                                    checked>
                                <label class="form-check-label label-white" for="encrypt">Encrypt</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="decrypt" name="mode" value="decrypt">
                                <label class="form-check-label label-white" for="decrypt">Decrypt</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 mb-2">Proses</button>
                        </form>
                        <a class="link-underline link-underline-opacity-0" href="index.php">Lihat Data.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"
        integrity="sha384-LxRHzFGwDA5CfAPQGKpao4QhjNJlnI9l6H5hCR0zOX0w8UbZJJ15EN1uIvt9n6Ed"
        crossorigin="anonymous"></script>
</body>

</html>
