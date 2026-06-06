<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $page_title_full = (isset($page_title) ? $page_title . ' | ' : '') . 'Best Digital Marketing Agency in Ahmedabad, India';
    $page_desc = $page_description ?? SITE_DESCRIPTION;
    $canonical_url = $canonical_url ?? SITE_URL;
    $og_image = SITE_OG_IMAGE;
    ?>

    <title><?= htmlspecialchars($page_title_full) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="keywords" content="digital marketing agency, digital marketing advertising agency, digital marketing services, digital marketing agency near me, digital marketing company, SEO services Ahmedabad, Google Ads agency Ahmedabad, social media marketing Ahmedabad">
    <meta name="author" content="Anprix Solutions">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title_full) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title_full) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta name="twitter:site" content="<?= htmlspecialchars(SITE_TWITTER_HANDLE) ?>">

    <!-- Icons -->
    <link rel="icon" type="image/png" href="<?= SITE_URL ?>/assets/images/anprix-logo.png">
    <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/images/anprix-logo.png">
    <meta name="theme-color" content="#050505">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Schemas -->
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Organization",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "logo":"<?= SITE_URL; ?>/assets/images/anprix-logo.png",
      "description":"<?= SITE_DESCRIPTION; ?>",
      "email":"<?= SITE_EMAIL; ?>",
      "telephone":"<?= SITE_PHONE; ?>",
      "address":{
        "@type":"PostalAddress",
        "addressLocality":"Gandhinagar",
        "addressRegion":"Gujarat",
        "addressCountry":"IN"
      },
      "sameAs":[
        "<?= SOCIAL_FACEBOOK; ?>",
        "<?= SOCIAL_TWITTER; ?>",
        "<?= SOCIAL_LINKEDIN; ?>",
        "<?= SOCIAL_INSTAGRAM; ?>"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebSite",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "description":"<?= SITE_DESCRIPTION; ?>"
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"LocalBusiness",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "image":"<?= SITE_URL; ?>/assets/images/anprix-logo.png",
      "description":"<?= SITE_DESCRIPTION; ?>",
      "email":"<?= SITE_EMAIL; ?>",
      "telephone":"<?= SITE_PHONE; ?>",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"21 Info city",
        "addressLocality":"Gandhinagar",
        "addressRegion":"Gujarat",
        "postalCode":"382421",
        "addressCountry":"IN"
      },
      "openingHoursSpecification":[
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Monday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Tuesday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Wednesday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Thursday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Friday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Saturday","opens":"10:00","closes":"16:00"}
      ]
    }
    </script>

</head>
<body>

<!-- HEADER -->
<!-- HEADER -->
<header class="fixed top-0 left-0 w-full z-50 bg-black/80 backdrop-blur-lg border-b border-white/5">
    
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- LOGO -->
        <div class="flex items-center gap-4">
            <a href="<?php echo SITE_URL; ?>">
                <img src="<?php echo SITE_URL; ?>/assets/images/anprix-logo.png"
                    alt="Anprix Logo"
                    class="h-14 w-auto" />
            </a>
        </div>

        <!-- DESKTOP MENU -->
        <nav class="hidden md:flex items-center gap-6 lg:gap-10 text-gray-300 font-medium">

            <a href="index.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-[#00ffb3]' : ''; ?>">
                Home
            </a>

            <a href="services.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'text-[#00ffb3]' : ''; ?>">
                Services
            </a>

            <a href="portfolio.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'text-[#00ffb3]' : ''; ?>">
                Portfolio
            </a>

            <a href="team.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'team.php' ? 'text-[#00ffb3]' : ''; ?>">
                Team
            </a>

            <a href="contact.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-[#00ffb3]' : ''; ?>">
                Contact
            </a>

        </nav>

        <!-- RIGHT SIDE -->
        <div class="flex items-center gap-4">

            <!-- DESKTOP BUTTON -->
            <button class="hidden md:block btn-primary px-6 py-3 rounded-xl shadow-2xl"
                    onclick="window.location.href='hire.php'">
                Hire Us
            </button>

            <!-- MOBILE MENU BUTTON -->
            <button id="mobileMenuBtn"
                    class="md:hidden btn-primary p-3 rounded-xl flex items-center justify-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </button>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="hidden md:hidden bg-black/95 border-t border-white/10 backdrop-blur-xl">

        <div class="flex flex-col p-6 gap-5 text-gray-300 font-medium">

            <a href="index.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-[#00ffb3]' : ''; ?>">
                Home
            </a>

            <a href="services.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'text-[#00ffb3]' : ''; ?>">
                Services
            </a>

            <a href="portfolio.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'text-[#00ffb3]' : ''; ?>">
                Portfolio
            </a>

            <a href="team.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'team.php' ? 'text-[#00ffb3]' : ''; ?>">
                Team
            </a>

            <a href="contact.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-[#00ffb3]' : ''; ?>">
                Contact
            </a>

            <!-- MOBILE BUTTON -->
            <button class="btn-primary px-6 py-3 rounded-xl mt-4"
                    onclick="window.location.href='contact.php'">
                Hire Us
            </button>

        </div>

    </div>

</header>