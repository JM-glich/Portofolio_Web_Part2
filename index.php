<?php
include 'config.php';

// Ambil data
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$skills = mysqli_query($conn, "SELECT * FROM skills");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
$experience = mysqli_query($conn, "SELECT * FROM experience");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $profile['name']; ?> | Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top border-bottom border-success">
<div class="container">
    <a class="navbar-brand text-success fw-bold" href="#"><?= $profile['name']; ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
    </ul>
    </div>
</div>
</nav>

<!-- HERO -->
<section id="home" class="hero d-flex align-items-center justify-content-center text-center">
<div class="container">
    <h1 class="display-3 text-success fw-bold"><?= $profile['name']; ?></h1>
    <p class="lead"><?= $profile['description']; ?></p>
    <a href="#about" class="btn btn-success">Explore More</a>
</div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5">
<div class="container">
    <h2 class="text-success mb-4">About Me</h2>
    <p>
    I create immersive music experiences using FL Studio,
    blending technology and emotion into modern digital sound.
    </p>

    <h4 class="mt-5">Music Skills</h4>

    <?php while($row = mysqli_fetch_assoc($skills)) : ?>
        <p><?= $row['skill_name']; ?></p>
        <div class="progress mb-3">
            <div class="progress-bar bg-success" style="width: <?= $row['level']; ?>%"></div>
        </div>
    <?php endwhile; ?>

    <h4>Experience</h4>
    <ul>
    <?php while($row = mysqli_fetch_assoc($experience)) : ?>
        <li><?= $row['description']; ?></li>
    <?php endwhile; ?>
    </ul>
</div>
</section>

<!-- CERTIFICATES -->
<section id="certificates" class="py-5 bg-dark">
<div class="container">
    <h2 class="text-success mb-5">Certificates</h2>

    <div class="row g-4">
    <?php while($row = mysqli_fetch_assoc($certificates)) : ?>
        <div class="col-md-4">
            <div class="card bg-black border-success h-100">
                <div class="card-body text-light">
                    <h5 class="card-title text-success"><?= $row['title']; ?></h5>
                    <p class="card-text"><?= $row['description']; ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>

</div>
</section>

<footer class="text-center py-4 bg-black border-top border-success">
<p class="mb-0">© 2025 <?= $profile['name']; ?> — Music & Technology</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>