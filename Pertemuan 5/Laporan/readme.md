# Analsisi file menggunakan Tag
<HTML> 
 Membuka dokumen HTML. Menandakan awal struktur halaman web.

html
Salin kode
    <HEAD><TITLE> contoh JavaScript</TITLE> 
    <HEAD> adalah bagian kepala dokumen, berisi informasi metadata (judul, link CSS, script, dll).
    <TITLE> contoh JavaScript</TITLE> memberi judul halaman pada tab browser yaitu "contoh JavaScript".

html
Salin kode
            <script language="JavaScript"> 
 Membuka tag <script> untuk menuliskan kode JavaScript.
 Atribut language="JavaScript" digunakan pada HTML lama untuk menunjukkan bahasa scripting, tapi di HTML5 sudah tidak direkomendasikan (cukup <script> saja).

html
Salin kode
            document.write("Program JavaSript Aku di kepala"); 
 Kode JavaScript yang dijalankan.
 Fungsi document.write() akan menulis teks langsung ke halaman web.
 Hasil: menampilkan "Program JavaSript Aku di kepala". Karena ada di dalam <head>, teks akan muncul sebelum <body> terbentuk.

html
Salin kode
            </script> 
 Menutup tag <script>.

html
Salin kode
        </HEAD> 
 Menutup bagian <HEAD>.

html
Salin kode
        <BODY> 
 Membuka bagian <BODY>. Semua konten utama halaman web (teks, gambar, script, dll) ditulis di sini.

html
Salin kode
        <script language="JavaScript"> 
 Membuka tag <script> lagi, kali ini berada di dalam <body>.

html
Salin kode
        document.write("Program JavaSript Aku di body"); 
 Kode JavaScript kedua.
 Akan menampilkan teks "Program JavaSript Aku di body" di dalam area body halaman.

html
Salin kode
        </script> 
 Menutup tag <script> di dalam body.

html
Salin kode
        </BODY> 
</HTML>
 Menutup bagian <BODY> dan dokumen HTML (</HTML>).

 # OUTPUT:
 <img src="Gambar output/output1.jpeg">
 
 # Analisis file Even tertentu
<!DOCTYPE html> 
 Mendefinisikan bahwa dokumen ini menggunakan HTML5.

html
Salin kode
<html> 
 Tag pembuka dokumen HTML. Semua isi halaman ada di dalamnya.

html
Salin kode
    <head> 
        <title>Belajar Javascript : Mengenal Event Pada Javascript</title> 
    </head> 
 Bagian <head> berisi informasi untuk browser.
 <title> memberikan judul tab browser: "Belajar Javascript : Mengenal Event Pada Javascript".

html
Salin kode
    <body> 
 Membuka bagian <body> yang berisi konten utama halaman.

html
Salin kode
        <h1>Mengenal Event Pada Javascript</h1> 
 Menampilkan teks besar (judul utama) di halaman: "Mengenal Event Pada Javascript".

html
Salin kode
        <h2> Perograman WEB Event one click</h2> 
 Subjudul tingkat 2 yang ditampilkan: "Perograman WEB Event one click".
(Ada salah ketik: "Perograman" seharusnya "Pemrograman").

html
Salin kode
        <!-- memberikan event pada element tombol --> 
 Komentar HTML, tidak ditampilkan di browser. Hanya untuk catatan.

html
Salin kode
        <button onclick="tampilkan_nama()">klik disini </button> 
 Membuat tombol dengan teks "klik disini".
 Atribut onclick="tampilkan_nama()" artinya jika tombol diklik, maka JavaScript akan menjalankan fungsi tampilkan_nama().

html
Salin kode
        <!-- id hasil --> 
 Komentar lagi, memberi penjelasan bahwa elemen berikut punya ID untuk menampilkan hasil.

html
Salin kode
        <div id="hasil"></div> 
 Membuat elemen <div> kosong dengan id="hasil".
 Elemen ini akan diisi oleh JavaScript ketika tombol diklik.

