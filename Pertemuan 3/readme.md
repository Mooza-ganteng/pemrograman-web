# Analisis Kode Program Portfolio (HTML & CSS)

## Struktur Dasar
```html
<!DOCTYPE html>
Mendefinisikan bahwa dokumen menggunakan HTML5.

html
Salin kode
<html lang="id">
Memberi tahu browser dan mesin pencari bahwa bahasa utama halaman ini adalah Bahasa Indonesia.

html
Salin kode
<head> ... </head>
Berisi metadata, style, dan judul halaman.

Metadata
html
Salin kode
<meta charset="utf-8" />
Mendukung semua karakter (emoji, aksara lokal, dll).

html
Salin kode
<meta name="viewport" content="width=device-width, initial-scale=1" />
Agar tampilan responsif di perangkat mobile.

html
Salin kode
<title>Portfolio — Anugrah Restu Mannarai</title>
Judul tab browser: Portfolio — Anugrah Restu Mannarai.

CSS Global
css
Salin kode
:root {
  --bg-1: #071027;
  --bg-2: #0b1630;
  --card: rgba(255,255,255,0.04);
  --accent: #38bdf8;
  --accent-2: #7c3aed;
  --muted: #94a3b8;
  --radius: 14px;
  --shadow: 0 10px 30px rgba(2,6,23,0.6);
  --max-w: 960px;
}
Menggunakan CSS variable agar mudah mengubah tema/warna global.
Contoh: kalau ganti --accent, semua elemen yang pakai var(--accent) ikut berubah otomatis.

Background Animasi
css
Salin kode
body {
  background: linear-gradient(180deg,var(--bg-1) 0%, var(--bg-2) 100%);
  background-size: 400% 400%;
  animation: bgShift 12s ease-in-out infinite;
}
@keyframes bgShift {
  0% {background-position:0% 50%}
  50% {background-position:100% 50%}
  100% {background-position:0% 50%}
}
Membuat background gradient animasi bergerak → memberi kesan modern & dinamis.

Layout Utama
css
Salin kode
.container {
  max-width: var(--max-w);
  display: grid;
  grid-template-columns: 320px 1fr;
  gap: 24px;
}
Layout 2 kolom: profil di kiri, konten utama di kanan.

Responsif: berubah jadi 1 kolom di layar kecil.

Bagian Profil
html
Salin kode
<aside class="profile">
  <div class="avatar"><img src="profil.jpeg"></div>
  <div class="name">Anugrah Restu Mannarai</div>
  <div class="role">Mahasiswa • UNIVERSITAS NEGERI MAKASSAR</div>
  <div class="about">Halo! Saya Anugrah ...</div>
  <div class="contact"> ... </div>
  <div class="socials"> ... </div>
</aside>
CSS Avatar
css
Salin kode
.avatar {
  width:150px; height:150px; border-radius:999px;
  overflow:hidden; transition: transform 0.45s;
}
.avatar:hover { transform: translateY(-6px) scale(1.03); }
Foto profil bulat dengan efek hover membesar.

Ada nama, status (Mahasiswa UNM), deskripsi singkat, kontak, dan sosial media.

Bagian Konten Utama
html
Salin kode
<main class="main">
  <section class="section"> ... Perkenalan ... </section>
  <section class="section"> ... Hobi ... </section>
  <section class="section"> ... Cita-cita ... </section>
</main>
CSS Section
css
Salin kode
.section {
  padding:14px; border-radius:12px;
  transition: box-shadow 0.25s, transform 0.25s;
}
.section:hover { transform: translateY(-4px); }
.section h2::after {
  content:''; position:absolute; bottom:-6px;
  width:36px; height:3px; background:var(--accent);
}
Setiap section punya border, efek hover, dan garis warna biru di bawah judul.

Isi:

Perkenalan → biodata singkat.

Hobi → aktivitas favorit.

Cita-cita → tujuan karier di bidang IT.

Footer
html
Salin kode
<footer>© <span id="year"></span> Anugrah Restu Mannarai</footer>
<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
Footer otomatis menampilkan tahun saat ini (misalnya 2025).

Tidak perlu update manual tiap tahun.

Responsif (Media Query)
css
Salin kode
@media (max-width:940px){
  .container{ grid-template-columns: 1fr; }
  .avatar{ width:120px; height:120px }
}
Jika layar < 940px → layout jadi 1 kolom.

Foto profil ikut mengecil agar pas di layar HP.