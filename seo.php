<?php
require_once 'config/config.php';
$page_title = "SEO Services";
$page_description = "Anprix offers technical SEO, on-page optimization, local SEO, link building, and content SEO services to boost your Google rankings and organic traffic.";
$canonical_url = SITE_URL . '/seo';
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
                SEO Services
            </p>

            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                <span class="green-text block sm:inline">
                    SEO Optimization
                </span>

                To Rank Higher on Google

            </h1>

            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">

                Anprix delivers data-driven SEO services including technical audits, on-page optimization, local SEO, link building, and content strategies to boost your organic rankings and drive qualified traffic.

            </p>

        </div>

    </div>

</section>

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- ========================= -->
        <!-- SEO SERVICE 1: Technical SEO -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-tachometer-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Site Speed Optimization</h3>
                        <p class="text-gray-500 text-sm">Core Web Vitals & page speed</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-sitemap text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Site Architecture</h3>
                        <p class="text-gray-500 text-sm">Crawl optimization & internal linking</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-mobile-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Mobile Optimization</h3>
                        <p class="text-gray-500 text-sm">Mobile-first indexing ready</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-code text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Schema Markup</h3>
                        <p class="text-gray-500 text-sm">Structured data for rich snippets</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Technical SEO
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Optimize Your <span class="green-text">Site Foundation</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We conduct comprehensive technical SEO audits to identify and fix issues that prevent search engines from crawling, indexing, and ranking your website effectively.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Get Technical SEO Audit
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SEO SERVICE 2: On-Page SEO -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    On-Page SEO
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Optimize Every <span class="green-text">Page</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We optimize meta tags, headers, content structure, and internal links to ensure each page on your website is fully optimized for its target keywords.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Meta Tags & Headers</h4>
                            <p class="text-gray-500 text-sm">Title tags, meta descriptions & H1-H6</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-link"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Internal Linking</h4>
                            <p class="text-gray-500 text-sm">Strategic link architecture</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-image"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Image Optimization</h4>
                            <p class="text-gray-500 text-sm">Alt tags, compression & lazy loading</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-tag text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Title Tags</h3>
                    <p class="text-gray-500 text-sm">Keyword-optimized</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-paragraph text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Content</h3>
                    <p class="text-gray-500 text-sm">Engaging & relevant</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-code-branch text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">URL Structure</h3>
                    <p class="text-gray-500 text-sm">Clean & readable</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-shield-alt text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">SSL Security</h3>
                    <p class="text-gray-500 text-sm">HTTPS enforced</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SEO SERVICE 3: Local SEO -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-map-marker-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Google Business Profile</h3>
                        <p class="text-gray-500 text-sm">Optimization & verification</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-star text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Review Management</h3>
                        <p class="text-gray-500 text-sm">Reputation & ratings</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-list text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Local Citations</h3>
                        <p class="text-gray-500 text-sm">NAP consistency across directories</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-search-location text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Local Keywords</h3>
                        <p class="text-gray-500 text-sm">City & region-specific targeting</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Local SEO
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Dominate Local <span class="green-text">Search</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Help local customers find your business with optimized Google Business Profile, local citations, reviews management, and location-specific keyword targeting.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Boost Local SEO
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SEO SERVICE 4: Link Building -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Link Building
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Build Authority With <span class="green-text">Quality Backlinks</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Earn high-authority backlinks from reputable websites in your industry to boost your domain authority, referral traffic, and search engine rankings.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Guest Blogging</h4>
                            <p class="text-gray-500 text-sm">High-quality content on relevant sites</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Outreach Campaigns</h4>
                            <p class="text-gray-500 text-sm">Strategic partnership building</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Toxic Link Removal</h4>
                            <p class="text-gray-500 text-sm">Disavow harmful backlinks</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-external-link-alt text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Guest Posts</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-newspaper text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>PR Links</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-trophy text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>High DA Links</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-chart-line text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Authority Growth</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SEO SERVICE 5: Content SEO -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-key text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Keyword Research</h3>
                        <p class="text-gray-500 text-sm">High-intent keyword discovery</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-file-alt text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Blog Optimization</h3>
                        <p class="text-gray-500 text-sm">SEO-optimized articles & guides</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-edit text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Content Refresh</h3>
                        <p class="text-gray-500 text-sm">Update old content for rankings</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-robot text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Topic Clusters</h3>
                        <p class="text-gray-500 text-sm">Pillar pages & content hubs</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Content SEO
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">
                    Content That <span class="green-text">Ranks</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Create content that both search engines and users love with strategic keyword research, topic clustering, and comprehensive content optimization.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Content SEO
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY SEO -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE SEO
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 md:mb-8 leading-tight">
                Benefits of SEO
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                SEO drives sustainable, long-term organic traffic and builds credibility for your brand in search results.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black green-text mb-4">01</div>
                <i class="fas fa-chart-line text-3xl mb-4 text-[#00ffb3]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Organic Traffic</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Free, consistent traffic from search engines.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black blue-text mb-4">02</div>
                <i class="fas fa-dollar-sign text-3xl mb-4 text-[#00b7ff]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Cost Effective</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    No ongoing ad costs; traffic compounds over time.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black green-text mb-4">03</div>
                <i class="fas fa-shield-alt text-3xl mb-4 text-[#00ffb3]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Brand Credibility</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Higher rankings build trust and authority.
                </p>
            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="text-4xl font-black blue-text mb-4">04</div>
                <i class="fas fa-trophy text-3xl mb-4 text-[#00b7ff]"></i>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Long-Term Results</h3>
                <p class="text-gray-500 leading-7 text-sm md:text-base">
                    Sustainable rankings that last for years.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- SEO TOOLS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    SEO TOOLS
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    We Use Industry-Leading
                    <span class="green-text block sm:inline">SEO Tools</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From keyword research and rank tracking to site audits and competitor analysis, we leverage the best SEO tools to deliver measurable results.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-chart-bar text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">SEMrush</h3>
                    <p class="text-gray-500 text-sm mt-2">Research & audits</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-google text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Google Search Console</h3>
                    <p class="text-gray-500 text-sm mt-2">Monitoring & insights</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-google text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Google Analytics</h3>
                    <p class="text-gray-500 text-sm mt-2">Traffic analysis</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-link text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Ahrefs</h3>
                    <p class="text-gray-500 text-sm mt-2">Backlink analysis</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-tachometer-alt text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">GTmetrix</h3>
                    <p class="text-gray-500 text-sm mt-2">Speed optimization</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-key text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Moz</h3>
                    <p class="text-gray-500 text-sm mt-2">Domain authority</p>
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
                    START RANKING HIGHER
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Rank Higher on Google?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with Anprix and get a complete SEO strategy with technical audits, content optimization, and link building to grow your organic traffic.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your SEO Journey
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
