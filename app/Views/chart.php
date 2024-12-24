<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/Personal_PNC_Chart_ETH.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesom
    e/6.0.0-beta3/css/all.min.css">
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
            <select>
                <option>ESS: Employee Data</option>
                <option>ESS: Leave Request</option>
                <option>ESS: Payroll</option>
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
        <h2>Employee Data</h2>
        <div class="organization-info">
            <p>Organization Parent: 9.1.0.0.00.00.00.00.00.00 - Head Of Internship</p>
            <p>Home Base Location:</p>
            <p>Home Base Description:</p>
            <p>Contract Start Date: 20/09/2024</p>
            <p>Contract End Date: 20/12/2024</p>
            <p>Est Retirement Date: 11/06/2060</p>
            <p>NPWP:</p>
            <p>PTKP: TK/0</p>

            <p><strong>Start Date: 31/05/2024</strong></p>
            <p>Join Date: 31/05/2024</p>
            <p>Sign Date: 31/05/2024</p>

            <p><strong>Service Period (Start): 00 Year(s) 04 Month(s)</strong></p>
            <p>Service Period (Join): 00 Year(s) 04 Month(s)</p>
            <p>Service Period (Sign): 00 Year(s) 04 Month(s)</p>

            <p>BPJS TK No:</p>
            <p>BPJS Kes No:</p>
        </div>
    </div>
    <div class="job-history-container">
        <h2>Job History</h2>
        <div class="klik-container">
            <div class="kliks">
                <!-- Button dengan Link Profile -->
                <a href="<?= site_url('employee') ?>" class="klik-link" data-tab="employee">
                    <button class="klik">Current Status</button>
                </a>

                <!-- Button dengan Link Menu employee -->
                <a href="<?= site_url('pnc') ?>" class="klik-link" data-tab="pnc">
                    <button class="klik">PCN List</button>
                </a>

                <!-- Button dengan Link Menu people -->
                <a href="<?= site_url('chart') ?>" class="klik-link" data-tab="chart">
                    <button class="klik active">History Chart</button>
                </a>

                <!-- Button dengan Link Menu compensation -->
                <a href="<?= site_url('ETH') ?>" class="klik-link" data-tab="ETH">
                    <button class="klik">Employment Type History</button>
                </a>
            </div>
            <div class="chart-container">
                <canvas id="myChart" width="1800" height="1000"></canvas>
            </div>
        </div>
    </div>

    <div class="job-history-container">
        <h2>Job History</h2>
        <div>
            <div class="table">
                <div>PTKP</div>
                <div>Current PTKP</div>
                <div>Posting Date</div>
                <div>Posting By</div>
                <div>Start Period</div>
            </div>

            <div class="table-content">
                <div>TK/0</div>
                <div>TK/0</div>
                <div>31/05/2024</div>
                <div>LDD.CGK16D<br>01A3220</div>
                <div>May - 2024</div>
            </div>


        </div>
        <div class="buttons">
            <button class="btn">Add</button>
            <button class="btn">Attachment</button>
            <button class="btn">Delete</button>
        </div>
    </div>

    <div class="employee-data-container">
        <h2>Award</h2>
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
                if (tabContents) showTabContent('employee');
            }
        }

        // Setup untuk masing-masing kontainer
        setupTabNavigation(".tabs-container", ".tab-link", ".tab-content");
        setupTabNavigation(".kliks-container", ".klik-link", null); // Tidak ada konten untuk .kliks

    });

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Position', 'Job Title', 'Organization', 'Job Level', 'Company', 'Location'],
            datasets: [{
                    label: 'Total',
                    backgroundColor: 'rgba(137, 121, 255, 0.3)', // Bar transparan
                    data: [100, 100, 100, 100, 100, 100], // Nilai maksimum (100)
                    borderWidth: 1
                },
                {
                    label: 'Valid',
                    backgroundColor: 'rgba(137, 121, 255, 1)', // Bar pekat
                    data: [34, 31, 93, 25, 100, 15], // Data valid
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            layout: {
                padding: {
                    bottom: 50 // Tambahkan ruang ekstra di bawah grafik
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100, // Skala maksimum 100
                    ticks: {
                        stepSize: 10 // Jarak antar nilai pada sumbu Y
                    },
                    grid: {
                        color: 'rgba(200, 200, 200, 0.6)', // Warna garis bantu sumbu Y
                        borderDash: [], // Garis penuh untuk sumbu Y
                        lineWidth: 2 // Ketebalan garis
                    },
                    border: {
                        dash: [3, 3], // Garis penuh untuk sumbu Y
                        color: 'rgba(0, 0, 0, 0.0)', // Warna garis sumbu Y
                        width: 2 // Ketebalan garis sumbu Y
                    },
                    // Memperjelas garis 0
                    ticks: {
                        callback: function(value, index, values) {
                            if (value === 0) {
                                return '0'; // Memberi label 0 pada garis 0
                            }
                            return value;
                        }
                    },
                    // Menambahkan garis vertikal lebih tebal pada posisi 0
                    gridLines: {
                        drawOnChartArea: true,
                        color: 'rgba(0, 0, 0, 1)', // Garis tebal dan gelap pada garis 0
                        lineWidth: 5 // Garis lebih tebal untuk garis 0
                    }
                },
                x: {
                    stacked: true, // Bar disusun bertumpuk
                    grid: {
                        color: 'rgba(200, 200, 200, 0.6)', // Warna garis bantu sumbu X
                        borderDash: [], // Garis penuh untuk sumbu X
                        lineWidth: 2 // Ketebalan garis
                    },
                    border: {
                        dash: [2, 2], // Garis penuh untuk sumbu X
                        color: 'rgba(0, 0, 0, 0.6)', // Warna garis sumbu X
                        width: 2 // Ketebalan garis sumbu X
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.dataset.label}: ${context.raw}`;
                        }
                    }
                }
            }
        },
        plugins: [{
                id: 'barLabels',
                afterDatasetsDraw(chart) {
                    const {
                        ctx,
                        data
                    } = chart;
                    data.datasets.forEach((dataset, i) => {
                        if (i === 1) { // Tampilkan teks hanya untuk bar "Valid"
                            const meta = chart.getDatasetMeta(i);
                            meta.data.forEach((bar, index) => {
                                const value = dataset.data[index];
                                ctx.fillStyle =
                                    '#ffffff'; // Warna teks (putih untuk terlihat di dalam bar pekat)
                                ctx.font = 'bold 12px Arial';
                                ctx.textAlign = 'center';
                                ctx.fillText(
                                    value,
                                    bar.x, // Pusatkan secara horizontal
                                    bar.y +
                                    10 // Teks di dalam bar, di dekat bagian atas
                                );
                            });
                        }
                    });
                }
            },
            {
                id: 'chartFooter',
                beforeDraw(chart) {
                    const {
                        ctx,
                        chartArea
                    } = chart;
                    ctx.save();

                    // Gambar label "2024"
                    ctx.font = 'bold 14px Arial';
                    ctx.fillStyle = 'rgba(0, 0, 0, 0.7)'; // Warna teks (hitam sedikit transparan)
                    ctx.textAlign = 'center';
                    ctx.fillText(
                        '2024',
                        (chartArea.left + chartArea.right) / 2, // Posisi horizontal tengah
                        chartArea.bottom + 50 // Tambahkan jarak lebih jauh dari bawah grafik
                    );

                    // Gambar persegi di samping label
                    const squareSize = 8; // Ukuran persegi
                    const squareX = (chartArea.left + chartArea.right) / 2 -
                        30; // Posisi horizontal persegi
                    const squareY = chartArea.bottom + 44; // Posisi vertikal persegi
                    ctx.fillStyle = 'rgba(137, 121, 255, 1)'; // Warna persegi (sesuai bar pekat)
                    ctx.fillRect(squareX, squareY, squareSize, squareSize); // Gambar persegi

                    ctx.restore();
                }
            }
        ]
    });
    </script>
</body>

</html>