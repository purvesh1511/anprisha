<?php
$page_title = "Home";
require_once 'includes/config.php';
require_once 'includes/header.php';

$testimonials = [
    [
        'name' => 'James Smith',
        'role' => 'CEO, Tech Startup',
        'initials' => 'JS',
        'message' => 'Anprix completely transformed our business website. Their SEO strategy improved our Google rankings and we started receiving more leads within weeks.',
        'stars' => 5,
        'color' => 'from-[#00ffb3] to-[#00b7ff]',
        'star_color' => '#00ffb3'
    ],
    [
        'name' => 'Amelia Khan',
        'role' => 'eCommerce Brand Owner',
        'initials' => 'AK',
        'message' => 'We hired Anprix for Shopify development and Google Ads. Their team created a premium store and helped us increase sales significantly.',
        'stars' => 5,
        'color' => 'from-[#00b7ff] to-[#00ffb3]',
        'star_color' => '#00b7ff'
    ],
    [
        'name' => 'Robert Brown',
        'role' => 'Marketing Director',
        'initials' => 'RB',
        'message' => 'Their digital marketing campaigns generated quality leads for our company. Professional communication, modern design, and excellent support.',
        'stars' => 5,
        'color' => 'from-[#00ffb3] to-[#00b7ff]',
        'star_color' => '#00ffb3'
    ]
];

?>

<!-- HERO SECTION -->
<!-- HERO SECTION -->

<!-- HERO SECTION -->

<section class="hero-gradient min-h-screen flex items-center pt-24 lg:pt-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid lg:grid-cols-2 gap-14 lg:gap-16 items-center">


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
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-tight mb-6 lg:mb-8">
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
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 justify-center lg:justify-start">
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
            <div class="grid grid-cols-3 gap-4 sm:gap-6 mt-12 mb-5 lg:mt-14 text-center lg:text-left">
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
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="relative mt-6 lg:mt-0">

            <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

            <div class="relative glass-card rounded-[28px] sm:rounded-[35px] p-5 sm:p-8 lg:p-10 shadow-2xl">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">

                    <!-- Custom Development -->
                    <div class="bg-black/40 border border-white/5 rounded-3xl p-5 sm:p-6">
                        <div class="text-3xl sm:text-4xl mb-4 text-[#00ffb3]">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3">
                            Custom Website Development
                        </h3>
                        <p class="text-gray-400 leading-7 text-sm sm:text-base">
                            Tailor-made websites designed to match your business goals and brand identity.
                        </p>
                    </div>

                    <!-- Ecommerce -->
                    <div class="bg-black/40 border border-white/5 rounded-3xl p-5 sm:p-6">
                        <div class="text-3xl sm:text-4xl mb-4 text-[#00b7ff]">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3">
                            eCommerce Development
                        </h3>
                        <p class="text-gray-400 leading-7 text-sm sm:text-base">
                            Shopify, WooCommerce, and custom online stores built to maximize sales.
                        </p>
                    </div>

                    <!-- Laravel -->
                    <div class="bg-black/40 border border-white/5 rounded-3xl p-5 sm:p-6">
                        <div class="text-3xl sm:text-4xl mb-4 text-[#00ffb3]">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3">
                            Laravel Development
                        </h3>
                        <p class="text-gray-400 leading-7 text-sm sm:text-base">
                            Scalable and secure Laravel web applications for startups and enterprises.
                        </p>
                    </div>

                    <!-- Website Redesign -->
                    <div class="bg-black/40 border border-white/5 rounded-3xl p-5 sm:p-6">
                        <div class="text-3xl sm:text-4xl mb-4 text-[#00b7ff]">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3">
                            Website Redesign
                        </h3>
                        <p class="text-gray-400 leading-7 text-sm sm:text-base">
                            Modernize outdated websites with improved UI/UX, speed, SEO, and conversions.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</section>

