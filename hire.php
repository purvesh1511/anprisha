<?php
$page_title = "Hire Us";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="py-16 sm:py-24 lg:py-32 relative overflow-hidden">

    <!-- BACKGROUND GLOWS -->
    <div class="absolute top-[-80px] left-[-80px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>

    <div class="absolute bottom-[-80px] right-[-80px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="max-w-4xl">

            <!-- LABEL -->
            <p class="uppercase tracking-[4px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2">
                <i class="fa-solid fa-briefcase"></i>
                HIRE US
            </p>

            <!-- TITLE -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black leading-tight mb-6 sm:mb-8 md:mb-10">

                Let's Build Something
                <span class="green-text block sm:inline">
                    Amazing Together
                </span>

            </h1>

            <!-- DESCRIPTION -->
            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl mb-8">

                Ready to take your digital presence to the next level?
                Fill out the form below and our team will get back to you within 24 hours.

            </p>

            <!-- CTA BUTTONS -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="services.php"
                   class="px-8 py-4 rounded-2xl border border-white/20 text-white inline-flex items-center justify-center gap-2 hover:bg-white/10 transition">
                    <i class="fa-solid fa-eye"></i>
                    View Services
                </a>
            </div>

        </div>

    </div>

</section>
<!-- CONTACT & INFO SECTION -->
<section class="py-16 sm:py-20 lg:py-24 section-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

            <!-- CONTACT FORM -->
            <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">

                <h2 class="text-2xl sm:text-3xl font-black mb-4 sm:mb-6">
                    Tell Us About Your Project
                </h2>

                <p class="text-gray-400 text-sm sm:text-base mb-6 sm:mb-8">
                    Fill out the form and we'll get back to you within 24 hours.
                </p>

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
                            <option value="Digital_Marketing">Digital Marketing</option>
                            <option value="Advertising_Services">Advertising Services</option>
                            <option value="Website_Development">Website Development</option>
                            <option value="Software_Development">Software Development</option>
                            <option value="Branding_Creative_Services">Branding & Creative Services</option>
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
                                <option value="0_5000">Less than $5,000</option>
                                <option value="5000_10000">$5,000 - $10,000</option>
                                <option value="10000_25000">$10,000 - $25,000</option>
                                <option value="25000_plus">$25,000+</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Project Timeline
                            </label>
                            <select name="timeline"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                                <option value="">Select Timeline</option>
                                <option value="15">ASAP (Within 2 weeks)</option>
                                <option value="30">Within 1 month</option>
                                <option value="90">1-3 months</option>
                                <option value="90_plus">3+ months</option>
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

            <!-- INFO SIDE -->
            <div class="space-y-6 lg:space-y-8">

                <!-- CONTACT INFO -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">

                    <h3 class="text-xl sm:text-2xl font-black mb-5 sm:mb-6">
                        Contact Information
                    </h3>

                    <div class="space-y-5">

                        <!-- EMAIL -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm sm:text-base">
                                    <?php echo SITE_EMAIL; ?>
                                </p>
                                <p class="text-gray-500 text-xs sm:text-sm">
                                    <?php echo SITE_EMAIL_SUPPORT; ?>
                                </p>
                            </div>
                        </div>

                        <!-- PHONE -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm sm:text-base">
                                    <?php echo SITE_PHONE; ?>
                                </p>
                                <p class="text-gray-500 text-xs sm:text-sm">
                                    Mon-Fri, 9am-6pm
                                </p>
                            </div>
                        </div>

                        <!-- ADDRESS -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm sm:text-base">
                                    <?php echo SITE_ADDRESS; ?>
                                </p>
                                <p class="text-gray-500 text-xs sm:text-sm">
                                    <?php echo SITE_CITY_STATE_ZIP; ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- OFFICE HOURS -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">

                    <h3 class="text-xl sm:text-2xl font-black mb-5 sm:mb-6">
                        Office Hours
                    </h3>

                    <div class="space-y-3 text-sm sm:text-base">

                        <div class="flex justify-between">
                            <span class="text-gray-400">Mon-Fri</span>
                            <span class="text-white font-semibold"><?php echo OFFICE_HOURS_WEEKDAY; ?></span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">Saturday</span>
                            <span class="text-white font-semibold"><?php echo OFFICE_HOURS_SATURDAY; ?></span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-400">Sunday</span>
                            <span class="text-white font-semibold"><?php echo OFFICE_HOURS_SUNDAY; ?></span>
                        </div>

                    </div>
                </div>

                <!-- SOCIAL -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">

                    <h3 class="text-xl sm:text-2xl font-black mb-5 sm:mb-6">
                        Connect With Us
                    </h3>

                    <div class="flex flex-wrap gap-3 sm:gap-4">

                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"
                           class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:text-[#00ffb3] transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"
                           class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:text-[#00b7ff] transition">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank"
                           class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:text-[#00ffb3] transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"
                           class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:text-[#00ffb3] transition">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="<?php echo SOCIAL_GITHUB; ?>" target="_blank"
                           class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:text-white transition">
                            <i class="fab fa-github"></i>
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
                <i class="fa-solid fa-circle-question"></i>
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

<?php require_once 'includes/footer.php'; ?>