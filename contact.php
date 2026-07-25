<?php
require_once 'config/config.php';
require_once 'config/seo_keyword.php';
$page_key = 'contact';
$seo_title = $seo_pages[$page_key]['title'];
$page_description = $seo_pages[$page_key]['description'];
$page_keywords = $seo_pages[$page_key]['keywords'];
$canonical_url = $seo_pages[$page_key]['canonical'];
require_once 'includes/header.php';

$contact_info = [
    'email' => [
        'icon'  => 'fa-envelope',
        'color' => '#00ffb3',
        'label' => 'Email',
        'value' => SITE_EMAIL,
    ],
    'phone' => [
        'icon'  => 'fa-phone-alt',
        'color' => '#00b7ff',
        'label' => 'Phone',
        'value' => SITE_PHONE,
    ],
    'location' => [
        'icon'  => 'fa-map-marker-alt',
        'color' => '#00ffb3',
        'label' => 'Office',
        'value' => SITE_ADDRESS,
    ],
];

$contact_card_keys = ['email', 'phone', 'location'];

$hero_stats = [
    ['value' => '100+', 'class' => 'green-text', 'label' => 'Projects Done'],
    ['value' => '50+',  'class' => 'blue-text',  'label' => 'Happy Clients'],
    ['value' => '98%',  'class' => 'green-text', 'label' => 'Satisfaction'],
];

$service_tags = [
    ['icon' => 'fa-code',          'color' => '#00ffb3', 'label' => 'Web Development'],
    ['icon' => 'fa-search',        'color' => '#00b7ff', 'label' => 'SEO Services'],
    ['icon' => 'fa-bullhorn',      'color' => '#00ffb3', 'label' => 'Marketing'],
    ['icon' => 'fa-shopping-cart', 'color' => '#00b7ff', 'label' => 'Shopify'],
];
?>

