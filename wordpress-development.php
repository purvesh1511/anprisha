<?php
require_once 'config/config.php';
require_once 'config/seo_keyword.php';
$page_key = 'wordpress-development';
$seo_title = $seo_pages[$page_key]['title'];
$page_description = $seo_pages[$page_key]['description'];
$page_keywords = $seo_pages[$page_key]['keywords'];
$canonical_url = $seo_pages[$page_key]['canonical'];
require_once 'includes/header.php';
?>

<!-- HERO -->
<section class="py-24 sm:py-28 lg:py-32 relative overflow-hidden">

    <div class="absolute top-[-80px] sm:top-0 left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="absolute bottom-[-80px] sm:bottom-0 right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                    WordPress Development
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                    WordPress Website Development
                    <span class="green-text block sm:inline">
                        Company in Ahmedabad
                    </span>

                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10">

                    Anprix Solutions is a leading WordPress website development company in Ahmedabad, Gujarat, India, dedicated to delivering innovative and result-driven web solutions. We specialize in WordPress website development, custom WordPress solutions, and business-focused websites that help brands stand out in today's competitive marketplace.

                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="assets/images/cms-development.webp"
                             alt="Anprix Solutions - WordPress Website Development Company"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fab fa-wordpress text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">WordPress</p>
                            </div>
                        </div>
                    </div>

                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-chart-line text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Results</p>
                                <p class="text-sm font-semibold">SEO-Friendly Sites</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- WHY CHOOSE ANPRIX FOR WORDPRESS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE ANPRIX SOLUTIONS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                WordPress Website Development Company
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                WordPress powers millions of websites worldwide due to its flexibility, scalability, and user-friendly content management capabilities.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

            <!-- Experienced WordPress Developers -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Experienced WordPress Developers</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Our team of experienced developers has extensive expertise in WordPress web development and understands the latest technologies, design trends, and industry standards. We create websites that are visually appealing, technically sound, and optimized for business growth.
                </p>
            </div>

            <!-- Custom WordPress Solutions -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-code text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Custom WordPress Solutions</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Every business has unique requirements. We offer customized solutions that align with your brand identity and business objectives. Whether you need a corporate website, service-based website, or custom functionality, we deliver a tailored solution.
                </p>
            </div>

            <!-- SEO-Friendly Development -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-search text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">SEO-Friendly Development</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    A website should not only look good but also perform well in search engines. Our WordPress development services include SEO-friendly coding, optimized website structure, mobile responsiveness, and fast-loading pages to help improve your visibility on Google.
                </p>
            </div>

            <!-- Mobile Responsive -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-mobile-alt text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Mobile Responsive Websites</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Most internet users access websites through mobile devices. We ensure that every website developed by Anprix Solutions provides a seamless user experience across smartphones, tablets, and desktops.
                </p>
            </div>

            <!-- Fast Loading -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-bolt text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Fast Loading Performance</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Website speed directly affects user experience and search engine rankings. Our WordPress web development process focuses on performance optimization, ensuring faster loading times and improved visitor engagement.
                </p>
            </div>

            <!-- Secure -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Secure WordPress Websites</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Security is a critical aspect of developing a WordPress site. We implement industry-standard security measures, secure coding practices, regular updates, and advanced protection features to safeguard your website.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- WORDPRESS SERVICES -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- SERVICE 1: Custom WordPress Website Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Custom WordPress Website Development
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Tailored WordPress <span class="green-text">Websites</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We build custom websites that reflect your brand and meet your business objectives. Our WordPress website development services are designed to provide flexibility, scalability, and excellent user experience.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Custom Theme Development</h3>
                            <p class="text-gray-500 text-sm">Unique designs built from scratch</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-plug"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Plugin Development</h3>
                            <p class="text-gray-500 text-sm">Custom functionality & integrations</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Performance Optimization</h3>
                            <p class="text-gray-500 text-sm">Speed & caching optimization</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-wordpress text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">WordPress</h3>
                    <p class="text-gray-500 text-sm">Custom themes & plugins</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-shopping-cart text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">WooCommerce</h3>
                    <p class="text-gray-500 text-sm">eCommerce stores</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-bolt text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Performance</h3>
                    <p class="text-gray-500 text-sm">Fast loading speed</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-shield-alt text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Security</h3>
                    <p class="text-gray-500 text-sm">Hardened & protected</p>
                </div>

            </div>
        </div>

        <!-- SERVICE 2: Business & Corporate Website Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-building text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Corporate Websites</h3>
                        <p class="text-gray-500 text-sm">Professional business presence</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-handshake text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Lead Generation</h3>
                        <p class="text-gray-500 text-sm">Convert visitors into customers</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-chart-line text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Online Presence</h3>
                        <p class="text-gray-500 text-sm">Strong digital footprint</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Business & Corporate Website Development
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Professional <span class="green-text">Business Websites</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    As a trusted WordPress website development company, we create professional business websites that help companies establish a strong online presence and generate qualified leads.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Business Website
                    </a>

                </div>

            </div>

        </div>

        <!-- SERVICE 3: WordPress CMS Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    WordPress CMS Development
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Easy <span class="green-text">Content Management</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Manage your website content with ease through our advanced WordPress CMS solutions. Our websites are designed to allow easy updates without requiring technical expertise.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Easy Content Updates</h3>
                            <p class="text-gray-500 text-sm">No coding knowledge required</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-images"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Media Management</h3>
                            <p class="text-gray-500 text-sm">Images, videos & documents</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Multi-User Access</h3>
                            <p class="text-gray-500 text-sm">Role-based permissions</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-edit text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">CMS Dashboard</h3>
                    <p class="text-gray-500 text-sm">Intuitive admin panel</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-palette text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Visual Builder</h3>
                    <p class="text-gray-500 text-sm">Drag & drop editing</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-language text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Multi-Language</h3>
                    <p class="text-gray-500 text-sm">WPML & Polylang support</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-history text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Version Control</h3>
                    <p class="text-gray-500 text-sm">Revision history & backups</p>
                </div>

            </div>
        </div>

        <!-- SERVICE 4: WordPress Website Redesign Services -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-paint-brush text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Modern UI/UX</h3>
                        <p class="text-gray-500 text-sm">Fresh, contemporary design</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-tachometer-alt text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Performance Boost</h3>
                        <p class="text-gray-500 text-sm">Faster loading times</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-search text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">SEO Preservation</h3>
                        <p class="text-gray-500 text-sm">Maintain search rankings</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    WordPress Website Redesign Services
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Modernize Your <span class="green-text">WordPress Site</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Already have a website? Our redesign services can modernize your existing website, improve performance, and enhance user engagement while maintaining your brand identity.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Redesign Your Site
                    </a>

                </div>

            </div>

        </div>

        <!-- SERVICE 5: Landing Page Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Landing Page Development
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    High-Converting <span class="green-text">Landing Pages</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We create high-converting landing pages designed to generate leads, increase inquiries, and support digital marketing campaigns.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Conversion Focused</h3>
                            <p class="text-gray-500 text-sm">Designed to capture leads</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Fast Deployment</h3>
                            <p class="text-gray-500 text-sm">Launch in days, not weeks</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">A/B Testing Ready</h3>
                            <p class="text-gray-500 text-sm">Optimize for best results</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-bullseye text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Lead Capture</h3>
                    <p class="text-gray-500 text-sm">Forms & CTAs</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-ad text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Ad Campaigns</h3>
                    <p class="text-gray-500 text-sm">PPC ready pages</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-mobile-alt text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Mobile Optimized</h3>
                    <p class="text-gray-500 text-sm">Perfect on all devices</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-chart-line text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Analytics</h3>
                    <p class="text-gray-500 text-sm">Track performance</p>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- BENEFITS OF WORDPRESS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                BENEFITS OF WORDPRESS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                Why Choose WordPress
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                These advantages make WordPress one of the most popular platforms for businesses across Ahmedabad and India.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5 mx-auto">
                    <i class="fas fa-edit text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Easy Content Management</h3>
                <p class="text-gray-500 text-sm">Update your website without coding</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5 mx-auto">
                    <i class="fas fa-search text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">SEO-Friendly Structure</h3>
                <p class="text-gray-500 text-sm">Built for search engine visibility</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5 mx-auto">
                    <i class="fas fa-mobile-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Mobile Responsiveness</h3>
                <p class="text-gray-500 text-sm">Perfect on every device</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5 mx-auto">
                    <i class="fas fa-expand-arrows-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">High Scalability</h3>
                <p class="text-gray-500 text-sm">Grows with your business</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5 mx-auto">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Strong Security</h3>
                <p class="text-gray-500 text-sm">Industry-standard protection</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5 mx-auto">
                    <i class="fas fa-bolt text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Faster Performance</h3>
                <p class="text-gray-500 text-sm">Optimized loading speed</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5 mx-auto">
                    <i class="fas fa-smile text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Better User Experience</h3>
                <p class="text-gray-500 text-sm">Engaging & intuitive design</p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5 mx-auto">
                    <i class="fas fa-dollar-sign text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Cost-Effective</h3>
                <p class="text-gray-500 text-sm">Affordable management</p>
            </div>

        </div>

    </div>

</section>

<!-- WHY BUSINESSES TRUST ANPRIX -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">

        <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
            WHY BUSINESSES TRUST ANPRIX
        </p>

        <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
            Your Trusted WordPress Partner
        </h2>

        <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10 max-w-3xl mx-auto">
            Businesses choose Anprix Solutions because of our commitment to quality, transparent communication, timely project delivery, and long-term support. Our deep understanding of the local Ahmedabad market enables us to develop websites that effectively connect with your target audience.
        </p>

        <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10 max-w-3xl mx-auto">
            Whether you are a startup looking for your first website or an established company seeking advanced WordPress development services, our team is ready to help you achieve your digital goals.
        </p>

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
                    GET STARTED WITH ANPRIX
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Build Your WordPress Website?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    If you are looking for a reliable WordPress web development company in Ahmedabad, Gujarat, India, Anprix Solutions is your trusted technology partner. We combine creativity, technology, and business strategy to deliver websites that drive growth and success.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Start WordPress Project
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
