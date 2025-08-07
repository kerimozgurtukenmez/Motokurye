<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body class="register-page d-flex flex-column min-vh-100">
<?php include ('_particles/_Navbar.php')?>
<div class="container my-5 mt-5 pt-5 p-4">
    <div class="form-box form-box-wrapper">

        <!-- Sol taraf: Kayıt formu -->
        <div class="form-left pe-md-4">
            <h3 class="text-center mb-4 fw-bold text-primary">Register</h3>
            <form>
                <div class="mb-3">
                    <label class="form-label" for="username">Kullanıcı Adı</label>
                    <input type="text" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="repassword">Şifre (Tekrar)</label>
                    <input type="password" id="repassword" class="form-control" placeholder="Re-enter Password">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">E-posta</label>
                    <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-2">
                    <a href="#" class="small text-decoration-none">Şifremi unuttum</a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="text-center mt-4">
                    <p class="small">Zaten hesabın var mı? <a href="login.php" class="text-decoration-none">Giriş yap</a></p>
                </div>
            </form>
        </div>

        <!-- Sağ taraf: Açıklama ve alternatifler -->
        <div class="form-right mt-5 mt-md-0">
            <h4 class="fw-bold text-primary text-center mb-3">Motokurye Sistemine Kayıt</h4>
            <p class="text-muted text-center mb-4">
                Şehir içi teslimatların yeni yüzüyle tanış. Kolay, hızlı ve güvenli teslimat için hemen kayıt ol.
            </p>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" disabled>Google ile kayıt ol</button>
                <button class="btn btn-outline-dark" disabled>Github ile kayıt ol</button>
                <button class="btn btn-outline-secondary" disabled>Facebook ile kayıt ol</button>
            </div>
            <div class="text-center mt-4">
                <a href="login.php" class="btn btn-link text-decoration-none">Login Sayfasına Git</a>
            </div>
        </div>

    </div>
</div>


<?php include('_particles/_Footer.php'); ?>