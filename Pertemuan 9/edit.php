<?php
include 'koneksi.php';

$id = $_GET['id'];
$data_produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$data = mysqli_fetch_assoc($data_produk);

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $kategori    = $_POST['kategori'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];
    $deskripsi   = $_POST['deskripsi'];

    $query_update = "UPDATE produk SET 
                    nama_produk='$nama_produk', 
                    kategori='$kategori', 
                    harga='$harga', 
                    stok='$stok', 
                    deskripsi='$deskripsi' 
                    WHERE id='$id'";

    if (mysqli_query($koneksi, $query_update)) {
        header("Location: index.php?status=sukses_update");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h3>Edit Produk</h3>
      <form class="form" method="POST" action="">
        <div class="field">
          <label class="label">Nama Produk</label>
          <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" class="input-field" required>
        </div>
        <div class="field">
          <label class="label">Kategori</label>
          <input type="text" name="kategori" value="<?= $data['kategori'] ?>" class="input-field">
        </div>
        <div class="field">
          <label class="label">Harga</label>
          <input type="number" step="0.01" name="harga" value="<?= $data['harga'] ?>" class="input-field" required>
        </div>
        <div class="field">
          <label class="label">Stok</label>
          <input type="number" name="stok" value="<?= $data['stok'] ?>" class="input-field" required>
        </div>
        <div class="field">
          <label class="label">Deskripsi</label>
          <textarea name="deskripsi" class="input-field textarea"><?= $data['deskripsi'] ?></textarea>
        </div>
        <div class="actions mt-1">
          <button type="submit" name="submit" class="button primary">Update</button>
          <a href="index.php" class="button ghost">Batal</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
