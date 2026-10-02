<?php
// ===== CHARGEMENT AUTO DE COMPOSER =====
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// ===== ENVOI AVEC PHPMailer =====
try {
    $mail = new PHPMailer(true);
    
    // ===== CONFIGURATION SMTP =====
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kassdev14@gmail.com';
    $mail->Password = 'rqzo tbcz ilgx qnou';  // Ton mot de passe applicatif
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // "ssl" (plus stable que TLS)
    $mail->Port = 465;
    $mail->SMTPDebug = 0; // 0 = pas de debug, 2 = pour tester
    
    // ===== DÉSACTIVER VÉRIFICATION SSL (pour éviter les erreurs) =====
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    // ===== EXPÉDITEUR ET DESTINATAIRE =====
    $mail->setFrom('kassdev14@gmail.com', 'KASS DEV SOLUTIONS+');
    $mail->addReplyTo($email, $nom);
    $mail->addAddress('kassdev14@gmail.com', 'KASS DEV SOLUTIONS+');
    
    // ===== CONTENU =====
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "📩 Nouveau message - $sujet - KASS DEV SOLUTIONS+";
    
    // Corps HTML (joli)
    $bodyHTML = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background: #f5f7fa; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
            .header { background: linear-gradient(135deg, #0F1A3A, #1A2A6C); color: white; padding: 20px; border-radius: 12px 12px 0 0; text-align: center; margin: -30px -30px 20px -30px; }
            .header h2 { margin: 0; }
            .field { padding: 10px 0; border-bottom: 1px solid #eee; }
            .field strong { color: #1A2A6C; display: inline-block; width: 120px; }
            .message-box { background: #f5f7fa; padding: 15px; border-radius: 8px; margin-top: 10px; }
            .footer { text-align: center; color: #888; font-size: 12px; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; }
            .badge { display: inline-block; background: #DC3545; color: white; padding: 3px 12px; border-radius: 50px; font-size: 12px; }
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
    
    // Version texte (pour les clients qui ne supportent pas HTML)
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
    
    echo json_encode([
        'success' => true,
        'message' => '✅ Message envoyé avec succès ! Nous vous répondrons dans les 24h.'
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => '❌ Erreur : ' . $mail->ErrorInfo
    ]);
}
?>