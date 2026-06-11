<?php
require_once 'config/config.php';
$page_title = "Home";
$page_description = "Anprix Solutions is a leading website design and development company in Ahmedabad, India, delivering custom websites, eCommerce solutions, and SEO-optimized web development services.";
$canonical_url = SITE_URL;
require_once 'includes/header.php';

$testimonials = [
    [
        'name' => 'Arjun Singh',
        'role' => 'Software Engineer',
        'initials' => 'AS',
        'message' => 'High-quality work with a strong focus on performance and scalability. I would definitely recommend them.',
        'stars' => 5,
        'color' => 'from-[#00ffb3] to-[#00b7ff]',
        'star_color' => '#00ffb3'
    ],
    [
        'name' => 'Sripani',
        'role' => 'Laravel Developer',
        'initials' => 'SP',
        'message' => 'Very professional approach and strong technical skills. The project was completed on time with great attention to detail.',
        'stars' => 5,
        'color' => 'from-[#00b7ff] to-[#00ffb3]',
        'star_color' => '#00b7ff'
    ],
    [
        'name' => 'Sagar Mehta',
        'role' => 'Wordpress Developer',
        'initials' => 'SG',
        'message' => 'Working with this team was a pleasure. They understood our requirements clearly and delivered beyond expectations.',
        'stars' => 5,
        'color' => 'from-[#00b7ff] to-[#00ffb3]',
        'star_color' => '#00b7ff'
    ]
];

?>

<!-- HERO SECTION -->

<section class="hero-gradient min-h-screen flex items-center pt-24 lg:pt-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-16 items-center">


        <!-- LEFT CONTENT -->
        <div class="text-center lg:text-left">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-6 lg:mb-8 mx-auto lg:mx-0">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3]"></span>
                <span class="text-xs sm:text-sm text-gray-300">
                    Top Website Design & Development Company in Ahmedabad
                </span>
            </div>

            <!-- H1 -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6 lg:mb-8">
                Website Development
                <span class="green-text">Company</span>
                in
                <span class="blue-text">Ahmedabad, India</span>
            </h1>

            <!-- Description -->
            <p class="text-gray-400 text-base sm:text-lg leading-8 sm:leading-9 mb-8 lg:mb-10 max-w-2xl mx-auto lg:mx-0">
                Anprix Solutions is a leading website design and development company in Ahmedabad, India,
                delivering custom websites, eCommerce solutions, corporate websites, static websites,
                dynamic websites, CMS development, Shopify stores, Laravel web applications, and website
                redesign services. We build fast, secure, mobile-friendly, and SEO-optimized websites
                that help businesses improve their online presence, generate more leads, and increase revenue.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 mb-5 justify-center lg:justify-start">
                <a href="contact.php"
                    class="btn-primary px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl w-full sm:w-auto text-center">
                    Get Free Consultation
                </a>

                <a href="portfolio.php"
                    class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg transition w-full sm:w-auto text-center">
                    View Portfolio
                </a>
            </div>

            <!-- Stats -->
            <!-- <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mt-12 mb-5 lg:mt-14 text-center lg:text-left">
                <div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold green-text">
                        250+
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Websites Delivered
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold blue-text">
                        150+
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Happy Clients
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold green-text">
                        24/7
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Technical Support
                    </p>
                </div>
            </div> -->
        </div>

        <!-- RIGHT CONTENT -->
        <div class="relative mt-6 lg:mt-0 flex items-center justify-center">

            <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

            <!-- MAIN IMAGE SHOWCASE -->
            <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                    <img src="assets/images/heroright1.png"
                         alt="Anprix Solutions - Website Development Company"
                         class="w-full max-w-[90%] sm:max-w-[500px] md:max-w-[620px] lg:max-w-[720px] mx-auto animate-float">
                </div>

                <!-- Floating Badge: Web Development -->
                <div class="floating-badge absolute -top-3 -right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-code text-sm"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                            <p class="text-sm font-semibold">Web Development</p>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge: SEO -->
                <div class="floating-badge absolute -bottom-2 -left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-chart-line text-sm"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] text-gray-500 uppercase tracking-wide">Top Rated</p>
                            <p class="text-sm font-semibold">SEO Services</p>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge: eCommerce -->
                <!-- <div class="floating-badge absolute -bottom-3 -right-3 sm:-bottom-5 sm:-right-5 rounded-2xl px-4 py-3 animate-float" style="animation-delay: 2s;">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-shopping-cart text-sm"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] text-gray-500 uppercase tracking-wide">Premium</p>
                            <p class="text-sm font-semibold">eCommerce Stores</p>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>

    </div>
