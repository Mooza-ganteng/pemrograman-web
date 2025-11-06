<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $kategori    = $_POST['kategori'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];
    $deskripsi   = $_POST['deskripsi'];

    $query = "INSERT INTO produk (nama_produk, kategori, harga, stok, deskripsi)
              VALUES ('$nama_produk', '$kategori', '$harga', '$stok', '$deskripsi')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses_tambah");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h3>Tambah Produk Baru</h3>
      <form class="form" method="POST" action="">
        <div class="field">
          <label class="label">Nama Produk</label>
          <input type="text" name="nama_produk" class="input-field" required>
        </div>
        <div class="field">
          <label class="label">Kategori</label>
          <input type="text" name="kategori" class="input-field">
        </div>
        <div class="field">
          <label class="label">Harga</label>
          <input type="number" step="0.01" name="harga" class="input-field" required>
        </div>
        <div class="field">
          <label class="label">Stok</label>
          <input type="number" name="stok" class="input-field" value="0" required>
        </div>
        <div class="field">
          <label class="label">Deskripsi</label>
          <textarea name="deskripsi" class="input-field textarea"></textarea>
        </div>
        <div class="actions mt-1">
          <button type="submit" name="submit" class="button primary">Simpan</button>
          <a href="index.php" class="button ghost">Batal</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
