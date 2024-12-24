<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/data_center.css') ?>">
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
        <div class="title">Candidate Data Center</div>
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
                <i class='bx bx-import'></i>
                <span>Import</span>
            </button>
        </div>


        <div class="tabs-container">
            <div class="tabs">
                <!-- Button dengan Link Profile -->
                <a href="<?= site_url('personaldata') ?>" class="tab-link" data-tab="personaldata">
                    <button class="tab">Candidate List</button>
                </a>

                <!-- Button dengan Link Menu employee -->
                <a href="<?= site_url('employee') ?>" class="tab-link" data-tab="employee">
                    <button class="tab">Candidate Detail</button>
                </a>


            </div>
        </div>


        <div class="profile_container">
            <div class="profile_header">
                Candidate Profile
            </div>
            <div class="profile_content">
                <div class="profile_image">
                    <img src="<?= base_url('img/image.png') ?>" alt="Candidate Image" class="profile">

                </div>
                <div class="profile_details">
                    <div class="details_left">
                        <p>Candidate ID:</p>
                        <p>Age:</p>
                        <p>Gender:</p>
                        <p> Education:</p>
                        <p>Current Status:</p>
                        <p>Organization Recruit:</p>
                    </div>
                    <div class="details_right">
                        <p><strong>Apply For:</strong></p>
                        <p>Apply Date:</p>
                        <p>Reference:</p>
                        <p>Reference Note:</p>
                        <p>Employee Note:</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="kliks">
            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('employee') ?>" class="klik-link" data-tab="employee">
                <button class="klik active">Candidate List</button>
            </a>

            <!-- Button dengan Link Menu employee -->
            <a href="<?= site_url('pnc') ?>" class="klik-link" data-tab="pnc">
                <button class="klik">Education</button>
            </a>

            <!-- Button dengan Link Menu people -->
            <a href="<?= site_url('chart') ?>" class="klik-link" data-tab="chart">
                <button class="klik">Candidate Application</button>
            </a>

            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('ETH') ?>" class="klik-link" data-tab="ETH">
                <button class="klik">Job Expected</button>
            </a>
            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('ETH') ?>" class="klik-link" data-tab="ETH">
                <button class="klik">Physical Codition</button>
            </a>
            <!-- Button dengan Link Menu compensation -->
            <a href="<?= site_url('ETH') ?>" class="klik-link" data-tab="ETH">
                <button class="klik">Selection Process</button>
            </a>
        </div>


        <div class="profile_container">
            <div class="profile_header">
                Personal Data
            </div>
            <div class="profile_content">

                <div class="profile_details">
                    <div class="details_left">
                        <p>Nick Name:</p>
                        <p>Front Title:</p>
                        <p>Birth Day:</p>
                        <p>Birth Place:</p>
                        <p>Height:</p>
                        <p>Weight:</p>
                    </div>
                    <div class="details_right">
                        <p>Entry Date:</p>
                        <p>Citizenship:</p>
                        <p>Blood Type:</p>
                        <p>Ethnic Group:</p>
                        <p>Religion:</p>
                        <p>Availability:</p>
                        <p>Home Base Location:</p>
                        <p>Potential Candidate:</p>
                        <p>Description:</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact_information">
            <div class="contact_header">
                Contact Information
            </div>
            <div class="contact_content">
                <div class="contact_item">
                    <i class='bx bx-phone '></i>
                    <h4>Phone</h4>
                    <input type="text" placeholder="Enter phone number" />
                </div>
                <div class="contact_item">
                    <h4>Primary Contact</h4>
                    <label for="home">(H): Home</label>
                    <input id="home" type="text" placeholder="Home number" />
                    <label for="mobile">(M): Mobile</label>
                    <input id="mobile" type="text" placeholder="Mobile number" />
                    <label for="business">(B): Business</label>
                    <input id="business" type="text" placeholder="Business number" />
                </div>
                <div class="contact_item">
                    <i class='bx bx-mail-send '></i>
                    <h4>Email</h4>
                    <input type="email" placeholder="Enter email" />
                </div>
                <div class="contact_item">
                    <i class='bx bx-dollar '></i>
                    <h4>Sal. Slip Primary</h4>
                    <input type="text" placeholder="Enter salary details" />
                </div>
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
                if (navigation.classList.contains("active") && !navigation.contains(event.target) &&
                    event
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
            // Fungsi generik untuk mengatur tab
            function setupTabNavigation(containerSelector, linkSelector, contentSelector) {
                const container = document.querySelector(containerSelector);
                if (!container) return; // Jika kontainer tidak ada, lewati

                const tabLinks = container.querySelectorAll(linkSelector);
                const tabContents = contentSelector ?
                    container.querySelectorAll(contentSelector) :
                    null;

                // Fungsi untuk menampilkan konten tab yang sesuai
                function showTabContent(tabName) {
                    if (!tabContents) return;
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

                        const tabName = link.dataset.tab;
                        const destination = link.getAttribute('href');

                        // Jika destination adalah link eksternal
                        if (destination && destination !== '#' && destination !== '') {
                            window.location.href = destination; // Arahkan ke halaman baru
                        } else {
                            // Menampilkan konten tab yang sesuai
                            if (tabContents) showTabContent(tabName);

                            // Menandai tab aktif
                            setActiveTab(tabName);
                        }
                    });
                });

                // Inisialisasi tab pertama
                const firstTab = tabLinks[0]?.dataset.tab;
                if ('employee') {
                    setActiveTab('employee');
                    if ('employee') showTabContent('employee');
                }
            }

            // Setup untuk masing-masing kontainer
            setupTabNavigation(".tabs-container", ".tab-link", ".tab-content");
            setupTabNavigation(".kliks-container", ".klik-link", null); // Tidak ada konten untuk .kliks

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