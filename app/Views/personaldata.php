<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data</title>
    <link rel="stylesheet" href="<?= base_url('css/Personal_Data.css') ?>">
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


    <div class="personal-data-container">
        <h2>Personal Data</h2>
        <div class="personal-data">
            <div class="row">
                <div class="label">Title</div>
                <div class="value">: -</div>
            </div>
            <div class="row">
                <div class="label">Gender</div>
                <div class="value">: Perempuan</div>
            </div>
            <div class="row">
                <div class="label">Born</div>
                <div class="value">: Jakarta, 11 Juni 2004</div>
            </div>
            <div class="row">
                <div class="label">Height / Weight</div>
                <div class="value">: 161cm / 50kg</div>
            </div>
            <div class="row">
                <div class="label">Citizenship</div>
                <div class="value">: Indonesia</div>
            </div>
            <div class="row">
                <div class="label">Marital Status</div>
                <div class="value">: Belum Menikah</div>
            </div>
            <div class="row">
                <div class="label">Religion</div>
                <div class="value">: Islam</div>
            </div>
            <div class="row">
                <div class="label">Blood Type</div>
                <div class="value">: B+</div>
            </div>
            <div class="row">
                <div class="label">Foreign Labour</div>
                <div class="value">: No</div>
            </div>
            <div class="row">
                <div class="label">NIK</div>
                <div class="value">: 3170098726723</div>
            </div>
        </div>
        <div class="buttons">
            <button class="btn">Edit</button>
            <button class="btn">Address Detail</button>
            <button class="btn">Correct Information</button>
        </div>
    </div>

    <div class="contact-family-container">
        <h2>Emergency Contact & Family</h2>
        <div class="contact-item">
            <strong>Bunga Matahari</strong> <span class="relation">as</span> <strong>Orang Tua</strong>
            <div class="contact-info">
                <div class="contact-row">
                    <span class="icon">🏠</span>
                    <span class="contact-value">Jalan Mawar No. 123, Kelurahan Bunga, Kecamatan Sakura, Kota Anggrek,
                        12345</span>
                </div>
                <div class="contact-row">
                    <span class="icon">📞</span>
                    <span class="contact-value">081345679045</span>
                </div>
            </div>
        </div>
        <div class="personal-data">
            <div class="row">
                <div class="label">Company</div>
                <div class="value">:</div>
            </div>
            <div class="row">
                <div class="label">Contact Occupation</div>
                <div class="value">:</div>
            </div>
            <div class="row">
                <div class="label">Mobile Phone Number</div>
                <div class="value">:</div>
            </div>
            <div class="row">
                <div class="label">Work Phone Number</div>
                <div class="value">:</div>
            </div>
        </div>
        <div class="buttons">
            <button class="btn">Edit</button>
            <button class="btn">Family</button>
        </div>
    </div>
    <div class="job-experience-container">
        <h2>Job Experience</h2>
        <ul class=" job-list">
            <li class="job-item">
                <span class="job-text">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </li>
            <li class="job-item">
                <span class="job-text">2. Vivamus lacinia
                    odio vitae vestibulum vestibulum.</span>
            </li>
            <li class="job-item">
                <span class="job-text">3. Cras venenatis euismod malesuada.</span>
            </li>
            <li class="job-item">
                <span class="job-text">4. Nullam quis risus eget
                    urna mollis ornare vel eu leo.</span>
            </li>
            <li class="job-item">
                <span class="job-text">5. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                    et.</span>
            </li>
        </ul>
        <div class="buttons">
            <button class="btn">Edit</button>
            <button class="btn">Education</button>
            <button class="btn">Other</button>
        </div>
    </div>

    <div class="job-experience-container">
        <h2>Personal Document</h2>
        <div class="empty-section">
            <p>This Section is Empty</p>
        </div>
        <div class="buttons">
            <button class="btn">Edit</button>
        </div>
    </div>
    <div class="job-experience-container">
        <h2>Vihicle</h2>
        <div class="empty-section">
            <p>This Section is Empty</p>
        </div>
        <div class="buttons">
            <button class="btn">Edit</button>
        </div>
    </div>
    <div class="job-experience-container">
        <h2>Physical Cindition</h2>
        <div class="empty-section">
            <p>This Section is Empty</p>
        </div>
        <div class="buttons">
            <button class="btn">Edit</button>
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
            setActiveTab('personaldata');
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