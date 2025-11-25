<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Promosi Kost Putra & Putri - Nyaman, Aman, Strategis dekat kampus dan pusat kota">
  <meta name="keywords" content="kost, kos putra, kos putri, kamar kost, sewa kost, murah">
  <meta name="author" content="Nama Pemilik">
  <title>Kost Rahmah Nyaman Aman</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'inter': ['Inter', 'sans-serif'],
          },
          colors: {
            'blue-600': '#007bff',
            'blue-700': '#0056b3',
          },
          zIndex: {
            '1000': '1000',
          }
        }
      }
    }
  </script>
  
  <link rel="stylesheet" href="style.css"> <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-inter leading-relaxed text-gray-900 bg-white overflow-x-hidden">
  
  <div id="loading-screen" class="fixed top-0 left-0 w-full h-full bg-white flex justify-center items-center">
    <div class="loading-spinner w-10 h-10 rounded-full"></div>
  </div>

  <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md z-1000 transition-all duration-300 border-b border-gray-100" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
      <a href="#home" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition duration-300" id="nav-logo">Kost Nyaman</a>
      
      <ul class="fixed left-full top-16 flex flex-col bg-white w-full text-center transition-all duration-300 p-8 space-y-4 md:static md:flex md:flex-row md:space-y-0 md:p-0 md:left-0 md:w-auto md:space-x-8" id="nav-menu">
        <li class="nav-item"><a href="#home" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Beranda</a></li>
        <li class="nav-item"><a href="#about" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Tentang</a></li>
        <li class="nav-item"><a href="#rooms" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Kamar</a></li>
        <li class="nav-item"><a href="#gallery" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Galeri</a></li>
        <li class="nav-item"><a href="#testimonials" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Testimoni</a></li>
        <li class="nav-item"><a href="#contact" class="text-gray-900 hover:text-blue-600 transition duration-300 font-medium relative nav-link">Kontak</a></li>
      </ul>
      
      <div class="flex flex-col space-y-1 cursor-pointer md:hidden" id="hamburger">
        <span class="block w-6 h-0.5 bg-gray-900 transition duration-300 bar"></span>
        <span class="block w-6 h-0.5 bg-gray-900 transition duration-300 bar"></span>
        <span class="block w-6 h-0.5 bg-gray-900 transition duration-300 bar"></span>
      </div>
    </div>
  </nav>

  <section id="home" class="min-h-screen flex items-center justify-center relative bg-gradient-to-br from-white to-blue-50 pt-16 hero-parallax">
    <div class="text-center max-w-4xl px-4 fade-in">
        <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 animate-fadeInUp">Kost Rahmah Aman Nyaman</h1>
        <p class="text-xl lg:text-2xl text-gray-600 mb-4 font-medium animate-fadeInUp delay-200">Dekat Kampus • Strategis • Harga Terjangkau</p>
        <p class="text-lg text-gray-600 mb-10 max-w-xl mx-auto animate-fadeInUp delay-300">Tempat tinggal nyaman dengan fasilitas Kamar Mandi Dalam dan dapur mini untuk mahasiswa & pekerja.</p>
        <a href="#rooms" class="inline-block bg-blue-600 text-white py-3 px-8 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl animate-fadeInUp delay-400">Lihat Kamar</a>
    </div>
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-5 h-5 border-r-2 border-b-2 border-gray-900 transform rotate-45"></div>
    </div>
  </section>

  <section id="about" class="bg-blue-50 py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center mb-12 section-title-underline fade-in">Tentang Kost</h2>
      <p class="text-gray-600 mb-8 text-lg text-center max-w-5x1 mx-auto fade-in">Nikmati pengalaman tinggal premium dan privat di Kos Eksklusif 6 Kamar kami. Setiap unit dirancang seperti studio mini yang sangat lega, dengan ukuran luas 3x7 meter untuk kenyamanan maksimal, dilengkapi Dapur Mini Pribadi dan Kamar Mandi Dalam, menjamin privasi dan kepraktisan Anda. Terletak di Lokasi Super Strategis, Anda hanya perlu beberapa langkah menuju pusat kota, perkantoran, kampus, dan pusat perbelanjaan, menjadikannya pilihan sempurna bagi pekerja atau mahasiswa yang mendambakan akses mudah dan hunian yang mandiri.</p>
      <div class="flex justify-center gap-8 mt-12 fade-in">
        <div class="text-center">
          <span class="text-4xl font-bold text-blue-600 block">6+</span>
          <span class="text-base text-gray-700">Kamar Tersedia</span>
        </div>
        <div class="text-center">
          <span class="text-4xl font-bold text-blue-600 block">2+</span>
          <span class="text-base text-gray-700">Fasilitas Utama</span>
        </div>
        <div class="text-center">
          <span class="text-4xl font-bold text-blue-600 block">100+</span>
          <span class="text-base text-gray-700">Penyewa Puas</span>
        </div>
      </div>
    </div>
  </section>

  <section id="rooms" class="bg-gray-50 py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center mb-12 section-title-underline fade-in">Daftar Kamar Kost</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 1.jpeg" alt="Kamar Standar 1" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 1</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%201" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 2.jpeg" alt="Kamar Standar 2" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 2</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%202" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 3.jpeg" alt="Kamar Standar 3" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 3</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%203" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 4.jpeg" alt="Kamar Standar 4" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 4</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%204" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 5.jpeg" alt="Kamar Standar 5" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 5</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%205" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 overflow-hidden fade-in">
          <div class="h-55">
            <img src="gambar/kamar 6.jpeg" alt="Kamar Standar 6" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-1">Kamar 6</h3>
            <p class="text-gray-600 mb-3">Kamar Mandi Dalam dan dapur mini</p>
            <p class="text-lg font-bold text-blue-600 mb-1">Rp 700.000 / bulan</p>
            <p class="text-base font-bold text-blue-600 mb-4">Rp 8.200.000 / tahun</p>
            <a href="https://wa.me/6285215041480?text=Halo%20saya%20ingin%20booking%20Kamar%20Standar%206" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold text-sm hover:bg-blue-700 transition duration-300">Booking via WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section id="gallery" class="bg-white py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 class="text-4xl font-bold text-center mb-12 section-title-underline fade-in">Galeri Foto Kost</h2>
          <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto fade-in">Lihat lebih detail fasad setiap kamar kost.</p>
        <div class="grid grid-cols-2 gap-4 lg:gap-8 mt-12 fade-in">

          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
              <img src="gambar/depan kos.jpeg" alt="Fasad Kamar 1" class="w-full h-64 object-cover transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
              <img src="gambar/pekarangan kos.jpeg" alt="Fasad Kamar 1" class="w-full h-64 object-cover transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
              <img src="gambar/kamar 1.jpeg" alt="Fasad Kamar 1" class="w-full h-64 object-cover transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
              <img src="gambar/dalam kos.jpeg" alt="Fasad Kamar 1" class="w-full h-64 object-cover transform hover:scale-105 transition duration-500 cursor-pointer">
            </div>
        </div>
    </section>

  <section id="testimonials" class="py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center mb-16 section-title-underline fade-in">Testimoni Penyewa</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-blue-600 fade-in">
          <p class="text-gray-700 text-lg mb-6 italic">"Kamarnya nyaman dan bersih. Lokasinya dekat kampus, sangat membantu!"</p>
          <h4 class="font-semibold text-gray-900">Amel (Mahasiswa)</h4>
        </div>
        <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-blue-600 fade-in">
          <p class="text-gray-700 text-lg mb-6 italic">"Kamarnya nyaman dan bersih. Lokasinya juga dekat dari Mall Dan Rumah Sakit jadi sangat membantu saya, Pemilik kost juga ramah."</p>
          <h4 class="font-semibold text-gray-900">Dion (Pekerja)</h4>
        </div>
      </div>
    </div>
  </section>
  

  <section id="contact" class="bg-blue-50 py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center mb-12 section-title-underline fade-in">Booking Kost</h2>
      <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto fade-in">
        Isi data berikut untuk melakukan pemesanan atau menanyakan ketersediaan kamar. 
        Pesan akan langsung terkirim ke WhatsApp pemilik kost.
      </p>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <form id="booking-form" class="bg-white p-8 rounded-xl shadow-lg fade-in">
          <div class="mb-6 text-left">
            <label for="name" class="block font-semibold mb-1">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama anda" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div class="mb-6 text-left">
            <label for="phone" class="block font-semibold mb-1">Nomor HP / WhatsApp</label>
            <input type="text" id="phone" name="phone" placeholder="Contoh: 081234567890" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div class="mb-6 text-left">
            <label for="room" class="block font-semibold mb-1">Pilih Kamar</label>
            <select id="room" name="room" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
              <option value="">-- Pilih Kamar --</option>
              <option value="Kamar Standar 1">Kamar Standar 1</option>
              <option value="Kamar Standar 2">Kamar Standar 2</option>
              <option value="Kamar Standar 3">Kamar Standar 3</option>
              <option value="Kamar Standar 4">Kamar Standar 4</option>
              <option value="Kamar Standar 5">Kamar Standar 5</option>
              <option value="Kamar Standar 6">Kamar Standar 6</option>
            </select>
          </div>

          <div class="mb-6 text-left">
            <label for="message" class="block font-semibold mb-1">Pesan Tambahan</label>
            <textarea id="message" name="message" rows="4" placeholder="Contoh: Saya ingin sewa mulai tanggal 1 Oktober..." class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>

          <button type="submit" class="w-full bg-blue-600 text-white py-3 px-8 border-none rounded-lg font-semibold cursor-pointer hover:bg-blue-700 transition duration-300">Kirim via WhatsApp</button>
        </form>

        <div class="text-center lg:text-left fade-in">
          <h3 class="text-2xl font-semibold mb-4">Hubungi Pemilik</h3>
          <p class="text-gray-700 mb-3">📍 Alamat: Jl. Batua Raya 3 Lr.2/10 Makassar</p>
          <p class="text-gray-700 mb-3">📞 Telepon: <a href="tel:+6285215041480" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">+62 85215041480</a></p>
          <p class="text-gray-700 mb-8">💬 WhatsApp: <a href="https://wa.me/6285215041480" target="_blank" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">Chat Sekarang</a></p>
        </div>
      </div>
      
     <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.805847424602!2d119.4613707!3d-5.1525901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9f43f87532d849%3A0x861c8a6c8e104193!2sLorong%202%20No.10%2C%20Batua%2C%20Kec.%20Manggala%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090233!5e0!3m2!1sid!2sid!4v1677894400000!5m2!1sid!2sid" 
            width="100%" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
      </iframe>

  <footer class="bg-blue-600 text-white py-6 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <p>© 2025 Kost Nyaman. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