</div>

</section>

<!-- HOW WE WORK SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                HOW WE WORK
            </p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                From Idea to Launch in
                <span class="green-text">4 Simple Steps</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                A streamlined process designed to deliver high-quality websites and digital solutions on time.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <!-- STEP 1 -->
            <div class="process-card glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-100">
                <div class="relative inline-flex mb-5">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                        <i class="fas fa-lightbulb text-2xl text-[#00ffb3]"></i>
                    </div>
                    <span class="process-number absolute -top-2 -right-2 text-lg font-black">01</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Discovery</h3>
                <p class="text-gray-400 text-sm leading-7">
                    We analyze your business goals, target audience, and competitors to define the perfect strategy.
                </p>
            </div>

            <!-- STEP 2 -->
            <div class="process-card glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-200">
                <div class="relative inline-flex mb-5">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                        <i class="fas fa-paint-brush text-2xl text-[#00b7ff]"></i>
                    </div>
                    <span class="process-number absolute -top-2 -right-2 text-lg font-black">02</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Design</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Modern UI/UX design with wireframes and prototypes tailored to your brand identity.
                </p>
            </div>

            <!-- STEP 3 -->
            <div class="process-card glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-300">
                <div class="relative inline-flex mb-5">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                        <i class="fas fa-code text-2xl text-[#00ffb3]"></i>
                    </div>
                    <span class="process-number absolute -top-2 -right-2 text-lg font-black">03</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Develop</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Clean, scalable code with SEO best practices, speed optimization, and rigorous testing.
                </p>
            </div>

            <!-- STEP 4 -->
            <div class="process-card glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-400">
                <div class="relative inline-flex mb-5">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                        <i class="fas fa-rocket text-2xl text-[#00b7ff]"></i>
                    </div>
                    <span class="process-number absolute -top-2 -right-2 text-lg font-black">04</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Launch & Grow</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Deploy, monitor, optimize, and provide ongoing support to ensure long-term success.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE SECTION - ADVANCED LAYOUT -->

