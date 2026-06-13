<?php
require_once 'config/config.php';
$page_title = "Our Team";
$page_description = "Meet the Anprix team of developers, designers, SEO experts, and marketing specialists creating premium digital experiences for businesses.";
$canonical_url = SITE_URL . '/team';
require_once 'includes/header.php';
?>
<?php
// Team Members Array
$team_members = [
    [
        'id' => 1,
        'name' => 'Bharat Patel',
        'role' => 'Project Manager/Team Lead',
        'role_color' => 'green',
        'bio' => 'Leading project delivery with strong technical expertise and team coordination for successful digital solutions.',
        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1200',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/bharat-patel',
            'twitter' => 'https://twitter.com/bharatpatel',
            'facebook' => 'https://facebook.com/bharatpatel'
        ],
        'skills' => ['Project Management', 'Team Leadership', 'Web Development'],
        'experience' => '10+ years'
    ],
    [
        'id' => 2,
        'name' => 'Mohmad Ali',
        'role' => 'Business Developer',
        'role_color' => 'blue',
        'bio' => 'Driving business growth through strategic partnerships, client relationships, and innovative sales approaches.',
        'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1200',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/mohmad-ali',
            'twitter' => 'https://twitter.com/mohmadali',
            'facebook' => 'https://facebook.com/mohmadali'
        ],
        'skills' => ['Business Strategy', 'Client Relations', 'Sales'],
        'experience' => '8+ years'
    ],
    [
        'id' => 3,
        'name' => 'Bhargav Ravaya',
        'role' => 'Sr Software Developer',
        'role_color' => 'green',
        'bio' => 'Building scalable web applications with clean code, modern frameworks, and a focus on performance.',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1200',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/bhargav-ravaya',
            'github' => 'https://github.com/bhargavravaya',
            'twitter' => 'https://twitter.com/bhargavravaya'
        ],
        'skills' => ['PHP', 'Laravel', 'JavaScript', 'API Design'],
        'experience' => '6+ years'
    ],
    [
        'id' => 4,
        'name' => 'Biren Malvi',
        'role' => 'Ads Manager',
        'role_color' => 'blue',
        'bio' => 'Managing paid advertising campaigns across Google Ads and social media to drive targeted traffic and ROI.',
        'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=1200',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/biren-malvi',
            'twitter' => 'https://twitter.com/birenmalvi',
            'facebook' => 'https://facebook.com/birenmalvi'
        ],
        'skills' => ['Google Ads', 'Social Media Ads', 'Analytics', 'ROI Optimization'],
        'experience' => '5+ years'
    ]
];
?>
<!-- Team CSS Enhancements -->
<style>
/* Stagger animation for cards */
<?php foreach($team_members as $index=> $member): ?>.team-card[data-id="<?php echo $member['id']; ?>"] {
    animation-delay: <?php echo ($index * 0.1);
    ?>s;
}

<?php endforeach;
?>
</style>
<!-- HERO -->
<section class="hero-gradient pt-28 sm:pt-32 md:pt-40 pb-20 sm:pb-24 md:pb-32 relative overflow-hidden">

    <!-- BACKGROUND BLURS -->
    <div
        class="absolute top-0 left-[-80px] sm:left-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[130px] md:blur-[160px] rounded-full">
    </div>

    <div
        class="absolute bottom-0 right-[-80px] sm:right-0 w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[130px] md:blur-[160px] rounded-full">
    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="max-w-4xl">

            <!-- LABEL -->
            <p
                class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                OUR TEAM
            </p>

            <!-- TITLE -->
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight lg:leading-[1.1] mb-8 md:mb-10">

                Meet The
                <span class="green-text block sm:inline">Creative Minds</span>
                Behind Anprix

            </h1>

            <!-- DESCRIPTION -->
            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">
                Our team of developers, designers, SEO experts, and marketing specialists work together
                to create premium digital experiences that help businesses grow online.
            </p>

        </div>

    </div>

</section>

