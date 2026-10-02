<?php include 'header.php'; ?>

<!-- ===== PAGE HEADER ===== -->
<section class="page-header" style="background: linear-gradient(135deg, rgba(31, 26, 32,0.88), rgba(50, 42, 48,0.85)), url('images/multi-monitor-coding.jpg') center/cover; color: white; padding: 100px 0; text-align: center; border-bottom: 3px solid var(--rouge); position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge" style="background: var(--rouge);">Nos Réalisations</span>
        <h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 15px;">Notre <span style="color: var(--rouge-doux);">Portfolio</span></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Découvrez nos projets récents qui font la différence au Bénin</p>
    </div>
</section>

<!-- ===== PORTFOLIO ===== -->
<section class="portfolio-section" style="padding: 80px 0; background: var(--bg);">
    <div class="container">
        
        <!-- ===== FILTRES ===== -->
        <div class="portfolio-filters" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-bottom: 50px;">
            <button class="filter-btn active" data-filter="all" style="padding: 12px 30px; border: 2px solid var(--rouge); background: var(--rouge); color: white; border-radius: 50px; font-weight: 600; cursor: pointer; transition: var(--transition);">Tous</button>
            <button class="filter-btn" data-filter="web" style="padding: 12px 30px; border: 2px solid var(--border); background: transparent; color: var(--text); border-radius: 50px; font-weight: 600; cursor: pointer; transition: var(--transition);">Web</button>
            <button class="filter-btn" data-filter="mobile" style="padding: 12px 30px; border: 2px solid var(--border); background: transparent; color: var(--text); border-radius: 50px; font-weight: 600; cursor: pointer; transition: var(--transition);">Mobile</button>
        </div>

        <!-- ===== GRILLE PROJETS ===== -->
        <div class="portfolio-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(380px, 100%), 1fr)); gap: 40px;">
            
            <!-- ============================================================ -->
            <!-- PROJET 1 - AgriLink Bénin -->
            <!-- ============================================================ -->
            <div class="portfolio-item" data-category="web" style="background: var(--bg-card); border-radius: 20px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);">
                <!-- Image/Header du projet -->
                <div style="background: linear-gradient(135deg, #1a472a, #2d6a4f); padding: 60px 20px; text-align: center; color: white; position: relative; min-height: 200px;">
                    <!-- ICI TU METS TA CAPTURE D'ÉCRAN -->
                    <img src="images/agrilink.jpg" alt="AgriLink Bénin" style="width: 100%; height: auto; max-height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <i class="fas fa-seedling" style="font-size: 2.5rem; color: #95d5b2; margin-bottom: 10px; display: block;"></i>
                    <span style="position: absolute; top: 15px; right: 15px; background: var(--rouge); color: white; padding: 4px 14px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Web</span>
                    <span style="position: absolute; bottom: 15px; right: 15px; background: rgba(255,255,255,0.2); padding: 4px 14px; border-radius: 50px; font-size: 0.7rem;">2025</span>
                </div>
                <div class="portfolio-content" style="padding: 25px;">
                    <h3 style="font-size: 1.4rem; color: var(--text); margin-bottom: 8px;">🌾 AgriLink Bénin</h3>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 12px;">
                        <span style="background: #1a472a; color: white; padding: 2px 10px; border-radius: 50px; font-size: 0.7rem;">Agriculture</span>
                        <span style="background: #2d6a4f; color: white; padding: 2px 10px; border-radius: 50px; font-size: 0.7rem;">E-commerce</span>
                    </p>
                    <p style="color: var(--text-light); margin-bottom: 15px; line-height: 1.7;">
                        Plateforme numérique qui facilite la vente directe des produits agricoles entre les producteurs locaux et les consommateurs. 
                        Les agriculteurs peuvent publier leurs offres (type de produit, quantité, prix, date de disponibilité) et les acheteurs peuvent les contacter facilement.
                    </p>
                    
                    <!-- Points clés -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 15px;">
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Vente directe
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Suppression des intermédiaires
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> 4 langues locales
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Produits frais & locaux
                        </div>
                    </div>
                    
                    <!-- Technologies -->
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 15px;">
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">HTML/CSS</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">JavaScript</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">PHP</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">MySQL</span>
                    </div>
                    
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="#" class="btn-service" style="color: var(--rouge); font-weight: 600; text-decoration: none; transition: var(--transition);">
                            Voir le projet <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#" style="color: var(--text-light); font-size: 0.85rem; text-decoration: none; transition: var(--transition);" onmouseover="this.style.color='var(--rouge)'" onmouseout="this.style.color='var(--text-light)'">
                            <i class="fas fa-external-link-alt"></i> Démo
                        </a>
                    </div>
                </div>
            </div>

            <!-- ============================================================ -->
            <!-- PROJET 2 - Suivi Santé Enfants -->
            <!-- ============================================================ -->
            <div class="portfolio-item" data-category="mobile" style="background: var(--bg-card); border-radius: 20px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);">
                <!-- Image/Header du projet -->
                <div style="background: linear-gradient(135deg, #1b3a6b, #2980b9); padding: 60px 20px; text-align: center; color: white; position: relative; min-height: 200px;">
                    <!-- ICI TU METS TA CAPTURE D'ÉCRAN -->
                    <img src="images/suivi-sante.jpg" alt="Suivi Santé Enfants" style="width: 100%; height: auto; max-height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <i class="fas fa-heartbeat" style="font-size: 2.5rem; color: #85c1e9; margin-bottom: 10px; display: block;"></i>
                    <span style="position: absolute; top: 15px; right: 15px; background: var(--rouge); color: white; padding: 4px 14px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Mobile</span>
                    <span style="position: absolute; bottom: 15px; right: 15px; background: rgba(255,255,255,0.2); padding: 4px 14px; border-radius: 50px; font-size: 0.7rem;">2025</span>
                </div>
                <div class="portfolio-content" style="padding: 25px;">
                    <h3 style="font-size: 1.4rem; color: var(--text); margin-bottom: 8px;">❤️ Suivi Santé Enfants</h3>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 12px;">
                        <span style="background: #1b3a6b; color: white; padding: 2px 10px; border-radius: 50px; font-size: 0.7rem;">Santé</span>
                        <span style="background: #2980b9; color: white; padding: 2px 10px; border-radius: 50px; font-size: 0.7rem;">Éducation</span>
                    </p>
                    <p style="color: var(--text-light); margin-bottom: 15px; line-height: 1.7;">
                        Application web conçue pour aider les parents, les agents de santé et les éducateurs à suivre la santé des enfants au Bénin. 
                        Permet d'enregistrer les enfants, de suivre leur carnet de vaccination et de surveiller leur croissance (poids et taille).
                    </p>
                    
                    <!-- Points clés -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 15px;">
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Carnet de vaccination
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Alertes & rappels
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Suivi de croissance
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px; font-size: 0.85rem; color: var(--text-light);">
                            <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Accès gratuit
                        </div>
                    </div>
                    
                    <!-- Technologies -->
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 15px;">
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">React Native</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">PHP</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">MySQL</span>
                        <span style="background: var(--bg-secondary); color: var(--text-light); padding: 3px 12px; border-radius: 50px; font-size: 0.75rem;">Firebase</span>
                    </div>
                    
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="#" class="btn-service" style="color: var(--rouge); font-weight: 600; text-decoration: none; transition: var(--transition);">
                            Voir le projet <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#" style="color: var(--text-light); font-size: 0.85rem; text-decoration: none; transition: var(--transition);" onmouseover="this.style.color='var(--rouge)'" onmouseout="this.style.color='var(--text-light)'">
                            <i class="fas fa-external-link-alt"></i> Démo
                        </a>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- ===== MESSAGE SI PAS DE PROJET ===== -->
        <div style="text-align: center; margin-top: 50px; padding: 40px; background: var(--bg-secondary); border-radius: 16px; border: 2px dashed var(--border);">
            <p style="color: var(--text-light); font-size: 1rem;">
                <i class="fas fa-plus-circle" style="color: var(--rouge); font-size: 1.5rem; display: block; margin-bottom: 10px;"></i>
                D'autres projets sont en cours de développement. 
                <a href="contact.php" style="color: var(--rouge); font-weight: 600; text-decoration: none;">Contactez-nous</a> 
                pour en savoir plus !
            </p>
        </div>
    </div>
