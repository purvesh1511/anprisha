<?php
$page_title = "Contact Us";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- HERO -->
<section class="hero-gradient pt-28 sm:pt-32 md:pt-40 pb-20 sm:pb-24 md:pb-32 relative overflow-hidden">

    <!-- BACKGROUND EFFECTS -->
    <div
        class="absolute top-[-80px] left-[-80px] sm:top-0 sm:left-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div
        class="absolute bottom-[-80px] right-[-80px] sm:bottom-0 sm:right-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="max-w-4xl">

            <!-- LABEL -->
            <p
                class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2">

                <i class="fas fa-envelope"></i>
                CONTACT US

            </p>

            <!-- TITLE -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black leading-tight mb-6 sm:mb-8 md:mb-10">

                Let's Build Your
                <span class="green-text block sm:inline">
                    Next Digital Project
                </span>

            </h1>

            <!-- DESCRIPTION -->
            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl">

                Get in touch with Anprix for
                <span class="text-white font-medium">web development</span>,
                <span class="text-white font-medium">SEO</span>,
                <span class="text-white font-medium">advertising</span>,
                and <span class="text-white font-medium">digital marketing solutions</span>.

            </p>

            <!-- QUICK HIGHLIGHTS -->
            <div class="flex flex-wrap gap-4 mt-8 text-sm text-gray-300">

                <div class="flex items-center gap-2">
                    <i class="fas fa-code text-[#00ffb3]"></i>
                    Web Development
                </div>

                <div class="flex items-center gap-2">
                    <i class="fas fa-search text-[#00b7ff]"></i>
                    SEO Services
                </div>

                <div class="flex items-center gap-2">
                    <i class="fas fa-bullhorn text-[#00ffb3]"></i>
                    Marketing
                </div>

                <div class="flex items-center gap-2">
                    <i class="fas fa-shopping-cart text-[#00b7ff]"></i>
                    Shopify
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CONTACT SECTION (UPGRADED) -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-14 lg:gap-16 items-start">

            <!-- LEFT -->
            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm flex items-center gap-2">
                    <i class="fas fa-comments"></i>
                    GET IN TOUCH
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    We Are Ready To <span class="green-text">Grow Your Business</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10 md:mb-12">
                    Contact our team for website development, SEO, Shopify, and digital marketing.
                    We respond quickly and deliver scalable digital solutions.
                </p>

                <!-- CONTACT CARDS -->
                <div class="space-y-5 md:space-y-6">

                    <!-- EMAIL -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[28px] p-6 md:p-8 flex gap-5 hover:border-[#00ffb3] transition">

                        <div
                            class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] text-2xl">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div>
                            <p class="text-gray-500 uppercase tracking-[3px] text-xs mb-2">Email</p>

                            <h3 class="text-xl md:text-2xl font-bold">
                                <?php echo SITE_EMAIL; ?>
                            </h3>

                            <a href="mailto:<?php echo SITE_EMAIL; ?>"
                                class="text-sm text-[#00ffb3] hover:underline inline-flex items-center gap-2 mt-2">
                                Send Email <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- LOCATION -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[28px] p-6 md:p-8 flex gap-5 hover:border-[#00b7ff] transition">

                        <div
                            class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] text-2xl">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <div>
                            <p class="text-gray-500 uppercase tracking-[3px] text-xs mb-2">Office</p>

                            <h3 class="text-xl md:text-2xl font-bold">
                                <?php echo SITE_COUNTRY; ?>
                            </h3>

                            <p class="text-gray-500 text-sm md:text-base mt-1">
                                <?php echo SITE_ADDRESS; ?>
                            </p>

                            <div class="flex items-center gap-2 mt-3 text-xs text-gray-500">
                                <i class="fas fa-clock"></i>
                                <?php echo OFFICE_HOURS_WEEKDAY; ?>
                            </div>
                        </div>
                    </div>

                    <!-- SUPPORT -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[28px] p-6 md:p-8 flex gap-5 hover:border-[#00ffb3] transition">

                        <div
                            class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] text-2xl">
                            <i class="fas fa-headset"></i>
                        </div>

                        <div>
                            <p class="text-gray-500 uppercase tracking-[3px] text-xs mb-2">Support</p>

                            <h3 class="text-xl md:text-2xl font-bold">24/7 Availability</h3>

                            <p class="text-gray-500 text-sm md:text-base">
                                Fast response for urgent project requests
                            </p>

                            <div class="flex items-center gap-3 mt-3 text-xs text-gray-500">
                                <i class="fas fa-phone"></i>

                                <a href="tel:<?php echo SITE_PHONE; ?>" class="hover:text-[#00ffb3] transition">
                                    <?php echo SITE_PHONE; ?>
                                </a>

                                <span>|</span>

                                <i class="fab fa-whatsapp"></i>
                                WhatsApp
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="glass-card rounded-2xl md:rounded-[40px] p-6 sm:p-8 md:p-10 relative overflow-hidden">

                <!-- GLOW -->
                <div class="absolute top-[-60px] left-[-60px] w-56 h-56 bg-[#00ffb3]/10 blur-[120px] rounded-full">
                </div>
                <div class="absolute bottom-[-60px] right-[-60px] w-56 h-56 bg-[#00b7ff]/10 blur-[120px] rounded-full">
                </div>

                <div class="relative z-10">

                    <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm flex items-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        SEND MESSAGE
                    </p>

                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-black mb-3">
                        Start Your Project Today
                    </h3>

                    <p class="text-gray-400 text-sm md:text-base mb-6 md:mb-8">
                        We usually respond within 24 hours.
                    </p>

                    <!-- FORM -->
                    <form id="contactForm" class="space-y-4 md:space-y-5">
                        <input type="hidden" name="form_type" value="contact">
                        <!-- NAME -->
                        <input type="text"
                            name="name"
                            placeholder="Full Name *"
                            required
                            class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 md:py-4 text-white focus:border-[#00ffb3] outline-none">
                        <!-- EMAIL -->
                        <input type="email"
                            name="email"
                            placeholder="Email *"
                            required
                            class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 md:py-4 text-white focus:border-[#00ffb3] outline-none">
                        <!-- PHONE -->
                        <input type="tel"
                            name="phone"
                            placeholder="<?php echo SITE_PHONE; ?>"
                            class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 md:py-4 text-white focus:border-[#00ffb3] outline-none">
                        <!-- MESSAGE -->
                        <textarea name="message"
                            rows="5"
                            placeholder="Your Message *"
                            required
                            class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 md:py-4 text-white resize-none focus:border-[#00ffb3] outline-none"></textarea>
                        <!-- CHAR COUNTER -->
                        <div class="text-right text-xs text-gray-500">
                            <span id="charCount">0</span>/2000
                        </div>
                        <!-- SUBMIT BUTTON -->
                        <button type="submit"
                            class="btn-primary w-full py-4 rounded-xl font-semibold hover:scale-[1.02] transition flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            Submit Inquiry
                        </button>
                        <!-- FOOTER TEXT -->
                        <p class="text-center text-xs text-gray-500 mt-3 flex items-center justify-center gap-2">
                            <i class="fas fa-lock"></i>
                            Secure & Confidential
                        </p>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- MAP SECTION -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-2xl sm:rounded-3xl md:rounded-[40px] overflow-hidden relative">

            <!-- BACKGROUND -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#00ffb3]/10 to-[#00b7ff]/10"></div>

            <div class="relative z-10 p-8 sm:p-12 md:p-16 lg:p-20 text-center">

                <!-- LABEL -->
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-sm">
                    GLOBAL SERVICES
                </p>

                <!-- TITLE -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 md:mb-8">
                    Serving Clients Worldwide
                </h2>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 max-w-3xl mx-auto mb-10 md:mb-12">
                    Anprix provides website development,
                    SEO, Shopify, and marketing services
                    for startups, brands, and enterprises across the globe.
                </p>

                <!-- STATS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">

                    <!-- ITEM 1 -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[30px] p-6 sm:p-8 md:p-10 hover:-translate-y-1 transition">
                        <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 md:mb-4 counter"
                            data-target="250">
                            <span>250</span>+
                        </h3>
                        <p class="text-gray-500 text-sm md:text-base">Completed Projects</p>
                    </div>

                    <!-- ITEM 2 -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[30px] p-6 sm:p-8 md:p-10 hover:-translate-y-1 transition">
                        <h3 class="text-3xl sm:text-4xl md:text-5xl font-black blue-text mb-3 md:mb-4 counter"
                            data-target="150">
                            <span>150</span>+
                        </h3>
                        <p class="text-gray-500 text-sm md:text-base">Happy Clients</p>
                    </div>

                    <!-- ITEM 3 -->
                    <div
                        class="glass-card rounded-2xl md:rounded-[30px] p-6 sm:p-8 md:p-10 hover:-translate-y-1 transition">
                        <h3 class="text-3xl sm:text-4xl md:text-5xl font-black green-text mb-3 md:mb-4 counter"
                            data-target="24">
                            <span>24</span>/7
                        </h3>
                        <p class="text-gray-500 text-sm md:text-base">Support Available</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION - SIMPLE VERSION -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div
            class="glass-card rounded-2xl sm:rounded-3xl md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <!-- BACKGROUND EFFECTS -->
            <div class="absolute top-[-60px] left-[-60px] w-64 h-64 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-60px] right-[-60px] w-64 h-64 bg-[#00b7ff]/10 blur-[120px] rounded-full">
            </div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <!-- LABEL -->
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm">
                    LET'S WORK TOGETHER
                </p>

                <!-- TITLE -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Scale Your Business Online?
                </h2>

                <!-- DESCRIPTION -->
                <p
                    class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-8 md:mb-10">
                    Start your journey with Anprix and grow your brand with modern websites,
                    SEO, Shopify, and digital marketing strategies.
                </p>

                <!-- BUTTONS -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-5">

                    <!-- PRIMARY BUTTON -->
                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fa-solid fa-rocket"></i>
                        Hire Us
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>

<?php require_once 'includes/footer.php'; ?>