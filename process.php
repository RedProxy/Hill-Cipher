<?php
include('hillchiper.php');

// Fungsi untuk menghubungkan ke database dan melakukan operasi enkripsi
function process_data($text, $key, $mode)
{
    // Koneksi ke database (gantilah dengan informasi koneksi yang sesuai)
    $koneksi = new mysqli("localhost", "root", "", "hill_chiper");

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal: " . $koneksi->connect_error);
    }

    // Enkripsi teks menggunakan Hill Cipher
    $encrypted_text = hill_cipher($text, $key, $mode);

    // Simpan data ke database
    $sql = "INSERT INTO data_nama_nasabah (nama, `key`, mode, hasil) VALUES ('$text', '[[2, 1], [3, 4]]', '$mode', '$encrypted_text')";

    if ($koneksi->query($sql) === TRUE) {
        // Redirect ke index.php setelah data berhasil disimpan
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi ke database
    $koneksi->close();
}

// Ambil data dari formulir create.php
$text = $_POST['text'];
$mode = $_POST['mode'];

// Key untuk enkripsi
$key = [[2, 1], [3, 4]];

// Proses enkripsi dan simpan ke database
process_data($text, $key, $mode);
?>
