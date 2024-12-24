<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('css/Forgot.css'); ?>">
</head>

<body>
    <div class="forgot-password-container">
        <div class="text-center mb-4">
            <img src="<?= base_url('/img/logoHRIS.png?v=1'); ?>" alt="Logo" width="200">

            <p class="subtitle">Forgot Password by User ID</p> <!-- Ganti logo sesuai -->
        </div>
        <form method="POST" action="/auth/Forgot">
            <!-- Input User ID -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="User ID" required>
                <i class='bx bx-user'></i>



            </div>
            <!-- Input Password -->
            <div class="input-group">
                <input type="text" name="dob" class="form-control" placeholder="DD/MM/YYYY" required>
            </div>
            <!-- Tombol Login -->
            <button type="submit" class="btn send">Send</button>
            <a href="<?= base_url('/login') ?>" class="btn back">Back</a>
        </form>

    </div>
    </div>
</body>

</html>