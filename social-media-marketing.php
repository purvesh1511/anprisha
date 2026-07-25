<?php
require_once 'config/config.php';
require_once 'config/seo_keyword.php';
$page_key = 'social-media-marketing';
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
                    Social Media Marketing Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                    Best Social Media Marketing Agency in
                    <span class="green-text block sm:inline">
                        Ahmedabad
                    </span>

                    Grow Your Brand

                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10">

                    In today's hyper-connected digital landscape, having a strong online presence is essential for sustainable business growth. As a premier social media marketing agency in Ahmedabad, we help local businesses, ambitious startups, and established enterprises build influence, engage high-intent audiences, and convert followers into loyal customers.

                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="assets/images/social.png"
                             alt="Best Social Media Marketing Agency in Ahmedabad - Anprix Solutions"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-share-alt text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">Social Media</p>
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
                                <p class="text-sm font-semibold">Brand Growth</p>
                            </div>
                        </div>
                    </div>

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
                <div class="text-2xl sm:text-3xl font-black green-text counter" data-target="200">
                    <span>200</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Brands Served</p>
            </div>
            <div class="text-center fade-in-up delay-200">
                <div class="text-2xl sm:text-3xl font-black blue-text counter" data-target="500">
                    <span>500</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Campaigns Delivered</p>
            </div>
            <div class="text-center fade-in-up delay-300">
                <div class="text-2xl sm:text-3xl font-black green-text counter" data-target="10">
                    <span>10</span>M+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Audience Reached</p>
            </div>
            <div class="text-center fade-in-up delay-400">
                <div class="text-2xl sm:text-3xl font-black blue-text counter" data-target="5">
                    <span>5</span>x
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Average Engagement Growth</p>
            </div>
        </div>
    </div>
</section>