<!-- HERO -->
<section class="hero-gradient min-h-[85vh] flex items-center pt-28 sm:pt-32 md:pt-40 pb-16 sm:pb-20 md:pb-28 overflow-hidden relative">

    <div class="absolute top-[-80px] left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left fade-in-up">

                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2 justify-center lg:justify-start">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    CONTACT US
                </p>

                <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-6 sm:mb-8">
                    Let's Build Your
                    <span class="hero-heading-accent green-text">Next Digital Project</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl mx-auto lg:mx-0">
                    Get in touch with Anprix for
                    <span class="text-white font-medium">web development</span>,
                    <span class="text-white font-medium">SEO</span>,
                    <span class="text-white font-medium">advertising</span>,
                    and <span class="text-white font-medium">digital marketing solutions</span>.
                </p>

                <!-- Service Tags -->
                <div class="flex flex-wrap gap-3 mt-8 justify-center lg:justify-start">
                    <?php foreach ($service_tags as $t): ?>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[<?= $t['color'] ?>/10] hover:border-[<?= $t['color'] ?>/30] transition-all duration-300">
                        <i class="fas <?= $t['icon'] ?> text-[<?= $t['color'] ?>]"></i>
                        <?= $t['label'] ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Mini Stats -->
                <div class="flex flex-wrap items-center gap-5 sm:gap-8 mt-10 pt-6 border-t border-white/5 justify-center lg:justify-start">
                    <?php foreach ($hero_stats as $i => $s):
                    $val = $s['value'];
                    $target = (int)$val;
                    $suffix = str_replace((string)$target, '', $val);
                    ?>
                    <div class="hero-mini-stat">
                        <span class="text-xl sm:text-2xl font-black <?= $s['class'] ?> counter" data-target="<?= $target ?>">
                            <span><?= $target ?></span><?= $suffix ?>
                        </span>
                        <p class="text-[11px] text-gray-500 mt-0.5"><?= $s['label'] ?></p>
                    </div>
                    <?php if ($i < count($hero_stats) - 1): ?>
                    <div class="w-px h-8 bg-white/5"></div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="relative mt-6 lg:mt-0 flex items-center justify-center fade-in-up delay-200">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-sm lg:max-w-md mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="assets/images/contact.png"
                             alt="Contact Anprix Solutions - Digital Marketing & Web Development"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[75%] sm:max-w-[70%] md:max-w-[65%] lg:max-w-[80%] xl:max-w-[420px] mx-auto animate-float">
                    </div>

                    <!-- Floating Badge: Email -->
                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-envelope text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Email Us</p>
                                <p class="text-sm font-semibold"><?= SITE_EMAIL ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge: Phone -->
                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-phone-alt text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Call Us</p>
                                <p class="text-sm font-semibold"><?= SITE_PHONE ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- CONTACT FORM + INFO -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">

    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.02) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-14 lg:gap-16 items-start">

            <!-- LEFT: CONTACT INFO -->
            <div class="fade-in-up">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    OUR OFFICE
                </p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6">
                    We Are Ready To <span class="green-text">Grow Your Business</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 mb-8 md:mb-10">
                    Contact our team for website development, SEO, Shopify, and digital marketing.
                    We respond quickly and deliver scalable digital solutions.
                </p>

                <div class="space-y-4">
                    <?php foreach ($contact_card_keys as $key): ?>
                    <?php $card = $contact_info[$key]; ?>
                    <?php
                    $title    = $card['value'];
                    $subtitle = '';
                    $extra    = '';
                    $truncate = false;

                    if ($key === 'email'):
                        $truncate = true;
                        $extra = '<a href="mailto:' . SITE_EMAIL . '" class="text-xs text-[#00ffb3] hover:underline inline-flex items-center gap-1 mt-1.5">Send a message <i class="fas fa-arrow-right text-[10px]"></i></a>';
                    elseif ($key === 'phone'):
                        $extra = '<div class="flex items-center gap-3 mt-1.5">'
                            . '<a href="tel:' . SITE_PHONE . '" class="text-xs text-[#00b7ff] hover:underline inline-flex items-center gap-1">Call now <i class="fas fa-arrow-right text-[10px]"></i></a>'
                            . '<span class="text-gray-600">|</span>'
                            . '<span class="text-xs text-gray-500 flex items-center gap-1"><i class="fab fa-whatsapp icon-hover text-[#25D366]"></i> WhatsApp</span>'
                            . '</div>';
                    elseif ($key === 'location'):
                        $title    = SITE_COUNTRY;
                        $subtitle = SITE_ADDRESS;
                        $extra = '<div class="flex items-center gap-2 mt-1.5 text-xs text-gray-500"><i class="fas fa-clock text-[#00ffb3]"></i> ' . OFFICE_HOURS_WEEKDAY . '</div>';
                    elseif ($key === 'support'):
                        $subtitle = 'Fast response for urgent project requests';
                    endif;
                    ?>
                    <div class="contact-info-card glass-card rounded-[20px] p-5 sm:p-6 flex gap-4 hover:border-[<?= $card['color'] ?>/30] border border-white/5" style="--accent-color: <?= $card['color'] ?>;">
                        <div class="icon-glow w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[<?= $card['color'] ?>/10] flex items-center justify-center text-[<?= $card['color'] ?>] text-xl shrink-0">
                            <i class="fas <?= $card['icon'] ?>"></i>
                        </div>
                        <div class="<?= $truncate ? 'min-w-0' : '' ?>">
                            <p class="text-gray-500 uppercase tracking-[3px] text-[11px] mb-1"><?= $card['label'] ?></p>
                            <h3 class="text-lg sm:text-xl font-bold <?= $truncate ? 'truncate' : '' ?>"><?= $title ?></h3>
                            <?php if ($subtitle): ?>
                            <p class="text-gray-500 text-sm mt-0.5"><?= $subtitle ?></p>
                            <?php endif; ?>
                            <?= $extra ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- RIGHT: FORM -->
            <div class="fade-in-up delay-200">
                <div class="form-glow-border glass-card rounded-[28px] md:rounded-[36px] p-6 sm:p-8 md:p-10 relative overflow-hidden">
                    <div class="absolute top-[-60px] left-[-60px] w-56 h-56 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
                    <div class="absolute bottom-[-60px] right-[-60px] w-56 h-56 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-[#00ffb3] uppercase tracking-[4px] font-semibold text-xs flex items-center gap-2">
                                    <i class="fas fa-paper-plane"></i>
                                    SEND MESSAGE
                                </p>
                                <h3 class="text-xl sm:text-2xl font-black mt-2">Start Your Project Today</h3>
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 bg-white/5 px-3 py-1.5 rounded-full live-badge border border-white/5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3]"></span>
                                Live form
                            </div>
                        </div>

                        <p class="text-gray-400 text-sm mb-6">We usually respond within 24 hours.</p>

                        <form id="contactForm" class="space-y-4" method="POST">
                            <?php csrf_field(); ?>
                            <input type="hidden" name="form_type" value="contact">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="contact-form-label">Full Name *</label>
                                    <div class="contact-form-input-wrap">
                                        <i class="fas fa-user input-icon"></i>
                                        <input type="text" name="name" placeholder="John Doe" required class="contact-form-input">
                                    </div>
                                </div>
                                <div>
                                    <label class="contact-form-label">Email *</label>
                                    <div class="contact-form-input-wrap">
                                        <i class="fas fa-envelope input-icon"></i>
                                        <input type="email" name="email" placeholder="john@example.com" required class="contact-form-input">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="contact-form-label">Phone (optional)</label>
                                <div class="contact-form-input-wrap">
                                    <i class="fas fa-phone input-icon"></i>
                                    <input type="tel" name="phone" placeholder="+91 63550 35217" class="contact-form-input">
                                </div>
                            </div>

                            <div>
                                <label class="contact-form-label">Message *</label>
                                <div class="contact-form-input-wrap">
                                    <i class="fas fa-comment-dots input-icon"></i>
                                    <textarea name="message" rows="4" placeholder="Tell us about your project..." required
                                        class="contact-form-input resize-none pt-4" oninput="document.getElementById('charCount').textContent=this.value.length"></textarea>
                                </div>
                                <div class="flex justify-between mt-1.5">
                                    <span class="text-[11px] text-gray-600">We'll get back within 24 hours</span>
                                    <span class="text-[11px] text-gray-500"><span id="charCount">0</span>/2000</span>
                                </div>
                            </div>

                            <button type="submit"
                                class="contact-submit-btn btn-primary w-full py-4 rounded-2xl font-bold text-base hover:scale-[1.02] transition-all flex items-center justify-center gap-2 shadow-2xl">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>

                            <div class="flex items-center justify-center gap-2 pt-2">
                                <i class="fas fa-lock text-[10px] text-gray-500"></i>
                                <span class="text-[11px] text-gray-500">Secure & Confidential · No spam ever</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
