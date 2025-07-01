<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }
    .hero-card {
        background: #fff;
        box-shadow: 0 8px 32px 0 rgba(13,71,161,0.15);
        border-radius: 20px;
        padding: 3rem 2rem;
        max-width: 480px;
        margin: 0 auto;
        border-top: 4px solid #0d47a1;
    }
    .hero-logo {
        max-width: 90px;
        border-radius: 50%;
        border: 3px solid #0d47a1;
        margin-bottom: 18px;
    }
    .hero-section {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 0;
    }
    .display-4, .display-5, .display-6, h1, h2, h3, h4, h5 {
        color: #0d47a1;
        font-weight: 700;
    }
    .btn-primary {
        background: #0d47a1;
        border: none;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .btn-primary:hover, .btn-primary:focus {
        background: #1565c0;
    }
    .features-section {
        background: #fff;
        padding: 3rem 0 2rem 0;
    }
    .feature-card {
        border: 1px solid #e3eaf3;
        border-radius: 16px;
        background: #f9fbfd;
        box-shadow: 0 2px 8px rgba(13,71,161,0.04);
    }
    .feature-icon {
        font-size: 2.5rem;
        color: #1976d2;
        margin-bottom: 1rem;
    }
    @media (max-width: 576px) {
        .hero-card {
            padding: 2rem 1rem;
        }
    }
</style>

<?php include 'includes/navbar.php';?>
<div class="hero-section">
    <div class="hero-card text-center">
        <img src="images/logo.png" alt="Trio Logo" class="hero-logo">
        <h1 class="display-4 fw-bold mb-2 text-primary">Trio</h1>
        <h2 class="display-6 mb-3">Online Notes Sharing Platform</h2>
        <p class="lead mb-4">Empowering students and educators to share and access quality study materials with ease.</p>
        <a href="login.php" class="btn btn-primary btn-lg px-4 shadow">Get Started <i class="bi bi-arrow-right"></i></a>
    </div>
</div>
<section class="features-section">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h3 class="fw-bold">Why Choose Trio?</h3>
                <br>
                <br>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card feature-card text-center h-100">
                    <div class="feature-icon mb-2"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h5 class="card-title fw-semibold">Easy Uploads</h5>
                    <p class="card-text">Upload and share your notes in seconds. Support for PDF, DOCX, PPT, and more.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card feature-card text-center h-100">
                    <div class="feature-icon mb-2"><i class="bi bi-search"></i></div>
                    <h5 class="card-title fw-semibold">Quick Search</h5>
                    <p class="card-text">Find the study materials you need instantly with our powerful search tools.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card feature-card text-center h-100">
                    <div class="feature-icon mb-2"><i class="bi bi-people"></i></div>
                    <h5 class="card-title fw-semibold">Community Driven</h5>
                    <p class="card-text">Join a vibrant community of learners and educators sharing knowledge together.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<?php include 'includes/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


        