<!-- TEAM MEMBERS -->
<!-- TEAM MEMBERS SECTION -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- TITLE -->
        <div class="text-center mb-14 md:mb-20 lg:mb-24">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-xs sm:text-sm">
                PROFESSIONAL TEAM
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 md:mb-8">
                Experts In Digital Innovation
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                We combine creativity, strategy, and technology to deliver world-class
                website development and digital marketing solutions.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <?php foreach($team_members as $member): ?>

            <?php
                $name = htmlspecialchars($member['name']);
                $role = htmlspecialchars($member['role']);
                $bio  = htmlspecialchars($member['bio']);
                $image = htmlspecialchars($member['image']);
            ?>

            <!-- CARD -->
            <div class="group glass-card rounded-[24px] md:rounded-[35px] overflow-hidden relative
                        hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-2xl"
                data-id="<?php echo (int)$member['id']; ?>">

                <!-- IMAGE -->
                <div class="relative overflow-hidden">

                    <img src="<?php echo $image; ?>"
                        class="w-full h-[260px] sm:h-[300px] md:h-[340px] object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="<?php echo $name; ?>">

                    <!-- OVERLAY -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <!-- EXPERIENCE BADGE -->
                    <div
                        class="absolute top-4 right-4 bg-black/60 backdrop-blur-md px-3 py-1 rounded-full text-[10px] sm:text-xs z-10 border border-white/10">

                        <i class="fas fa-briefcase mr-1 text-[#00ffb3]"></i>
                        <?php echo htmlspecialchars($member['experience']); ?>

                    </div>

                    <!-- SKILLS OVERLAY -->
                    <div
                        class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 md:p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-300">

                        <div class="flex flex-wrap gap-2">

                            <?php foreach($member['skills'] as $skill): ?>
                            <span class="text-[10px] sm:text-xs px-2 py-1 rounded-full
                                            bg-white/10 backdrop-blur-sm text-white border border-white/10">
                                <?php echo htmlspecialchars($skill); ?>
                            </span>
                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-5 sm:p-6 md:p-8">

                    <p class="<?php echo $member['role_color'] === 'green' ? 'green-text' : 'blue-text'; ?>
                              text-xs uppercase tracking-[3px] mb-2 md:mb-3 font-semibold">

                        <?php echo $role; ?>

                    </p>

                    <h3 class="text-xl sm:text-2xl font-black mb-2 md:mb-3
                               group-hover:text-[#00ffb3] transition-colors duration-300">

                        <?php echo $name; ?>

                    </h3>

                    <p class="text-gray-400 text-sm leading-7 mb-5 md:mb-6">
                        <?php echo $bio; ?>
                    </p>

                    <!-- SOCIAL -->
                    <div class="flex flex-wrap gap-3">

                        <?php
                        $socials = [
                            'linkedin' => ['fab fa-linkedin-in', '#00ffb3'],
                            'twitter' => ['fab fa-twitter', '#00b7ff'],
                            'github' => ['fab fa-github', 'white'],
                            'dribbble' => ['fab fa-dribbble', '#ff5c93'],
                            'behance' => ['fab fa-behance', '#0057ff'],
                            'instagram' => ['fab fa-instagram', 'pink']
                        ];
                        ?>

                        <?php foreach ($socials as $key => $iconData): ?>
                        <?php if (!empty($member['social'][$key])): ?>
                        <a href="<?php echo htmlspecialchars($member['social'][$key]); ?>" target="_blank"
                            rel="noopener noreferrer" class="w-11 h-11 flex items-center justify-center rounded-full
                                          bg-white/5 hover:bg-white/10 transition border border-white/10">

                            <i class="<?php echo $iconData[0]; ?>"></i>
                        </a>
                        <?php endif; ?>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- COMPANY VALUES -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 lg:gap-20 items-center">

            <!-- LEFT -->
            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-xs sm:text-sm">
                    WHY CHOOSE US
                </p>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    A Team Focused On
                    <span class="green-text block sm:inline">Innovation & Growth</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    Our mission is to help businesses succeed online through creative design,
                    powerful development, SEO optimization, and strategic marketing solutions.
                </p>

                <!-- FEATURES -->
                <div class="space-y-6">

                    <!-- ITEM -->
                    <div class="flex items-start gap-4 md:gap-5">

                        <div
                            class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-[#00ffb3]/10 border border-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3] text-lg md:text-xl shrink-0">
                            <i class="fas fa-lightbulb"></i>
                        </div>

                        <div>
                            <h4 class="text-lg md:text-2xl font-bold mb-2">
                                Creative Design Thinking
                            </h4>
                            <p class="text-gray-500 text-sm md:text-base leading-7 md:leading-8">
                                We create modern experiences that connect brands with customers.
                            </p>
                        </div>

                    </div>

                    <!-- ITEM -->
                    <div class="flex items-start gap-4 md:gap-5">

                        <div
                            class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-[#00b7ff]/10 border border-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff] text-lg md:text-xl shrink-0">
                            <i class="fas fa-code"></i>
                        </div>

                        <div>
                            <h4 class="text-lg md:text-2xl font-bold mb-2">
                                Technical Excellence
                            </h4>
                            <p class="text-gray-500 text-sm md:text-base leading-7 md:leading-8">
                                High-performance development using modern technologies.
                            </p>
                        </div>

                    </div>

                    <!-- ITEM -->
                    <div class="flex items-start gap-4 md:gap-5">

                        <div
                            class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-[#00ffb3]/10 border border-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3] text-lg md:text-xl shrink-0">
                            <i class="fas fa-chart-line"></i>
                        </div>

                        <div>
                            <h4 class="text-lg md:text-2xl font-bold mb-2">
                                Result Driven Marketing
                            </h4>
                            <p class="text-gray-500 text-sm md:text-base leading-7 md:leading-8">
                                Strategies designed to improve traffic, leads, and online growth.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 mt-10 lg:mt-0">

                <!-- STAT -->
                <div
                    class="glass-card rounded-2xl md:rounded-[35px] p-8 md:p-10 text-center hover:-translate-y-1 transition">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-black green-text mb-3 md:mb-4 counter"
                        data-target="100">
                        <span>100</span>+
                    </h3>
                    <p class="text-gray-500 text-sm md:text-lg">Projects Delivered</p>
                </div>

                <!-- STAT -->
                <div
                    class="glass-card rounded-2xl md:rounded-[35px] p-8 md:p-10 text-center hover:-translate-y-1 transition">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-black blue-text mb-3 md:mb-4 counter"
                        data-target="50">
                        <span>50</span>+
                    </h3>
                    <p class="text-gray-500 text-sm md:text-lg">Happy Clients</p>
                </div>

                <!-- STAT -->
                <div
                    class="glass-card rounded-2xl md:rounded-[35px] p-8 md:p-10 text-center hover:-translate-y-1 transition">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-black green-text mb-3 md:mb-4 counter"
                        data-target="98">
                        <span>98</span>%
                    </h3>
                    <p class="text-gray-500 text-sm md:text-lg">Client Satisfaction</p>
                </div>

                <!-- STAT -->
                <div
                    class="glass-card rounded-2xl md:rounded-[35px] p-8 md:p-10 text-center hover:-translate-y-1 transition">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-black blue-text mb-3 md:mb-4 counter"
                        data-target="24">
                        <span>24</span>/7
                    </h3>
                    <p class="text-gray-500 text-sm md:text-lg">Team Support</p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION - TEAM (IMPROVED) -->
<section class="py-16 md:py-28 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div
            class="glass-card rounded-[28px] sm:rounded-[40px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <!-- BACKGROUND EFFECTS -->
            <div
                class="absolute top-[-60px] left-[-60px] sm:top-0 sm:left-0 w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full">
            </div>

            <div
                class="absolute bottom-[-60px] right-[-60px] sm:bottom-0 sm:right-0 w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full">
            </div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <!-- LABEL -->
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm">
                    <i class="fas fa-users mr-2"></i>
                    JOIN OUR JOURNEY
                </p>

                <!-- TITLE -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">
                    Let's Create Something Amazing Together
                </h2>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">

                    Work with a passionate team of developers, designers, and marketing experts
                    focused on building high-performance digital products that grow your business.

                </p>

                <!-- FEATURES (NEW ADDITION) -->
                <div class="flex flex-col sm:flex-row justify-center gap-6 mb-10 text-sm text-gray-300">

                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-code text-[#00ffb3]"></i>
                        Developers
                    </div>

                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-paint-brush text-[#00b7ff]"></i>
                        Designers
                    </div>

                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-bullhorn text-[#00ffb3]"></i>
                        Marketers
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <!-- PRIMARY -->
                    <a href="hire.php"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">

                        <i class="fas fa-rocket"></i>
                        Hire Our Team

                    </a>

                    <!-- SECONDARY -->
                    <a href="contact.php"
                        class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">

                        <i class="fas fa-envelope"></i>
                        Contact Us

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<?php require_once 'includes/footer.php'; ?>