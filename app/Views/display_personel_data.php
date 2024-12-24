<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/display_personel_data.css') ?>">
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

    <div class="container">
        <!-- Actions -->
        <div class="actions">
            <button class="action-button">
                <i class='bx bx-search-alt'></i>
                <span>Search</span>
            </button>
            <button class="action-button">
                <i class='bx bx-exit'></i>
                <span>Exit</span>
            </button>
            <button class="action-button">
                <i class='bx bx-help-circle'></i>
                <span>Help</span>
            </button>
            <button class="action-button">
                <i class='bx bx-save'></i>
                <span>Save to</span>
            </button>
            <button class="action-button">
                <i class='bx bx-sort-up'></i>
                <span>Expand</span>
            </button>
            <button class="action-button">
                <i class='bx bx-columns'></i>
                <span>Show Column</span>
            </button>
            <button class="action-button">
                <i class='bx bx-refresh'></i>
                <span>Refresh</span>
            </button>
            <button class="action-button">
                <i class='bx bx-filter-alt'></i>
                <span>Filter</span>
            </button>
        </div>


        <div class="tabs">
            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('display_personel_data') ?>" class="tab-link" data-tab="employee_list">
                <button class="tab">Employee List</button>
            </a>

            <!-- Button dengan Link Menu Favorites -->
            <a href="<?= site_url('employee_detail') ?>" class="tab-link" data-tab="employee_detail">
                <button class="tab">Employee Detail</button>
            </a>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="title">Leave Summary</div>
            <div class="sub-title">Drag a column header here to group by that column</div>
            <div class="data-table">
                <div class="data-item">Employee ID</div>
                <div class="data-item">Employee Name</div>
                <div class="data-item">Start Date</div>
                <div class="data-item">End Date</div>
                <div class="data-item">Position Code</div>
                <div class="data-item">Position Name</div>
                <div class="data-item">Organization Code</div>
                <div class="data-item">Organization Name</div>
            </div>

            <p class="refresh-message">
                <i class='bx bx-refresh bx-spin'></i>
                Click <strong>Refresh</strong> to Display Data
            </p>
        </div>
    </div>



    <!-- Footer -->
    <footer class="custom-footer">
        <p>&copy; 2024 Human Capital Information System. All rights reserved. | Smart HC Portal</p>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');

        // Fungsi untuk menampilkan konten tab yang sesuai
        function showTabContent(tabName) {
            tabContents.forEach(content => {
                if (content.id === `${tabName}-content`) {
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

        // Menangani klik pada tab
        tabLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah default behavior
                const tabName = link.dataset.tab;

                // Jika tab "favorites" dipilih, beri waktu untuk animasi sebelum pengalihan
                if (tabName === 'employee_list') {
                    // Pastikan transisi selesai sebelum berpindah
                    setTimeout(function() {
                        window.location.href =
                            'employee_list'; // Mengalihkan ke halaman favorite.php
                    }); // Jeda 500ms, sesuai durasi animasi
                } else {
                    showTabContent(tabName);
                    setActiveTab(tabName);
                }
            });
        });

        // Inisialisasi tab pertama (misalnya "Menu Favorites")
        showTabContent('employee_list');
        setActiveTab('employee_list');
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
    </script>
</body>

</html>