<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
</head>
<body class="register-page d-flex flex-column min-vh-100">
<?php include('_particles/_Navbar.php');?>
<div class="container my-5 mt-5 pt-5 p-4">
    <div class="form-box form-box-wrapper">

        <!-- Sol taraf: Giriş formu -->
        <div class="form-left pe-md-4">
            <h3 class="text-center mb-4 fw-bold text-primary">Giriş Yap</h3>
            <form>
                <div class="mb-3">
                    <label class="form-label" for="username">Kullanıcı Adı</label>
                    <input type="text" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="mb-2">
                    <a href="#" class="small text-decoration-none">Şifremi unuttum</a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </div>
                <div class="text-center mt-4">
                    <p class="small">Hesabın yok mu? <a href="Register.php" class="text-decoration-none">Kayıt ol</a></p>
                </div>
            </form>
        </div>

        <!-- Sağ taraf: Bilgilendirme ve alternatif giriş -->
        <div class="form-right mt-5 mt-md-0">
            <h4 class="fw-bold text-primary text-center mb-3">Tekrar Hoş Geldin</h4>
            <p class="text-muted text-center mb-4">
                Motokurye sistemine tekrar hoş geldiniz. Lütfen bilgilerinizi girerek giriş yapın.
            </p>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" disabled>Google ile giriş yap</button>
                <button class="btn btn-outline-dark" disabled>Github ile giriş yap</button>
                <button class="btn btn-outline-secondary" disabled>Facebook ile giriş yap</button>
            </div>
            <div class="text-center mt-4">
                <a href="Register.php" class="btn btn-link text-decoration-none">Kayıt Sayfasına Git</a>
            </div>
        </div>

    </div>
</div>
<?php include('_particles/_Footer.php');

