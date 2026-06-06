<?php
require_once 'includes/config.php';
$page_title = "Portfolio";
$page_description = "Explore our portfolio of website development, Shopify stores, SEO optimization, branding, and digital marketing projects delivered for modern businesses.";
$canonical_url = SITE_URL . '/portfolio';
require_once 'includes/header.php';
?>
<?php
$portfolio_items = [
    [
        'id' => 1,
        'category' => 'web',
        'type' => 'Website Design',
        'type_color' => 'green',
        'subtitle' => 'Corporate Website',
        'title' => 'Finance Business Platform',
        'description' => 'Modern responsive website with premium UI/UX and conversion-focused design.',
        'technology' => 'Laravel Development',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Responsive Design', 'Fast Loading', 'SEO Optimized']
    ],
    [
        'id' => 2,
        'category' => 'shopify',
        'type' => 'Shopify Store',
        'type_color' => 'blue',
        'subtitle' => 'eCommerce Project',
        'title' => 'Fashion Shopify Store',
        'description' => 'Custom Shopify development with advanced product and checkout optimization.',
        'technology' => 'Shopify Development',
        'image' => 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Custom Theme', 'Payment Gateway', 'Inventory Management']
    ],
    [
        'id' => 3,
        'category' => 'seo',
        'type' => 'SEO Optimization',
        'type_color' => 'green',
        'subtitle' => 'SEO Project',
        'title' => 'Organic Traffic Growth',
        'description' => 'Improved rankings and organic traffic using technical SEO and content strategy.',
        'technology' => 'SEO Marketing',
        'image' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Keyword Research', 'Backlink Building', 'Analytics']
    ],
    [
        'id' => 4,
        'category' => 'marketing',
        'type' => 'Branding',
        'type_color' => 'blue',
        'subtitle' => 'Digital Branding',
        'title' => 'Startup Brand Identity',
        'description' => 'Complete branding and digital presence for startup businesses and enterprises.',
        'technology' => 'Brand Strategy',
        'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Logo Design', 'Brand Guidelines', 'Social Media Kit']
    ],
    [
        'id' => 5,
        'category' => 'marketing',
        'type' => 'Google Ads',
        'type_color' => 'green',
        'subtitle' => 'PPC Marketing',
        'title' => 'Lead Generation Campaign',
        'description' => 'High-converting Google Ads campaigns designed for lead generation and sales growth.',
        'technology' => 'Paid Advertising',
        'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Keyword Research', 'Ad Creation', 'Conversion Tracking']
    ],
    [
        'id' => 6,
        'category' => 'web',
        'type' => 'Development',
        'type_color' => 'blue',
        'subtitle' => 'Web Application',
        'title' => 'Custom Business Dashboard',
        'description' => 'Advanced dashboard system with analytics and business automation tools.',
        'technology' => 'Custom Development',
        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Real-time Analytics', 'User Management', 'API Integration']
    ],
    [
        'id' => 7,
        'category' => 'web',
        'type' => 'Website Design',
        'type_color' => 'green',
        'subtitle' => 'Healthcare Website',
        'title' => 'Medical Clinic Portal',
        'description' => 'Patient-centric healthcare website with appointment booking and telemedicine integration.',
        'technology' => 'WordPress Development',
        'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Appointment System', 'Patient Portal', 'HIPAA Compliant']
    ],
    [
        'id' => 8,
        'category' => 'shopify',
        'type' => 'Shopify Store',
        'type_color' => 'blue',
        'subtitle' => 'Dropshipping Store',
        'title' => 'Electronics Shopify Store',
        'description' => 'High-performance electronics store with automated dropshipping integration.',
        'technology' => 'Shopify + Oberlo',
        'image' => 'https://images.unsplash.com/photo-1556742031-c6961e8560b0?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Dropshipping Setup', 'Automated Orders', 'Price Optimization']
    ],
    [
        'id' => 9,
        'category' => 'seo',
        'type' => 'Local SEO',
        'type_color' => 'green',
        'subtitle' => 'Local Business SEO',
        'title' => 'Restaurant SEO Campaign',
        'description' => 'Local SEO strategy that increased foot traffic and online orders by 150%.',
        'technology' => 'Local SEO',
        'image' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1200',
        'link' => 'contact.php',
        'features' => ['Google Maps Optimization', 'Review Management', 'Local Citations']
    ]
];
?>
<!-- HERO -->
<section class="pt-28 sm:pt-32 md:pt-40 pb-20 sm:pb-24 md:pb-32 relative overflow-hidden">

    <!-- BACKGROUND BLURS -->
    <div
        class="absolute top-0 left-[-100px] md:left-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div
        class="absolute bottom-0 right-[-100px] md:right-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="max-w-4xl">

            <!-- LABEL -->
            <p
                class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                OUR PORTFOLIO
            </p>

            <!-- TITLE -->
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight lg:leading-[1.1] mb-8 md:mb-10">

                Creative

                <span class="green-text block sm:inline">
                    Digital Projects
                </span>

                We Have Delivered

            </h1>

            <!-- DESCRIPTION -->
            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">

                Explore our portfolio of website development, Shopify stores,
                SEO optimization, branding, and digital marketing projects
                created for modern businesses.

            </p>

        </div>

    </div>

