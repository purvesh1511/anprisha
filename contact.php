<?php
require_once 'config/config.php';
$page_title = "Contact Us";
$page_description = "Get in touch with Anprix for web development, SEO, advertising, and digital marketing solutions. Contact our team today for a free consultation.";
$canonical_url = SITE_URL . '/contact';
require_once 'includes/header.php';

// ===== MASTER CONTACT DATA (single source of truth) =====

$contact_info = [
    'email' => [
        'icon'    => 'fa-envelope',
        'color'   => '#00ffb3',
        'label'   => 'Email',
        'value'   => SITE_EMAIL,
    ],
    'phone' => [
        'icon'    => 'fa-phone-alt',
        'color'   => '#00b7ff',
        'label'   => 'Phone',
        'value'   => SITE_PHONE,
    ],
    'location' => [
        'icon'    => 'fa-map-marker-alt',
        'color'   => '#00ffb3',
        'label'   => 'Office',
        'value'   => SITE_ADDRESS,
    ],
    'support' => [
        'icon'    => 'fa-headset',
        'color'   => '#00b7ff',
        'label'   => 'Support',
        'value'   => '24/7 Availability',
    ],
];

// Keys used in each section (just reorder / omit as needed)
$hero_panel_keys  = ['email', 'phone', 'location'];
$contact_card_keys = ['email', 'phone', 'location', 'support'];

// Shared stat bars
$hero_stats = [
    ['value' => '100+', 'class' => 'green-text', 'label' => 'Projects Done'],
    ['value' => '50+',  'class' => 'blue-text',  'label' => 'Happy Clients'],
    ['value' => '98%',  'class' => 'green-text', 'label' => 'Satisfaction'],
];

$service_tags = [
    ['icon' => 'fa-code',       'color' => '#00ffb3', 'label' => 'Web Development'],
    ['icon' => 'fa-search',     'color' => '#00b7ff', 'label' => 'SEO Services'],
    ['icon' => 'fa-bullhorn',   'color' => '#00ffb3', 'label' => 'Marketing'],
    ['icon' => 'fa-shopping-cart', 'color' => '#00b7ff', 'label' => 'Shopify'],
];

$loc_stats = [
    ['value' => '100+', 'class' => 'green-text', 'label' => 'Completed Projects'],
    ['value' => '50+',  'class' => 'blue-text',  'label' => 'Happy Clients'],
    ['value' => '24/7', 'class' => 'green-text', 'label' => 'Support'],
];
?>

