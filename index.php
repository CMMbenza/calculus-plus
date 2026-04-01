<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculus Plus - Transformation Digitale en Afrique</title>
  <link rel="icon" type="image/x-icon" href="assets/img/Calculus_Plus_Logo_HD copie_063528.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="assets/img/Calculus_Plus_Logo_HD copie_063528.png" alt="Calculus Plus" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#expertise">Expertise</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <!-- <li class="nav-item">
            <a class="nav-link btn btn-primary ms-2" href="#contact">Commencer</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section text-white py-5">
    <?php include 'composants/home.php'; ?>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5 bg-light">
    <?php include 'composants/about.php'; ?>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <?php include 'composants/services.php'; ?>
  </section>

  <!-- Expertise Section -->
  <section id="expertise" class="py-5 bg-light">
    <?php include 'composants/expertise.php'; ?>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-12">
          <h2 class="display-5 fw-bold text-dark mb-4">Pourquoi Choisir Calculus Plus ?</h2>
          <div class="gradient-line mb-4" style="width: 60px;"></div>
          <p class="lead text-muted mb-4">
            Nous combinons expertise technique, connaissance du marché africain et engagement pour la réussite de nos
            clients.
          </p>
          <ul class="list-unstyled">
            <li class="mb-4">
              <div class="d-flex gap-3">
                <i class="bi bi-check-circle text-success fs-5 flex-shrink-0"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1">Expertise Multidisciplinaire</h6>
                  <p class="text-muted small mb-0">Une équipe de spécialistes couvrant tous les aspects de la
                    transformation digitale</p>
                </div>
              </div>
            </li>
            <li class="mb-4">
              <div class="d-flex gap-3">
                <i class="bi bi-check-circle text-success fs-5 flex-shrink-0"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1">Solutions Adaptées à l'Afrique</h6>
                  <p class="text-muted small mb-0">Compréhension profonde du contexte local et des défis spécifiques du
                    marché africain</p>
                </div>
              </div>
            </li>
            <li class="mb-4">
              <div class="d-flex gap-3">
                <i class="bi bi-check-circle text-success fs-5 flex-shrink-0"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1">Approche Orientée Résultats</h6>
                  <p class="text-muted small mb-0">Focus sur l'impact mesurable et la valeur ajoutée pour votre
                    organisation</p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex gap-3">
                <i class="bi bi-check-circle text-success fs-5 flex-shrink-0"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1">Innovation Continue</h6>
                  <p class="text-muted small mb-0">Veille technologique et adoption des meilleures pratiques
                    internationales</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=1200"
            alt="Team collaboration" class="img-fluid rounded-4 shadow-lg">
        </div>
      </div>
    </div>
  </section>

  <!-- Domains Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-dark mb-3">Domaines d'Intervention</h2>
        <div class="gradient-line mx-auto mb-4"></div>
        <p class="lead text-muted" style="max-width: 600px; margin: 0 auto;">
          Nous accompagnons différents secteurs dans leur transformation digitale
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="domain-card p-4 rounded-3 bg-white shadow-sm h-100">
            <div class="gradient-icon mb-3">
              <i class="bi bi-building"></i>
            </div>
            <h5 class="fw-bold text-dark mb-3">Secteur Public</h5>
            <p class="text-muted small">Modernisation des services publics et digitalisation des processus
              administratifs</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="domain-card p-4 rounded-3 bg-white shadow-sm h-100">
            <div class="gradient-icon gradient-icon-alt mb-3">
              <i class="bi bi-bank"></i>
            </div>
            <h5 class="fw-bold text-dark mb-3">Banques & Institutions Financières</h5>
            <p class="text-muted small">Solutions bancaires digitales et transformation des services financiers</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="domain-card p-4 rounded-3 bg-white shadow-sm h-100">
            <div class="gradient-icon mb-3">
              <i class="bi bi-building-check"></i>
            </div>
            <h5 class="fw-bold text-dark mb-3">PME & Grandes Entreprises</h5>
            <p class="text-muted small">Accompagnement digital et solutions sur mesure pour la croissance</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="domain-card p-4 rounded-3 bg-white shadow-sm h-100">
            <div class="gradient-icon gradient-icon-alt mb-3">
              <i class="bi bi-rocket"></i>
            </div>
            <h5 class="fw-bold text-dark mb-3">Startups & FinTech</h5>
            <p class="text-muted small">Support technologique et développement de produits innovants</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">
    <?php include 'composants/contact.php'; ?>
  </section>

  <!-- Footer -->
  <?php include 'composants/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script> 
</body>

</html>