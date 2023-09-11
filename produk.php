<?php
require_once "config.php";

class produk extends config {
    private $koneksi;

    public function __construct() {
        // Membuat koneksi ke database menggunakan informasi yang didefinisikan dalam kelas config
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    // Fungsi untuk mengambil data produk dari database
    function data() {
        $query = mysqli_query($this->koneksi, 'SELECT * FROM produk');
        $data = array(); // Inisialisasi array data untuk menampung hasil

        while ($row = mysqli_fetch_array($query)) {
            $data[] = $row; // Menambahkan setiap baris data ke dalam array data
        }

        return $data; // Mengembalikan array data produk
    }
}
?>