<section class="py-16 md:py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-12 md:mb-16 fade-in-up">
        <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
            WHY ANPRIX
        </p>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
            Built for <span class="green-text">Performance</span>.<br class="sm:hidden">
            Driven by <span class="blue-text">Results</span>.
        </h2>
        <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
            We combine creative design, modern technology, and SEO expertise to build
            websites that don't just look great — they drive real business growth.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 md:gap-8">

        <!-- LEFT: STATS DASHBOARD PANEL -->
        <div class="lg:col-span-2 fade-in-up">
            <div class="why-panel rounded-[28px] md:rounded-[36px] p-7 sm:p-9 md:p-10 h-full">
                <div class="dot-pattern"></div>
                <div class="why-panel-content">

                    <!-- Brand mark -->
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#00ffb3] to-[#00b7ff] flex items-center justify-center text-black font-black text-lg">
                            A
                        </div>
                        <div>
                            <p class="text-sm font-semibold">Anprix Solutions</p>
                            <p class="text-xs text-gray-500">Est. 2025</p>
                        </div>
                    </div>

                    <!-- Stats grid -->
                    <div class="grid grid-cols-2 gap-5 mb-8">

                        <!-- Stat 1 -->
                        <div class="why-stat flex items-center gap-3">
                            <div class="why-stat-ring">
                                <svg viewBox="0 0 55 55">
                                    <circle class="ring-bg" cx="27.5" cy="27.5" r="25"/>
                                    <circle class="ring-fg" id="ring1" cx="27.5" cy="27.5" r="25"
                                        style="stroke: #00ffb3; --offset: 31;"/>
                                </svg>
                            </div>
                            <div>
                                <span class="why-stat-number">100+</span>
                                <p class="text-gray-500 text-xs leading-tight mt-1">Websites Delivered</p>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="why-stat flex items-center gap-3">
                            <div class="why-stat-ring">
                                <svg viewBox="0 0 55 55">
                                    <circle class="ring-bg" cx="27.5" cy="27.5" r="25"/>
                                    <circle class="ring-fg" id="ring2" cx="27.5" cy="27.5" r="25"
                                        style="stroke: #00b7ff; --offset: 47;"/>
                                </svg>
                            </div>
                            <div>
                                <span class="why-stat-number">50+</span>
                                <p class="text-gray-500 text-xs leading-tight mt-1">Happy Clients</p>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="why-stat flex items-center gap-3">
                            <div class="why-stat-ring">
                                <svg viewBox="0 0 55 55">
                                    <circle class="ring-bg" cx="27.5" cy="27.5" r="25"/>
                                    <circle class="ring-fg" id="ring3" cx="27.5" cy="27.5" r="25"
                                        style="stroke: #00ffb3; --offset: 16;"/>
                                </svg>
                            </div>
                            <div>
                                <span class="why-stat-number">98%</span>
                                <p class="text-gray-500 text-xs leading-tight mt-1">Client Satisfaction</p>
                            </div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="why-stat flex items-center gap-3">
                            <div class="why-stat-ring">
                                <svg viewBox="0 0 55 55">
                                    <circle class="ring-bg" cx="27.5" cy="27.5" r="25"/>
                                    <circle class="ring-fg" id="ring4" cx="27.5" cy="27.5" r="25"
                                        style="stroke: #00b7ff; --offset: 0;"/>
                                </svg>
                            </div>
                            <div>
                                <span class="why-stat-number">24/7</span>
                                <p class="text-gray-500 text-xs leading-tight mt-1">Premium Support</p>
                            </div>
                        </div>

                    </div>

                    <!-- Description -->
                    <p class="text-gray-400 text-sm leading-7 border-t border-white/5 pt-6">
                        From startups to enterprises, we deliver high-performance digital solutions
                        that help businesses establish a strong online presence, generate quality leads,
                        and scale revenue.
                    </p>

                    <!-- Trust bar -->
                    <div class="flex flex-wrap items-center gap-4 mt-6 pt-4 border-t border-white/5">
                        <div class="flex items-center gap-1.5 text-xs text-gray-500">
                            <i class="fas fa-star text-[#00ffb3] text-[10px]"></i>
                            <span>4.9 avg rating</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500">
                            <i class="fas fa-shield-alt text-[#00b7ff] text-[10px]"></i>
                            <span>SSL secure</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500">
                            <i class="fas fa-clock text-[#00ffb3] text-[10px]"></i>
                            <span>Fast turnaround</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- RIGHT: FEATURE CARDS 2x2 -->
        <div class="lg:col-span-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5 h-full">

                <!-- Card 1 -->
                <div class="why-feature-card fade-in-up delay-100">
                    <div class="why-feature-icon mb-5" style="background: rgba(0, 255, 179, 0.1); color: #00ffb3;">
                        <div class="why-feature-icon-glow" style="background: #00ffb3;"></div>
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold mb-3">SEO-First Development</h3>
                    <p class="text-gray-400 text-sm leading-7">
                        Every site is built with semantic HTML, structured data, and
                        optimized architecture to rank higher on Google from day one.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3]"></span>
                        PageSpeed 90+
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="why-feature-card fade-in-up delay-200">
                    <div class="why-feature-icon mb-5" style="background: rgba(0, 183, 255, 0.1); color: #00b7ff;">
                        <div class="why-feature-icon-glow" style="background: #00b7ff;"></div>
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold mb-3">Fully Responsive</h3>
                    <p class="text-gray-400 text-sm leading-7">
                        Flawless experience across every device — mobile, tablet, laptop,
                        and desktop — with pixel-perfect adaptive layouts.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00b7ff]"></span>
                        100% mobile-friendly
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="why-feature-card fade-in-up delay-300">
                    <div class="why-feature-icon mb-5" style="background: rgba(0, 255, 179, 0.1); color: #00ffb3;">
                        <div class="why-feature-icon-glow" style="background: #00ffb3;"></div>
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold mb-3">Lightning Fast Speed</h3>
                    <p class="text-gray-400 text-sm leading-7">
                        Performance-optimized code, lazy-loaded assets, CDN integration,
                        and caching strategies for sub-second load times.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3]"></span>
                        Avg load &lt; 1.5s
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="why-feature-card fade-in-up delay-400">
                    <div class="why-feature-icon mb-5" style="background: rgba(0, 183, 255, 0.1); color: #00b7ff;">
                        <div class="why-feature-icon-glow" style="background: #00b7ff;"></div>
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold mb-3">Dedicated Support</h3>
                    <p class="text-gray-400 text-sm leading-7">
                        Ongoing maintenance, security monitoring, performance audits,
                        and 24/7 technical support to keep your site running smoothly.
                    </p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00b7ff]"></span>
                        Response &lt; 2hrs
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

</section>



