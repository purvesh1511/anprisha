<?php
// Database configuration (if needed in future)
define('DB_HOST', 'localhost');
define('DB_USER', 'u111415184_phplocaldb');
define('DB_PASS', '5u$mE4Bu7WO');
define('DB_NAME', 'u111415184_phplocaldb');

// Email configuration
define('ADMIN_EMAIL', 'purvesh151@gmail.com');
define('SITE_NAME', 'Anprix');
define('SITE_URL', 'https://anprix.com'); // Update with your domain
define('SITE_TAGLINE', 'Digital Experiences For Growing Businesses');
define('SITE_EMAIL', 'info@anprix.com');
define('SITE_EMAIL_SUPPORT', 'support@anprix.com');
define('SITE_PHONE', '+91 6355035217');
define('SITE_PHONE_ALT', '+91 9106807914');
define('SITE_ADDRESS', '21 Info city, Gandhinagar, Gujarat 382421');
define('SITE_CITY_STATE_ZIP', 'Gandhinagar, Gujarat 382421');
define('SITE_COUNTRY', 'India');

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set timezone
date_default_timezone_set('Europe/London');


define('MAIL_MAILER', 'smtp');
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'purvesh151@gmail.com');
define('MAIL_PASSWORD', 'gsbomvqucglvhcua');
define('MAIL_ENCRYPTION', 'tls');


// Business Hours
define('OFFICE_HOURS_WEEKDAY', '9:00 AM - 6:00 PM');
define('OFFICE_HOURS_SATURDAY', '10:00 AM - 4:00 PM');
define('OFFICE_HOURS_SUNDAY', 'Closed');

// Social Media Links
define('SOCIAL_FACEBOOK', 'https://facebook.com/anprix');
define('SOCIAL_TWITTER', 'https://twitter.com/anprix');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/anprix');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/anprix');
define('SOCIAL_GITHUB', 'https://github.com/anprix');

?>