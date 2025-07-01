<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Trio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e0f7fa);
            color: #333;
        }

        h2, h4 {
            color: #0d47a1;
            font-weight: 600;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .list-group-item {
            border: none;
            padding: 12px 20px;
            font-weight: 500;
            background-color: #f9f9f9;
        }

        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .hero-section {
            background: #0d47a1;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .hero-section img {
            max-width: 100px;
            margin-bottom: 10px;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        .hero-section p {
            margin: 0;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            h2, h4 {
                text-align: center;
            }

            .card {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    
    
    <!-- Hero Section -->
    <section class="py-5 text-center bg-gradient position-relative" style="background: #0d47a1; min-height: 320px;">
        <img src="images/logo.png" alt="Trio Logo" style="max-width: 90px; border-radius: 50%; border: 4px solid #fff; box-shadow: 0 4px 24px rgba(0,0,0,0.12); margin-bottom: 18px;">
        <h1 class="display-4 fw-bold mb-2" style="text-shadow: 0 2px 8px rgba(0,0,0,0.08);">Trio Notes Sharing</h1>
        <p class="lead mb-0" style="font-size: 1.3rem;">Empowering students and educators to share knowledge, effortlessly.</p>
    </section>
    
    <div class="container mt-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-7">
                <h2 class="mb-3">About Trio</h2>
                <p>Trio is an online notes sharing platform designed to help students and educators share educational resources efficiently.</p>
                <h4 class="mt-4">Our Mission</h4>
                <p>Our mission is to create a collaborative environment where knowledge can be freely shared and accessed by anyone who needs it. We believe that education should be accessible to all, and sharing quality study materials is one step toward that goal.</p>
                <h4 class="mt-4">How It Works</h4>
                <p>Trio allows registered users to upload their notes in PDF format. These notes are then reviewed by our administrators to ensure quality and relevance before being made available to all users. This curation process helps maintain the standard of content on our platform.</p>
                <h4 class="mt-4">Join Our Community</h4>
                <p>Whether you're a student looking for study materials or an educator wanting to share your knowledge, Trio welcomes you. Join our growing community today and be a part of this knowledge-sharing initiative.</p>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-white text-center rounded-top" style="background: #0d47a1;">
                        <h5 class="mb-0">Platform Features</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row row-cols-2 g-3">
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-journal-text fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">Free access to quality notes</div>
                            </div>
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-shield-lock fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">Secure user authentication</div>
                            </div>
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-cloud-arrow-up fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">Easy PDF uploads</div>
                            </div>
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-check2-circle fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">Content moderation</div>
                            </div>
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-ui-checks fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">User-friendly interface</div>
                            </div>
                            <div class="col text-center">
                                <div class="mb-2"><i class="bi bi-people fs-2" style="color: #0d47a1;"></i></div>
                                <div class="fw-semibold">Community contributions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php';?>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>