<!-- SERVICES SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADING -->
        <div class="text-center mb-14 md:mb-20 fade-in-up">

            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                OUR SERVICES
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                Premium Digital Solutions
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                We help startups, brands, and businesses grow with high-performance websites,
                SEO optimization, paid advertising, and full-stack digital marketing solutions.
            </p>

        </div>

        <!-- SERVICES GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 md:gap-8">

            <!-- WEBSITE DEVELOPMENT -->
            <a href="website-development.php"
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 block fade-in-up delay-100">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00b7ff]">
                    <i class="fas fa-laptop-code"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Website Development
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Laravel, WordPress, Shopify, and custom web applications built for performance.
                </p>

            </a>

            <!-- CMS DEVELOPMENT -->
            <div
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-200">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00ffb3]">
                    <i class="fab fa-wordpress"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    <a href="cms.php" class="hover:text-[#00ffb3] transition">CMS Development</a>
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    WordPress, Shopify, and custom CMS platforms for easy content management and growth.
                </p>

            </div>

            <!-- SEO SERVICES -->
            <a href="seo.php"
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 block fade-in-up delay-300">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00ffb3]">
                    <i class="fas fa-chart-line"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    SEO Services
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Technical SEO, keyword ranking, backlinks, and local search optimization.
                </p>

            </a>

            <!-- DIGITAL MARKETING -->
            <a href="digital-marketing.php"
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 block fade-in-up delay-100">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00b7ff]">
                    <i class="fas fa-bullhorn"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Digital Marketing
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Social media growth, branding, funnels, and online marketing strategies.
                </p>

            </a>

            <!-- ADVERTISING -->
            <a href="advertising.php"
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 block fade-in-up delay-200">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00b7ff]">
                    <i class="fas fa-bullhorn"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Advertising
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Google Ads, social media ads, retargeting, and data-driven ad campaigns.
                </p>

            </a>

            <!-- BRANDING & CREATIVE -->
            <a href="branding-creative.php"
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 block fade-in-up delay-300">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00ffb3]">
                    <i class="fas fa-palette"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Branding & Creative
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Logo design, brand identity, visual storytelling, and creative strategy.
                </p>

            </a>

        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div
            class="relative overflow-hidden rounded-[28px] md:rounded-[40px] border border-white/10 bg-gradient-to-r from-[#00ffb3]/10 to-[#00b7ff]/10 px-6 sm:px-10 md:px-14 py-12 md:py-16 text-center fade-in-up">

            <!-- BLUR BACKGROUND (FIXED: behind content) -->
            <div class="absolute inset-0 -z-10 backdrop-blur-xl"></div>

            <!-- SOFT GLOW EFFECTS -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <!-- HEADING -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6">
                    Ready To Grow Online?
                </h2>

                <!-- DESCRIPTION -->
                <p class="text-gray-300 text-base md:text-lg lg:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Launch your website, improve SEO rankings,
                    run profitable ad campaigns, and scale your business
                    with Anprix digital solutions.
                </p>

                <!-- BUTTONS -->
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <!-- PRIMARY BUTTON -->
                    <a href="hire.php"
                        class="btn-primary w-full sm:w-auto px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg shadow-2xl inline-flex items-center justify-center transition-all hover:scale-[1.02]">

                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Project

                    </a>

                    <!-- SECONDARY BUTTON -->
                    <a href="contact.php"
                        class="w-full sm:w-auto border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg transition-all inline-flex items-center justify-center">

                        <i class="fas fa-headset mr-2"></i>
                        Contact Us

                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="py-16 md:py-24 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADING -->
        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                CLIENT TESTIMONIALS
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                What Our Clients Say
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Businesses trust Anprix for website development, SEO optimization,
                Shopify solutions, and digital marketing services that deliver real growth.
            </p>
        </div>

        <!-- TESTIMONIAL GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

            <?php
            $anim_delays = ['delay-100', 'delay-200', 'delay-300'];
            $idx = 0;
            foreach($testimonials as $testimonial):
            $current_delay = $anim_delays[$idx % 3];
            $idx++;
            ?>

            <!-- CARD -->
            <div
                class="glass-card rounded-[24px] md:rounded-[30px] p-6 md:p-8 border border-white/10 hover:border-[<?php echo $testimonial['star_color']; ?>]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up <?php echo $current_delay; ?>">

                <!-- STARS -->
                <div class="flex items-center gap-1 mb-5 md:mb-6 text-lg md:text-xl"
                    style="color: <?php echo $testimonial['star_color']; ?>">

                    <?php echo str_repeat('★ ', $testimonial['stars']); ?>

                </div>

                <!-- MESSAGE -->
                <p class="text-gray-400 leading-7 md:leading-8 mb-8 text-sm md:text-base">
                    <?php echo $testimonial['message']; ?>
                </p>

                <!-- CLIENT -->
                <div class="flex items-center gap-4">

                    <!-- AVATAR -->
                    <div
                        class="min-w-[56px] w-14 h-14 rounded-full bg-gradient-to-r <?php echo $testimonial['color']; ?> flex items-center justify-center text-black font-bold text-lg">

                        <?php echo $testimonial['initials']; ?>

                    </div>

                    <!-- INFO -->
                    <div>
                        <h4 class="text-base md:text-lg font-bold">
                            <?php echo $testimonial['name']; ?>
                        </h4>

                        <p class="text-gray-500 text-sm">
                            <?php echo $testimonial['role']; ?>
                        </p>
                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

        <!-- BOTTOM STATS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mt-14 md:mt-20">

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-100">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 counter" data-target="100">
                    <span>100</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Completed Projects</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-200">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black blue-text mb-3 counter" data-target="50">
                    <span>50</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Happy Clients</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-300">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 counter" data-target="98">
                    <span>98</span>%
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Client Satisfaction</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-400">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black blue-text mb-3 counter" data-target="24">
                    <span>24</span>/7
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Premium Support</p>
            </div>

        </div>

    </div>
