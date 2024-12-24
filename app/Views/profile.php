<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Login Profile</title>
    <link rel="stylesheet" href="<?= base_url('css/Profile_Favorite.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <div class="profile-container">
        <div class="profile-header">
            <h2>Change Login Profile</h2>
        </div>

        <div class="section">
            <h3 class="section-title">User Information</h3>
            <div class="user-info">
                <p>Employee: <strong>MCGK24E01D001 - DINAH ARYANI ZAVITRI</strong></p>
            </div>
        </div>

        <div class="section">
            <h3 class="section-title">User Action</h3>
            <div class="user-action">
                <p>Change Password Here</p>
            </div>
        </div>

        <div class="tabs">
            <!-- Button dengan Link Profile -->
            <a href="<?= site_url('profile') ?>" class="tab-link" data-tab="profile">
                <button class="tab">Profile</button>
            </a>

            <!-- Button dengan Link Menu Favorites -->
            <a href="<?= site_url('favorite') ?>" class="tab-link" data-tab="favorites">
                <button class="tab">Menu Favorites</button>
            </a>
        </div>



        <div class="section">
            <h3 class="section-title">User Index</h3>
            <div class="user-index">
                <!-- Content Placeholder -->
            </div>
        </div>

        <div class="buttons">
            <a href="<?= site_url('home') ?>" class="btn back-home">Back to Home</a>
            <button class="btn cancel">Cancel</button>
            <button class="btn confirm">Confirm</button>
        </div>

    </div>

    <script>
    // Mengambil tombol dan membuat notifikasi
    document.querySelector('.btn.confirm').addEventListener('click', function() {
        // Membuat elemen notifikasi
        var notification = document.createElement('div');
        notification.classList.add('notification');
        notification.textContent = 'Successfully Updated!'; // Teks notifikasi

        // Menambahkan notifikasi ke body
        document.body.appendChild(notification);

        // Menghilangkan notifikasi setelah 3 detik
        setTimeout(function() {
            notification.remove();
        }, 3000);
    });

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
                e.preventDefault();
                const tabName = link.dataset.tab;

                // Jika tab "favorites" dipilih, beri waktu untuk animasi sebelum pengalihan
                if (tabName === 'favorites') {
                    // Pastikan transisi selesai sebelum berpindah
                    setTimeout(function() {
                        window.location.href =
                            'favorite'; // Mengalihkan ke halaman favorite.php
                    }); // Jeda 500ms, sesuai durasi animasi

                } else {
                    showTabContent(tabName);
                    setActiveTab(tabName);
                }
            });
        });

        // Inisialisasi tab pertama (misalnya "Profile")
        showTabContent('profile');
        setActiveTab('profile');
    });
    </script>

</body>

</html>