<!-- SEO CONTENT SECTION -->

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-4xl font-bold mb-8">
        Why Choose Our Website Development Company?
    </h2>

    <p class="text-lg text-gray-400 leading-9 mb-6">
        We specialize in creating high-performance websites that help businesses establish a
        strong online presence. Our team combines creative design, modern technologies, and
        SEO best practices to build websites that not only look great but also drive measurable results.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">

        <div class="glass-card p-6 rounded-3xl">
            <h3 class="text-xl font-bold mb-3">SEO-Friendly Development</h3>
            <p class="text-gray-400">
                Optimized website architecture for better Google rankings.
            </p>
        </div>

        <div class="glass-card p-6 rounded-3xl">
            <h3 class="text-xl font-bold mb-3">Mobile Responsive</h3>
            <p class="text-gray-400">
                Fully responsive websites across all devices and screen sizes.
            </p>
        </div>

        <div class="glass-card p-6 rounded-3xl">
            <h3 class="text-xl font-bold mb-3">Fast Loading Speed</h3>
            <p class="text-gray-400">
                Performance-optimized websites for better user experience.
            </p>
        </div>

        <div class="glass-card p-6 rounded-3xl">
            <h3 class="text-xl font-bold mb-3">Ongoing Support</h3>
            <p class="text-gray-400">
                Dedicated maintenance and technical support after launch.
            </p>
        </div>

    </div>

</div>

</section>



<!-- SERVICES SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADING -->
        <div class="text-center mb-14 md:mb-20">

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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <!-- WEB DESIGN -->
            <div
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00ffb3]">
                    <i class="fas fa-pen-ruler"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Web Design
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Modern UI/UX designs focused on usability, branding, and conversion-driven layouts.
                </p>

            </div>

            <!-- WEBSITE DEVELOPMENT -->
            <div
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00b7ff]">
                    <i class="fas fa-laptop-code"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Website Development
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Laravel, WordPress, Shopify, and custom web applications built for performance.
                </p>

            </div>

            <!-- SEO SERVICES -->
            <div
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00ffb3]">
                    <i class="fas fa-chart-line"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    SEO Services
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Technical SEO, keyword ranking, backlinks, and local search optimization.
                </p>

            </div>

            <!-- DIGITAL MARKETING -->
            <div
                class="service-card glass-card rounded-[24px] md:rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">

                <div class="text-4xl md:text-5xl mb-5 md:mb-6 text-[#00b7ff]">
                    <i class="fas fa-bullhorn"></i>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-4">
                    Digital Marketing
                </h3>

                <p class="text-gray-400 leading-7 md:leading-8 text-sm md:text-base">
                    Social media growth, branding, funnels, and online marketing strategies.
                </p>

            </div>

        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div
            class="relative overflow-hidden rounded-[28px] md:rounded-[40px] border border-white/10 bg-gradient-to-r from-[#00ffb3]/10 to-[#00b7ff]/10 px-6 sm:px-10 md:px-14 py-12 md:py-16 text-center">

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
        <div class="text-center mb-14 md:mb-20">
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
            

            foreach($testimonials as $testimonial):
            ?>

            <!-- CARD -->
            <div
                class="glass-card rounded-[24px] md:rounded-[30px] p-6 md:p-8 border border-white/10 hover:border-[<?php echo $testimonial['star_color']; ?>]/30 transition-all duration-300 hover:-translate-y-1">

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
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mt-14 md:mt-20">

            <!-- STAT -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 counter" data-target="250">
                    <span>250</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Completed Projects</p>
            </div>

            <!-- STAT -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black blue-text mb-3 counter" data-target="150">
                    <span>150</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Happy Clients</p>
            </div>

            <!-- STAT -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 counter" data-target="98">
                    <span>98</span>%
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Client Satisfaction</p>
            </div>

            <!-- STAT -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10">
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
            <div>

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
            <div class="glass-card rounded-[24px] md:rounded-[35px] p-6 sm:p-8 md:p-10 border border-white/10">

                <h3 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6">
                    Hire Us
                </h3>

                <form class="ajax-form space-y-5 sm:space-y-6" method="POST" id="hireForm">

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