// DOM Content Loaded (Using jQuery's shorthand: $(function() { ... });)
$(function() {
  // Initialize all functionality
  initializeLoading()
  initializeNavigation()
  initializeScrollAnimations()
  initializeContactBooking() // ganti: booking via WA
  initializeSmoothScroll()
})

// Loading Screen (Migrated to jQuery)
function initializeLoading() {
  const $loadingScreen = $("#loading-screen") // Use jQuery selector

  $(window).on("load", () => { // Use jQuery event handler
    setTimeout(() => {
      $loadingScreen.addClass("fade-out") // Use jQuery class method
      setTimeout(() => {
        $loadingScreen.hide() // Use jQuery show/hide method
      }, 500)
    }, 1000)
  })
}

// Navigation (Partially Migrated to jQuery for event handling and classes)
function initializeNavigation() {
  const $navbar = $("#navbar")
  const $hamburger = $("#hamburger")
  const $navMenu = $("#nav-menu")
  const $navLinks = $(".nav-link") // Use jQuery selector

  // Navbar scroll effect
  $(window).on("scroll", () => { // Use jQuery event handler
    if (window.scrollY > 50) {
      $navbar.addClass("scrolled") // Use jQuery class method
    } else {
      $navbar.removeClass("scrolled") // Use jQuery class method
    }
  })

  // Mobile menu toggle
  $hamburger.on("click", () => { // Use jQuery event handler
    $hamburger.toggleClass("active")
    $navMenu.toggleClass("active")
  })

  // Close mobile menu when clicking on a link
  $navLinks.on("click", () => { // Use jQuery event handler
    $hamburger.removeClass("active")
    $navMenu.removeClass("active")
  })

  // Active navigation link (Keeping the native JS logic structure as it is more complex)
  $(window).on("scroll", () => {
    let current = ""
    const sections = document.querySelectorAll("section")

    sections.forEach((section) => {
      const sectionTop = section.offsetTop
      // Use jQuery to get section height
      const sectionHeight = $(section).outerHeight()
      // Reduced offset for the 64px fixed navbar
      if (scrollY >= sectionTop - 100) { 
        current = section.getAttribute("id")
      }
    })

    $navLinks.each(function() { // Use jQuery iteration
      const $this = $(this)
      $this.removeClass("active") 
      if ($this.attr("href") === `#${current}`) {
        $this.addClass("active")
      }
    })
  })
}

