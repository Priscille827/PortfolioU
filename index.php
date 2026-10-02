<?php include 'header.php'; ?>

<!-- ===== HERO CARROUSEL ===== -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slides">
            <!-- SLIDE 1 - ENTREPRISE -->
            <div class="carousel-slide active" data-index="0">
                <div class="carousel-bg" style="background: linear-gradient(135deg, rgba(31, 26, 32,0.85), rgba(50, 42, 48,0.85)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&q=80') center/cover;">
                    <div class="carousel-content">
                        <span class="slide-tag">KASS DEV SOLUTIONS+</span>
                        <h2>L'expertise digitale <span>à votre service</span></h2>
                        <p>Nous accompagnons les entreprises dans leur transformation numérique avec des solutions innovantes et sur mesure.</p>
                        <div class="carousel-buttons">
                            <a href="about.php" class="btn-primary">Découvrir l'entreprise</a>
                            <a href="contact.php" class="btn-secondary">Contactez-nous</a>
                        </div>
                    </div>
                    <div class="carousel-image">
                        <i class="fas fa-rocket"></i>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 - WEB & MOBILE -->
            <div class="carousel-slide" data-index="1">
                <div class="carousel-bg" style="background: linear-gradient(135deg, rgba(220,52,69,0.8), rgba(231,76,60,0.7)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1920&q=80') center/cover;">
                    <div class="carousel-content">
                        <span class="slide-tag">Pôle 1</span>
                        <h2>Applications <span>Web & Mobile</span></h2>
                        <p>Création de sites vitrines, e-commerce, applications mobiles et interfaces sur mesure. Design moderne, performance et expérience utilisateur optimale.</p>
                        <div class="carousel-buttons">
                            <a href="services.php#web" class="btn-primary">En savoir plus</a>
                            <a href="contact.php" class="btn-secondary">Demander un devis</a>
                        </div>
                    </div>
                    <div class="carousel-image">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 - MAINTENANCE -->
            <div class="carousel-slide" data-index="2">
                <div class="carousel-bg" style="background: linear-gradient(135deg, rgba(31, 26, 32,0.85), rgba(50, 42, 48,0.8)), url('https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=1920&q=80') center/cover;">
                    <div class="carousel-content">
                        <span class="slide-tag">Pôle 2</span>
                        <h2>Maintenance <span>Informatique</span></h2>
                        <p>Dépannage, optimisation, sécurité des données et assistance technique. Un service réactif et fiable pour garder vos systèmes performants.</p>
                        <div class="carousel-buttons">
                            <a href="services.php#maintenance" class="btn-primary">En savoir plus</a>
                            <a href="contact.php" class="btn-secondary">Demander un devis</a>
                        </div>
                    </div>
                    <div class="carousel-image">
                        <i class="fas fa-wrench"></i>
                    </div>
                </div>
            </div>

            <!-- SLIDE 4 - GRAPHISME -->
            <div class="carousel-slide" data-index="3">
                <div class="carousel-bg" style="background: linear-gradient(135deg, rgba(220,52,69,0.8), rgba(231,76,60,0.7)), url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1920&q=80') center/cover;">
                    <div class="carousel-content">
                        <span class="slide-tag">Pôle 3</span>
                        <h2>Graphisme <span>& Design</span></h2>
                        <p>Création de logos, chartes graphiques, identité visuelle complète et supports print. Donnez vie à votre marque avec un design percutant.</p>
                        <div class="carousel-buttons">
                            <a href="services.php#graphisme" class="btn-primary">En savoir plus</a>
                            <a href="contact.php" class="btn-secondary">Demander un devis</a>
                        </div>
                    </div>
                      <div class="carousel-image">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- INDICATEURS -->
        <div class="carousel-indicators">
            <button class="indicator active" data-index="0" aria-label="Slide 1"></button>
            <button class="indicator" data-index="1" aria-label="Slide 2"></button>
            <button class="indicator" data-index="2" aria-label="Slide 3"></button>
            <button class="indicator" data-index="3" aria-label="Slide 4"></button>
        </div>

        <!-- FLÈCHES -->
        <button class="carousel-arrow prev" aria-label="Précédent">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow next" aria-label="Suivant">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- ===== BANDEAU D'INFORMATION ===== -->
<section class="info-banner">
    <div class="container">
        <div class="banner-grid">
            <div class="banner-item">
                <i class="fas fa-check-circle"></i>
                <div>
                    <h4>100% Sur Mesure</h4>
                    <p>Solutions adaptées à vos besoins</p>
                </div>
            </div>
            <div class="banner-item">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>Réactivité</h4>
                    <p>Intervention rapide 24/7</p>
                </div>
            </div>
            <div class="banner-item">
                <i class="fas fa-shield-alt"></i>
                <div>
                    <h4>Qualité Garantie</h4>
                    <p>Satisfaction client 98%</p>
                </div>
            </div>
            <div class="banner-item">
                <i class="fas fa-euro-sign"></i>
                <div>
                    <h4>Prix Compétitifs</h4>
                    <p>Devis gratuit sans engagement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES APERÇU ===== -->