</section>
<!-- FILTER SECTION -->
<section class="py-10 md:py-12 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-5">

            <button
                class="category-btn active px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]"
                data-filter="all">
                All Projects
            </button>

            <button
                class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]"
                data-filter="web">
                Website Design
            </button>

            <button
                class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00b7ff]"
                data-filter="shopify">
                Shopify
            </button>

            <button
                class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]"
                data-filter="seo">
                SEO
            </button>

            <button
                class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00b7ff]"
                data-filter="marketing">
                Marketing
            </button>

        </div>

    </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="py-16 md:py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8" id="portfolio-grid">

            <?php foreach($portfolio_items as $item): ?>

            <!-- CARD -->
            <div class="portfolio-card glass-card rounded-[24px] md:rounded-[35px] overflow-hidden group transition-transform hover:-translate-y-1"
                data-category="<?php echo $item['category']; ?>" data-id="<?php echo $item['id']; ?>">

                <!-- IMAGE -->
                <div class="relative h-[220px] sm:h-[260px] md:h-[320px] overflow-hidden">

                    <img src="<?php echo $item['image']; ?>"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="<?php echo $item['title']; ?>" loading="lazy">

                    <!-- TYPE BADGE -->
                    <div class="absolute top-4 left-4 md:top-5 md:left-5">
                        <span
                            class="<?php echo $item['type_color'] == 'green' ? 'bg-[#00ffb3]' : 'bg-[#00b7ff]'; ?> text-black text-xs sm:text-sm font-bold px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-lg">
                            <?php echo $item['type']; ?>
                        </span>
                    </div>

                    <!-- HOVER OVERLAY -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4 md:p-6">

                        <div class="flex flex-wrap gap-2 justify-center">

                            <?php foreach($item['features'] as $feature): ?>

                            <span
                                class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] sm:text-xs text-white">
                                <?php echo $feature; ?>
                            </span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-6 md:p-8">

                    <p
                        class="<?php echo $item['type_color'] == 'green' ? 'green-text' : 'blue-text'; ?> uppercase tracking-[3px] text-xs mb-3 md:mb-4">

                        <?php echo $item['subtitle']; ?>

                    </p>

                    <h3
                        class="text-xl sm:text-2xl md:text-3xl font-black mb-3 md:mb-4 transition-colors duration-300 group-hover:text-[#00ffb3]">

                        <?php echo $item['title']; ?>

                    </h3>

                    <p class="text-gray-400 text-sm md:text-base leading-7 md:leading-8 mb-5 md:mb-6">

                        <?php echo $item['description']; ?>

                    </p>

                    <!-- TECH -->
                    <div class="flex flex-wrap gap-2 mb-6">

                        <span class="text-[10px] sm:text-xs px-3 py-1 rounded-full bg-white/5 border border-white/10">

                            <?php echo $item['technology']; ?>

                        </span>

                    </div>

                    <!-- FOOTER -->
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">

                        <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-500">

                            <i class="fas fa-star text-yellow-500 text-xs sm:text-sm"></i>
                            <span>4.9 Rating</span>

                        </div>

                        <a href="<?php echo $item['link']; ?>?project=<?php echo $item['id']; ?>"
                            class="<?php echo $item['type_color'] == 'green' ? 'green-text' : 'blue-text'; ?> font-semibold text-sm sm:text-base hover:underline inline-flex items-center gap-2 group/link">

                            View Project

                            <i class="fas fa-arrow-right group-hover/link:translate-x-1 transition-transform"></i>

                        </a>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

        <!-- LOAD MORE -->
        <div class="text-center mt-12 md:mt-16">

            <button id="loadMoreBtn"
                class="btn-outline px-6 md:px-8 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2">

                Load More Projects
                <i class="fas fa-arrow-down"></i>

            </button>

        </div>

    </div>
