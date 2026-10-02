<?php include 'header.php'; ?>

<!-- ===== PAGE HEADER ===== -->
<section class="page-header" style="background: linear-gradient(135deg, rgba(31, 26, 32,0.88), rgba(50, 42, 48,0.85)), url('images/desk-setup-colorful.jpg') center/cover; color: white; padding: 100px 0; text-align: center; border-bottom: 3px solid var(--rouge); position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge" style="background: var(--rouge);">Nos Expertises</span>
        <h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 15px;">Nos <span style="color: var(--rouge-doux);">Services</span></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Des solutions digitales complètes pour propulser votre activité</p>
    </div>
</section>

<!-- ===== SERVICE 1 - WEB & MOBILE ===== -->
<section id="web" class="service-detail" style="padding: 80px 0; background: var(--bg);">
    <div class="container">
        <div class="service-detail-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="service-detail-content animate-up">
                <div class="service-badge" style="display: inline-block; background: var(--rouge); color: white; padding: 5px 20px; border-radius: 50px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Pôle 1</div>
                <h2 style="font-size: 2.8rem; font-weight: 800; color: var(--text); margin-bottom: 20px;">Applications <span style="color: var(--rouge);">Web & Mobile</span></h2>
                <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">
                    Nous concevons des applications web et mobiles sur mesure, alliant performance, design et expérience utilisateur optimale. Que vous ayez besoin d'un site vitrine, d'une boutique en ligne ou d'une application mobile, nous avons la solution.
                </p>
                
                <div class="service-features" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px;">
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-globe" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Sites vitrines</span>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-shopping-cart" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">E-commerce</span>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-mobile-alt" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Apps iOS & Android</span>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-server" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">API & Backend</span>
                    </div>
                </div>
                
                <ul style="list-style: none; margin-bottom: 30px;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Design responsive et moderne
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Expérience utilisateur optimale
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Sécurité et performances garanties
                    </li>
                    <li style="padding: 10px 0; display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Maintenance et évolutivité
                    </li>
                </ul>
                
                <a href="contact.php" class="btn-primary">Demander un devis</a>
            </div>
            
            <div class="service-detail-image animate-up-delay" style="text-align: center;">
                <div class="tech-card" style="background: linear-gradient(135deg, var(--bleu-fonce), var(--bleu-moyen)); border-radius: 24px; padding: 60px 40px; color: white; box-shadow: var(--shadow); position: relative; overflow: hidden;">
                    <!-- Image de fond -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&q=80') center/cover; opacity: 0.15; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <i class="fas fa-rocket" style="font-size: 5rem; color: var(--rouge-doux); margin-bottom: 25px;"></i>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Des solutions sur mesure</h3>
                        <p style="opacity: 0.9; max-width: 400px; margin: 0 auto; line-height: 1.7;">
                            Nous utilisons les technologies les plus adaptées à votre projet, 
                            en nous engageant sur la qualité, la performance et la durabilité 
                            de vos applications.
                        </p>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 20px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🎯 Sur mesure</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">⚡ Performance</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🔒 Sécurité</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📱 Responsive</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🌍 Accessible</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📈 Évolutif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICE 2 - MAINTENANCE ===== -->
<section id="maintenance" class="service-detail" style="padding: 80px 0; background: var(--bg-secondary);">
    <div class="container">
        <div class="service-detail-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="service-detail-image animate-up" style="text-align: center; order: 1;">
                <div class="tech-card" style="background: linear-gradient(135deg, var(--bleu-fonce), var(--bleu-moyen)); border-radius: 24px; padding: 60px 40px; color: white; box-shadow: var(--shadow); position: relative; overflow: hidden;">
                    <!-- Image de fond -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=600&q=80') center/cover; opacity: 0.12; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <i class="fas fa-shield-alt" style="font-size: 5rem; color: var(--rouge-doux); margin-bottom: 25px;"></i>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Un service fiable et réactif</h3>
                        <p style="opacity: 0.9; max-width: 400px; margin: 0 auto; line-height: 1.7;">
                            Nous assurons la continuité de vos activités avec des interventions 
                            rapides, une veille technologique constante et un accompagnement 
                            personnalisé.
                        </p>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 20px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">⚡ Réactivité</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🛡️ Sécurité</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📞 Disponible 24/7</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🔧 Expertise</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📊 Proactif</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-detail-content animate-up-delay" style="order: 2;">
                <div class="service-badge" style="display: inline-block; background: var(--rouge); color: white; padding: 5px 20px; border-radius: 50px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Pôle 2</div>
                <h2 style="font-size: 2.8rem; font-weight: 800; color: var(--text); margin-bottom: 20px;">Maintenance <span style="color: var(--rouge);">Informatique</span></h2>
                <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">
                    Assurez la performance et la sécurité de vos systèmes avec nos services de maintenance et d'assistance technique. Nous intervenons rapidement pour résoudre vos problèmes et prévenir les pannes.
                </p>
                
                <div class="service-features" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px;">
                    <div style="background: var(--bg); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-desktop" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Dépannage complet</span>
                    </div>
                    <div style="background: var(--bg); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-shield-alt" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Sécurité des données</span>
                    </div>
                    <div style="background: var(--bg); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-headset" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Assistance 24/7</span>
                    </div>
                    <div style="background: var(--bg); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge);">
                        <i class="fas fa-chart-line" style="color: var(--rouge); margin-right: 10px;"></i>
                        <span style="font-weight: 600; color: var(--text);">Audit technique</span>
                    </div>
                </div>
                
                <ul style="list-style: none; margin-bottom: 30px;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Diagnostic et réparation rapide
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Protection antivirus et pare-feu
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Sauvegarde et récupération de données
                    </li>
                    <li style="padding: 10px 0; display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Conseil et accompagnement personnalisé
                    </li>
                </ul>
                
                <a href="contact.php" class="btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICE 3 - GRAPHISME ===== -->