<section class="services-preview">
    <div class="container">
        <div class="section-header">
            <span class="badge">Nos Expertises</span>
            <h2 class="section-title">3 pôles <span>d'excellence</span></h2>
            <p class="section-subtitle">Des compétences complémentaires pour répondre à tous vos besoins numériques</p>
        </div>

        <div class="services-grid">
            <div class="service-card animate-up">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="service-number">01</div>
                <h3>Applications Web & Mobile</h3>
                <p>Sites vitrines, e-commerce, applications mobiles, interfaces administrateur et API sur mesure.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Sites vitrines professionnels</li>
                    <li><i class="fas fa-check"></i> Apps iOS & Android</li>
                    <li><i class="fas fa-check"></i> E-commerce performant</li>
                    <li><i class="fas fa-check"></i> Solutions sur mesure</li>
                </ul>
                <a href="services.php#web" class="btn-service">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card animate-up-delay">
                <div class="service-icon">
                    <i class="fas fa-wrench"></i>
                </div>
                <div class="service-number">02</div>
                <h3>Maintenance Informatique</h3>
                <p>Dépannage logiciel et matériel, sécurité des données, assistance à distance et conseil technique.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Dépannage complet</li>
                    <li><i class="fas fa-check"></i> Sécurité des données</li>
                    <li><i class="fas fa-check"></i> Assistance 24/7</li>
                    <li><i class="fas fa-check"></i> Audit technique</li>
                </ul>
                <a href="services.php#maintenance" class="btn-service">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card animate-up-delay2">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="service-number">03</div>
                <h3>Graphisme & Design</h3>
                <p>Création de logos, chartes graphiques, identité visuelle, supports print et design d'interfaces.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Logo & charte graphique</li>
                    <li><i class="fas fa-check"></i> Design UI/UX</li>
                    <li><i class="fas fa-check"></i> Supports print</li>
                    <li><i class="fas fa-check"></i> Branding complet</li>
                </ul>
                <a href="services.php#graphisme" class="btn-service">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== STATISTIQUES ===== -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number" data-count="50">0</span>
                <span class="stat-label">Projets livrés</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="35">0</span>
                <span class="stat-label">Clients satisfaits</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="98">0</span>
                <span class="stat-label">% Satisfaction</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="24">0</span>
                <span class="stat-label">Support / 7j</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== TÉMOIGNAGES ===== -->
<section class="testimonials" style="padding: 80px 0; background: var(--bg-secondary);">
    <div class="container">
        <div class="section-header">
            <span class="badge" style="background: var(--rouge);">Témoignages</span>
            <h2 class="section-title" style="font-size: 2.8rem; font-weight: 800; color: var(--text);">Ce que disent <span style="color: var(--rouge);">nos clients</span></h2>
            <p class="section-subtitle" style="font-size: 1.1rem; color: var(--text-light); max-width: 600px; margin: 10px auto 0;">
                La satisfaction de nos clients est notre meilleure carte de visite.
            </p>
        </div>

        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(320px, 100%), 1fr)); gap: 30px; margin-bottom: 50px;">
            <div style="background: var(--bg-card); border-radius: 20px; padding: 35px; box-shadow: var(--shadow); border: 1px solid var(--border);">
                <div style="margin-bottom: 15px;">
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                </div>
                <p style="color: var(--text-light); font-size: 1.05rem; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                    "Très satisfaite du service ! L'équipe est professionnelle, réactive et le travail a été réalisé dans les délais. Je recommande sans hésiter."
                </p>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: linear-gradient(135deg, var(--bleu-fonce), var(--bleu-moyen)); display: flex; align-items: center; justify-content: center; color: white; font-weight: 800;">K</div>
                    <strong style="color: var(--text);">Kindoho Priscille</strong>
                </div>
            </div>
            <div style="background: var(--bg-card); border-radius: 20px; padding: 35px; box-shadow: var(--shadow); border: 1px solid var(--border);">
                <div style="margin-bottom: 15px;">
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                    <i class="fas fa-star" style="color: #f1c40f;"></i>
                </div>
                <p style="color: var(--text-light); font-size: 1.05rem; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                    "Excellent accompagnement du début à la fin. Les solutions proposées étaient adaptées à mes besoins et le résultat est impeccable. Merci pour votre sérieux !"
                </p>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: linear-gradient(135deg, var(--rouge), var(--rouge-fonce)); display: flex; align-items: center; justify-content: center; color: white; font-weight: 800;">C</div>
                    <strong style="color: var(--text);">Carel Agueh</strong>
                </div>
            </div>
        </div>

        <div style="max-width: 500px; margin: 0 auto; text-align: center;">
            <p style="color: var(--text-light); margin-bottom: 15px;">Vous avez aimé travailler avec nous ?</p>
            <a href="contact.php" class="btn-secondary">
                <i class="fas fa-pen"></i> Laisser un avis
            </a>
        </div>
    </div>
</section>

<!-- ===== CTA FINAL (couleur harmonisée) ===== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Prêt à donner vie à <span>votre projet</span> ?</h2>
            <p>Contactez-nous pour un devis gratuit et personnalisé. Nous vous répondons dans les 24h.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn-primary">Demander un devis</a>
                <a href="tel:+2290166561692" class="btn-secondary"><i class="fas fa-phone"></i> 01 66 56 16 92</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>