<?php 
include 'header.php'; 

// ===== IMPORTS PHPMailer (DOIT ÊTRE EN DEHORS DES CONDITIONS) =====
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<!-- ===== PAGE HEADER ===== -->
<section class="page-header" style="background: linear-gradient(135deg, rgba(31, 26, 32,0.88), rgba(50, 42, 48,0.85)), url('images/team-collab-bw.jpg') center/cover; color: white; padding: 100px 0; text-align: center; border-bottom: 3px solid var(--rouge); position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge" style="background: var(--rouge);">Contactez-nous</span>
        <h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 15px;">Parlons de <span style="color: var(--rouge-doux);">votre projet</span></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Une question, une idée ? N'hésitez pas à nous contacter. Nous vous répondons dans les 24h.</p>
    </div>
</section>

<!-- ===== CONTACT SECTION ===== -->
<section class="contact-section" style="padding: 80px 0; background: var(--bg);">
    <div class="container">
        
        <?php
        $message_status = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // ===== RÉCUPÉRATION DES DONNÉES =====
            $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
            $sujet = htmlspecialchars(trim($_POST['sujet'] ?? ''));
            $message = htmlspecialchars(trim($_POST['message'] ?? ''));
            
            // ===== VALIDATION =====
            $errors = [];
            if (empty($nom)) $errors[] = 'Le nom est obligatoire.';
            if (empty($email)) $errors[] = "L'email est obligatoire.";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "L'email n'est pas valide.";
            if (empty($sujet)) $errors[] = 'Le sujet est obligatoire.';
            if (empty($message)) $errors[] = 'Le message est obligatoire.';
            
            if (!empty($errors)) {
                $message_status = [
                    'success' => false,
                    'message' => implode(' ', $errors)
                ];
            } else {
                // ===== ENVOI DIRECT AVEC PHPMailer =====
                try {
                    $mail = new PHPMailer(true);
                    
                    // Configuration SMTP
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'kassdev14@gmail.com';
                    $mail->Password = 'rqzo tbcz ilgx qnou'; // Ton mot de passe applicatif
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;
                    
                    // Désactiver vérification SSL (pour éviter les erreurs)
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    
                    // Expéditeur et destinataire
                    $mail->setFrom('kassdev14@gmail.com', 'KASS DEV SOLUTIONS+');
                    $mail->addReplyTo($email, $nom);
                    $mail->addAddress('kassdev14@gmail.com', 'KASS DEV SOLUTIONS+');
                    
                    // Contenu
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = "📩 Nouveau message - $sujet - KASS DEV SOLUTIONS+";
                    
                    $bodyHTML = "
                    <html>
                    <head>
                        <style>
                            body { font-family: Arial, sans-serif; background: #f5f7fa; padding: 20px; }
                            .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
                            .header { background: linear-gradient(135deg, #1F1A20, #2E2830); color: white; padding: 20px; border-radius: 12px 12px 0 0; text-align: center; margin: -30px -30px 20px -30px; }
                            .header h2 { margin: 0; }
                            .field { padding: 10px 0; border-bottom: 1px solid #eee; }
                            .field strong { color: #2E2830; display: inline-block; width: 120px; }
                            .message-box { background: #f5f7fa; padding: 15px; border-radius: 8px; margin-top: 10px; }
                            .footer { text-align: center; color: #888; font-size: 12px; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; }
                            .badge { display: inline-block; background: #C2255C; color: white; padding: 3px 12px; border-radius: 50px; font-size: 12px; }
                        </style>
                    </head>
                    <body>
                        <div class='container'>
                            <div class='header'>
                                <h2>📩 Nouveau message</h2>
                                <p style='margin: 5px 0 0; opacity: 0.8;'>KASS DEV SOLUTIONS+</p>
                            </div>
                            <div class='field'><strong>👤 Nom :</strong> $nom</div>
                            <div class='field'><strong>📧 Email :</strong> <a href='mailto:$email'>$email</a></div>
                            <div class='field'><strong>📞 Téléphone :</strong> " . ($telephone ?: 'Non renseigné') . "</div>
                            <div class='field'><strong>📌 Sujet :</strong> <span class='badge'>$sujet</span></div>
                            <div style='margin-top: 20px;'>
                                <strong>📝 Message :</strong>
                                <div class='message-box'>" . nl2br($message) . "</div>
                            </div>
                            <div class='footer'>
                                <p>🌍 Abomey-Calavi, Bénin | 📅 " . date('d/m/Y à H:i') . "</p>
                                <p>© 2026 KASS DEV SOLUTIONS+</p>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
                    
                    $bodyText = "
========================================
📩 NOUVEAU MESSAGE DU SITE
========================================

👤 Nom : $nom
📧 Email : $email
📞 Téléphone : " . ($telephone ?: 'Non renseigné') . "
📌 Sujet : $sujet

----------------------------------------
📝 MESSAGE :
----------------------------------------
$message

----------------------------------------
🌍 Localisation : Abomey-Calavi, Bénin
📅 Date : " . date('d/m/Y à H:i') . "
========================================
                    ";
                    
                    $mail->Body = $bodyHTML;
                    $mail->AltBody = $bodyText;
                    
                    $mail->send();
                    
                    $message_status = [
                        'success' => true,
                        'message' => '✅ Message envoyé avec succès ! Nous vous répondrons dans les 24h.'
                    ];
                    
                } catch (Exception $e) {
                    $message_status = [
                        'success' => false,
                        'message' => '❌ Erreur : ' . $mail->ErrorInfo
                    ];
                }
            }
        }
        ?>

        <!-- ===== AFFICHAGE DES MESSAGES ===== -->
        <?php if ($message_status !== null): ?>
            <?php if ($message_status['success']): ?>
                <div style="background: #27ae60; color: white; padding: 20px 30px; border-radius: 12px; margin-bottom: 40px; text-align: center; box-shadow: 0 4px 20px rgba(39,174,96,0.3);">
                    <i class="fas fa-check-circle" style="font-size: 1.5rem; margin-right: 12px;"></i>
                    <strong><?php echo $message_status['message']; ?></strong>
                </div>
            <?php else: ?>
                <div style="background: #e74c3c; color: white; padding: 20px 30px; border-radius: 12px; margin-bottom: 40px; text-align: center; box-shadow: 0 4px 20px rgba(231,76,60,0.3);">
                    <i class="fas fa-exclamation-circle" style="font-size: 1.5rem; margin-right: 12px;"></i>
                    <strong><?php echo $message_status['message']; ?></strong>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- ===== FORMULAIRE + INFOS ===== -->
        <div class="contact-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <!-- ===== FORMULAIRE ===== -->
            <div class="contact-form animate-up">
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--text); margin-bottom: 10px;">Envoyez-nous <span style="color: var(--rouge);">un message</span></h2>
                <p style="color: var(--text-light); margin-bottom: 30px;">Remplissez le formulaire et nous vous répondrons rapidement.</p>
                
                <form method="POST" action="">
                    <div class="form-row-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="font-weight: 600; display: block; margin-bottom: 8px; color: var(--text);">
                                Nom complet <span style="color: var(--rouge);">*</span>
                            </label>
                            <input type="text" name="nom" required 
                                   style="width: 100%; padding: 14px 18px; border: 2px solid var(--border); border-radius: 12px; font-size: 1rem; background: var(--bg); color: var(--text); transition: var(--transition);" 
                                   onfocus="this.style.borderColor='var(--rouge)'" 
                                   onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div>
                            <label style="font-weight: 600; display: block; margin-bottom: 8px; color: var(--text);">
                                Email <span style="color: var(--rouge);">*</span>
                            </label>
                            <input type="email" name="email" required 
                                   style="width: 100%; padding: 14px 18px; border: 2px solid var(--border); border-radius: 12px; font-size: 1rem; background: var(--bg); color: var(--text); transition: var(--transition);"
                                   onfocus="this.style.borderColor='var(--rouge)'" 
                                   onblur="this.style.borderColor='var(--border)'">
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <label style="font-weight: 600; display: block; margin-bottom: 8px; color: var(--text);">
                            Téléphone <span style="color: var(--rouge);">*</span>
                        </label>
                        <input type="tel" name="telephone" required
                               style="width: 100%; padding: 14px 18px; border: 2px solid var(--border); border-radius: 12px; font-size: 1rem; background: var(--bg); color: var(--text); transition: var(--transition);"
                               onfocus="this.style.borderColor='var(--rouge)'" 
                               onblur="this.style.borderColor='var(--border)'" placeholder="01 66 56 16 92">
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <label style="font-weight: 600; display: block; margin-bottom: 8px; color: var(--text);">
                            Sujet <span style="color: var(--rouge);">*</span>
                        </label>
                        <select name="sujet" required 
                                style="width: 100%; padding: 14px 18px; border: 2px solid var(--border); border-radius: 12px; font-size: 1rem; background: var(--bg); color: var(--text); transition: var(--transition); cursor: pointer;"
                                onfocus="this.style.borderColor='var(--rouge)'" 
                                onblur="this.style.borderColor='var(--border)'">
                            <option value="">-- Choisissez un sujet --</option>
                            <option value="Devis">📊 Demande de devis</option>
                            <option value="Site web">🌐 Création de site web</option>
                            <option value="Application mobile">📱 Application mobile</option>
                            <option value="Maintenance">🔧 Maintenance informatique</option>
                            <option value="Graphisme">🎨 Graphisme / Design</option>
                            <option value="Recrutement">💼 Candidature / Recrutement</option>
                            <option value="Autre">📝 Autre</option>
                        </select>
                    </div>
                    
                    <div style="margin-bottom: 25px;">
                        <label style="font-weight: 600; display: block; margin-bottom: 8px; color: var(--text);">
                            Message <span style="color: var(--rouge);">*</span>
                        </label>
                        <textarea name="message" rows="6" required 
                                  style="width: 100%; padding: 14px 18px; border: 2px solid var(--border); border-radius: 12px; font-size: 1rem; resize: vertical; background: var(--bg); color: var(--text); transition: var(--transition); font-family: inherit;"
                                  onfocus="this.style.borderColor='var(--rouge)'" 
                                  onblur="this.style.borderColor='var(--border)'" 
                                  placeholder="Décrivez votre projet, votre demande ou votre question..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 16px; font-size: 1.1rem; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <i class="fas fa-paper-plane"></i> Envoyer le message
                    </button>
                    
                    <p style="color: var(--text-light); font-size: 0.85rem; text-align: center; margin-top: 15px;">
                        <i class="fas fa-lock" style="margin-right: 5px;"></i> 
                        Vos données sont confidentielles et ne seront pas partagées.
                    </p>
                </form>
            </div>
            
            <!-- ===== INFOS CONTACT ===== -->
            <div class="contact-info animate-up-delay">
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--text); margin-bottom: 10px;">Nos <span style="color: var(--rouge);">coordonnées</span></h2>
                <p style="color: var(--text-light); margin-bottom: 30px;">N'hésitez pas à nous contacter directement.</p>
                
                <div class="info-card" style="background: var(--bg-secondary); border-radius: 20px; padding: 35px; box-shadow: var(--shadow);">
                    <div style="display: flex; align-items: center; gap: 18px; padding: 15px 0; border-bottom: 1px solid var(--border);">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--rouge), var(--rouge-doux)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-envelope" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <p style="font-size: 0.85rem; color: var(--text-light); font-weight: 600;">Email</p>
                            <a href="mailto:kassdev14@gmail.com" style="color: var(--text); font-weight: 600; transition: var(--transition);" onmouseover="this.style.color='var(--rouge)'" onmouseout="this.style.color='var(--text)'">
                                kassdev14@gmail.com
                            </a>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 18px; padding: 15px 0; border-bottom: 1px solid var(--border);">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--rouge), var(--rouge-doux)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-phone" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <p style="font-size: 0.85rem; color: var(--text-light); font-weight: 600;">Téléphone</p>
                            <a href="tel:+2290166561692" style="color: var(--text); font-weight: 600; transition: var(--transition);" onmouseover="this.style.color='var(--rouge)'" onmouseout="this.style.color='var(--text)'">
                                +229 01 66 56 16 92
                            </a>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 18px; padding: 15px 0; border-bottom: 1px solid var(--border);">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--rouge), var(--rouge-doux)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-map-marker-alt" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <p style="font-size: 0.85rem; color: var(--text-light); font-weight: 600;">Adresse</p>
                            <p style="color: var(--text); font-weight: 600;">Abomey-Calavi, Bénin</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 18px; padding: 15px 0;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--rouge), var(--rouge-doux)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-clock" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <p style="font-size: 0.85rem; color: var(--text-light); font-weight: 600;">Horaires</p>
                            <p style="color: var(--text); font-weight: 600;">Lun - Ven : 9h - 18h (GMT+1)</p>
                        </div>
                    </div>
                </div>
                
                <!-- ===== RÉSEAUX SOCIAUX ===== -->
                <div class="info-card" style="margin-top: 30px; background: var(--bg-secondary); border-radius: 20px; padding: 25px 35px; box-shadow: var(--shadow);">
                    <p style="font-weight: 600; color: var(--text); margin-bottom: 15px; text-align: center;">Suivez-nous sur les réseaux</p>
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <a href="https://www.facebook.com/share/1DEsLVPT5C/" style="width: 50px; height: 50px; border-radius: 50%; background: var(--bg); color: var(--text); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; transition: var(--transition); box-shadow: var(--shadow);" onmouseover="this.style.background='#1877f2'; this.style.color='white'; this.style.transform='translateY(-5px)'" onmouseout="this.style.background='var(--bg)'; this.style.color='var(--text)'; this.style.transform='translateY(0)'">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://vt.tiktok.com/ZSCoK5ypj/" style="width: 50px; height: 50px; border-radius: 50%; background: var(--bg); color: var(--text); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; transition: var(--transition); box-shadow: var(--shadow);" onmouseover="this.style.background='#0a66c2'; this.style.color='white'; this.style.transform='translateY(-5px)'" onmouseout="this.style.background='var(--bg)'; this.style.color='var(--text)'; this.style.transform='translateY(0)'">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        
                        <a href="https://wa.me/22966561692" style="width: 50px; height: 50px; border-radius: 50%; background: var(--bg); color: var(--text); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; transition: var(--transition); box-shadow: var(--shadow);" onmouseover="this.style.background='#25D366'; this.style.color='white'; this.style.transform='translateY(-5px)'" onmouseout="this.style.background='var(--bg)'; this.style.color='var(--text)'; this.style.transform='translateY(0)'">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CARTE GOOGLE MAPS - ABOMEY-CALAVI ===== -->
<section class="contact-map" style="padding: 0 0 80px 0; background: var(--bg);">
    <div class="container">
        <div style="background: var(--bg-secondary); border-radius: 24px; overflow: hidden; box-shadow: var(--shadow); border: 1px solid var(--border);">
            <div style="padding: 30px 40px; background: var(--bg); border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                <div>
                    <h3 style="font-size: 1.3rem; color: var(--text);">
                        <i class="fas fa-map-marker-alt" style="color: var(--rouge); margin-right: 10px;"></i>
                        📍 Abomey-Calavi, Bénin
                    </h3>
                    <p style="color: var(--text-light); margin-top: 5px;">Retrouvez-nous sur Google Maps</p>
                </div>
                <a href="https://www.google.com/maps/search/Abomey-Calavi+Bénin/@6.4541,2.3658,13z" target="_blank" class="btn-primary" style="padding: 12px 25px; font-size: 0.9rem;">
                    <i class="fas fa-external-link-alt"></i> Ouvrir dans Google Maps
                </a>
            </div>
            
            <!-- ===== IFRAME GOOGLE MAPS ===== -->
            <div style="width: 100%; height: 450px; background: #e8ecf1;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63406.28631832717!2d2.3023455146484377!3d6.454102000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a2f2a5b7c3b1%3A0x5b7c3b1a2f2a5b7c!2sAbomey-Calavi%2C%20B%C3%A9nin!5e0!3m2!1sfr!2sfr!4v1700000000000" 
                    width="100%" 
                    height="450" 
                    style="border:0; display: block;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-section" style="padding: 80px 0; background: var(--bleu-nuit); border-top: 3px solid var(--rouge); border-bottom: 3px solid var(--rouge);">
    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 15px;">Besoin d'une réponse <span style="color: var(--rouge-doux);">rapide</span> ?</h2>
            <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8); margin-bottom: 30px;">Appelez-nous directement ou envoyez-nous un email, nous vous répondons sous 24h.</p>
            <div class="cta-buttons" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+2290166561692" class="btn-primary"><i class="fas fa-phone"></i> +229 01 66 56 16 92</a>
                <a href="mailto:kassdev14@gmail.com" class="btn-secondary"><i class="fas fa-envelope"></i> kassdev14@gmail.com</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>