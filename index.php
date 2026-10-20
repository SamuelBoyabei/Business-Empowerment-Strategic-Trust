<?php include('ads.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Marketing Agency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="container header-flex">
            <a href="#" class="logo">Apex<span>Marketing</span></a>
            <nav>
                <a href="#services">Services</a>
                <a href="#promo">Current Offer</a>
                <a href="#contact" class="btn-nav">Get in Touch</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="services">
        <div class="container">
            <h1>Data-Driven Marketing That Scales Your Brand</h1>
            <p>We blend creative strategy with performance analytics to help your business acquire more customers.</p>
        </div>
    </section>

    <!-- Dynamic Advertising Section (Changes on Refresh) -->
    <section class="promo-section" id="promo">
        <div class="container grid-2">
            <div class="promo-image">
                <img src="<?php echo $current_ad['image']; ?>" alt="<?php echo htmlspecialchars($current_ad['title']); ?>">
            </div>
            <div class="promo-text">
                <span class="badge">Limited Time Offer</span>
                <h2><?php echo $current_ad['title']; ?></h2>
                <p><?php echo $current_ad['desc']; ?></p>
                <a href="#contact" class="btn-primary">Claim This Offer Now</a>
            </div>
        </div>
    </section>

    <!-- Contact & Lead Generation Links Section -->
    <section class="contact-section" id="contact">
        <div class="container text-center">
            <h2>Ready to Start Your Project?</h2>
            <p>Connect with our strategy team instantly through the channels below.</p>
            
            <div class="contact-buttons">
                <!-- WhatsApp Link (Launches app or web client with pre-filled message) -->
                <a href="https://wa.me!" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn-contact whatsapp">
                   Chat via WhatsApp
                </a>

                <!-- Email Link (Launches local email client with Subject line preset) -->
                <a href="mailto:info@://yourmarketingagency.com" 
                   class="btn-contact email">
                   Send an Email
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Apex Marketing Agency. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>