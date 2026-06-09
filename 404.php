<?php
http_response_code(404);
require_once 'config/config.php';
$page_title = "Page Not Found";
$page_description = "The page you are looking for does not exist. Return to Anprix Solutions homepage.";
$canonical_url = SITE_URL;
require_once 'includes/header.php';
?>

<section class="hero-gradient min-h-screen flex items-center pt-24 lg:pt-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">

        <div class="max-w-2xl mx-auto">

            <div class="text-8xl sm:text-9xl font-black green-text mb-6">
                404
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6">
                Page Not Found
            </h1>

            <p class="text-gray-400 text-base sm:text-lg leading-8 mb-10">
                The page you are looking for doesn't exist or has been moved.
                Let us help you find what you need.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.php"
                   class="btn-primary px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl inline-flex items-center justify-center gap-2">
                    <i class="fas fa-home"></i>
                    Back to Home
                </a>

                <a href="contact.php"
                   class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 py-4 rounded-2xl text-base sm:text-lg inline-flex items-center justify-center gap-2 transition">
                    <i class="fas fa-envelope"></i>
                    Contact Us
                </a>
            </div>

        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
