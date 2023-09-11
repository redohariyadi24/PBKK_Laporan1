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
            include 'produk.php';
            $no = 1;
            $produk = new produk();
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
            include 'pelanggan.php';
            $no = 1;
            $pelanggan = new pelanggan();
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