<section id="graphisme" class="service-detail" style="padding: 80px 0; background: var(--bg);">
    <div class="container">
        <div class="service-detail-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="service-detail-content animate-up">
                <div class="service-badge" style="display: inline-block; background: var(--rouge); color: white; padding: 5px 20px; border-radius: 50px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Pôle 3</div>
                <h2 style="font-size: 2.8rem; font-weight: 800; color: var(--text); margin-bottom: 20px;">Graphisme <span style="color: var(--rouge);">& Design</span></h2>
                <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">
                    Créez une identité visuelle forte et cohérente pour marquer les esprits et véhiculer vos valeurs. Nous concevons des designs uniques qui reflètent parfaitement votre image de marque.
                </p>
                
                <div class="service-features" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px;">
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1626785774573-4b799315345d?w=600&q=80') center/cover; opacity: 0.06; z-index: 0;"></div>
                        <div style="position: relative; z-index: 1;">
                            <i class="fas fa-pen-nib" style="color: var(--rouge); margin-right: 10px;"></i>
                            <span style="font-weight: 600; color: var(--text);">Logo & charte</span>
                        </div>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80') center/cover; opacity: 0.06; z-index: 0;"></div>
                        <div style="position: relative; z-index: 1;">
                            <i class="fas fa-palette" style="color: var(--rouge); margin-right: 10px;"></i>
                            <span style="font-weight: 600; color: var(--text);">Design UI/UX</span>
                        </div>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80') center/cover; opacity: 0.06; z-index: 0;"></div>
                        <div style="position: relative; z-index: 1;">
                            <i class="fas fa-print" style="color: var(--rouge); margin-right: 10px;"></i>
                            <span style="font-weight: 600; color: var(--text);">Supports print</span>
                        </div>
                    </div>
                    <div style="background: var(--bg-secondary); padding: 15px 20px; border-radius: 12px; border-left: 4px solid var(--rouge); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?w=600&q=80') center/cover; opacity: 0.06; z-index: 0;"></div>
                        <div style="position: relative; z-index: 1;">
                            <i class="fas fa-bullhorn" style="color: var(--rouge); margin-right: 10px;"></i>
                            <span style="font-weight: 600; color: var(--text);">Branding complet</span>
                        </div>
                    </div>
                </div>
                
                <ul style="list-style: none; margin-bottom: 30px;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Création de logo et charte graphique
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Design d'interfaces web et mobiles
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Flyers, cartes de visite, affiches
                    </li>
                    <li style="padding: 10px 0; display: flex; align-items: center; gap: 12px; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--rouge);"></i> Identité visuelle et branding
                    </li>
                </ul>
                
                <a href="contact.php" class="btn-primary">Demander un devis</a>
            </div>
            
            <div class="service-detail-image animate-up-delay" style="text-align: center;">
                <div class="tech-card" style="background: linear-gradient(135deg, var(--bleu-fonce), var(--bleu-moyen)); border-radius: 24px; padding: 60px 40px; color: white; box-shadow: var(--shadow); position: relative; overflow: hidden;">
                    <!-- Image de fond -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80') center/cover; opacity: 0.12; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <i class="fas fa-paint-brush" style="font-size: 5rem; color: var(--rouge-doux); margin-bottom: 25px;"></i>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Une identité visuelle unique</h3>
                        <p style="opacity: 0.9; max-width: 400px; margin: 0 auto; line-height: 1.7;">
                            Nous créons des designs qui racontent votre histoire, 
                            captent l'attention et renforcent votre marque. 
                            Chaque projet est pensé pour vous démarquer.
                        </p>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 20px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🎨 Créatif</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">✨ Unique</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📐 Moderne</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">🎯 Impactant</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(4px);">📱 Adapté</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-section" style="padding: 80px 0; background: var(--bleu-nuit); border-bottom: 3px solid var(--rouge);">
    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 15px;">Vous avez un projet <span style="color: var(--rouge-doux);">en tête</span> ?</h2>
            <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8); margin-bottom: 30px;">Contactez-nous pour une étude personnalisée et un devis gratuit. Nous vous répondons dans les 24h.</p>
            <div class="cta-buttons" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn-primary">Demander un devis</a>
                <a href="tel:+2290166561692" class="btn-secondary"><i class="fas fa-phone"></i> 01 66 56 16 92</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>