// Scroll Animations
function initializeScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible")
      }
    })
  }, observerOptions)

  // Observe all elements with fade-in class
  const fadeElements = document.querySelectorAll(".fade-in")
  fadeElements.forEach((element) => {
    observer.observe(element)
  })
}

// Booking Kost via WhatsApp (Migrated event handler and data retrieval)
function initializeContactBooking() {
  const $bookingForm = $("#booking-form")

  if (!$bookingForm.length) return // Check if element exists in jQuery way

  $bookingForm.on("submit", function (e) { // Use jQuery event handler
    e.preventDefault()

    // Get form data using jQuery
    const name = $bookingForm.find("#name").val()
    const phone = $bookingForm.find("#phone").val()
    const room = $bookingForm.find("#room").val()
    const message = $bookingForm.find("#message").val()

    // Basic validation
    if (!name || !phone || !room) {
      showNotification("Harap isi semua data penting.", "error")
      return
    }

    // Nomor WA pemilik kost
    const ownerNumber = "6285215041480" // ganti dengan nomor kamu

    // Format pesan
    const text = `Halo, saya ${name}.%0ANomor HP: ${phone}%0ASaya tertarik dengan kamar: ${room}.%0APesan tambahan: ${message || "-"}`
    const waLink = `https://wa.me/${ownerNumber}?text=${text}`

    // Buka WhatsApp
    window.open(waLink, "_blank")

    this.reset() // Can still use native reset
  })
}