</section>

<!-- HIRE US FORM SECTION -->
<section class="py-16 md:py-24 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start lg:items-center">

            <!-- LEFT CONTENT -->
            <div class="fade-in-up">

                <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                    HIRE ANPRIX
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Let's Build Your
                    <span class="green-text block sm:inline">Next Digital Project</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 mb-10">
                    Need a professional website, Shopify store, SEO optimization,
                    Google Ads campaign, or complete digital marketing solution?
                    Our expert team is ready to help your business grow online.
                </p>

                <div class="space-y-6">

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold">Premium Website Design</h4>
                            <p class="text-gray-500 text-sm md:text-base">Modern responsive websites optimized for
                                speed.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold">SEO & Google Ranking</h4>
                            <p class="text-gray-500 text-sm md:text-base">Improve visibility and ranking on Google.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            ✓
                        </div>
                        <div>
                            <h4 class="font-bold">Marketing & Ads</h4>
                            <p class="text-gray-500 text-sm md:text-base">Generate leads using powerful campaigns.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="glass-card rounded-[24px] md:rounded-[35px] p-6 sm:p-8 md:p-10 border border-white/10 fade-in-up delay-200">

                <h3 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6">
                    Hire Us
                </h3>

                <form class="ajax-form space-y-5 sm:space-y-6" method="POST" id="hireForm">

                    <?php csrf_field(); ?>
                    <input type="hidden" name="form_type" value="hire">

                    <!-- NAME + PHONE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Full Name *
                            </label>
                            <input type="text" name="name" placeholder="Enter your full name" required minlength="3"
                                maxlength="80"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Phone Number
                            </label>
                            <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="15"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Email Address *
                        </label>
                        <input type="email" name="email" placeholder="Enter your email address" required maxlength="120"
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                    </div>

                    <!-- SERVICE -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Select Service *
                        </label>
                        <select name="service" required
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                            <option value="">Select a Service</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Advertising Services">Advertising Services</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Branding & Creative Services">Branding & Creative Services</option>
                        </select>
                    </div>

                    <!-- BUDGET + TIMELINE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Estimated Budget
                            </label>
                            <select name="budget"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                                <option value="">Select Budget Range</option>
                                <option value="Less than $5,000">Less than $5,000</option>
                                <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                <option value="$25,000+">$25,000+</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Project Timeline
                            </label>
                            <select name="timeline"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                                <option value="">Select Timeline</option>
                                <option value="ASAP (Within 2 weeks)">ASAP (Within 2 weeks)</option>
                                <option value="Within 1 month">Within 1 month</option>
                                <option value="1-3 months">1-3 months</option>
                                <option value="3+ months">3+ months</option>
                            </select>
                        </div>

                    </div>

                    <!-- DETAILS -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Project Details *
                        </label>

                        <textarea name="details" rows="5" required minlength="10" maxlength="2000"
                            placeholder="Tell us about your project..."
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] resize-none"></textarea>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full btn-primary py-4 sm:py-5 rounded-2xl text-base sm:text-lg font-semibold transition hover:scale-[1.02] active:scale-[0.98]">
                        Submit Request
                        <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>

                    <p class="text-center text-gray-500 text-xs mt-4">
                        <i class="fa-solid fa-lock mr-1"></i>
                        Your information is secure. We'll never share your data.
                    </p>

                </form>

            </div>

        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>