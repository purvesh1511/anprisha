<?php
require_once 'config/config.php';
$page_title = "Home";
$seo_title = "Website Development, SEO & Digital Marketing Company in Ahmedabad | Anprix";
$page_description = "Anprix Solutions is a leading website development, SEO, and digital marketing company in Ahmedabad, India. We build high-performance websites, Shopify stores, run Google Ads, and grow your business online.";
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
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">


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
                Build Websites.
                <span class="green-text">Rank on Google.</span>
                <span class="blue-text">Generate More Leads.</span>
            </h1>

            <!-- Description -->
            <p class="text-gray-400 text-base sm:text-lg leading-8 sm:leading-9 mb-8 lg:mb-10 max-w-2xl mx-auto lg:mx-0">
                Anprix Solutions is a leading website development, SEO, and digital marketing company in Ahmedabad, India.
                We build custom websites, Shopify stores, and Laravel web applications, then optimize them with
                technical SEO, Google Ads, and social media marketing to drive traffic, leads, and revenue.
            </p>

            <!-- Service Tags -->
            <div class="flex flex-wrap gap-2 mb-8 justify-center lg:justify-start">
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Website Development</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00b7ff]/10 border border-[#00b7ff]/20 text-[#00b7ff]">SEO Services</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Google Ads</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00b7ff]/10 border border-[#00b7ff]/20 text-[#00b7ff]">Social Media Marketing</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Shopify Development</span>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 mb-5 justify-center lg:justify-start">
                <a href="contact.php"
                    class="btn-primary px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl w-full sm:w-auto text-center">
                    <i class="fas fa-rocket mr-2"></i>
                    Get Free SEO Audit
                </a>

                <a href="hire.php"
                    class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg transition w-full sm:w-auto text-center">
                    Start Your Project
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
                         class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                </div>

                <!-- Floating Badge: Web Development -->
                <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
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
                <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
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

<!-- TRUST BAR -->
<section class="py-8 md:py-10 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <div class="text-center fade-in-up delay-100">
                <div class="text-2xl sm:text-3xl font-black green-text">100+</div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Websites Delivered</p>
            </div>
            <div class="text-center fade-in-up delay-200">
                <div class="text-2xl sm:text-3xl font-black blue-text">50+</div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Happy Clients</p>
            </div>
            <div class="text-center fade-in-up delay-300">
                <div class="text-2xl sm:text-3xl font-black green-text">98%</div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Client Satisfaction</p>
            </div>
            <div class="text-center fade-in-up delay-400">
                <div class="text-2xl sm:text-3xl font-black blue-text">24/7</div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Premium Support</p>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDIES / RESULTS SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                RECENT RESULTS
            </p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                Real Projects, <span class="green-text">Real Growth</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Here are some measurable results we've delivered for our clients through strategic digital solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-100 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black green-text mb-2">300%</div>
                <p class="text-gray-400 text-sm mb-3">Traffic Increase</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 90%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">SEO + Content strategy</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-200 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black blue-text mb-2">150+</div>
                <p class="text-gray-400 text-sm mb-3">Leads Generated</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 85%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Google Ads campaign</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-300 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black green-text mb-2">95</div>
                <p class="text-gray-400 text-sm mb-3">PageSpeed Score</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 95%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Performance optimization</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-400 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black blue-text mb-2">3x</div>
                <p class="text-gray-400 text-sm mb-3">Sales Growth</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 88%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Shopify redesign + SEO</p>
            </div>

        </div>

        <div class="text-center mt-10 fade-in-up">
            <a href="portfolio.php"
               class="inline-flex items-center gap-2 text-[#00ffb3] hover:text-white transition border border-[#00ffb3]/30 hover:border-[#00ffb3] px-6 py-3 rounded-2xl text-sm font-semibold">
                View Full Portfolio
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- HOW WE WORK - 2-COLUMN LAYOUT -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN - enhanced -->
            <div class="lg:sticky lg:top-24 fade-in-up">

                <!-- DECORATIVE GLASS ELEMENT -->
                <div class="relative inline-block mb-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#00ffb3]/20 to-[#00b7ff]/20 rounded-2xl blur-xl opacity-60"></div>
                    <div class="relative px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="green-text font-semibold tracking-[0.25em] uppercase text-xs flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse shadow-lg shadow-[#00ffb3]/50"></span>
                            HOW WE WORK
                            <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse shadow-lg shadow-[#00b7ff]/50"></span>
                        </p>
                    </div>
                </div>

                <!-- HEADING -->
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-black mb-6 leading-[1.1]">
                    How We <span class="green-text">Deliver</span><br>
                    <span class="text-white/70">Results</span>
                </h2>

                <!-- GRADIENT DECORATIVE LINE -->
                <div class="w-24 h-1 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-8"></div>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base md:text-lg leading-8 mb-8">
                    A streamlined process designed to deliver high-quality websites
                    and digital solutions on time, every time.
                </p>

                <!-- MINI STATS ROW -->
                <div class="flex flex-wrap gap-6 mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fas fa-rocket text-sm text-[#00ffb3]"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Fast</p>
                            <p class="text-gray-500 text-xs">2-week delivery</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                            <i class="fas fa-code text-sm text-[#00b7ff]"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Modern</p>
                            <p class="text-gray-500 text-xs">SEO-optimized code</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fas fa-headset text-sm text-[#00ffb3]"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Support</p>
                            <p class="text-gray-500 text-xs">24/7 dedicated</p>
                        </div>
                    </div>
                </div>

                <!-- CTA BUTTON -->
                <a href="#contactForm"
                    class="btn-primary inline-flex items-center gap-3 px-8 py-4 rounded-full text-sm font-bold hover:scale-105 transition-all shadow-lg shadow-[#00ffb3]/20">
                    Start Your Project
                    <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center">
                        <i class="fas fa-arrow-right text-xs"></i>
                    </span>
                </a>
            </div>

            <!-- RIGHT COLUMN -->
            <div>
                <div class="flex flex-col gap-5">
<?php
$how_work_steps = [
    ['num' => '01', 'title' => 'Discovery',
     'desc' => 'We analyze your business goals, target audience, and competitors to define the perfect strategy.',
     'color' => '#00ffb3', 'icon' => 'fa-lightbulb'],
    ['num' => '02', 'title' => 'Design',
     'desc' => 'Modern UI/UX design with wireframes and prototypes tailored to your brand identity.',
     'color' => '#00b7ff', 'icon' => 'fa-paint-brush'],
    ['num' => '03', 'title' => 'Develop',
     'desc' => 'Clean, scalable code with SEO best practices, speed optimization, and rigorous testing.',
     'color' => '#00ffb3', 'icon' => 'fa-code'],
    ['num' => '04', 'title' => 'Launch & Grow',
     'desc' => 'Deploy, monitor, optimize, and provide ongoing support to ensure long-term success.',
     'color' => '#00b7ff', 'icon' => 'fa-rocket'],
];
?>

                    <?php foreach ($how_work_steps as $i => $s): ?>
                    <div class="process-step-card glass-card rounded-2xl p-6 md:p-7 relative border border-white/5 hover:bg-white/5 transition-all fade-in-up"
                        style="transition-delay: <?= $i * 0.1 ?>s">

                        <div class="process-step-number text-6xl md:text-7xl font-black text-white/10 absolute right-6 top-2 select-none">
                            <?= $s['num'] ?>
                        </div>

                        <div class="relative z-10 pr-20">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                                    style="background: <?= $s['color'] ?>20; color: <?= $s['color'] ?>;">
                                    <i class="fas <?= $s['icon'] ?>"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold">
                                    <?= $s['title'] ?>
                                </h3>
                            </div>
                            <p class="text-gray-400 leading-7">
                                <?= $s['desc'] ?>
                            </p>
                            <div class="flex items-center gap-2 mt-4">
                                <span class="w-1.5 h-1.5 rounded-full"
                                    style="background: <?= $s['color'] ?>"></span>
                                <span class="text-xs text-gray-500">
                                    Step <?= $s['num'] ?>
                                </span>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- WHY CHOOSE - REMOVED --><!-- SERVICES SECTION -->
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
                    <a href="contact.php"
                        class="btn-primary w-full sm:w-auto px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg shadow-2xl inline-flex items-center justify-center transition-all hover:scale-[1.02]">

                        <i class="fas fa-file-alt mr-2"></i>
                        Request Proposal

                    </a>

                    <!-- SECONDARY BUTTON -->
                    <a href="hire.php"
                        class="w-full sm:w-auto border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg transition-all inline-flex items-center justify-center">

                        <i class="fas fa-calendar-check mr-2"></i>
                        Book Free Consultation

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

<!-- FAQ SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-16 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                FAQ
            </p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                Frequently Asked <span class="green-text">Questions</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Everything you need to know about our website development, SEO, and digital marketing services.
            </p>
        </div>

        <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">

            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-100" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">How much does website development cost in Ahmedabad?</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">
                        Website development costs in Ahmedabad typically range from ₹15,000 for a basic static website to ₹1,50,000+ for a custom Laravel or Shopify eCommerce store. The final cost depends on complexity, features, design requirements, and SEO optimization. We provide a free consultation and detailed quote after understanding your project needs.
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-200" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">How long does a website project typically take?</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">
                        A standard business website takes 2-4 weeks from design to launch. eCommerce stores and custom web applications typically take 4-8 weeks depending on features and functionality. We follow a structured 4-step process — Discovery, Design, Develop, and Launch — to ensure timely delivery without compromising quality.
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-300" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">Do you provide SEO services after the website is built?</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">
                        Yes. We offer comprehensive SEO services including technical SEO, on-page optimization, keyword research, content strategy, link building, and monthly performance reporting. Our SEO packages are designed to improve Google rankings, increase organic traffic, and generate quality leads for your business.
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-400" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">Can you redesign my existing website?</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">
                        Absolutely. We specialize in website redesign and modernization. Whether your site is outdated, slow, or not generating leads, we can rebuild it with modern UI/UX, faster performance, SEO optimization, and mobile responsiveness — without losing your existing search rankings.
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-500" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">What digital marketing services do you offer?</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">
                        We offer a full range of digital marketing services including Google Ads management, social media marketing (Facebook, Instagram, LinkedIn), search engine optimization (SEO), content marketing, email marketing, and conversion rate optimization. Each campaign is data-driven and tailored to your business goals.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- HIRE US FORM SECTION -->
<section class="py-16 md:py-24 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start lg:items-center">

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
                        Get Free Proposal
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