<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/LAIP.css') ?>">
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
                <option value="leave-absence">ESS: Leave & Absence</option>
                <option value="attendance-overtime">ESS: Attendance & Overtime</option>
                <option value="employee">ESS: Employee Data</option>
            </select>
        </div>
    </div>

    <div class="tabs-container">
        <div class="tabs">

            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('leave-absence') ?>" class="tab-link" data-tab="personaldata">
                <button class="tab">Leave Summary</button>
            </a>

            <!-- Button dengan Link Menu employee -->
            <a href="<?= site_url('LAIP') ?>" class="tab-link" data-tab="LAIP">
                <button class="tab">Leave Apply In Progress</button>
            </a>

            <!-- Button dengan Link Menu people -->
            <a href="<?= site_url('LH') ?>" class="tab-link" data-tab="LH">
                <button class="tab">Leave History</button>
            </a>

            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('LA') ?>" class="tab-link" data-tab="LA">
                <button class="tab">Leave Adjustment</button>
            </a>

            <!-- Button dengan Link Menu history -->
            <a href="<?= site_url('absence_app') ?>" class="tab-link" data-tab="absence_app">
                <button class="tab">Absence Application</button>
            </a>

        </div>
    </div>

    <div class="leave-container">
        <div class="button-container">
            <button class="btn"><i class='bx bxs-file-plus'></i>Apply Leave</button>
            <button class="btn"><i class='bx bxs-edit-alt'></i>Edit Leave</button>
            <button class="btn"><i class='bx bxs-folder-minus'></i>Cancel Absence</button>
            <div class="apply-for">
                <select id="pageSelect" onchange="navigateToPage()">
                    <option value="leave-absence">Applying For</option>
                    <option value="attendance-overtime">ESS: Attendance & Overtime</option>
                    <option value="employee">ESS: Employee Data</option>
                </select>
            </div>
        </div>
    </div>
    <div class="filters-container">
        <button class="filter-btn">
            <input type="checkbox" id="date-checkbox">
            <label for="date-checkbox">Date</label>
        </button>
        <button class="filter-btn">Applying for</button>
        <button class="filter-btn">Type</button>
        <button class="filter-btn">Status</button>
        <button class="filter-btn">Source</button>
        <button class="filter-btn">Effective Period Leave</button>
        <button class="filter-btn">Leave Period</button>
        <button class="filter-btn">Desc</button>
        <button class="filter-btn">Approval Source</button>
    </div>
    <div class="total-leave">
        <p>Total Leave Count: 0 Day(s)</p>
    </div>


    <footer class="custom-footer">
        <p>&copy; 2024 Human Capital Information System. All rights reserved. | Smart HC Portal</p>
    </footer>

    <script>
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
            setActiveTab('LAIP');
            showTabContent('LAIP');
        }
    });

    function navigateToPage() {
        // Mendapatkan elemen dropdown
        var selectBox = document.getElementById('pageSelect');
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;

        // Memeriksa nilai yang dipilih dan memperbarui judul halaman
        var pageTitle = "";

        // Tentukan judul halaman berdasarkan pilihan
        if (selectedValue === "employee") {
            pageTitle = "ESS: Employee Data";
        } else if (selectedValue === "leave-absence") {
            pageTitle = "ESS: Leave & Absence";
        } else if (selectedValue === "attendance-overtime") {
            pageTitle = "ESS: Attendance & Overtime";
        }

        // Update judul halaman di browser
        document.title = pageTitle;

        // Redirect ke halaman yang sesuai
        if (selectedValue) {
            window.location.href = '/' + selectedValue; // Redirect ke /employee, /leave-absence, /attendance-overtime
        }
    }
    </script>
</body>

</html>