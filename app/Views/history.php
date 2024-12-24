<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/History.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">

            <!-- Mengubah <i> menjadi link ke self.php -->
            <i class="fas fa-bars" id="menu-icon"></i>
            <div class="daftar" id="daftar">
                <ul>
                    <li>Home</li>
                    <li>Management Self Service</li>
                    <li>Employee Self Service</li>
                    <li>Core</li>
                    <li>Log Out</li>
                </ul>
            </div>
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

    <div class="personal-container">
        <div class="profile">
            <img src="<?= base_url('img/dinahosteria.png') ?>" alt="Profile Picture" class="profile-pic" />
        </div>
        <div class="info">
            <h3>DINAH ARYANI ZAVITRI</h3>
            <p>ID: MCGK24E01D001</p>
        </div>
        <div class="dropdown">
            <select id="pageSelect" onchange="navigateToPage()">
                <option value="employee">ESS: Employee Data</option>
                <option value="leave-absence">ESS: Leave & Absence</option>
                <option value="attendance-overtime">ESS: Attendance & Overtime</option>
            </select>
        </div>
    </div>

    <div class="tabs-container">
        <div class="tabs">
            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('personaldata') ?>" class="tab-link" data-tab="personaldata">
                <button class="tab">Profile</button>
            </a>

            <!-- Button dengan Link Menu employee -->
            <a href="<?= site_url('employee') ?>" class="tab-link" data-tab="employee">
                <button class="tab">Employee</button>
            </a>

            <!-- Button dengan Link Menu people -->
            <a href="<?= site_url('people') ?>" class="tab-link" data-tab="people">
                <button class="tab">People Development</button>
            </a>

            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('compensation') ?>" class="tab-link" data-tab="compensation">
                <button class="tab">Compensation</button>
            </a>

            <!-- Button dengan Link Menu history -->
            <a href="<?= site_url('history') ?>" class="tab-link" data-tab="history">
                <button class="tab">History</button>
            </a>

            <!-- Button dengan Link Menu personal -->
            <a href="<?= site_url('personal') ?>" class="tab-link" data-tab="personal">
                <button class="tab">Personal Request</button>
            </a>
        </div>
    </div>


    <div class="employee-data-container">
        <div class="no-history">
            <p>No History</p>
        </div>
    </div>

    <footer class="custom-footer">
        <p>&copy; 2024 Human Capital Information System. All rights reserved. | Smart HC Portal</p>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuIcon = document.getElementById("menu-icon");
        const navigation = document.getElementById("daftar");

        // Fungsi untuk toggle menu
        function toggleMenu() {
            navigation.classList.toggle("active");

            // Toggle antara ikon "fa-bars" dan "fa-times"
            if (menuIcon.classList.contains("fa-bars")) {
                menuIcon.classList.replace("fa-bars", "fa-times"); // Ubah jadi X
            } else {
                menuIcon.classList.replace("fa-times", "fa-bars"); // Ubah kembali jadi menu
            }
        }

        // Tambahkan event listener untuk klik menu
        menuIcon.addEventListener("click", function(event) {
            event.stopPropagation(); // Mencegah event propagasi ke document
            toggleMenu();
        });

        // Tambahkan event listener untuk klik di area lain
        document.addEventListener("click", function(event) {
            // Cek jika menu sedang aktif dan klik terjadi di luar menu dan ikon
            if (navigation.classList.contains("active") && !navigation.contains(event.target) && event
                .target !== menuIcon) {
                navigation.classList.remove("active"); // Tutup menu
                menuIcon.classList.replace("fa-times", "fa-bars"); // Kembalikan ikon ke "fa-bars"
            }
        });
    });

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

    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll(
            '.tab-content'); // Menyimpan konten tab untuk manipulasi lebih lanjut

        // Fungsi untuk menampilkan konten tab yang sesuai
        function showTabContent(tabName) {
            tabContents.forEach(content => {
                if (content.dataset.tab === tabName) {
                    content.classList.remove('hide');
                    content.classList.add('show');
                } else {
                    content.classList.remove('show');
                    content.classList.add('hide');
                }
            });
        }

        // Fungsi untuk mengatur tab aktif
        function setActiveTab(tabName) {
            tabLinks.forEach(link => {
                const button = link.querySelector('button');
                if (link.dataset.tab === tabName) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        }

        // Menangani klik pada setiap tab
        tabLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah perilaku default (navigasi langsung)

                const tabName = link.dataset.tab; // Ambil nama tab dari dataset
                const destination = link.getAttribute(
                    'href'); // Ambil URL tujuan dari atribut href

                // Jika destination adalah link yang mengarah ke halaman lain
                if (destination && destination !== '#' && destination !== '') {
                    window.location.href = destination; // Arahkan ke halaman baru
                } else {
                    // Mengubah hash URL tanpa memuat ulang halaman
                    window.location.hash = tabName; // Ubah hash untuk navigasi

                    // Menampilkan konten tab yang sesuai
                    showTabContent(tabName);

                    // Menandai tab aktif
                    setActiveTab(tabName);
                }
            });
        });

        // Fungsi untuk menangani perubahan hash URL
        function handleHashChange() {
            const tabName = window.location.hash.replace('#', ''); // Ambil nama tab dari hash
            if (tabName) {
                showTabContent(tabName);
                setActiveTab(tabName);
            }
        }

        // Deteksi perubahan hash URL
        window.addEventListener('hashchange', handleHashChange);

        // Inisialisasi tab berdasarkan hash URL saat ini
        if (window.location.hash) {
            handleHashChange();
        } else {
            // Inisialisasi tab pertama jika tidak ada hash URL
            setActiveTab('history');
            showTabContent('personaldata');
        }
    });

    function navigateToPage() {
        var selectBox = document.getElementById('pageSelect');
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;

        // Redirect to the appropriate page based on selected value
        if (selectedValue) {
            window.location.href = '/' + selectedValue;
        }
    }
    </script>
</body>

</html>