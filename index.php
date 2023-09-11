<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Toko Alat Tulis Makmur</title>
</head>
<body>
    <h1>Toko Alat Tulis Makmur</h1>
    <h3>Data Produk </h3>
    <table>
        <tr>
            <td>No</td>
            <td>Kategori</td>
            <td>Nama Produk</td>
            <td>Stok</td>
            <td>Harga</td>
        </tr>
        <?php 
            // Mengimpor file produk.php yang berisi data produk
            include 'produk.php';

            // Inisialisasi nomor urut
            $no = 1;

            // Membuat objek produk
            $produk = new produk();

            // Mengulangi data produk dan menampilkannya dalam tabel
            foreach($produk->data() as $produk){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $produk['kategori']; ?></td>
            <td><?php echo $produk['nama']; ?></td>
            <td><?php echo $produk['stok']; ?></td>
            <td><?php echo $produk['harga']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>

    <h3>Data Pelanggan</h3>        
    <table>
        <tr>
            <td>No</td>
            <td>Nama Pelanggan</td>
            <td>No HP</td>
        </tr>
        <?php 
            // Mengimpor file pelanggan.php yang berisi data pelanggan
            include 'pelanggan.php';

            // Mereset nomor urut
            $no = 1;

            // Membuat objek pelanggan
            $pelanggan = new pelanggan();

            // Mengulangi data pelanggan dan menampilkannya dalam tabel
            foreach($pelanggan->dataPelanggan() as $pelanggan){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $pelanggan['nama']; ?></td>
            <td><?php echo $pelanggan['no_hp']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