html
Salin kode
     <script> 
        // membuat function tampilkan_nama 
        function tampilkan_nama(){ 
            document.getElementById("hasil").innerHTML = 
                "<h3>Nama Saya Adalah Andi Akram Nur Risal</h3>"; 
        } 
    </script> 
 Tag <script> digunakan untuk menulis kode JavaScript.
 Komentar // membuat function tampilkan_nama menjelaskan fungsi berikut.
 function tampilkan_nama(){ ... } mendefinisikan fungsi.
 document.getElementById("hasil").innerHTML = ...; mencari elemen <div> dengan ID hasil lalu mengisi kontennya dengan teks <h3>Nama Saya Adalah Andi Akram Nur Risal</h3>.
 Jadi ketika tombol diklik, isi <div> berubah dan teks nama muncul.

html
Salin kode
    </body> 
</html> 
 Menutup body dan HTML

 # OUTPUT:
 <img src="Gambar output/output2.jpeg">


# Analisis file sederhana
 <HTML> 
 Membuka dokumen HTML. Semua isi halaman berada di dalamnya.

html
Salin kode
    <HEAD><TITLE> contoh sederhana JavaScript</TITLE></HEAD> 
 <HEAD> adalah bagian kepala dokumen.
 <TITLE> menentukan judul halaman pada tab browser: "contoh sederhana JavaScript".
 </HEAD> menutup bagian head.

html
Salin kode
    </BODY> 
 Kesalahan: di sini langsung menutup <BODY> padahal belum pernah membuka <BODY>. Seharusnya ada <BODY> sebelum ini.

html
Salin kode
        <script language="JavaScript"> 
 Membuka tag <script> untuk menulis JavaScript.
 Atribut language="JavaScript" adalah gaya lama, di HTML5 lebih baik gunakan <script> saja.

html
Salin kode
        document.write("Selamat Belajar Angkatan 2019","<br>"); 
 document.write() menuliskan teks langsung ke halaman.
 "Selamat Belajar Angkatan 2019" ditampilkan, lalu "<br>" membuat baris baru (line break).

html
Salin kode
        document.write("JavaScript Pemrograman WEB Teknik Komputer"); 
 Menuliskan lagi teks: "JavaScript Pemrograman WEB Teknik Komputer" di baris berikutnya.

html
Salin kode
        </script> 
 Menutup tag <script>.

html
Salin kode
    </BODY> 
</HTML> 
 Menutup <BODY> dan dokumen HTML.
 Karena <BODY> tidak pernah dibuka sebelumnya, maka ini tidak valid

# OUTPUT:
<img src="Gambar output/output3.jpeg">

 # Analisis file Memasukkan Data
 <HTML> 
 Membuka dokumen HTML.

html
Salin kode
    <HEAD> 
        <TITLE>Masukan Data</TITLE> 
    </HEAD> 
 Bagian <HEAD> untuk metadata dokumen.
 <TITLE> memberi judul halaman/tab di browser: "Masukan Data".

html
Salin kode
        <BODY> 
 Membuka bagian <BODY> → semua konten halaman akan tampil di sini.

html
Salin kode
            <SCRIPT LANGUAGE = "JavaScript"> 
 Membuka tag <script> untuk menulis kode JavaScript.
 Atribut LANGUAGE="JavaScript" adalah cara lama, di HTML5 cukup <script>.

html
Salin kode
            <!-- 
 Ini adalah cara lama untuk menyembunyikan kode JavaScript dari browser kuno yang belum mendukung JS. Zaman sekarang tidak diperlukan lagi.

js
Salin kode
            var nama = prompt("Siapa nama Anda?"); 
 Membuat variabel nama.
 prompt("Siapa nama Anda?") memunculkan kotak dialog input di browser.
 User diminta mengetikkan namanya, lalu nilainya disimpan ke variabel nama.

js
Salin kode
            document.write("Hai, " + nama); 
 Menampilkan teks ke halaman web.
 "Hai, " + nama akan menggabungkan string "Hai, " dengan input dari pengguna.
 Contoh: kalau user mengetik Budi, maka outputnya: "Hai, Budi".

