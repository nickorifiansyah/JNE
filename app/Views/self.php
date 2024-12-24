<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/Self_Service.css') ?>">
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

    <main class="main-content">
        <div class="container">
            <div class="ess-header">
                <h1>ESS</h1>
                <p>Employee Self Service</p>
            </div>
        </div>


        <div class="ess-menu-wrapper">
            <div class="ess-menu">
                <a href="<?= site_url('employee 1.png') ?>" class="menu-item">
                    <img src="<?= base_url('img/employee 1.png') ?>" alt="Employee Data">
                    <span>Employee Data</span>
                </a>
                <a href="<?= site_url('absentism.png') ?>" class="menu-item">
                    <img src="<?= base_url('img/absentism.png') ?>" alt="Leave & Absence">
                    <span>Leave & Absence</span>
                </a>
                <a href="<?= site_url('attendance (1).png') ?>" class="menu-item">
                    <img src="<?= base_url('img/attendance (1).png') ?>" alt="Attendance & Overtime">
                    <span>Attendance & Overtime</span>
                </a>
                <a href="<?= site_url('technical-support.png') ?>" class="menu-item">
                    <img src="<?= base_url('img/technical-support.png') ?>" alt="Ticketing">
                    <span>Ticketing</span>
                </a>
                <a href="<?= site_url('survey.png') ?>" class="menu-item">
                    <img src="<?= base_url('img/survey.png') ?>" alt="Survey">
                    <span>Survey</span>
                </a>
            </div>
        </div>
    </main>



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
    </script>
</body>

</html>