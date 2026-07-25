<?php
require_once 'config/config.php';
$page_title = "Digital Marketing Agency in Ahmedabad, India";
$seo_title = "Digital Marketing Agency in Ahmedabad, India | Anprix Solutions";
$page_description = "Anprix Solutions is a leading digital marketing agency in Ahmedabad, Gujarat, India. We help businesses generate quality leads, increase brand awareness, drive website traffic, and improve sales.";
$canonical_url = SITE_URL . '/digital-marketing';
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
                    Digital Marketing Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                    Digital Marketing Agency
                    <span class="green-text block sm:inline">
                        in Ahmedabad
                    </span>

                    Grow Your Business with Anprix Solutions

                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10">

                    Anprix Solutions is a leading digital marketing agency in Ahmedabad, Gujarat, India, dedicated to helping businesses generate quality leads, increase brand awareness, drive website traffic, and improve sales. We combine creativity, data-driven strategies, and advanced technology to deliver measurable business results.

                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="assets/images/digital.png"
                             alt="Anprix Solutions - Digital Marketing Services"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-bullhorn text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">Digital Marketing</p>
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

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- ========================= -->
        <!-- DM SERVICE 1: SEO -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-map-marker-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Local SEO</h3>
                        <p class="text-gray-500 text-sm">Google Business & Maps ranking</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-cog text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Technical SEO</h3>
                        <p class="text-gray-500 text-sm">Speed, structure & crawl optimization</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-file-alt text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">On-Page SEO</h3>
                        <p class="text-gray-500 text-sm">Keyword & content optimization</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-link text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Off-Page SEO</h3>
                        <p class="text-gray-500 text-sm">High-authority backlinks</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-shopping-cart text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">eCommerce SEO</h3>
                        <p class="text-gray-500 text-sm">Product & category optimization</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    SEO Services
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Rank Higher On <span class="green-text">Google</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We use proven SEO strategies to boost your organic rankings, drive qualified traffic, and generate more leads and sales from search engines.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Boost Your Rankings
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- DM SERVICE 2: Social Media -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Social Media Marketing
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Build Your <span class="green-text">Community</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Social media platforms provide excellent opportunities to connect with customers, build brand awareness, and drive engagement. We create compelling content, manage campaigns, and optimize strategies to help businesses build meaningful relationships with their audiences.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Facebook Marketing</h3>
                            <p class="text-gray-500 text-sm">Targeted ad campaigns & community building</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Instagram Marketing</h3>
                            <p class="text-gray-500 text-sm">Reels, stories, and growth campaigns</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">LinkedIn Marketing</h3>
                            <p class="text-gray-500 text-sm">B2B lead generation & branding</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">YouTube Marketing</h3>
                            <p class="text-gray-500 text-sm">Video content & advertising</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-facebook text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Facebook</h3>
                    <p class="text-gray-500 text-sm">Community building</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-instagram text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Instagram</h3>
                    <p class="text-gray-500 text-sm">Visual storytelling</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-linkedin-in text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">LinkedIn</h3>
                    <p class="text-gray-500 text-sm">B2B networking</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-youtube text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">YouTube</h3>
                    <p class="text-gray-500 text-sm">Video marketing</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- DM SERVICE 3: Content Marketing -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-pen-nib text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Blog Writing</h3>
                        <p class="text-gray-500 text-sm">SEO-optimized articles</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-video text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Video Content</h3>
                        <p class="text-gray-500 text-sm">Engaging visual storytelling</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-download text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Lead Magnets</h3>
                        <p class="text-gray-500 text-sm">Ebooks, whitepapers & guides</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-envelope-open-text text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Email Newsletters</h3>
                        <p class="text-gray-500 text-sm">Nurture sequences</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Content Marketing
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Content That <span class="green-text">Converts</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    From blog posts and videos to email campaigns and lead magnets, we create high-quality content that attracts, engages, and converts your target audience.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Content Marketing
                    </a>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- DM SERVICE 4: Google Ads Management -->
        <!-- ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Google Ads Management
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Data-Driven <span class="green-text">Google Ads Campaigns</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Google Ads is a powerful way to generate immediate visibility and qualified leads. We create highly targeted campaigns designed to maximize conversions while minimizing wasted ad spend.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-search"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Search Ads</h3>
                            <p class="text-gray-500 text-text-gray-500 text-sm">Text-based search campaigns</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-image"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Display Ads</h3>
                            <p class="text-gray-500 text-sm">Visual banner campaigns across the web</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Shopping Ads</h3>
                            <p class="text-gray-500 text-sm">Product listing campaigns</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Performance Max Campaigns</h3>
                            <p class="text-gray-500 text-sm">AI-powered campaign optimization</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-redo"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Remarketing Campaigns</h3>
                            <p class="text-gray-500 text-sm">Re-engage lost visitors</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-search text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Search Ads</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-image text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Display Ads</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-shopping-bag text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Shopping Ads</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-bolt text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Performance Max</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center sm:col-span-2">
                    <i class="fas fa-redo text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Remarketing</p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- DM SERVICE 5: Email Marketing -->
        <!-- ========================= -->
        <div id="email" class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-envelope text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Email Automation</h3>
                        <p class="text-gray-500 text-sm">Drip campaigns & sequences</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-users text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">List Segmentation</h3>
                        <p class="text-gray-500 text-sm">Targeted audience groups</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-chart-bar text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">A/B Testing</h3>
                        <p class="text-gray-500 text-sm">Optimize subject lines & content</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-file-invoice text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Newsletter Design</h3>
                        <p class="text-gray-500 text-sm">Beautiful branded templates</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Email Marketing
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Nurture Leads With <span class="green-text">Email</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Build relationships and drive conversions with automated email campaigns, personalized newsletters, and strategic lead nurturing sequences.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="hire.php" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Email Marketing
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE ANPRIX FOR DIGITAL MARKETING -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE ANPRIX SOLUTIONS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                Your Trusted Digital Marketing Agency
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                Our team of digital marketing experts understands that every business is unique. We develop customized marketing strategies tailored to your goals, industry, target audience, and budget.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

            <!-- Experienced Experts -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Experienced Digital Marketing Experts</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Our team has extensive experience managing successful campaigns across multiple industries. We stay updated with the latest digital marketing trends, platform updates, and best practices to ensure your campaigns remain competitive.
                </p>
            </div>

            <!-- Result-Oriented -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-bullseye text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Result-Oriented Strategies</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    We focus on outcomes that matter. Whether your goal is lead generation, increased website traffic, higher sales, or improved brand visibility, our strategies are designed to deliver measurable results.
                </p>
            </div>

            <!-- Customized Solutions -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-cogs text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Customized Marketing Solutions</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Every business has different challenges and objectives. We create personalized marketing plans that align with your business goals and maximize return on investment.
                </p>
            </div>

            <!-- Affordable Pricing -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-dollar-sign text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Affordable Pricing</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    We offer flexible and cost-effective digital marketing packages suitable for startups, SMEs, and established businesses. Our solutions are designed to provide value without compromising quality.
                </p>
            </div>

            <!-- Transparent Reporting -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-chart-bar text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Transparent Reporting</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Transparency is at the core of our approach. We provide regular performance reports, campaign insights, and actionable recommendations so you always know how your marketing investment is performing.
                </p>
            </div>

            <!-- Dedicated Account Management -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-user-tie text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Dedicated Account Management</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Every client receives dedicated support from experienced professionals who monitor campaigns, provide updates, and ensure smooth communication throughout the project.
                </p>
            </div>

            <!-- Data-Driven -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-database text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Data-Driven Campaign Optimization</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    Our decisions are backed by data. We continuously analyze campaign performance, audience behavior, and conversion metrics to improve results and maximize efficiency.
                </p>
            </div>

            <!-- Long-Term Growth -->
            <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 hover:-translate-y-1 sm:col-span-2 lg:col-span-1">
                <div class="w-14 h-14 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-rocket text-2xl"></i>
                </div>
                <h3 class="text-xl md:text-xl font-bold mb-3">Long-Term Growth Focus</h3>
                <p class="text-gray-400 leading-7 text-sm md:text-base">
                    We don't believe in short-term wins alone. Our goal is to build sustainable digital growth strategies that help your business succeed over the long term.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- DIGITAL MARKETING TOOLS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    TOOLS & PLATFORMS
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Use The Best
                    <span class="green-text block sm:inline">Marketing Tools</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From Google Analytics and SEMrush to HubSpot and Mailchimp, we leverage industry-leading tools to execute and measure your digital marketing campaigns.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-google text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Google Analytics</h3>
                    <p class="text-gray-500 text-sm mt-2">Data & insights</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-facebook text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Meta Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">Facebook & Instagram</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-envelope text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Mailchimp</h3>
                    <p class="text-gray-500 text-sm mt-2">Email marketing</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-chart-bar text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">SEMrush</h3>
                    <p class="text-gray-500 text-sm mt-2">SEO & competitive</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-linkedin-in text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">LinkedIn Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">B2B marketing</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-hashtag text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">HubSpot</h3>
                    <p class="text-gray-500 text-sm mt-2">CRM & automation</p>
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
                    GROW YOUR BUSINESS
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Grow Your Online Presence?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    From SEO and Google Ads to social media marketing and conversion optimization, we provide comprehensive digital marketing services that help businesses thrive in the digital age.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Campaign
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
