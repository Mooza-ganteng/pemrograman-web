# Analisis code program pertemuan 4
# tambahan analisis di code program portofolio1
<section class="section">
Membuka sebuah section dengan class section. Section ini adalah wadah konten khusus di halaman, dalam hal ini bagian untuk Galeri.

html
Salin kode
        <h2>Galeri</h2>
Judul level 2 dengan teks "Galeri", menunjukkan topik bagian ini.

html
Salin kode
        <p>Lihat koleksi foto saya di halaman galeri.</p>
Paragraf penjelasan singkat agar pengunjung tahu bahwa ada halaman lain untuk melihat koleksi foto.

html
Salin kode
        <a href="galeri.html" style="color:var(--accent); font-weight:600; text-decoration:none;">📷 Buka Galeri</a>
Sebuah tautan (link) menuju file galeri.html.

href="galeri.html" → mengarahkan ke halaman galeri.

style="..." → CSS langsung di dalam tag:

color:var(--accent); → warna teks link memakai variabel CSS --accent.

font-weight:600; → teks dibuat agak tebal.

text-decoration:none; → menghapus garis bawah default pada link.

Teks link: "📷 Buka Galeri" sebagai tombol untuk membuka galeri.

html
Salin kode
      </section>
Menutup section Galeri.

html
Salin kode
      <footer>© <span id="year"></span> Anugrah Restu Mannarai</footer>
Bagian footer (kaki halaman).

Simbol ©.

<span id="year"></span> → elemen kosong yang nanti akan diisi tahun secara otomatis dengan JavaScript.

Nama pemilik portofolio: Anugrah Restu Mannarai.

html
Salin kode
    </main>
  </div>
Menutup tag <main> (konten utama halaman) dan <div> pembungkus layout.

html
Salin kode
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
Script JavaScript yang menjalankan fungsi berikut:

document.getElementById('year') → mencari elemen dengan id year.

.textContent = new Date().getFullYear(); → mengisi elemen tadi dengan tahun saat ini (misalnya 2025).
Hasilnya, footer akan otomatis menampilkan tahun terbaru tanpa perlu diubah manual.

html
Salin kode
</body>
</html>
 Menutup tag <body> dan <html>, menandakan akhir dokumen HTML.

 # Analsis file galeri html
 <!DOCTYPE html>
Mendeklarasikan dokumen menggunakan HTML5.

html
Salin kode
<html lang="id">
Membuka elemen HTML, dengan atribut lang="id" untuk menandakan bahasa utama adalah Indonesia.

html
Salin kode
<head>
Bagian kepala dokumen, berisi metadata, judul, dan CSS.

html
Salin kode
  <meta charset="UTF-8">
Mengatur encoding karakter menjadi UTF-8 (supaya teks Latin, simbol, emoji bisa tampil dengan benar).

html
Salin kode
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
Supaya halaman responsive di berbagai ukuran layar (HP, tablet, laptop).

html
Salin kode
  <title>Galeri - Anugrah Restu Mannarai</title>
Judul halaman yang akan tampil di tab browser: Galeri - Anugrah Restu Mannarai.

html
Salin kode
  <style>
    /* CSS internal biasanya ada di sini */
  </style>
Bagian CSS internal untuk styling halaman galeri.

html
Salin kode
</head>
<body>
Menutup head, lalu membuka body (isi utama halaman).

html
Salin kode
  <div class="container">
Pembungkus utama layout dengan class container.

html
Salin kode
    <header>
      <nav>
        <a href="index.html">🏠 Kembali ke Portofolio</a>
      </nav>
    </header>
Bagian header yang berisi navigasi.

Ada satu link index.html untuk kembali ke halaman portofolio.

Ikon 🏠 menandakan itu tombol "Home".

html
Salin kode
    <main>
      <h2>Galeri</h2>
      <p>Koleksi foto saya:</p>
      <!-- di sini biasanya ditampilkan foto-foto -->
    </main>
Bagian utama konten halaman:

Judul Galeri.

Paragraf perkenalan "Koleksi foto saya".

Bagian kosong (atau dengan gambar) untuk menampilkan koleksi foto.

html
Salin kode
    <footer>© <span id="year"></span> Anugrah Restu Mannarai</footer>
Footer dengan hak cipta, nama, dan elemen <span id="year"> yang akan diisi tahun otomatis oleh JavaScript.

html
Salin kode
  </div>
Menutup div container.

html
Salin kode
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
Script untuk menulis tahun berjalan ke dalam <span id="year">.
Contoh: jika tahun 2025, maka footer jadi © 2025 Anugrah Restu Mannarai.

html
Salin kode
</body>
</html>
Menutup body dan HTML, menandai akhir file.