</section>

<!-- Portfolio Stats Section -->
<section class="py-12 md:py-16 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <!-- STAT 1 -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-transform">

                <div class="text-4xl sm:text-5xl font-black green-text mb-3 counter flex items-center justify-center gap-2" data-target="250">
                    <i class="fa-solid fa-briefcase text-xl sm:text-2xl"></i>
                    <span>0</span>
                </div>

                <p class="text-gray-500 text-sm sm:text-base">
                    Projects Completed
                </p>

            </div>

            <!-- STAT 2 -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-transform">

                <div class="text-4xl sm:text-5xl font-black blue-text mb-3 counter flex items-center justify-center gap-2" data-target="150">
                    <i class="fa-solid fa-users text-xl sm:text-2xl"></i>
                    <span>0</span>
                </div>

                <p class="text-gray-500 text-sm sm:text-base">
                    Happy Clients
                </p>

            </div>

            <!-- STAT 3 -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-transform">

                <div class="text-4xl sm:text-5xl font-black green-text mb-3 counter flex items-center justify-center gap-2" data-target="98">
                    <i class="fa-solid fa-chart-line text-xl sm:text-2xl"></i>
                    <span>0</span>
                </div>

                <p class="text-gray-500 text-sm sm:text-base">
                    Success Rate (%)
                </p>

            </div>

            <!-- STAT 4 -->
            <div class="glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-transform">

                <div class="text-4xl sm:text-5xl font-black blue-text mb-3 counter flex items-center justify-center gap-2" data-target="24">
                    <i class="fa-solid fa-headset text-xl sm:text-2xl"></i>
                    <span>0</span>
                </div>

                <p class="text-gray-500 text-sm sm:text-base">
                    Hour Support
                </p>

            </div>

        </div>

    </div>
</section>

<!-- CTA SECTION - SIMPLE VERSION -->
<section class="py-16 md:py-28 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div
            class="glass-card rounded-[28px] sm:rounded-[40px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <!-- BACKGROUND EFFECTS -->
            <div class="absolute top-[-60px] left-[-60px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>

            <div class="absolute bottom-[-60px] right-[-60px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <!-- LABEL -->
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-sm">
                    START YOUR PROJECT
                </p>

                <!-- TITLE -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Build Your Next Digital Project?
                </h2>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-8 md:mb-10">
                    Work with Anprix to create modern websites, Shopify stores,
                    SEO campaigns, and powerful marketing solutions.
                </p>

                <!-- BUTTONS -->
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <!-- PRIMARY -->
                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">

                        <i class="fas fa-rocket"></i>
                        Hire Us
                    </a>

                    <!-- SECONDARY -->
                    <a href="contact.php"
                        class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">

                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?php require_once 'includes/footer.php'; ?>