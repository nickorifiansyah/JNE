<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/recruitment.css') ?>">
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

        <!-- Navigation Menu -->
        <div class="navigation" id="navigation">

            <div class="nav-container">
                <h2>Navigation</h2> <!-- Tambahkan Judul Navigation -->
                <ul>
                    <li>
                        <a href="">
                            <i class="bx bx-cog bx-spin"></i> System Manager
                        </a>
                    </li>

                    <li>
                        <a href="personal_manager">
                            <i class="fas fa-user-friends"></i> Personnel Management
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-briefcase"></i> Organization and Job Design
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-search"></i> Recruitment
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-dollar"></i> Payroll Management
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-file"></i> PPH-21
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-time bx-spin"></i> Time Management
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bx bx-calendar"></i> Leave Administration
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kontainer Utama -->
            <div class=" user-info-container">
                <!-- Informasi User -->
                <div class="user-info">
                    <p>Logged in as</p>
                    <strong>MCGK24E01D001</strong>
                </div>

                <!-- Icon Power-Off -->
                <i class='bx bx-power-off power-off-icon' id="logoutIcon"></i>
            </div>
        </div>


        <!-- Modal Konfirmasi Logout -->
        <div id="logoutModal" class="modal">
            <div class="modal-content">
                <h3>Konfirmasi Logout</h3>
                <p>Apakah Anda yakin ingin keluar?</p>
                <div class="modal-actions">
                    <button id="confirmLogout">Ya</button>
                    <button id="cancelLogout">Batal</button>
                </div>
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


    <div class="container">
        <div class="header">
            <h1>Personnel Management</h1>
            <p>Activities</p>
        </div>
        <div class="tabs">
            <button class="tab active">Candidate Data Center</button>
            <button class="tab">Candidate Analysis</button>
        </div>
        <div class="content">
            <ul>

            </ul>
        </div>
    </div>




    <!-- Footer -->
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

    document.addEventListener("DOMContentLoaded", function() {
        const navigation = document.getElementById("navigation");
        const body = document.body;

        // Menampilkan navigation
        navigation.style.left = "0";
        body.style.marginLeft = "250px";

        // Tambahkan event listener untuk sembunyikan atau tampilkan navigation jika diperlukan
        navigation.addEventListener("mouseleave", function() {
            navigation.style.left = "-250px";
            body.style.marginLeft = "0";
        });

        navigation.addEventListener("mouseenter", function() {
            navigation.style.left = "0";
            body.style.marginLeft = "250px";
        });
    });



    // Ambil elemen ikon power-off dan modal
    const logoutIcon = document.getElementById("logoutIcon");
    const logoutModal = document.getElementById("logoutModal");
    const confirmLogoutButton = document.getElementById("confirmLogout");
    const cancelLogoutButton = document.getElementById("cancelLogout");

    // Event listener untuk klik ikon logout
    logoutIcon.addEventListener("click", function() {
        // Tampilkan modal dengan transisi
        logoutModal.classList.add('show');
    });

    // Event listener untuk tombol "Ya" pada modal
    confirmLogoutButton.addEventListener("click", function() {
        // Proses logout, misalnya mengarahkan ke halaman logout
        window.location.href = "/logout"; // Ganti dengan URL logout yang sesuai
        console.log("User mengklik logout.");
    });

    // Event listener untuk tombol "Batal" pada modal
    cancelLogoutButton.addEventListener("click", function() {
        // Sembunyikan modal dengan transisi
        logoutModal.classList.remove('show');
    });

    // Fungsi untuk menangani event ketika tombol Enter ditekan
    document.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            // Proses logout jika Enter ditekan
            confirmLogoutButton.click(); // Simulasi klik tombol "Ya"
        }
    });

    // Event listener untuk mengklik di luar modal untuk menutupnya
    logoutModal.addEventListener("click", function(event) {
        // Jika yang diklik adalah background modal (area di luar konten modal)
        if (event.target === logoutModal) {
            // Sembunyikan modal dengan transisi
            logoutModal.classList.remove('show');
        }
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