<!-- HERO -->
<section class="hero-gradient pt-28 sm:pt-32 md:pt-40 pb-20 sm:pb-24 md:pb-32 relative overflow-hidden">

    <div class="absolute top-[-80px] left-[-80px] sm:top-0 sm:left-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-80px] sm:bottom-0 sm:right-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="absolute inset-0 opacity-30 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 24px 24px;"></div>

    <div class="contact-blob w-16 h-16 border border-[#00ffb3]/10 top-[15%] right-[8%] hidden lg:block" style="animation: decor-float 6s ease-in-out infinite;"></div>
    <div class="contact-blob w-10 h-10 border border-[#00b7ff]/10 bottom-[20%] left-[5%] hidden lg:block" style="animation: decor-float 5s ease-in-out infinite; animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT -->
            <div class="fade-in-up">
                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    CONTACT US
                </p>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black leading-tight mb-6 sm:mb-8">
                    Let's Build Your
                    <span class="hero-heading-accent green-text">Next Digital Project</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl">
                    Get in touch with Anprix for
                    <span class="text-white font-medium">web development</span>,
                    <span class="text-white font-medium">SEO</span>,
                    <span class="text-white font-medium">advertising</span>,
                    and <span class="text-white font-medium">digital marketing solutions</span>.
                </p>

                <!-- Service Tags -->
                <div class="flex flex-wrap gap-3 mt-8">
                    <?php foreach ($service_tags as $t): ?>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[<?= $t['color'] ?>/10] hover:border-[<?= $t['color'] ?>/30] transition-all duration-300">
                        <i class="fas <?= $t['icon'] ?> text-[<?= $t['color'] ?>]"></i>
                        <?= $t['label'] ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Mini Stats -->
                <div class="flex flex-wrap items-center gap-5 sm:gap-8 mt-10 pt-6 border-t border-white/5">
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

            <!-- RIGHT DECORATIVE -->
            <div class="hidden md:flex justify-center fade-in-up delay-200">
                <div class="contact-hero-decor">
                    <div class="decor-card">
                        <div class="decor-ring"></div>
                        <div class="decor-ring"></div>
                        <div class="decor-ring"></div>
                        <div class="relative z-10 text-center">

                            <div class="mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-paper-plane text-2xl text-[#00ffb3] icon-float"></i>
                                </div>
                                <h3 class="text-xl font-bold">Get In Touch</h3>
                                <p class="text-xs text-gray-500 mt-1">We reply within 24 hours</p>
                            </div>

                            <div class="space-y-3">
                                <?php foreach ($hero_panel_keys as $key): ?>
                                <?php $c = $contact_info[$key]; ?>
                                <div class="flex items-center gap-3 glass-card rounded-2xl p-3.5 text-left hover:bg-white/5 transition-all duration-300 border border-white/5">
                                    <div class="w-10 h-10 rounded-xl bg-[<?= $c['color'] ?>/20] flex items-center justify-center text-[<?= $c['color'] ?>] shrink-0">
                                        <i class="fas <?= $c['icon'] ?>"></i>
                                    </div>
                                    <div class="<?= $key === 'email' ? 'min-w-0' : '' ?>">
                                        <p class="text-[10px] text-gray-500 uppercase tracking-wider"><?= $c['label'] ?></p>
                                        <p class="text-sm font-semibold <?= $key === 'email' ? 'truncate' : '' ?>"><?= $c['value'] ?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-5 pt-4 border-t border-white/5 flex items-center justify-center gap-2.5">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00ffb3] opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#00ffb3]"></span>
                                </span>
                                <span class="text-xs text-gray-500">Available for projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">

    <div class="contact-section-glow w-64 h-64 bg-[#00ffb3]/5 top-[10%] left-[-5%]"></div>
    <div class="contact-section-glow w-80 h-80 bg-[#00b7ff]/5 bottom-[20%] right-[-5%]"></div>
    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.02) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-14 lg:gap-16 items-start">

            <!-- LEFT: CONTACT INFO -->
            <div class="fade-in-up">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    GET IN TOUCH
                </p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6">
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

                <!-- Bottom CTA -->
                <div class="mt-8 p-5 sm:p-6 rounded-[20px] bg-gradient-to-r from-[#00ffb3]/5 to-[#00b7ff]/5 border border-white/5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                            <i class="fas fa-headset text-lg"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold">Need immediate help?</p>
                            <p class="text-xs text-gray-500 mt-0.5">Call us directly and we'll respond within minutes.</p>
                        </div>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="btn-primary px-5 py-2.5 rounded-xl text-sm font-bold shrink-0 ml-auto">
                            <i class="fas fa-phone mr-1.5"></i>Call
                        </a>
                    </div>
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
                                <h3 class="text-2xl sm:text-3xl font-black mt-2">Start Your Project Today</h3>
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

<!-- LOCATION SHOWCASE -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="location-showcase rounded-[28px] md:rounded-[40px] p-8 sm:p-12 md:p-16 lg:p-20">
            <div class="dot-grid"></div>
            <div class="relative z-10">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                    <div class="fade-in-up">
                        <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm flex items-center gap-2">
                            <i class="fas fa-globe icon-float"></i>
                            OUR LOCATION
                        </p>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6">
                            Based in <span class="green-text">Gandhinagar</span>,
                            Serving <span class="blue-text">Worldwide</span>
                        </h2>
                        <p class="text-gray-400 text-base md:text-lg leading-8 mb-8">
                            From our office in Gujarat, India, we deliver premium digital solutions
                            to clients across India, North America, Europe, and the Middle East.
                        </p>

                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center gap-3 glass-card rounded-2xl px-5 py-3">
                                    <i class="fas fa-map-pin icon-hover text-[<?= $contact_info['location']['color'] ?>]"></i>
                                <div>
                                    <p class="text-xs text-gray-500">Address</p>
                                    <p class="text-sm font-semibold"><?= $contact_info['location']['value'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-5">
                        <?php $loc_delays = ['delay-100', 'delay-200', 'delay-300']; $ld = 0; ?>
                        <?php foreach ($loc_stats as $s): ?>
                        <?php
                        $loc_targets = ['100+'=>100, '50+'=>50, '24/7'=>24];
                        $target = $loc_targets[$s['value']] ?? 0;
                        $suffix = '';
                        if (strpos($s['value'], '+') !== false) $suffix = '+';
                        elseif (strpos($s['value'], '/') !== false) $suffix = '/7';
                        $display = rtrim($s['value'], '+');
                        $display = rtrim($display, '/7');
                        ?>
                        <div class="stat-card glass-card rounded-[20px] p-6 md:p-8 text-center border border-white/10 fade-in-up <?= $loc_delays[$ld++] ?>">
                            <div class="text-3xl sm:text-4xl font-black <?= $s['class'] ?> mb-2 counter flex items-center justify-center gap-1" data-target="<?= $target ?>">
                                <span><?= $display ?></span><?= $suffix ?>
                            </div>
                            <p class="text-gray-500 text-xs sm:text-sm"><?= $s['label'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>