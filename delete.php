<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Koneksi ke database (gantilah dengan informasi koneksi yang sesuai)
        $koneksi = new mysqli("localhost", "root", "", "hill_chiper");

        // Periksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi ke database gagal: " . $koneksi->connect_error);
        }

        // Query untuk menghapus data dari tabel data_nama_nasabah berdasarkan ID
        $query = "DELETE FROM data_nama_nasabah WHERE id = $id";

        if ($koneksi->query($query) === TRUE) {
            // Redirect ke index.php dengan pesan success jika data berhasil dihapus
            header("Location: index.php?message=success");
        } else {
            // Redirect ke index.php dengan pesan error jika gagal menghapus data
            header("Location: index.php?message=error");
        }

        // Tutup koneksi ke database
        $koneksi->close();
    }
}
?>
