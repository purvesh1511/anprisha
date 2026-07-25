<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $page_title_full = $seo_title ?? (isset($page_title) ? $page_title . ' | ' : '') . 'Best Digital Marketing Agency in Ahmedabad, India';
    $page_desc = $page_description ?? SITE_DESCRIPTION;
    $page_kw = $page_keywords ?? '';
    $canonical_url = $canonical_url ?? SITE_URL;
    $og_image = SITE_OG_IMAGE;
    ?>

    <title><?= htmlspecialchars($page_title_full) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <?php if (!empty($page_kw)): ?>
    <meta name="keywords" content="<?= htmlspecialchars($page_kw) ?>">
    <?php endif; ?>
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
    <meta property="og:locale" content="en_IN">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title_full) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta name="twitter:site" content="<?= htmlspecialchars(SITE_TWITTER_HANDLE) ?>">

    <!-- Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL ?>/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/images/apple-touch-icon.png">
    <meta name="theme-color" content="#050505">

    <!-- Preconnect for third-party origins -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://code.jquery.com">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Schemas -->
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Organization",
      "@id":"<?= SITE_URL; ?>/#organization",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "logo":"<?= SITE_URL; ?>/assets/images/anprix-logo.webp",
      "description":"<?= SITE_DESCRIPTION; ?>",
      "contactPoint":{
        "@type":"ContactPoint",
        "email":"<?= SITE_EMAIL; ?>",
        "telephone":"<?= SITE_PHONE; ?>",
        "contactType":"customer service"
      },
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"A-304, Shubh city height",
        "addressLocality":"Gandhinagar",
        "addressRegion":"Gujarat",
        "postalCode":"382421",
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
      "@id":"<?= SITE_URL; ?>/#website",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "description":"<?= SITE_DESCRIPTION; ?>"
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Service",
      "@id":"<?= SITE_URL; ?>/#service",
      "name":"Anprix Digital Services",
      "description":"Full-service digital marketing agency offering SEO, Google Ads, social media marketing, website development, Shopify solutions, and growth-focused digital marketing services.",
      "provider":{
        "@id":"<?= SITE_URL; ?>/#organization"
      },
      "serviceType":["SEO","Google Ads","Social Media Marketing","Website Development","Shopify Development"],
      "areaServed":{
        "@type":"Country",
        "name":"India"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"LocalBusiness",
      "@id":"<?= SITE_URL; ?>/#localbusiness",
      "name":"Anprix Solutions",
      "url":"<?= SITE_URL; ?>",
      "image":"<?= SITE_URL; ?>/assets/images/anprix-logo.webp",
      "description":"<?= SITE_DESCRIPTION; ?>",
      "telephone":"<?= SITE_PHONE; ?>",
      "priceRange":"$$",
      "contactPoint":{
        "@type":"ContactPoint",
        "email":"<?= SITE_EMAIL; ?>",
        "contactType":"customer service"
      },
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"A-304, Shubh city height",
        "addressLocality":"Gandhinagar",
        "addressRegion":"Gujarat",
        "postalCode":"382421",
        "addressCountry":"IN"
      },
      "openingHours":"Mo-Fr 09:00-18:00,Sa 10:00-16:00",
      "openingHoursSpecification":[
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Monday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Tuesday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Wednesday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Thursday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Friday","opens":"09:00","closes":"18:00"},
        {"@type":"OpeningHoursSpecification","dayOfWeek":"Saturday","opens":"10:00","closes":"16:00"}
      ],
      "aggregateRating":{
        "@type":"AggregateRating",
        "ratingValue":4.9,
        "reviewCount":85,
        "bestRating":5
      }
    }
    </script>

</head>
<body>

<?php
$service_pages = ['services.php', 'website-development.php', 'wordpress-development.php', 'ecommerce-development.php', 'website-redesign.php', 'cms-development.php', 'seo.php', 'digital-marketing.php', 'social-media-marketing.php', 'advertising.php', 'branding-creative.php'];
$is_service_page = in_array(basename($_SERVER['PHP_SELF']), $service_pages);
?>

