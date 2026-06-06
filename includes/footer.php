<!-- FOOTER -->
<footer class="border-t border-white/5 bg-black">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-4 gap-10">

            <!-- ABOUT Section -->
            <div>
                <img src="<?php echo SITE_URL; ?>/assets/images/anprix-logo.png"
                    alt="Anprix Logo" class="h-14 mb-5" />
                <p class="text-gray-500 leading-8 mb-6">
                    Professional website development, SEO optimization, Shopify development, digital marketing, branding, advertising, and custom web solutions designed to help businesses grow online.
                </p>
                <!-- Social Links -->
                <div class="flex gap-3">
                    <a href="<?= SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer"
                        class="social-footer w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#00ffb3] hover:text-black transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer"
                        class="social-footer w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#00ffb3] hover:text-black transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?= SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer"
                        class="social-footer w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#00ffb3] hover:text-black transition-all duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="<?= SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer"
                        class="social-footer w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#00ffb3] hover:text-black transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- SERVICES Section -->
            <div>
                <h4 class="text-xl font-bold mb-5">Services</h4>
                <ul class="space-y-3 text-gray-500">
                    <li>
                        <a href="website-development.php"
                        class="hover:text-[#00ffb3] transition">
                            Website Development
                        </a>
                    </li>
                    <li>
                        <a href="seo.php"
                        class="hover:text-[#00ffb3] transition">
                            SEO Optimization
                        </a>
                    </li>
                    <li>
                        <a href="advertising.php"
                        class="hover:text-[#00ffb3] transition">
                            Advertising Services
                        </a>
                    </li>
                    <li>
                        <a href="digital-marketing.php"
                        class="hover:text-[#00ffb3] transition">
                            Digital Marketing
                        </a>
                    </li>
                    <li>
                        <a href="cms.php"
                        class="hover:text-[#00ffb3] transition">
                            CMS Development
                        </a>
                    </li>
                    <li>
                        <a href="advertising.php"
                        class="hover:text-[#00ffb3] transition">
                            Google Ads
                        </a>
                    </li>
                    <li>
                        <a href="branding-creative.php"
                        class="hover:text-[#00ffb3] transition">
                            Branding & Creative Services
                        </a>
                    </li>
                </ul>
            </div>

            <!-- QUICK LINKS Section -->
            <div>
                <h4 class="text-xl font-bold mb-5">Quick Links</h4>
                <ul class="space-y-3 text-gray-500">
                    <li><a href="index.php" class="hover:text-[#00ffb3] transition">Home</a></li>
                    <li><a href="services.php" class="hover:text-[#00ffb3] transition">Services</a></li>
                    <li><a href="portfolio.php" class="hover:text-[#00ffb3] transition">Portfolio</a></li>
                    <li><a href="team.php" class="hover:text-[#00ffb3] transition">Our Team</a></li>
                    <li><a href="contact.php" class="hover:text-[#00ffb3] transition">Contact</a></li>
                    <li><a href="hire.php" class="hover:text-[#00ffb3] transition">Hire Us</a></li>
                </ul>
            </div>

            <!-- CONTACT & Newsletter Section -->
            <div>
                <h4 class="text-xl font-bold mb-5">Contact Us</h4>
                <ul class="space-y-3 text-gray-500 mb-6">
                    <!-- EMAIL -->
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-[#00ffb3] w-5"></i>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="hover:text-[#00ffb3] transition">
                            <?php echo SITE_EMAIL; ?>
                        </a>
                    </li>
                    <!-- PHONE -->
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone-alt text-[#00ffb3] w-5"></i>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="hover:text-[#00ffb3] transition">
                            <?php echo SITE_PHONE; ?>
                        </a>
                    </li>
                    <!-- LOCATION -->
                    <li class="flex items-center gap-3">
                        <i class="fas fa-map-marker-alt text-[#00ffb3] w-5"></i>
                        <span>
                            <?php echo SITE_ADDRESS; ?>
                        </span>
                    </li>
                    <!-- SUPPORT -->
                    <li class="flex items-center gap-3">
                        <i class="fas fa-clock text-[#00ffb3] w-5"></i>
                        <span>
                            24/7 Support Available
                        </span>
                    </li>
                </ul>

                <!-- Newsletter Signup -->
                <div class="mt-6">
                    <h5 class="text-md font-semibold mb-3">Subscribe to Newsletter</h5>
                    <form class="newsletter-form flex gap-2" method="POST">
                        <input type="email" name="newsletter_email" placeholder="Your email address"
                            class="flex-1 bg-black/40 border border-white/10 rounded-xl px-4 py-2 text-white text-sm focus:outline-none focus:border-[#00ffb3]">
                        <button type="submit" class="btn-primary px-4 py-2 rounded-xl text-sm">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                    <p class="text-gray-600 text-xs mt-3">Get updates about new projects and offers.</p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/5 mt-14 pt-8 flex flex-wrap justify-between items-center gap-4">
            <div class="text-center text-gray-600 text-sm">
                © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="assets/js/hire-form.js"></script>
<!-- Custom JavaScript -->

</body>

</html>