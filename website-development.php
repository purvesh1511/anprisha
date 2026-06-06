<?php
require_once 'includes/config.php';
$page_title = "Website Development";
$page_description = "Anprix builds custom websites using Laravel, WordPress, Shopify, and modern frontend technologies — fast, responsive, and built for conversion.";
$canonical_url = SITE_URL . '/website-development';
require_once 'includes/header.php';
?>

<!-- HERO -->
<section class="py-24 sm:py-28 lg:py-32 relative overflow-hidden">

    <div class="absolute top-[-80px] sm:top-0 left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="absolute bottom-[-80px] sm:bottom-0 right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="max-w-4xl">

            <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                Website Development
            </p>

            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                High-Performance
                <span class="green-text block sm:inline">
                    Business Websites
                </span>

            </h1>

            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">

                Anprix builds fast, responsive, and conversion-focused websites using Laravel, WordPress, Shopify, and modern frontend technologies tailored to your business goals.

            </p>

        </div>

    </div>

</section>

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- ========================= -->
        <!-- WD SERVICE 1: Custom Website Design -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-palette text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">UI/UX Design</h3>
                        <p class="text-gray-500 text-sm">Modern, user-centered layouts</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-code text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Frontend Development</h3>
                        <p class="text-gray-500 text-sm">HTML, CSS, JavaScript, React</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-mobile-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Responsive Design</h3>
                        <p class="text-gray-500 text-sm">Perfect on every device</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-paint-brush text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Brand-First Approach</h3>
                        <p class="text-gray-500 text-sm">Design aligned with your identity</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Custom Website Design
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Websites That <span class="green-text">Convert</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We design and develop custom websites that reflect your brand, engage your audience, and drive measurable results — from simple landing pages to complex web applications.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Your Website
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- WD SERVICE 2: Laravel Development -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Laravel Development
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Powerful Backend <span class="green-text">Applications</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We build robust, scalable backend systems and custom web applications using Laravel — the most popular PHP framework for modern web development.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Custom Web Apps</h4>
                            <p class="text-gray-500 text-sm">Tailored solutions for complex requirements</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-database"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Database Architecture</h4>
                            <p class="text-gray-500 text-sm">Optimized MySQL & PostgreSQL schemas</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">API Development</h4>
                            <p class="text-gray-500 text-sm">RESTful & GraphQL APIs</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-laravel text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Laravel</h3>
                    <p class="text-gray-500 text-sm">Modern PHP framework</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-database text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Eloquent ORM</h3>
                    <p class="text-gray-500 text-sm">Database management</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-shield-alt text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Security</h3>
                    <p class="text-gray-500 text-sm">Built-in protection</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-rocket text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Scalable</h3>
                    <p class="text-gray-500 text-sm">Grows with your business</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- WD SERVICE 3: Frontend Development -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-react text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">React & Vue.js</h3>
                        <p class="text-gray-500 text-sm">Modern frontend frameworks</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-js text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">JavaScript & TypeScript</h3>
                        <p class="text-gray-500 text-sm">Interactive user experiences</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-bolt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Tailwind CSS</h3>
                        <p class="text-gray-500 text-sm">Utility-first styling</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-tachometer-alt text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Performance Focused</h3>
                        <p class="text-gray-500 text-sm">Optimized for speed</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Frontend Development
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Modern, Fast <span class="green-text">Interfaces</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We craft pixel-perfect, responsive frontends using React, Vue.js, and Tailwind CSS to deliver exceptional user experiences across all devices.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Build Your Frontend
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- WD SERVICE 4: Shopify Development -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Shopify Development
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Launch Your <span class="green-text">Online Store</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We build high-converting Shopify stores with custom themes, app integrations, and optimized checkout flows to help you sell more online.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-shopify"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Custom Themes</h4>
                            <p class="text-gray-500 text-sm">Tailored to your brand identity</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">App Integrations</h4>
                            <p class="text-gray-500 text-sm">Extend functionality with plugins</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Checkout Optimization</h4>
                            <p class="text-gray-500 text-sm">Reduce cart abandonment</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fab fa-shopify text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Theme Dev</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-cogs text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Custom Apps</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-chart-line text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>SEO Optimized</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-sync-alt text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Migration</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- WD SERVICE 5: WordPress Development -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-wordpress text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Custom Theme Development</h3>
                        <p class="text-gray-500 text-sm">Unique designs built from scratch</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-plug text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Plugin Development</h3>
                        <p class="text-gray-500 text-sm">Custom functionality & integrations</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-shopping-cart text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">WooCommerce</h3>
                        <p class="text-gray-500 text-sm">WordPress-powered online stores</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-tachometer-alt text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Performance Tuning</h3>
                        <p class="text-gray-500 text-sm">Speed & caching optimization</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    WordPress Development
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Flexible, Powerful <span class="green-text">WordPress Sites</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    From custom themes and plugins to WooCommerce stores, we build WordPress solutions that are fast, secure, and easy to manage.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start WordPress Site
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY WEBSITE DEVELOPMENT -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE PROFESSIONAL WEB DEVELOPMENT
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 md:mb-8 leading-tight">
                Benefits of a Custom Website
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                A professionally built website is the foundation of your online presence and digital marketing success.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black green-text mb-4">01</div>
                <i class="fas fa-bolt text-3xl mb-4 text-[#00ffb3]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Blazing Fast</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Optimized for speed with fast load times.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black blue-text mb-4">02</div>
                <i class="fas fa-mobile-alt text-3xl mb-4 text-[#00b7ff]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Fully Responsive</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Perfect experience on any device.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black green-text mb-4">03</div>
                <i class="fas fa-search text-3xl mb-4 text-[#00ffb3]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">SEO Optimized</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Built with search engines in mind.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black blue-text mb-4">04</div>
                <i class="fas fa-shield-alt text-3xl mb-4 text-[#00b7ff]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Secure & Scalable</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Enterprise-grade security that grows with you.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- TECH STACK -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    OUR TECH STACK
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    We Build With The
                    <span class="green-text block sm:inline">Best Technologies</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From Laravel and WordPress to React and Tailwind CSS, we use modern, battle-tested technologies to deliver websites that perform, scale, and impress.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-laravel text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Laravel</h3>
                    <p class="text-gray-500 text-sm mt-2">PHP backend framework</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-wordpress text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">WordPress</h3>
                    <p class="text-gray-500 text-sm mt-2">CMS & blogs</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-shopify text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Shopify</h3>
                    <p class="text-gray-500 text-sm mt-2">eCommerce platform</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-react text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">React</h3>
                    <p class="text-gray-500 text-sm mt-2">Frontend library</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-js text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">JavaScript</h3>
                    <p class="text-gray-500 text-sm mt-2">Interactive UIs</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-paint-brush text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Tailwind CSS</h3>
                    <p class="text-gray-500 text-sm mt-2">Utility-first CSS</p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full">
            </div>

            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full">
            </div>

            <div class="relative z-10">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    BUILD YOUR WEBSITE
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Build Your Website?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with Anprix and get a custom-built website designed for performance, conversions, and growth — on time and on budget.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Website
                    </a>

                    <a href="contact.php"
                        class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?php require_once 'includes/footer.php'; ?>
