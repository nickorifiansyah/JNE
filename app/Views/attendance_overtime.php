<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/attendance_overtime.css') ?>">
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
                <option value="attendance-overtime">ESS: Attendance & Overtime</option>
                <option value="leave-absence">ESS: Leave & Absence</option>
                <option value="employee">ESS: Employee Data</option>
            </select>
        </div>
    </div>

    <div class="tabs-container">
        <div class="tabs">

            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('attendance_overtime') ?>" class="tab-link" data-tab="attendance_overtime">
                <button class="tab">Attendance</button>
            </a>

            <!-- Button dengan Link Menu employee -->
            <a href="<?= site_url('overtime') ?>" class="tab-link" data-tab="overtime">
                <button class="tab">Overtime</button>
            </a>

            <!-- Button dengan Link Menu people -->
            <a href="<?= site_url('summary') ?>" class="tab-link" data-tab="summary">
                <button class="tab">Summary</button>
            </a>

            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('roster') ?>" class="tab-link" data-tab="roster">
                <button class="tab">Roster</button>
            </a>

        </div>
    </div>

    <div class="container">
        <div class="left-section">
            <button class="icon-btn">
                <span class="calendar-icon"><i class='bx bx-calendar'></i></span>
            </button>
            <button class="nav-arrow"><i class='bx bx-chevron-left'></i></button>
            <span class="month-year">January, 2024</span>
            <button class="nav-arrow"><i class='bx bx-chevron-right'></i></button>
            <button class="icon-btn">
                <span class="search-icon"><i class='bx bx-search-alt-2'></i></span>
            </button>
            <div class="right-section">
                <button class="action-btn"><i class='bx bx-plus'></i> Apply Attendance</button>
                <button class="action-btn"><i class='bx bx-edit-alt'></i>Update Attendance</button>
            </div>
        </div>
    </div>

    <div class="table-header-container">
        <div class="header-item header-item-date">
            <div class="title">Date</div>
        </div>
        <div class="header-item header-item-schedule">
            <div class="title">Schedule</div>
            <div class="sub-title">
                <span>Shift</span>
                <span>In/Out</span>
            </div>
        </div>
        <div class="header-item header-item-attendance">
            <div class="title">Actual Attendance</div>
            <div class="sub-title">
                <span class="Attendance">Attendance</span>
                <span class="Late">Late</span>
                <span class="Early"> Early</span>
                <span class="Total Hr">Total Hr</span>
                <span class="Status">Status</span>
            </div>
        </div>
        <div class=" header-item header-item-leave-absence">
            <div class="title">Leave & Absence</div>
            <div class="sub-title ">
                <span>Attendance</span>
                <span>Status</span>
            </div>
        </div>
    </div>

    <div class="schedule-container">
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Wed, 02/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">09:01 - 17:10</div>
            <div class="item-late">1</div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Sun, 06/10/24</div>
            <div class="item-shift">OFF09</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">LIBUR</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status"></div>
        </div>
        <div class="schedule-item">
            <div class="item-date">Tue, 01/10/24</div>
            <div class="item-shift">000370</div>
            <div class="item-in-out">09:00 - 17:00</div>
            <div class="item-attendance">08:50 - 17:10</div>
            <div class="item-late"></div>
            <div class="item-early"></div>
            <div class="item-total-hr"></div>
            <div class="item-status"></div>
            <div class="item-leave-attendance"></div>
            <div class="item-leave-status">Absence</div>
        </div>
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
            setActiveTab('attendance_overtime');
            showTabContent('attendance_overtime');
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
            window.location.href = '/' +
                selectedValue; // Redirect ke /employee, /leave-absence, /attendance-overtime
        }
    }
    </script>
</body>

</html>