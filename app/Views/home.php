<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/Home.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="self">
                <!-- Mengubah <i> menjadi link ke self.php -->
                <i class="fas fa-bars" id="menu-icon"></i>
            </a>
            <div class="logo">
                <img src="<?= base_url('img/logoHRIS.png') ?>" alt="Logo">
            </div>
        </div>



        <div class="navbar-center">
            <i class='bx bx-bell'></i> <!-- Ikon alarm -->
            <div id="time-container">
                <div id="time">10:30 AM</div> <!-- Waktu berjalan -->
                <div id="date">28 November 2024</div> <!-- Tanggal -->
            </div>
        </div>


        <div class="navbar-right">
            <a href="<?= site_url('profile') ?>" class="user-link">
                <i class="fas fa-user"></i>
                <span>DINAH ARYANI ZAVITRI</span>
            </a>
        </div>


    </nav>

    <div class="home-container">
        <h1 class="highlight-text">Highlight</h1>

        <div class="slider">
            <div class="slides">
                <!-- Gambar 1 -->
                <div class="slide">
                    <img src="<?= base_url('img/slide 1.png') ?>" alt="Slide 1">
                </div>
                <!-- Gambar 2 -->
                <div class="slide">
                    <img src="<?= base_url('img/slide2.png') ?>" alt="Slide 2">
                </div>
                <!-- Gambar 3 -->
                <div class="slide">
                    <img src="<?= base_url('img/slide 3.png') ?>" alt="Slide 3">
                </div>
            </div>


        </div>
        <!-- indikator slider -->
        <div class="slider-indicators">
            <span class="indicator" onclick="setSlide(0)"></span>
            <span class="indicator" onclick="setSlide(1)"></span>
            <span class="indicator" onclick="setSlide(2)"></span>
        </div>

        <!-- Tombol navigasi -->
        <div class="navi"><button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>

    </div>

    <div class="news-container">
        <div class="news-header">
            <h3 class="news-text">News</h3>
            <div class="logo1">
                <img src="<?= base_url('img/News.png')?>" alt=" Logo">
            </div>
        </div>

        <div class="image-text-container">
            <div class="image-container">
                <img src="<?= base_url('img/Jne News.png') ?>" alt="Gambar berita">
            </div>
            <div class="news-content">
                <h3 class="news-title">JNE Learning Center Digital</h3>
                <p class="news-description">
                    JNE Learning Center is a learning platform developed by JNE to support employee competency
                    development.
                    <a href="#" class="more-link">...More</a>
                </p>
            </div>
        </div>
    </div>


    <div class="policy-container">
        <div class="policy-header">
            <h3 class="policy-title">HR Policy</h3>
            <i class='bx bx-file'></i>
        </div>
        <ul class=" policy-list">
            <li class="policy-item">
                <span class="policy-text">Tutorial Mengganti Kata Sandi Aplikasi Smart HC</span>
                <span class="policy-date">3 days ago</span>
            </li>
            <li class="policy-item">
                <span class="policy-text">Tutorial Update Data Diri Aplikasi Smart HC</span>
                <span class="policy-date">5 days ago</span>
            </li>
            <li class="policy-item">
                <span class="policy-text">Langkah-Langkah Mengakses Bukti Potong via Smart HC</span>
                <span class="policy-date">1 week ago</span>
            </li>
        </ul>
    </div>

    <div class="todo-container">
        <h1>MSS To do list <span class="icon">☰</span></h1>
        <div class="todo-item pending">
            <h2>Pending Approvals</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="todo-item completed">
            <h2>Completed Task</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="todo-item upcoming">
            <h2>Upcoming Deadlines</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <footer class="custom-footer">
        <p>&copy; 2024 Human Capital Information System. All rights reserved. | Smart HC Portal</p>
    </footer>


    </div>
    <script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar'); // Misalnya, sidebar memiliki ID "sidebar"
        sidebar.classList.toggle('active'); // Menambahkan atau menghapus kelas 'active'
    }

    function updateTime() {
        const timeElement = document.getElementById('time');
        const dateElement = document.getElementById('date');
        const now = new Date();

        // Format waktu dengan titik dua
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        timeElement.textContent = `${hours}:${minutes}:${seconds}`;

        // Format tanggal: hari, tanggal bulan tahun
        const options = {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        };
        dateElement.textContent = now.toLocaleDateString('id-ID', options);
    }

    setInterval(updateTime, 1000);
    updateTime(); // Panggil segera agar tidak menunggu interval pertama



    let currentSlide = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    const indicators = document.querySelectorAll('.indicator');

    // Fungsi untuk berpindah slide
    function moveSlide(step) {
        currentSlide = (currentSlide + step + totalSlides) % totalSlides;
        updateSlide();
    }

    // Fungsi untuk mengatur slide ke posisi tertentu
    function setSlide(index) {
        currentSlide = index;
        updateSlide();
    }

    // Fungsi untuk memperbarui posisi slide dan indikator
    function updateSlide() {
        slides.style.transform = `translateX(-${currentSlide * 100}%)`;
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
    }

    // Slider otomatis
    setInterval(() => {
        moveSlide(1);
    }, 5000); // Pindah otomatis setiap 5 detik

    // Inisialisasi posisi indikator
    updateSlide();


    // Fungsi untuk menghitung waktu relatif
    function timeAgo(date) {
        const now = new Date();
        const diff = Math.floor((now - date) / 1000); // Perbedaan waktu dalam detik

        // Konversi ke unit waktu yang sesuai
        if (diff < 60) {
            return `${diff} seconds ago`;
        } else if (diff < 3600) {
            const minutes = Math.floor(diff / 60);
            return `${minutes} minutes ago`;
        } else if (diff < 86400) {
            const hours = Math.floor(diff / 3600);
            return `${hours} hours ago`;
        } else {
            const days = Math.floor(diff / 86400);
            return `${days} days ago`;
        }
    }

    // Tetapkan waktu awal (contoh: 3 hari lalu)
    const policyDate = new Date();
    policyDate.setDate(policyDate.getDate() - 3); // Mengatur 3 hari sebelumnya

    // Update elemen HTML dengan waktu relatif
    document.getElementById('policy-date').textContent = timeAgo(policyDate);
    </script>

</body>

</html>