<?php include('_particles/_Head.php'); ?>
<?php include('_particles/_Navbar.php'); ?>


    <main class="container mt-4 pt-4">
        <section class="container mt-5 pt-5 ">
            <div class="card shadow p-4 rounded-3 custom-section">
                <!-- Başlık -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary text-shadow">Lorem ipsum dolor sit amet</h2>
                    <p class="text-muted text-shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et mattis risus, in scelerisque urna. Cras quis dapibus tortor. Curabitur ultricies dui quis molestie vehicula.</p>
                </div>

                <!-- İletişim Kartları -->
                <div class="row g-4 justify-content-center mb-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body text-center">
                                <i class="bi bi-telephone-fill text-primary fs-1 mb-3"></i>
                                <h5 class="card-title fw-bold text-primary text-shadow">Telefon</h5>
                                <p class="card-text text-muted text-shadow">+90 555 123 45 67</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body text-center">
                                <i class="bi bi-whatsapp text-success fs-1 mb-3"></i>
                                <h5 class="card-title fw-bold text-primary text-shadow">WhatsApp</h5>
                                <p class="card-text text-muted text-shadow">+90 555 765 43 21</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body text-center">
                                <i class="bi bi-envelope-fill text-danger fs-1 mb-3"></i>
                                <h5 class="card-title fw-bold text-primary text-shadow">E-Mail</h5>
                                <p class="card-text text-muted text-shadow">destek@motokurye.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bölüm başlığı -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary text-shadow">Lorem ipsum dolor sit amet</h2>
                    <p class="text-muted text-shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et mattis risus, in scelerisque urna. Cras quis dapibus tortor. Curabitur ultricies dui quis molestie vehicula.</p>
                </div>

                <!-- Motor Profili -->
                <div class="container">
                    <div class="card shadow p-4">
                        <div class="row g-4">
                            <!-- Sol: Motor foto -->
                            <div class="col-md-5">
                                <div class="border rounded overflow-hidden" style="height: 320px;">
                                    <img src="images/pepe.jpeg" alt="Bike Image" class="img-fluid h-100 w-100 object-fit-cover">
                                </div>
                            </div>

                            <!-- Sağ: Sürücü bilgileri -->
                            <div class="col-md-7 d-flex flex-column">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="me-3" style="width: 100px; height: 100px;">
                                        <img src="images/Herhanig_bir_adam.jpeg" alt="Profile Photo" class="rounded-circle img-fluid h-100 w-100 object-fit-cover">
                                    </div>

                                    <div class="flex-grow-1">
                                        <p class="mb-2 fs-5 fw-semibold">Name Surname</p>
                                        <p class="mb-2">Age</p>
                                        <p class="mb-2">ETC</p>
                                        <p class="mb-2">Number</p>
                                        <p>Mail</p>
                                    </div>
                                </div>

                                <p class="flex-grow-1 border rounded p-3" style="min-height: 130px; white-space: pre-wrap;">
                                    Description yazısı buraya gelecek...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>




<?php include('_particles/_Footer.php'); ?>