// Smooth Scroll (Migrated to jQuery)
function initializeSmoothScroll() {
  $('a[href^="#"]').on("click", function (e) { // Use jQuery event handler
    e.preventDefault()

    const targetId = $(this).attr("href") // Get href attribute with jQuery
    const $targetSection = $(targetId) // Use jQuery selector for target

    if ($targetSection.length) { // Check if element exists
      const offsetTop = $targetSection.offset().top - 64 // Get offsetTop with jQuery and adjust for navbar

      // Use jQuery's animate function for smooth scrolling
      $("html, body").animate({
        scrollTop: offsetTop
      }, 800) // 800ms duration for smooth scroll
    }
  })
}

// Utility Functions
function showNotification(message, type) {
  // ... (Notification function remains the same, relying on custom CSS)
  const notification = document.createElement("div")
  notification.className = `notification ${type}`
  notification.textContent = message

  // Directly setting styles that are hard to manage with Tailwind in JS
  notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: ${type === "success" ? "#28a745" : "#dc3545"};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `

  document.body.appendChild(notification)

  setTimeout(() => {
    notification.style.transform = "translateX(0)"
  }, 100)

  setTimeout(() => {
    notification.style.transform = "translateX(100%)"
    setTimeout(() => {
      document.body.removeChild(notification)
    }, 300)
  }, 5000)
}

// Parallax Effect for Hero Section (Using jQuery)
$(window).on("scroll", () => {
  const scrolled = $(window).scrollTop()
  const $hero = $(".hero-parallax") 
  const rate = scrolled * -0.5

  if ($hero.length) {
    $hero.css("transform", `translateY(${rate}px)`)
  }
})

// Performance optimization: Throttle scroll events
function throttle(func, wait) {
  let timeout
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout)
      func(...args)
    }
    clearTimeout(timeout)
    timeout = setTimeout(later, wait)
  }
}

const throttledScrollHandler = throttle(() => {
  // Scroll-dependent functions can be called here
}, 16)

window.addEventListener("scroll", throttledScrollHandler)

// Keyboard navigation support
$(document).on("keydown", (e) => {
  if (e.key === "Escape") {
    const $hamburger = $("#hamburger")
    const $navMenu = $("#nav-menu")

    if ($navMenu.hasClass("active")) {
      $hamburger.removeClass("active")
      $navMenu.removeClass("active")
    }
  }
})

// Focus management for accessibility (Keeping native JS, as setting styles is often simpler here)
document.addEventListener("DOMContentLoaded", () => {
  const focusableElements = document.querySelectorAll(
    'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])',
  )

  focusableElements.forEach((element) => {
    element.addEventListener("focus", function () {
      this.style.outline = "2px solid #007BFF"
      this.style.outlineOffset = "2px"
    })

    element.addEventListener("blur", function () {
      this.style.outline = ""
      this.style.outlineOffset = ""
    })
  })
})
  </script>
</body>
</html>