<div class="container">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-dark mb-3">Contactez-Nous</h2>
        <div class="gradient-line mx-auto mb-4"></div>
        <p class="lead text-muted" style="max-width: 600px; margin: 0 auto;">
            Prêt à transformer votre organisation ? Parlons de votre projet
        </p>
    </div>

    <div class="row g-5">
        <div class="col-lg-6">
            <h4 class="fw-bold text-dark mb-4">Informations de Contact</h4>

            <div class="mb-4">
                <div class="d-flex gap-3">
                    <div class="gradient-icon flex-shrink-0">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Localisation</h6>
                        <p class="text-muted mb-0">République du Congo</p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex gap-3">
                    <div class="gradient-icon gradient-icon-alt flex-shrink-0">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Email</h6>
                        <a href="mailto:contact@calculusplus.com"
                            class="text-primary text-decoration-none">contact@calculusplus.com</a>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex gap-3">
                    <div class="gradient-icon flex-shrink-0">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Téléphone</h6>
                        <a href="tel:+242" class="text-primary text-decoration-none">+242 05-396-84-45</a>
                    </div>
                </div>
            </div>

            <div class="gradient-card gradient-card-1 p-4 rounded-3 text-white">
                <h6 class="fw-bold mb-3">Heures d'Ouverture</h6>
                <p class="mb-1">Lundi - Vendredi: 8h00 - 18h00</p>
                <p class="mb-1">Samedi: 9h00 - 13h00</p>
                <p class="mb-0">Dimanche: Fermé</p>
            </div>
        </div>

        <div class="col-lg-6">
            <form action="send-mail.php" method="POST" class="bg-white p-5 rounded-3 shadow-sm" id="contactForm">
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold text-dark">Nom complet</label>
                    <input type="text" class="form-control border-0 bg-light" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold text-dark">Email</label>
                    <input type="email" class="form-control border-0 bg-light" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label fw-semibold text-dark">Sujet</label>
                    <input type="text" class="form-control border-0 bg-light" id="subject" name="subject" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label fw-semibold text-dark">Message</label>
                    <textarea class="form-control border-0 bg-light" id="message" name="message" rows="5"
                        required></textarea>
                </div>

                <button type="submit" class="btn btn-gradient w-100 fw-semibold">
                    Envoyer le Message <i class="bi bi-send ms-2"></i>
                </button>
            </form>
        </div>
    </div>
</div>