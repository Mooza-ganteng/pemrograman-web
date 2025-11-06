<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Produk </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header class="header">
      <div class="brand">
      </div>
      <div class="actions">
        <a href="tambah.php" class="button primary">+ Tambah Produk</a>
      </div>
    </header>

    <div class="card">
      <div class="toolbar">
        <input type="text" id="search" class="input" placeholder="Cari produk...">
      </div>

      <div class="table-wrap">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Tanggal Input</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC");
            while ($data = mysqli_fetch_array($query)) {
              $harga_format = number_format($data['harga'], 2, ',', '.');
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($data['nama_produk']) ?></td>
                <td><?= htmlspecialchars($data['kategori']) ?></td>
                <td>Rp <?= $harga_format ?></td>
                <td><?= $data['stok'] ?></td>
                <td><?= date('d-m-Y H:i:s', strtotime($data['tanggal_input'])) ?></td>
                <td class="row-actions">
                  <a href="edit.php?id=<?= $data['id'] ?>" class="button ghost">Edit</a>
                  <a href="hapus.php?id=<?= $data['id'] ?>" class="button" style="background:var(--danger)" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
