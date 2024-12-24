<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/summary.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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


    <div class="container-summary">
        <div class="summary-table">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Total Day(s)</th>
                        <th>Total Hour(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Present</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Late Present</td>
                        <td>1</td>
                        <td>0 hour(s) 7 minute(s)</td>
                    </tr>
                    <tr>
                        <td>Absent</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Leave Absent</td>
                        <td>0</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Overtime</td>
                        <td>0</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="chart-container">
            <canvas id="doughnutChart"></canvas>
            <div class="legend" id="chartLegend"></div>
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
            setActiveTab('summary');
            showTabContent('summary');
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


    const ctx = document.getElementById('doughnutChart').getContext('2d');

    // Data untuk chart
    const data = {
        labels: ['Present', 'Absent', 'Leave Absent', 'Late Present'],
        datasets: [{
            data: [1, 2, 0, 1],
            backgroundColor: [
                'rgba(137, 121, 255, 1)', 'rgba(255, 146, 138, 1)',
                'rgba(60, 195, 223, 1)', 'rgba(255, 174, 76, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Opsi konfigurasi chart
    const options = {
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: 1,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.label || '';
                        const value = context.raw || 0;
                        return `${label}: ${value}`;
                    }
                }
            },
            centerText: {
                text: '4'
            }
        },
        cutout: '60%',
        radius: '60%'
    };

    // Membuat Chart baru
    const doughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options,
        plugins: [{
            id: 'centerText',
            beforeDraw: (chart) => {
                const {
                    width,
                    height,
                    ctx
                } = chart;
                ctx.restore();
                const fontSize = (height / 120).toFixed(2);
                ctx.font = `${fontSize}em sans-serif`;
                ctx.textBaseline = 'middle';

                const text = chart.options.plugins.centerText.text;
                const textX = Math.round((width - ctx.measureText(text).width) / 2);
                const textY = height / 2;

                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        }, {
            id: 'spiderline',
            afterDraw: (chart) => {
                const {
                    ctx,
                    chartArea: {
                        right,
                        left,
                        bottom,
                        top
                    },
                    data,
                    _metasets
                } = chart;
                const centerX = (left + right) / 2;
                const centerY = (top + bottom) / 2;

                ctx.save();

                _metasets[0].data.forEach((arc, index) => {
                    const {
                        x,
                        y
                    } = arc.tooltipPosition();
                    const angle = arc.startAngle + (arc.endAngle - arc.startAngle) / 2;

                    const labelText = data.labels[index];
                    const fontSize = 10;
                    ctx.font = `${fontSize}px sans-serif`;
                    const labelWidth = ctx.measureText(labelText).width;

                    const labelOffset = 20;
                    const lineOffset = 40; // Offset untuk garis kedua
                    const labelX = centerX + Math.cos(angle) * (arc.outerRadius +
                        labelOffset);
                    const labelY = centerY + Math.sin(angle) * (arc.outerRadius +
                        labelOffset);

                    const isLeftSide = angle > Math.PI;
                    const lineEndX = labelX + (isLeftSide ? -lineOffset : lineOffset);

                    ctx.strokeStyle = data.datasets[0].backgroundColor[index];
                    ctx.lineWidth = 1.5;
                    ctx.beginPath();
                    ctx.moveTo(x, y);
                    ctx.lineTo(labelX, labelY);
                    ctx.lineTo(lineEndX, labelY);
                    ctx.stroke();

                    ctx.fillStyle = 'black';
                    ctx.textAlign = isLeftSide ? 'right' : 'left';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(labelText, lineEndX, labelY - 10);

                    const value = data.datasets[0].data[index];
                    ctx.fillStyle = data.datasets[0].backgroundColor[index];
                    ctx.fillText(value, lineEndX, labelY + 5);
                });

                ctx.restore();
            }
        }]
    });



    // Membuat Custom Legend
    const legendContainer = document.getElementById('chartLegend');
    data.labels.forEach((label, index) => {
        const color = data.datasets[0].backgroundColor[index];
        const value = data.datasets[0].data[index];
        const legendItem = document.createElement('div');
        legendItem.innerHTML = `<span style="background-color: ${color}"></span>${label}`;
        legendContainer.appendChild(legendItem);
    });
    </script>
</body>

</html>