<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>
        <?= isset($page_title)
            ? $page_title . ' | Best Digital Marketing Agency in Ahmedabad, India'
            : 'Best Digital Marketing Agency in Ahmedabad, India'; ?>
    </title>

    <meta name="description"
        content="Anprix Solutions is a digital marketing agency in Ahmedabad offering SEO, Google Ads, social media marketing, website development, Shopify solutions, and growth-focused digital marketing services.">

    <meta name="keywords"
        content="digital marketing agency, digital marketing advertising agency, digital marketing services, digital marketing agency near me, digital marketing company, SEO services Ahmedabad, Google Ads agency Ahmedabad, social media marketing Ahmedabad">

    <meta name="author" content="Anprix Solutions">

    <!-- Canonical -->
    <link rel="canonical" href="<?= SITE_URL; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best Digital Marketing Agency in Ahmedabad, India">
    <meta property="og:description"
        content="Grow your business with SEO, Google Ads, social media marketing, website development and digital marketing services.">
    <meta property="og:url" content="<?= SITE_URL; ?>">
    <meta property="og:site_name" content="<?= SITE_NAME; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Digital Marketing Agency in Ahmedabad, India">
    <meta name="twitter:description"
        content="Digital marketing services, SEO, Google Ads and website development for business growth.">

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

    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"LocalBusiness",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "description":"Digital Marketing Agency in Ahmedabad providing SEO, Google Ads, Social Media Marketing, Website Development and Shopify Solutions.",
      "address":{
        "@type":"PostalAddress",
        "addressLocality":"Ahmedabad",
        "addressRegion":"Gujarat",
        "addressCountry":"IN"
      }
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
        <nav class="hidden md:flex items-center gap-10 text-gray-300 font-medium">

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