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
    <link rel="stylesheet" href="<?= base_url('css/Login.css'); ?>">
</head>

<body>
    <div class="login-container">
        <div class="text-center mb-4">
            <img src="<?= base_url('/img/logoHRIS.png?v=1'); ?>" alt="Logo" width="200"> <!-- Ganti logo sesuai -->
        </div>
        <form method="POST" action="/auth/login">
            <!-- Input User ID -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="User ID" required>
                <i class='bx bx-user'></i>


            </div>
            <!-- Input Password -->
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" required>
                <i class="bx bx-show"></i>


            </div>
            <!-- Tombol Login -->
            <button type=" submit" class="btn btn-primary">Log In</button>
        </form>
        <div class="text-center mt-3">
            <a href="/forgot" class="forgot-password">Forgot Password?</a>
        </div>
    </div>
</body>

</html>