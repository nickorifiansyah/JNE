<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/approval_tracking.css') ?>">
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
        <div class="title">Employee Request <strong>|</strong> Request List</div>
        <div class="actions">
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
            <button class="action-button">
                <i class='bx bx-search-alt'></i>
                <span>Search</span>
            </button>
            <button class="action-button">
                <i class='bx bx-folder-plus'></i>
                <span>New</span>
            </button>
            <button class="action-button">
                <i class='bx bx-edit-alt'></i>
                <span>Edit</span>
            </button>
            <button class="action-button">
                <i class='bx bx-message-x'></i>
                <span>Delete</span>
            </button>
            <button class="action-button">
                <i class='bx bx-printer'></i>
                <span>Print</span>
            </button>
            <button class="action-button">
                <i class='bx bx-window-close'></i>
                <span>Cancel Trans</span>
            </button>
            <button class="action-button">
                <i class='bx bx-checkbox-checked'></i>
                <span>Close</span>
            </button>
        </div>


        <div class="tabs">
            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('request_list') ?>" class="tab-link" data-tab="request_list">
                <button class="tab">Request List</button>
            </a>

            <!-- Button dengan Link Menu Favorites -->
            <a href="<?= site_url('request_detail') ?>" class="tab-link" data-tab="request_detail">
                <button class="tab">Request Detail</button>
            </a>

            <!-- Button dengan Link Menu Favorites -->
            <a href="<?= site_url('approval_tracking') ?>" class="tab-link" data-tab="approval_tracking">
                <button class="tab">Approval Tracking</button>
            </a>
        </div>

        <!-- Content -->
        <div class="employee_request">
            <div class="employee_header">
                Employee Request
            </div>
            <div class="employee_content">
                <div class="employee_section">
                    <p>Position: </p>
                    <p>Request No<input type="text" placeholder="" /></p>
                    <div class="inline_fields">
                        <p>Total Need:</p>
                        <p class="spaced_field">Total Realized:</p>
                    </div>
                    <p>Description: -</p>
                </div>
                <div class="employee_section">
                    <p>
                        Create Date:
                    </p>
                    <p>
                        Required Date:
                    </p>
                    <p>
                        Overbudget MPP:
                    </p>
                    <p>
                        Initiator:
                    </p>
                </div>
                <div class="employee_section">
                    <p>
                        Request Status:
                    </p>
                    <p>
                        Reason:
                    </p>
                    <p>
                        Source:
                    </p>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <div class="title">Approver List</div>
            <div class="sub-title">Drag a column header here to group by that column</div>
            <div class="data-table">
                <div class="data-item">Level</div>
                <div class="data-item">Seq.</div>
                <div class="data-item">Approver ID</div>
                <div class="data-item">Approver Name</div>
                <div class="data-item">Approver Type</div>
                <div class="data-item">Approver Date</div>
                <div class="data-item">Reject Date</div>
                <div class="data-item">Description</div>
                <div class="data-item">Position</div>
            </div>

            <p class="refresh-message">
                <i class='bx bx-refresh bx-spin'></i>
                Click <strong>Refresh</strong> to Display Data
            </p>
        </div>
    </div>
    </div>






    <!-- Footer -->
    <footer class="custom-footer">
        <p>&copy; 2024 Human Capital Information System. All rights reserved. | Smart HC Portal</p>
    </footer>

    <script>
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
            setActiveTab('approval_tracking');
            showTabContent('approval_tracking');
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
    </script>
</body>

</html>