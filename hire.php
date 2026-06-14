<?php
require_once 'config/config.php';
$page_title = "Hire Us";
$page_description = "Hire Anprix for website development, SEO, Shopify, Google Ads, and digital marketing services. Fill out the form and our team will contact you within 24 hours.";
$canonical_url = SITE_URL . '/hire';
require_once 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero-gradient pt-28 sm:pt-32 md:pt-40 pb-20 sm:pb-24 md:pb-32 relative overflow-hidden">

    <div class="absolute top-[-80px] left-[-80px] sm:top-0 sm:left-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-80px] sm:bottom-0 sm:right-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="absolute inset-0 opacity-30 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 24px 24px;"></div>

    <div class="absolute w-16 h-16 border border-[#00ffb3]/10 top-[15%] left-[55%] hidden lg:block rounded-full" style="animation: decor-float 6s ease-in-out infinite;"></div>
    <div class="absolute w-10 h-10 border border-[#00b7ff]/10 bottom-[25%] left-[8%] hidden lg:block rounded-full" style="animation: decor-float 5s ease-in-out infinite; animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT -->
            <div class="fade-in-up">
                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    HIRE US
                </p>

                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-[1.1] mb-6 sm:mb-8">
                    Let's Build Something
                    <span class="green-text block sm:inline">
                        Amazing Together
                    </span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-xl mb-10">
                    Ready to take your digital presence to the next level?
                    Fill out the form and our team will get back to you within 24 hours.
                </p>

                <!-- CTA BUTTONS -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hireForm"
                       class="btn-primary inline-flex items-center gap-3 px-8 py-4 rounded-full text-sm font-bold hover:scale-105 transition-all shadow-lg shadow-[#00ffb3]/20">
                        Get Started
                        <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center">
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                    <a href="services.php"
                       class="px-8 py-4 rounded-full border border-white/20 text-white inline-flex items-center justify-center gap-2 hover:bg-white/10 transition-all">
                        <i class="fa-solid fa-eye"></i>
                        View Services
                    </a>
                </div>

                <!-- STATS ROW -->
                <div class="flex flex-wrap gap-6 sm:gap-8 mt-10 pt-8 border-t border-white/5">
                    <div>
                        <p class="text-2xl sm:text-3xl font-black green-text counter" data-target="100">
                            <span>100</span>+
                        </p>
                        <p class="text-gray-500 text-xs sm:text-sm mt-1">Projects Done</p>
                    </div>
                    <div>
                        <p class="text-2xl sm:text-3xl font-black blue-text counter" data-target="50">
                            <span>50</span>+
                        </p>
                        <p class="text-gray-500 text-xs sm:text-sm mt-1">Happy Clients</p>
                    </div>
                    <div>
                        <p class="text-2xl sm:text-3xl font-black green-text counter" data-target="24">
                            <span>24</span>/7
                        </p>
                        <p class="text-gray-500 text-xs sm:text-sm mt-1">Support</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="fade-in-up delay-200 hidden lg:block">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/20 rounded-[40px] blur-2xl opacity-60"></div>
                    <div class="relative glass-card rounded-[30px] p-4 border border-white/10 overflow-hidden">
                        <img src="assets/images/hire.png"
                             alt="Hire Anprix"
                             class="w-full h-auto rounded-2xl"
                             loading="lazy">
                    </div>
                    <!-- floating badge -->
                    <div class="absolute -bottom-4 -left-4 glass-card rounded-2xl px-5 py-3 border border-white/10 backdrop-blur-md">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 rounded-full bg-[#00ffb3] animate-pulse shadow-lg shadow-[#00ffb3]/50"></div>
                            <span class="text-sm font-semibold text-white">Available for hire</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- CONTACT & INFO SECTION -->
<section class="py-16 sm:py-20 lg:py-24 section-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

            <!-- CONTACT FORM -->
            <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-40 h-40 bg-[#00ffb3]/5 blur-[80px] rounded-full"></div>

                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fa-solid fa-pen-ruler text-sm text-[#00ffb3]"></i>
                        </div>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Get Started</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-black mb-4">
                        Tell Us About Your Project
                    </h2>
                    <div class="w-16 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>
                    <p class="text-gray-400 text-sm sm:text-base mb-8">
                        Fill out the form and we'll get back to you within 24 hours.
                    </p>
                </div>

                <form class="ajax-form space-y-5 sm:space-y-6 relative z-10" method="POST" id="hireForm">

                    <?php csrf_field(); ?>
                    <input type="hidden" name="form_type" value="hire">

                    <!-- NAME + PHONE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-user text-[#00ffb3] text-xs"></i>
                                Full Name *
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-user text-sm"></i>
                                </span>
                                <input type="text" name="name" placeholder="Enter your full name" required minlength="3"
                                    maxlength="80"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-phone text-[#00b7ff] text-xs"></i>
                                Phone Number
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-phone text-sm"></i>
                                </span>
                                <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="15"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                            </div>
                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-[#00ffb3] text-xs"></i>
                            Email Address *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </span>
                            <input type="email" name="email" placeholder="Enter your email address" required maxlength="120"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>
                    </div>

                    <!-- SERVICE -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-briefcase text-[#00b7ff] text-xs"></i>
                            Select Service *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                <i class="fa-solid fa-tag text-sm"></i>
                            </span>
                            <select name="service" required
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                <option value="">Select a Service</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Advertising Services">Advertising Services</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Branding & Creative Services">Branding & Creative Services</option>
                            </select>
                        </div>
                    </div>

                    <!-- BUDGET + TIMELINE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-coins text-[#00ffb3] text-xs"></i>
                                Estimated Budget
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-dollar-sign text-sm"></i>
                                </span>
                                <select name="budget"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                    style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                    <option value="">Select Budget Range</option>
                                    <option value="0_5000">Less than $5,000</option>
                                    <option value="5000_10000">$5,000 - $10,000</option>
                                    <option value="10000_25000">$10,000 - $25,000</option>
                                    <option value="25000_plus">$25,000+</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-clock text-[#00b7ff] text-xs"></i>
                                Project Timeline
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-calendar text-sm"></i>
                                </span>
                                <select name="timeline"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                    style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                    <option value="">Select Timeline</option>
                                    <option value="15">ASAP (Within 2 weeks)</option>
                                    <option value="30">Within 1 month</option>
                                    <option value="90">1-3 months</option>
                                    <option value="90_plus">3+ months</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!-- DETAILS -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-file-lines text-[#00ffb3] text-xs"></i>
                            Project Details *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-gray-500">
                                <i class="fa-solid fa-align-left text-sm"></i>
                            </span>
                            <textarea name="details" rows="5" required minlength="10" maxlength="2000"
                                placeholder="Tell us about your project..."
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] resize-none"></textarea>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full btn-primary py-4 sm:py-5 rounded-2xl text-base sm:text-lg font-semibold transition hover:scale-[1.02] active:scale-[0.98] shadow-lg shadow-[#00ffb3]/20">
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Submit Request
                    </button>

                    <p class="text-center text-gray-500 text-xs mt-4">
                        <i class="fa-solid fa-shield mr-1 icon-hover"></i>
                        Your information is secure. We'll never share your data.
                    </p>

                </form>
            </div>

            <!-- INFO SIDE -->
            <div class="space-y-6 lg:space-y-8">

                <!-- CONTACT INFO -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute top-[-40px] right-[-40px] w-32 h-32 bg-[#00ffb3]/5 blur-[60px] rounded-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                                <i class="fa-solid fa-address-card text-sm text-[#00ffb3]"></i>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-black">
                                Contact Information
                            </h3>
                        </div>
                        <div class="w-12 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>

                        <div class="space-y-5">

                            <!-- EMAIL -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        <?php echo SITE_EMAIL; ?>
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        <?php echo SITE_EMAIL_SUPPORT; ?>
                                    </p>
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        <?php echo SITE_PHONE; ?>
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        Mon-Fri, 9am-6pm
                                    </p>
                                </div>
                            </div>

                            <!-- ADDRESS -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        <?php echo SITE_ADDRESS; ?>
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        <?php echo SITE_CITY_STATE_ZIP; ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- OFFICE HOURS -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute bottom-[-30px] left-[-30px] w-28 h-28 bg-[#00b7ff]/5 blur-[60px] rounded-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                                <i class="fa-solid fa-clock text-sm text-[#00b7ff]"></i>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-black">
                                Office Hours
                            </h3>
                        </div>
                        <div class="w-12 h-0.5 bg-gradient-to-r from-[#00b7ff] to-[#00ffb3] rounded-full mb-6"></div>

                        <div class="space-y-4 text-sm sm:text-base">

                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Mon-Fri</span>
                                <span class="text-white font-semibold"><?php echo OFFICE_HOURS_WEEKDAY; ?></span>
                            </div>

                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Saturday</span>
                                <span class="text-white font-semibold"><?php echo OFFICE_HOURS_SATURDAY; ?></span>
                            </div>

                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Sunday</span>
                                <span class="text-white font-semibold"><?php echo OFFICE_HOURS_SUNDAY; ?></span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- SOCIAL -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fa-solid fa-share-nodes text-sm text-[#00ffb3]"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black">
                            Connect With Us
                        </h3>
                    </div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>

                    <div class="flex flex-wrap gap-3 sm:gap-4">

                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-facebook-f social-icon"></i>
                        </a>

                        <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00b7ff]/20 hover:text-[#00b7ff] transition-all hover:scale-110">
                            <i class="fa-brands fa-x-twitter social-icon"></i>
                        </a>

                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-linkedin-in social-icon"></i>
                        </a>

                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-instagram social-icon"></i>
                        </a>

                        <a href="<?php echo SOCIAL_GITHUB; ?>" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 hover:text-white transition-all hover:scale-110">
                            <i class="fab fa-github social-icon"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="py-16 sm:py-20 lg:py-24 section-border">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="text-center mb-12 sm:mb-16">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-4 sm:mb-5 text-sm sm:text-base flex items-center justify-center gap-2">
                <i class="fa-solid fa-circle-question icon-float"></i>
                FAQ
            </p>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4 sm:mb-6">
                Frequently Asked Questions
            </h2>

            <p class="text-gray-400 text-sm sm:text-base lg:text-lg max-w-3xl mx-auto leading-7 sm:leading-8">
                Got questions? We've got answers. Here are some of the most common questions we receive.
            </p>

        </div>

        <!-- FAQ ITEMS -->
        <div class="space-y-4 sm:space-y-6">

            <!-- ITEM 1 -->
            <div class="glass-card rounded-2xl sm:rounded-3xl overflow-hidden">
                <details class="group">
                    <summary class="cursor-pointer list-none p-5 sm:p-8 flex justify-between items-center">
                        <h4 class="text-base sm:text-lg lg:text-xl font-bold pr-4 flex items-center gap-3">
                            <i class="fa-solid fa-rocket text-[#00ffb3]"></i>
                            How quickly can you start my project?
                        </h4>

                        <i class="fa-solid fa-chevron-down text-[#00ffb3] transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>

                    <div class="px-5 sm:px-8 pb-5 sm:pb-8">
                        <p class="text-gray-400 text-sm sm:text-base leading-7 sm:leading-8">
                            We typically begin projects within 3-5 business days after contract signing and initial deposit.
                        </p>
                    </div>
                </details>
            </div>

            <!-- ITEM 2 -->
            <div class="glass-card rounded-2xl sm:rounded-3xl overflow-hidden">
                <details class="group">
                    <summary class="cursor-pointer list-none p-5 sm:p-8 flex justify-between items-center">
                        <h4 class="text-base sm:text-lg lg:text-xl font-bold pr-4 flex items-center gap-3">
                            <i class="fa-solid fa-headset text-[#00b7ff]"></i>
                            Do you offer ongoing support?
                        </h4>

                        <i class="fa-solid fa-chevron-down text-[#00ffb3] transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>

                    <div class="px-5 sm:px-8 pb-5 sm:pb-8">
                        <p class="text-gray-400 text-sm sm:text-base leading-7 sm:leading-8">
                            Yes! We offer monthly maintenance packages and ongoing support for all our clients.
                        </p>
                    </div>
                </details>
            </div>

            <!-- ITEM 3 -->
            <div class="glass-card rounded-2xl sm:rounded-3xl overflow-hidden">
                <details class="group">
                    <summary class="cursor-pointer list-none p-5 sm:p-8 flex justify-between items-center">
                        <h4 class="text-base sm:text-lg lg:text-xl font-bold pr-4 flex items-center gap-3">
                            <i class="fa-solid fa-tags text-[#00ffb3]"></i>
                            What is your pricing model?
                        </h4>

                        <i class="fa-solid fa-chevron-down text-[#00ffb3] transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>

                    <div class="px-5 sm:px-8 pb-5 sm:pb-8">
                        <p class="text-gray-400 text-sm sm:text-base leading-7 sm:leading-8">
                            We offer fixed-price packages and custom quotes based on your specific project requirements.
                        </p>
                    </div>
                </details>
            </div>

            <!-- ITEM 4 -->
            <div class="glass-card rounded-2xl sm:rounded-3xl overflow-hidden">
                <details class="group">
                    <summary class="cursor-pointer list-none p-5 sm:p-8 flex justify-between items-center">
                        <h4 class="text-base sm:text-lg lg:text-xl font-bold pr-4 flex items-center gap-3">
                            <i class="fa-solid fa-user-shield text-[#00ffb3]"></i>
                            Do you sign NDAs?
                        </h4>

                        <i class="fa-solid fa-chevron-down text-[#00ffb3] transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>

                    <div class="px-5 sm:px-8 pb-5 sm:pb-8">
                        <p class="text-gray-400 text-sm sm:text-base leading-7 sm:leading-8">
                            Absolutely. We're happy to sign NDAs to protect your confidential information and ideas.
                        </p>
                    </div>
                </details>
            </div>

        </div>

    </div>
</section>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {
      "@type":"Question",
      "name":"How quickly can you start my project?",
      "acceptedAnswer":{"@type":"Answer","text":"We typically begin projects within 3-5 business days after contract signing and initial deposit."}
    },
    {
      "@type":"Question",
      "name":"Do you offer ongoing support?",
      "acceptedAnswer":{"@type":"Answer","text":"Yes! We offer monthly maintenance packages and ongoing support for all our clients."}
    },
    {
      "@type":"Question",
      "name":"What is your pricing model?",
      "acceptedAnswer":{"@type":"Answer","text":"We offer fixed-price packages and custom quotes based on your specific project requirements."}
    },
    {
      "@type":"Question",
      "name":"Do you sign NDAs?",
      "acceptedAnswer":{"@type":"Answer","text":"Absolutely. We're happy to sign NDAs to protect your confidential information and ideas."}
    }
  ]
}
</script>

<?php require_once 'includes/footer.php'; ?>