html
Salin kode
        //--> 
 Bagian ini sebenarnya penutup komentar lama (//-->) supaya kode tidak terbaca browser lama.
 Di HTML/JS modern, bagian ini tidak dibutuhkan lagi.

html
Salin kode
            </SCRIPT> 
 Menutup tag <script>.

html
Salin kode
        </BODY> 
</HTML>
 Menutup <BODY> dan dokumen HTML.

 # OUTPUT:
 <img src="Gambar output/output4.jpeg">


 # Analisis file jendelah contoh 1
 <SCRIPT LANGUAGE = JavaScript > 
    <!---->
        window.alert("Apakah anda akan meninggalkan laman ini" ); 
    //
        </SCRIPT> 
 Penjelasan:

<SCRIPT LANGUAGE = JavaScript> → membuka blok script.
 Catatan: LANGUAGE adalah cara lama. Di HTML5 sebaiknya gunakan <script> saja.

<!----> → komentar HTML lama, dulunya dipakai untuk menyembunyikan kode JS dari browser yang belum mendukung JavaScript.

window.alert("Apakah anda akan meninggalkan laman ini");

window.alert() akan menampilkan kotak dialog peringatan (alert box) dengan teks "Apakah anda akan meninggalkan laman ini".

User harus klik OK untuk menutup dialog.

// → komentar dalam JavaScript. Karena tidak ada kode di belakangnya, ini tidak berpengaruh.

</SCRIPT> → menutup blok script.

# OUTPUT:
<img src="Gambar output/output5.jpeg">


# Analsis file contoh 2
        <SCRIPT LANGUAGE = "JavaScript"> 
        <!-- 
        var jawaban = window.confirm( 
            "Apakah anda sudah yakin ?"); 
             document.write("Jawaban Anda: " + jawaban); 
            //--> 
        </SCRIPT> 
 Penjelasan:

<SCRIPT LANGUAGE="JavaScript"> → membuka blok JavaScript. (⚠️ LANGUAGE adalah cara lama, di HTML5 cukup <script>).

<!-- dan //--> → cara lama untuk menyembunyikan JS dari browser kuno. Sekarang tidak perlu lagi.

var jawaban = window.confirm("Apakah anda sudah yakin ?");

window.confirm() akan menampilkan kotak dialog konfirmasi dengan tombol OK dan Cancel.

Jika user klik OK → jawaban bernilai true.

Jika user klik Cancel → jawaban bernilai false.

document.write("Jawaban Anda: " + jawaban);

Menulis hasil ke halaman.

Jika klik OK → tampil: Jawaban Anda: true

Jika klik Cancel → tampil: Jawaban Anda: false

</SCRIPT> → menutup blok script.

# OUTPUT:
<img src="Gambar output/lj output5.jpeg">
<img src="Gambar output/lj.output5.jpeg">


# Analsisi file Mendeklarasikan Variabel
<script>
    var VariabelKu;
    var VariabelKu2 = 3;
    VariabelKu = 1234;
    document.write(VariabelKu * VariabelKu2);
  </script>
 Penjelasan:

<script> → membuka blok JavaScript.

var VariabelKu; → deklarasi variabel kosong bernama VariabelKu.

var VariabelKu2 = 3; → deklarasi variabel dengan nilai awal 3.

VariabelKu = 1234; → memberi nilai 1234 ke variabel VariabelKu.

document.write(VariabelKu * VariabelKu2); →

Menghitung hasil perkalian: 1234 × 3 = 3702

Menuliskan hasilnya langsung ke halaman web.

</script> → menutup blok script.

# OUTPUT:
<img src="Gambar output/output6.jpeg">

# Analisis file global&lokal
<script language= "Javascript" >
    <!--
        var a= 12;
        var b= 4;
        function Perkalian_Dengan2(b){
            a = b * 2;
            return a;
        }
        document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
        document.write(" nilai dari a adalah ", a);
    -->
</script>
 Penjelasan baris demi baris:

<script language="Javascript"> → membuka blok JavaScript.
 language sudah usang, lebih baik gunakan <script> saja.

var a=12; → mendeklarasikan variabel global a dengan nilai awal 12.

var b=4; → mendeklarasikan variabel global b dengan nilai 4.

function Perkalian_Dengan2(b){ ... } → membuat fungsi dengan parameter b.

a = b * 2; → memodifikasi variabel global a dengan nilai baru hasil perkalian.

return a; → mengembalikan nilai a.

document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
document.write(" nilai dari a adalah ", a);

document.write menampilkan teks ke halaman web.

Pertama:

b nilainya 4.

Perkalian_Dengan2(b) = 4 * 2 = 8.

Hasil output: "dua kali dari 4 adalah 8".

Kedua:

Karena fungsi mengubah a, sekarang a = 8.

Output: "nilai dari a adalah 8".

</script> → menutup blok script.

# OUTPUT:
<img src="Gambar output/output7.jpeg">

# Analisis file konversi tipe data
var a = parseInt("27");
document.write("1." + a + "<br>");
Analisis:
parseInt("27") mengubah string "27" menjadi angka bulat 27.
Output: 1.27

parseInt("27.5")
javascript
Salin kode
a = parseInt("27.5");
document.write("2." + a + "<br>");
Analisis:
parseInt("27.5") hanya membaca integer di depan, jadi hasilnya 27 (angka setelah titik diabaikan).
Output: 2.27

parseInt("27A")
javascript
Salin kode
var a = parseInt("27A");
document.write("3." + a + "<br>");
 Analisis:
parseInt("27A") membaca dari awal: "27" valid, lalu berhenti saat ketemu huruf.
Hasilnya 27.
Output: 3.27

parseInt("A27.5")
javascript
Salin kode
a = parseInt("A27.5");
document.write("4." + a + "<br>");
 Analisis:
Karena string diawali huruf "A", parseInt tidak menemukan angka valid di depan, hasilnya NaN (Not a Number).
Output: 4.NaN

parseFloat("27")
javascript
Salin kode
var b = parseFloat("27");
document.write("5." + b + "<br>");
 Analisis:
parseFloat("27") mengubah string "27" menjadi angka 27.
Output: 5.27

parseFloat("27.5")
javascript
Salin kode
b = parseFloat("27.5");
document.write("6." + b + "<br>");
Analisis:
parseFloat("27.5") membaca string desimal lengkap.
Hasilnya 27.5.
Output: 6.27.5

parseFloat("27A")
javascript
Salin kode
var b = parseFloat("27A");
document.write("7." + b + "<br>");
Analisis:
parseFloat("27A") membaca dari awal: "27" valid, lalu berhenti di "A".
Hasilnya 27.
Output: 7.27

parseFloat("A27.5")
javascript
Salin kode
b = parseFloat("A27.5");
document.write("8." + b + "<br>"); 
Analisis:
Karena string diawali huruf "A", tidak ada angka valid di awal.
Hasilnya NaN.
Output: 8.NaN

# OUTPUT:
<img src="Gambar output/output8.jpeg">

# Analisis file Operasi Aritmatika
document.write("2 + 3 = " + (2 + 3) ); 
document.write("<BR>");
Analisis:
2 + 3 = 5 → operasi penjumlahan.
Ditampilkan: "2 + 3 = 5"
<BR> membuat baris baru.

Baris Kedua
javascript
Salin kode
document.write("20 + 3 = " + (20 - 3) ); 
document.write("<BR>");
Analisis:
Tulisan di string: "20 + 3 =" → seolah-olah operasi penjumlahan.
Tapi di dalam kurung justru (20 - 3) → pengurangan, hasilnya 17.
di outputnya: "20 + 3 = 17" ⚠️ (tidak sesuai label).

Baris Ketiga
javascript
Salin kode
document.write("20* 3 = " + (2 * 3) ); 
document.write("<BR>");
Analisis:
Tulisan di string: "20* 3 =" → seolah 20 × 3.
Tapi perhitungan (2 * 3) → hasilnya 6.
Jadi output: "20 3 = 6"* ⚠️ (salah label juga).

Baris Keempat
javascript
Salin kode
document.write("40 / 3 = " + (40 / 3) ); 
document.write("<BR>");
Analisis:
Operasi pembagian 40 / 3 = 13.3333333... (bilangan desimal).
Output: "40 / 3 = 13.333333333333334" (hasil default JS).

# OUTPUT:
<img src="Gambar output/output9.jpeg">


# Analisis file operasi Logika Pembanding
ar nilai = prompt("Nilai (0-100): ", 0);
Analisis:
prompt menampilkan dialog input dengan pesan "Nilai (0-100): " dan nilai default 0.
Input dari user disimpan ke variabel nilai.
Nilai hasil prompt bertipe string, tapi saat dibandingkan dengan angka, JavaScript otomatis mengonversinya ke number jika memungkinkan.

Operator Ternary ? :
javascript
Salin kode
var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus";
Analisis:
Operator ternary adalah bentuk singkat if ... else.
Jika nilai >= 60 → variabel hasil berisi "Lulus".
Jika nilai < 60 → variabel hasil berisi "Tidak Lulus".

Menampilkan Hasil
javascript
Salin kode
document.write("Hasil: " + hasil);
Analisis:
Menuliskan hasil ke halaman web.
Misalnya user input 75 → "Hasil: Lulus".
Jika input 50 → "Hasil: Tidak Lulus".

# OUTPUT:
<img src="Gambar output/output10.jpeg">
<img src="Gambar output/LJ output10.jpeg">


# Analisis file tugas 1
let angkaString = "123";      // string
let angkaInt = parseInt(angkaString); // konversi ke integer
let angkaFloat = parseFloat("45.67"); // konversi ke float
let bool = Boolean(1);        // konversi ke boolean
Analisis:
let angkaString = "123";
→ menyimpan string "123".
parseInt(angkaString)
→ konversi "123" menjadi integer 123.
parseFloat("45.67")
→ konversi string "45.67" menjadi number desimal 45.67.
Boolean(1)
→ konversi angka 1 menjadi true.
(aturan: 0 → false, selain 0 → true).

Output ke Halaman
javascript
Salin kode
document.write("String: " + angkaString + " (tipe: " + typeof angkaString + ")<br>");
document.write("Integer: " + angkaInt + " (tipe: " + typeof angkaInt + ")<br>");
document.write("Float: " + angkaFloat + " (tipe: " + typeof angkaFloat + ")<br>");
document.write("Boolean: " + bool + " (tipe: " + typeof bool + ")<br>");
Analisis:
typeof dipakai untuk mengetahui tipe data variabel.
Output yang muncul:
typescript
Salin kode
String: 123 (tipe: string)
Integer: 123 (tipe: number)
Float: 45.67 (tipe: number)Boolean: true (tipe: boolean)

# OUTPUT:
<img src="Gambar output/outputtugas1.jpeg">


# Analisis file tugas 2
let data = ["Restu", 19, true, 85.5]; // string, integer, boolean, float
Analisis:
data adalah array dengan 4 elemen:
data[0] = "Restu" → string
data[1] = 19 → integer (number)
data[2] = true → boolean
data[3] = 85.5 → float (number desimal)
Di JavaScript, array boleh berisi berbagai tipe data dalam satu variabel.

Menampilkan Elemen Array
javascript
Salin kode
document.write("Nama: " + data[0] + "<br>");
document.write("Umur: " + data[1] + "<br>");
document.write("Status Mahasiswa: " + data[2] + "<br>");
document.write("Nilai: " + data[3] + "<br>");
Analisis:
document.write() dipakai untuk menulis ke halaman.
data[0] → "Restu" → ditampilkan sebagai Nama: Restu.
data[1] → 19 → ditampilkan sebagai Umur: 19.
data[2] → true → ditampilkan sebagai Status Mahasiswa: true.
data[3] → 85.5 → ditampilkan sebagai Nilai: 85.5.

# OUTPUT:
<img src="Gambar output/outputtugas2.jpeg">


# Analisis file tugas 3
<input type="text" id="num1" placeholder="Angka 1">
<input type="text" id="num2" placeholder="Angka 2"><br><br>
Analisis:
Dua kotak input teks:
id="num1" untuk angka pertama.
id="num2" untuk angka kedua.
placeholder memberi teks bayangan sebelum user mengetik.
<br><br> memberi jarak baris.

Tombol Operasi
html
Salin kode
<button onclick="hitung('+')">+</button>
<button onclick="hitung('-')">-</button>
<button onclick="hitung('*')">×</button>
<button onclick="hitung('/')">÷</button>
Analisis:
Setiap tombol memanggil fungsi hitung(operator) dengan parameter berbeda (+, -, *, /).
Klik tombol → fungsi hitung dieksekusi.

Tempat Menampilkan Hasil
html
Salin kode
<p>Hasil: <span id="hasil"></span></p>
Analisis:
Hasil perhitungan akan ditampilkan di dalam <span id="hasil">.
Awalnya kosong, nanti diisi dengan JavaScript.

Fungsi JavaScript
javascript
Salin kode
function hitung(operator) {
  let a = parseFloat(document.getElementById("num1").value);
  let b = parseFloat(document.getElementById("num2").value);
  let result = 0;

  if (operator === '+') result = a + b;
  else if (operator === '-') result = a - b;
  else if (operator === '*') result = a * b;
  else if (operator === '/') result = a / b;

  document.getElementById("hasil").innerText = result;
}
Analisis:
document.getElementById("num1").value → ambil isi input pertama.
parseFloat() → ubah string ke number (supaya bisa dihitung).
if...else if... → cek operator:

'+' → penjumlahan.

'-' → pengurangan.

'*' → perkalian.

'/' → pembagian.
Hasil disimpan di variabel result.
document.getElementById("hasil").innerText = result; → menampilkan hasil ke <span id="hasil">.

# OUTPUT:
<img src="Gambar output/outputtugas3.jpeg">


# Analisis file tugas 4
<h3>Volume Kubus</h3>
Sisi: <input type="text" id="sisi">
<button onclick="kubus()">Hitung</button>
<p>Hasil: <span id="hasilKubus"></span></p>
Analisis:
Input id="sisi" untuk panjang sisi kubus.
Tombol memanggil fungsi kubus().
Hasil perhitungan akan ditampilkan di <span id="hasilKubus">.

Form Input & Tombol (Balok)
html
Salin kode
<h3>Volume Balok</h3>
Panjang: <input type="text" id="p">
Lebar: <input type="text" id="l">
Tinggi: <input type="text" id="t">
<button onclick="balok()">Hitung</button>
<p>Hasil: <span id="hasilBalok"></span></p>
Analisis:
Input p = panjang, l = lebar, t = tinggi.
Tombol memanggil fungsi balok().
Output muncul di <span id="hasilBalok">.

Form Input & Tombol (Tabung)
html
Salin kode
<h3>Volume Tabung</h3>
Jari-jari: <input type="text" id="r">
Tinggi: <input type="text" id="tinggiTabung">
<button onclick="tabung()">Hitung</button>
<p>Hasil: <span id="hasilTabung"></span></p>
Analisis:
Input r = jari-jari, tinggiTabung = tinggi tabung.
Tombol memanggil fungsi tabung().
Hasil ditampilkan di <span id="hasilTabung">.

Fungsi JavaScript
javascript
Salin kode
function kubus() {
  let s = parseFloat(document.getElementById("sisi").value);
  document.getElementById("hasilKubus").innerText = s * s * s;
}
Analisis:
Ambil nilai sisi → konversi ke number dengan parseFloat.
Hitung volume kubus = s³.
Tampilkan hasil di hasilKubus.

javascript
Salin kode
function balok() {
  let p = parseFloat(document.getElementById("p").value);
  let l = parseFloat(document.getElementById("l").value);
  let t = parseFloat(document.getElementById("t").value);
  document.getElementById("hasilBalok").innerText = p * l * t;
}
Analisis:
Ambil panjang, lebar, tinggi.
Hitung volume balok = p × l × t.
Tampilkan hasil di hasilBalok.

javascript
Salin kode
function tabung() {
  let r = parseFloat(document.getElementById("r").value);
  let t = parseFloat(document.getElementById("tinggiTabung").value);
  document.getElementById("hasilTabung").innerText = (Math.PI * r * r * t).toFixed(2);
}
Analisis:
Ambil jari-jari r dan tinggi t.
Rumus volume tabung = π × r² × t.
Math.PI = konstanta π (3.14159…).
.toFixed(2) → membatasi hasil 2 angka desimal.

# OUTPUT:
<img src="Gambar output/outputtugas4.jpeg">