</section>

<!-- ===== STATISTIQUES PORTFOLIO ===== -->
<section class="stats" style="padding: 60px 0; background: var(--bleu-nuit); color: white;">
    <div class="container">
        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; text-align: center;">
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

<!-- ===== CTA ===== -->
<section class="cta-section" style="padding: 80px 0; background: var(--bleu-nuit); border-bottom: 3px solid var(--rouge); border-top: 3px solid var(--rouge);">
    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 15px;">Vous voulez un projet <span style="color: var(--rouge-doux);">comme ceux-ci</span> ?</h2>
            <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8); margin-bottom: 30px;">Contactez-nous et nous réaliserons votre vision. Devis gratuit et personnalisé.</p>
            <div class="cta-buttons" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn-primary">Demander un devis</a>
                <a href="tel:+2290166561692" class="btn-secondary"><i class="fas fa-phone"></i> +229 01 66 56 16 92</a>
            </div>
        </div>
    </div>
</section>

<script>
    // ===== FILTRES PORTFOLIO =====
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => {
                    btn.style.background = 'transparent';
                    btn.style.color = 'var(--text)';
                    btn.style.borderColor = 'var(--border)';
                    btn.classList.remove('active');
                });

                this.style.background = 'var(--rouge)';
                this.style.color = 'white';
                this.style.borderColor = 'var(--rouge)';
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeInUp 0.6s ease forwards';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // ===== ANIMATION FADE IN =====
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);
    });
</script>

<?php include 'footer.php'; ?>