<!-- HEADER -->
<header class="fixed top-0 left-0 w-full z-50 bg-black/80 backdrop-blur-lg border-b border-white/5">
    
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- LOGO -->
        <div class="flex items-center gap-4">
            <a href="<?php echo SITE_URL; ?>">
                <img src="<?php echo SITE_URL; ?>/assets/images/anprix-logo.webp"
                    alt="Anprix Logo" width="140" height="56"
                    class="h-12 sm:h-14 w-auto max-w-[140px] sm:max-w-none" />
            </a>
        </div>

        <!-- DESKTOP MENU -->
        <nav class="hidden md:flex items-center gap-6 lg:gap-10 text-gray-300 font-medium">

            <a href="index.php"
               class="hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-[#00ffb3]' : ''; ?>">
                Home
            </a>

            <!-- SERVICES MEGA MENU TRIGGER -->
            <div class="relative" id="servicesWrapper">
                <a href="services.php" id="servicesTrigger"
                   class="flex items-center gap-1.5 hover:text-[#00ffb3] transition <?php echo $is_service_page ? 'text-[#00ffb3]' : ''; ?>">
                    Services
                    <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-200" id="servicesArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
            </div>

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
                    class="md:hidden btn-primary p-3 rounded-xl flex items-center justify-center relative w-12 h-12"
                    aria-label="Toggle navigation menu">
                <svg id="menuIconHamburger" class="h-6 w-6 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menuIconClose" class="h-6 w-6 transition-all duration-300 absolute inset-0 m-auto hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>

    </div>

    <!-- MEGA MENU PANEL (fixed full-width, JS controlled) -->
    <div id="megaMenu" class="fixed left-0 w-full z-40 opacity-0 invisible pointer-events-none transition-all duration-300" style="top: 100%;">
        <div class="border-t border-white/10" style="background: rgba(8,8,8,0.97); backdrop-filter: blur(24px); box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
            <div class="max-w-7xl mx-auto px-6 py-8">

                <!-- 4-COLUMN GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- COL 1: Development -->
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-5 hover:border-[#00ffb3]/30 transition-all duration-300 group/card">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code text-[#00ffb3] text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[#00ffb3] font-bold text-sm">Development</p>
                                <p class="text-gray-600 text-[10px]">Web & CMS Solutions</p>
                            </div>
                        </div>
                        <ul class="space-y-1">
                            <li><a href="website-development.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'website-development.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-globe text-[10px] text-gray-600 w-3"></i> Website Development</a></li>
                            <li><a href="wordpress-development.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'wordpress-development.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fab fa-wordpress text-[10px] text-gray-600 w-3"></i> WordPress Development</a></li>
                            <li><a href="ecommerce-development.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'ecommerce-development.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-shopping-cart text-[10px] text-gray-600 w-3"></i> eCommerce Development</a></li>
                            <li><a href="cms-development.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'cms-development.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-database text-[10px] text-gray-600 w-3"></i> CMS Development</a></li>
                            <li><a href="website-redesign.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'website-redesign.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-palette text-[10px] text-gray-600 w-3"></i> Website Redesign</a></li>
                        </ul>
                    </div>

                    <!-- COL 2: SEO -->
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-5 hover:border-[#00b7ff]/30 transition-all duration-300 group/card">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-search text-[#00b7ff] text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[#00b7ff] font-bold text-sm">SEO</p>
                                <p class="text-gray-600 text-[10px]">Search Engine Optimization</p>
                            </div>
                        </div>
                        <ul class="space-y-1">
                            <li><a href="seo.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'seo.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-chart-line text-[10px] text-gray-600 w-3"></i> SEO Services</a></li>
                            <li><a href="seo.php#local" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-map-marker-alt text-[10px] text-gray-600 w-3"></i> Local SEO</a></li>
                            <li><a href="seo.php#onpage" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-cogs text-[10px] text-gray-600 w-3"></i> Technical SEO</a></li>
                            <li><a href="seo.php#onpage" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-file-alt text-[10px] text-gray-600 w-3"></i> On-Page SEO</a></li>
                            <li><a href="seo.php#linkbuilding" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-link text-[10px] text-gray-600 w-3"></i> Link Building</a></li>
                        </ul>
                    </div>

                    <!-- COL 3: Marketing -->
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-5 hover:border-[#00ffb3]/30 transition-all duration-300 group/card">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-bullhorn text-[#00ffb3] text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[#00ffb3] font-bold text-sm">Marketing</p>
                                <p class="text-gray-600 text-[10px]">Digital & Social Media</p>
                            </div>
                        </div>
                        <ul class="space-y-1">
                            <li><a href="digital-marketing.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'digital-marketing.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-rocket text-[10px] text-gray-600 w-3"></i> Digital Marketing</a></li>
                            <li><a href="social-media-marketing.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'social-media-marketing.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-share-alt text-[10px] text-gray-600 w-3"></i> Social Media Marketing</a></li>
                            <li><a href="advertising.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'advertising.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fab fa-google text-[10px] text-gray-600 w-3"></i> Google Ads & PPC</a></li>
                            <li><a href="social-media-marketing.php#paid" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-ad text-[10px] text-gray-600 w-3"></i> Paid Social Ads</a></li>
                            <li><a href="digital-marketing.php#email" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-envelope text-[10px] text-gray-600 w-3"></i> Email Marketing</a></li>
                        </ul>
                    </div>

                    <!-- COL 4: Branding -->
                    <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-5 hover:border-[#00b7ff]/30 transition-all duration-300 group/card">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-paint-brush text-[#00b7ff] text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[#00b7ff] font-bold text-sm">Branding</p>
                                <p class="text-gray-600 text-[10px]">Creative & Identity</p>
                            </div>
                        </div>
                        <ul class="space-y-1">
                            <li><a href="branding-creative.php" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition <?php echo basename($_SERVER['PHP_SELF']) == 'branding-creative.php' ? 'text-white bg-white/5' : ''; ?>"><i class="fas fa-star text-[10px] text-gray-600 w-3"></i> Branding & Creative</a></li>
                            <li><a href="branding-creative.php#logo" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-bezier-curve text-[10px] text-gray-600 w-3"></i> Logo Design</a></li>
                            <li><a href="branding-creative.php#logo" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-id-badge text-[10px] text-gray-600 w-3"></i> Brand Identity</a></li>
                            <li><a href="branding-creative.php#strategy" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white py-1.5 px-2 rounded-lg hover:bg-white/5 transition"><i class="fas fa-lightbulb text-[10px] text-gray-600 w-3"></i> Creative Strategy</a></li>
                        </ul>
                    </div>

                </div>

                <!-- BOTTOM BAR -->
                <div class="flex items-center justify-between mt-6 pt-5 border-t border-white/5">
                    <p class="text-gray-600 text-xs">End-to-end digital solutions for your business</p>
                    <a href="services.php" class="text-xs font-semibold text-[#00ffb3] hover:text-white flex items-center gap-1.5 transition">
                        View All Services
                        <i class="fas fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="hidden md:hidden bg-black/95 border-t border-white/10 backdrop-blur-xl overflow-y-auto" style="max-height: calc(100vh - 76px);">

        <div class="flex flex-col p-6 gap-4 text-gray-300 font-medium">

            <a href="index.php"
               class="py-2 hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-[#00ffb3]' : ''; ?>">
                Home
            </a>

            <!-- MOBILE SERVICES ACCORDION -->
            <div class="border-b border-white/5 pb-2">
                <button id="mobileServicesBtn"
                        class="w-full flex items-center justify-between py-2 hover:text-[#00ffb3] transition <?php echo $is_service_page ? 'text-[#00ffb3]' : ''; ?>">
                    <span>Services</span>
                    <svg class="arrow w-4 h-4 transition-transform duration-300 <?php echo $is_service_page ? 'rotate-180' : ''; ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobileServicesPanel" class="mt-2 space-y-1 text-sm text-gray-300 <?php echo $is_service_page ? '' : 'hidden'; ?>">

                    <!-- Development Group -->
                    <div class="bg-white/[0.03] rounded-xl p-3 mt-3">
                        <p class="text-[#00ffb3] font-semibold text-xs uppercase tracking-wider pb-2"><i class="fas fa-code mr-1.5"></i>Development</p>
                        <a href="website-development.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'website-development.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Website Development</a>
                        <a href="wordpress-development.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'wordpress-development.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">WordPress Development</a>
                        <a href="ecommerce-development.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'ecommerce-development.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">eCommerce Development</a>
                        <a href="cms-development.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'cms-development.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">CMS Development</a>
                        <a href="website-redesign.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'website-redesign.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Website Redesign</a>
                    </div>

                    <!-- SEO Group -->
                    <div class="bg-white/[0.03] rounded-xl p-3">
                        <p class="text-[#00b7ff] font-semibold text-xs uppercase tracking-wider pb-2"><i class="fas fa-search mr-1.5"></i>SEO</p>
                        <a href="seo.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'seo.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">SEO Services</a>
                        <a href="seo.php#local" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition">Local SEO</a>
                        <a href="seo.php#onpage" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition">Technical SEO</a>
                        <a href="seo.php#linkbuilding" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition">Link Building</a>
                    </div>

                    <!-- Marketing Group -->
                    <div class="bg-white/[0.03] rounded-xl p-3">
                        <p class="text-[#00ffb3] font-semibold text-xs uppercase tracking-wider pb-2"><i class="fas fa-bullhorn mr-1.5"></i>Marketing</p>
                        <a href="digital-marketing.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'digital-marketing.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Digital Marketing</a>
                        <a href="social-media-marketing.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'social-media-marketing.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Social Media Marketing</a>
                        <a href="advertising.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'advertising.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Google Ads & PPC</a>
                    </div>

                    <!-- Branding Group -->
                    <div class="bg-white/[0.03] rounded-xl p-3">
                        <p class="text-[#00b7ff] font-semibold text-xs uppercase tracking-wider pb-2"><i class="fas fa-paint-brush mr-1.5"></i>Branding</p>
                        <a href="branding-creative.php" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition <?php echo basename($_SERVER['PHP_SELF']) == 'branding-creative.php' ? 'text-[#00ffb3] bg-white/5' : ''; ?>">Branding & Creative</a>
                        <a href="branding-creative.php#logo" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition">Logo Design</a>
                        <a href="branding-creative.php#strategy" class="block py-2 px-3 rounded-lg hover:text-[#00ffb3] hover:bg-white/10 transition">Creative Strategy</a>
                    </div>

                </div>
            </div>

            <a href="portfolio.php"
               class="py-2 hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'text-[#00ffb3]' : ''; ?>">
                Portfolio
            </a>

            <a href="team.php"
               class="py-2 hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'team.php' ? 'text-[#00ffb3]' : ''; ?>">
                Team
            </a>

            <a href="contact.php"
               class="py-2 hover:text-[#00ffb3] transition <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-[#00ffb3]' : ''; ?>">
                Contact
            </a>

            <!-- MOBILE BUTTON -->
            <a href="hire.php" class="btn-primary px-6 py-3 rounded-xl mt-2 text-center">
                Hire Us
            </a>

        </div>

    </div>

</header>

<!-- MEGA MENU + MOBILE MENU SCRIPT -->
<script>
(function() {
    var header = document.querySelector('header');
    var megaMenu = document.getElementById('megaMenu');
    var trigger = document.getElementById('servicesWrapper');
    var arrow = document.getElementById('servicesArrow');
    var hoverTimeout;

    function getHeaderHeight() {
        return header ? header.offsetHeight : 76;
    }

    function showMegaMenu() {
        clearTimeout(hoverTimeout);
        megaMenu.style.top = getHeaderHeight() + 'px';
        megaMenu.style.opacity = '1';
        megaMenu.style.visibility = 'visible';
        megaMenu.style.pointerEvents = 'auto';
        if (arrow) arrow.style.transform = 'rotate(180deg)';
    }

    function hideMegaMenu() {
        hoverTimeout = setTimeout(function() {
            megaMenu.style.opacity = '0';
            megaMenu.style.visibility = 'hidden';
            megaMenu.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = '';
        }, 120);
    }

    if (trigger && megaMenu) {
        trigger.addEventListener('mouseenter', showMegaMenu);
        trigger.addEventListener('mouseleave', hideMegaMenu);
        megaMenu.addEventListener('mouseenter', showMegaMenu);
        megaMenu.addEventListener('mouseleave', hideMegaMenu);
    }

    var megaMenuBtn = document.getElementById('mobileMenuBtn');
    var mobileMenu = document.getElementById('mobileMenu');
    var iconHamburger = document.getElementById('menuIconHamburger');
    var iconClose = document.getElementById('menuIconClose');
    var mobileOpen = false;

    if (megaMenuBtn && mobileMenu) {
        megaMenuBtn.addEventListener('click', function() {
            mobileOpen = !mobileOpen;
            if (mobileOpen) {
                mobileMenu.classList.remove('hidden');
                iconHamburger.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                iconHamburger.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });
    }

    var mobileServicesBtn = document.getElementById('mobileServicesBtn');
    var mobileServicesPanel = document.getElementById('mobileServicesPanel');
    if (mobileServicesBtn && mobileServicesPanel) {
        mobileServicesBtn.addEventListener('click', function() {
            var isHidden = mobileServicesPanel.classList.contains('hidden');
            if (isHidden) {
                mobileServicesPanel.classList.remove('hidden');
            } else {
                mobileServicesPanel.classList.add('hidden');
            }
            var svgArrow = mobileServicesBtn.querySelector('.arrow');
            if (svgArrow) svgArrow.classList.toggle('rotate-180');
        });
    }
})();
</script>