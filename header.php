<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASS DEV SOLUTIONS+ - Expert en Solutions Digitales</title>
    
    <!-- ===== SEO META ===== -->
    <meta name="description" content="KASS DEV SOLUTIONS+ : Applications web & mobile, maintenance informatique et graphisme. Création de sites vitrines, apps sur mesure, design et branding.">
    <meta name="keywords" content="développement web, applications mobiles, maintenance informatique, graphisme, création site vitrine, KASS DEV SOLUTIONS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://kassdev.com/">
    
    <!-- ===== OPEN GRAPH ===== -->
    <meta property="og:title" content="KASS DEV SOLUTIONS+ - Expert en Solutions Digitales">
    <meta property="og:description" content="Applications web & mobile, maintenance informatique, graphisme. Des solutions sur mesure pour votre entreprise.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kassdev.com/">
    <meta property="og:image" content="https://kassdev.com/images/logo.png">
    
    <!-- ===== TWITTER CARD ===== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KASS DEV SOLUTIONS+ - Expert en Solutions Digitales">
    <meta name="twitter:description" content="Applications web & mobile, maintenance informatique, graphisme. Des solutions sur mesure pour votre entreprise.">
    
    <!-- ===== SCHEMA.ORG ===== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "KASS DEV SOLUTIONS+",
        "url": "https://kassdev.com",
        "logo": "https://kassdev.com/images/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+2290166561692",
            "contactType": "sales",
            "email": "kassdev14@gmail.com"
        }
    }
    </script>
    
    <!-- ===== STYLES ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- ===== DÉTECTION PAGE ACTIVE ===== -->
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
</head>
<body>

<!-- ===== HEADER ===== -->
<header>
    <div class="container">
        <div class="logo">
            <img src="images/logo.png" alt="KASS DEV SOLUTIONS+ Logo">
            <h1>KASS <span>DEV</span> </h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>Accueil</a></li>
                <li><a href="services.php" <?php echo ($current_page == 'services.php') ? 'class="active"' : ''; ?>>Services</a></li>
                <li><a href="portfolio.php" <?php echo ($current_page == 'portfolio.php') ? 'class="active"' : ''; ?>>Réalisations</a></li>
                <li><a href="about.php" <?php echo ($current_page == 'about.php') ? 'class="active"' : ''; ?>>À propos</a></li>
                <li><a href="contact.php" <?php echo ($current_page == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <button id="darkModeToggle" aria-label="Basculer le mode sombre">
                <i class="fas fa-moon"></i>
            </button>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>