<!-- DATA-DRIVEN SOCIAL MEDIA SERVICES -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- INTRO HEADING -->
        <div class="text-center fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                OUR SOCIAL MEDIA SERVICES
            </p>
            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 leading-tight">
                Data-Driven Social Media Marketing<br class="hidden sm:block"> Services in Ahmedabad
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Navigating the changing algorithms across Instagram, Meta, LinkedIn, and YouTube requires expertise and real-time strategy. As a full-service social media company in Ahmedabad, our focus goes beyond likes and vanity metrics to deliver real business impact and measurable ROI.
            </p>
        </div>

        <!-- ========================= -->
        <!-- SERVICE 1: Strategy & Planning -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-chess text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Audience Persona Research</h3>
                        <p class="text-gray-500 text-sm">Deep-dive into your ideal customer profiles</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-map text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Local Market Dynamics</h3>
                        <p class="text-gray-500 text-sm">Ahmedabad & Gujarat market insights</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-bullseye text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Revenue-Focused Roadmaps</h3>
                        <p class="text-gray-500 text-sm">Custom strategies tied to business goals</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-calendar-check text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Content Calendar</h3>
                        <p class="text-gray-500 text-sm">Planned posting schedules & campaign timelines</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Strategy & Planning
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Custom <span class="green-text">Social Media Strategy</span><br> & Planning
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Social Media Strategy & Planning: Custom roadmaps tailored to your target audience persona, local market dynamics, and revenue objectives. We create data-backed strategies that align your social presence with real business outcomes.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Build Your Strategy
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SERVICE 2: Content Creation -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Content Creation
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Content Creation & <span class="green-text">Video Production</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    High-converting Reels, carousel posts, brand storytelling, and engaging visual graphics produced in-house. Our creative team crafts scroll-stopping content that resonates with your audience and drives engagement.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-film"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Reels & Short-Form Video</h3>
                            <p class="text-gray-500 text-sm">Trending, high-engagement video content</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-images"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Carousel Posts & Infographics</h3>
                            <p class="text-gray-500 text-sm">Educational & visually compelling designs</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Brand Storytelling</h3>
                            <p class="text-gray-500 text-sm">Authentic narratives that build connection</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Visual Graphics</h3>
                            <p class="text-gray-500 text-sm">Professional designs aligned with brand identity</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-film text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Reels</h3>
                    <p class="text-gray-500 text-sm">Short-form viral videos</p>
                </div>

                <div class="bg-black/4xl rounded-2xl p-6 md:p-8">
                    <i class="fas fa-images text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Carousels</h3>
                    <p class="text-gray-500 text-sm">Swipe-worthy content</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-video text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Video Production</h3>
                    <p class="text-gray-500 text-sm">Professional brand videos</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fas fa-paint-brush text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Graphics</h3>
                    <p class="text-gray-500 text-sm">Scroll-stopping visuals</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SERVICE 3: Paid Social Advertising -->
        <!-- ========================= -->
        <div id="paid" class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-facebook text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Meta Ads (Facebook & Instagram)</h3>
                        <p class="text-gray-500 text-sm">Precision-targeted social ad campaigns</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-linkedin text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">LinkedIn Advertising</h3>
                        <p class="text-gray-500 text-sm">B2B lead generation & thought leadership</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-youtube text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">YouTube Ads</h3>
                        <p class="text-gray-500 text-sm">Video-first campaigns for maximum reach</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-redo text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Retargeting Campaigns</h3>
                        <p class="text-gray-500 text-sm">Re-engage warm audiences for conversions</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Paid Social Advertising
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Targeted Paid <span class="green-text">Social Advertising</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Laser-focused ad campaigns on Meta, LinkedIn, and YouTube engineered to capture leads and drive online sales. We optimize every rupee of your ad spend to deliver maximum conversions and measurable ROI.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Launch Ad Campaigns
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SERVICE 4: Community Management -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Community Management
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Build Authentic <span class="green-text">Community Trust</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Proactive engagement, DM responses, and comment management to foster authentic trust with your audience. We turn followers into brand advocates through genuine, timely interactions.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Comment Management</h3>
                            <p class="text-gray-500 text-sm">Timely, brand-aligned responses</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">DM Responses</h3>
                            <p class="text-gray-500 text-sm">Direct message engagement & support</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Audience Engagement</h3>
                            <p class="text-gray-500 text-sm">Active participation in conversations</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Brand Advocacy</h3>
                            <p class="text-gray-500 text-sm">Turning followers into loyal advocates</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-comments text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Comment Management</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-envelope-open-text text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>DM Engagement</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-users text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Audience Growth</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-heart text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Brand Loyalty</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE ANPRIX -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20 fade-in-up">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE ANPRIX SOLUTIONS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                Why Partner with a Leading<br class="hidden sm:block"> Social Media Agency in Ahmedabad?
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                Choosing the best social media marketing agency in Ahmedabad means working with creative specialists who understand Gujarat's fast-moving business ecosystem. Among the top-rated social media marketing companies in Ahmedabad, our team blends data-led performance marketing with viral, trend-driven creative concepts.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

            <!-- Data-Led Performance -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-100">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Data-Led Performance Marketing</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Every campaign is backed by analytics. We track engagement, reach, conversions, and ROI to ensure your social media investment delivers measurable business results.
                </p>
            </div>

            <!-- Trend-Driven Creative -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-200">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-fire text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Trend-Driven Creative Concepts</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Our creative team stays ahead of viral trends, platform updates, and content formats to keep your brand relevant, engaging, and always in the conversation.
                </p>
            </div>

            <!-- Gujarat Market Expertise -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-300">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-map-marked-alt text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Gujarat Market Expertise</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Deep understanding of Gujarat's fast-moving business ecosystem. We craft campaigns that resonate with local audiences while maintaining global standards of quality.
                </p>
            </div>

            <!-- Multi-Platform Mastery -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-100">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-layer-group text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Multi-Platform Mastery</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    From Instagram and Facebook to LinkedIn and YouTube, we manage and optimize your presence across all major platforms for maximum impact and reach.
                </p>
            </div>

            <!-- Full-Service Capability -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-200">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-cogs text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Full-Service Capability</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Whether you need end-to-end management from a full-scale social media marketing company in Ahmedabad or specialized campaigns for brand awareness, we deliver.
                </p>
            </div>

            <!-- Competitive Edge -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 fade-in-up delay-300">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-trophy text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Distinct Competitive Edge</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Our social media marketing in Ahmedabad solutions give your business a distinct competitive edge—standing out in crowded feeds with compelling, conversion-focused content.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- SOCIAL MEDIA PLATFORMS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div class="fade-in-up">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    PLATFORMS WE MANAGE
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Master Every
                    <span class="green-text block sm:inline">Social Platform</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From algorithm-friendly Instagram Reels to LinkedIn thought leadership and YouTube video strategies, we optimize your brand's presence where your audience spends their time.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-instagram text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Instagram</h3>
                    <p class="text-gray-500 text-sm mt-2">Reels & growth</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-facebook text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Facebook</h3>
                    <p class="text-gray-500 text-sm mt-2">Ads & community</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-linkedin-in text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">LinkedIn</h3>
                    <p class="text-gray-500 text-sm mt-2">B2B networking</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-youtube text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">YouTube</h3>
                    <p class="text-gray-500 text-sm mt-2">Video marketing</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-twitter text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">X (Twitter)</h3>
                    <p class="text-gray-500 text-sm mt-2">Real-time engagement</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-pinterest text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Pinterest</h3>
                    <p class="text-gray-500 text-sm mt-2">Visual discovery</p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden fade-in-up">

            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full">
            </div>

            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full">
            </div>

            <div class="relative z-10">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    SCALE YOUR DIGITAL IMPACT TODAY
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready to Transform Your Brand's Digital Reach?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with a trusted social media agency in Ahmedabad dedicated to turning social channels into consistent revenue drivers. Contact the best social media marketing agency in Ahmedabad today for a complimentary social audit!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Get Free Social Audit
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
