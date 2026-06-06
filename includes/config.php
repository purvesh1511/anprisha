<?php
/**
 * Application configuration loader.
 *
 * Real credentials live in ../config.local.php (one level above the
 * project root, outside the web app). That file is gitignored. This
 * file holds only non-secret defaults so the app still boots in a
 * fresh clone; production values come from config.local.php.
 */

// ---- Error reporting (disable in production) ----
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

date_default_timezone_set('Asia/Kolkata');

// ---- Load local credentials if present ----
$localConfig = dirname(__DIR__) . '/config.local.php';
if (is_readable($localConfig)) {
    require_once $localConfig;
}

// ---- Non-secret fallbacks (safe to be in the repo) ----
if (!defined('SITE_NAME'))          define('SITE_NAME',          'Anprix');
if (!defined('SITE_URL'))           define('SITE_URL',           'https://anprix.com');
if (!defined('SITE_TAGLINE'))       define('SITE_TAGLINE',       'Digital Experiences For Growing Businesses');
if (!defined('SITE_EMAIL'))         define('SITE_EMAIL',         'info@anprix.com');
if (!defined('SITE_EMAIL_SUPPORT')) define('SITE_EMAIL_SUPPORT', 'support@anprix.com');
if (!defined('SITE_PHONE'))         define('SITE_PHONE',         '+91 6355035217');
if (!defined('SITE_PHONE_ALT'))     define('SITE_PHONE_ALT',     '+91 9106807914');
if (!defined('SITE_ADDRESS'))       define('SITE_ADDRESS',       '21 Info city, Gandhinagar, Gujarat 382421');
if (!defined('SITE_CITY_STATE_ZIP'))define('SITE_CITY_STATE_ZIP','Gandhinagar, Gujarat 382421');
if (!defined('SITE_DESCRIPTION'))   define('SITE_DESCRIPTION',   'Anprix Solutions is a digital marketing agency in Ahmedabad offering SEO, Google Ads, social media marketing, website development, Shopify solutions, and growth-focused digital marketing services.');
if (!defined('SITE_OG_IMAGE'))      define('SITE_OG_IMAGE',      SITE_URL . '/assets/images/anprix-logo.png');
if (!defined('SITE_TWITTER_HANDLE'))define('SITE_TWITTER_HANDLE','@anprix');
if (!defined('SITE_COUNTRY'))       define('SITE_COUNTRY',       'India');

if (!defined('MAIL_MAILER'))     define('MAIL_MAILER',     'smtp');
if (!defined('MAIL_HOST'))       define('MAIL_HOST',       'smtp.gmail.com');
if (!defined('MAIL_PORT'))       define('MAIL_PORT',       587);
if (!defined('MAIL_ENCRYPTION')) define('MAIL_ENCRYPTION', 'tls');

if (!defined('OFFICE_HOURS_WEEKDAY'))  define('OFFICE_HOURS_WEEKDAY',  '9:00 AM - 6:00 PM');
if (!defined('OFFICE_HOURS_SATURDAY')) define('OFFICE_HOURS_SATURDAY', '10:00 AM - 4:00 PM');
if (!defined('OFFICE_HOURS_SUNDAY'))   define('OFFICE_HOURS_SUNDAY',   'Closed');

if (!defined('SOCIAL_FACEBOOK'))  define('SOCIAL_FACEBOOK',  'https://facebook.com/anprix');
if (!defined('SOCIAL_TWITTER'))   define('SOCIAL_TWITTER',   'https://twitter.com/anprix');
if (!defined('SOCIAL_LINKEDIN'))  define('SOCIAL_LINKEDIN',  'https://linkedin.com/company/anprix');
if (!defined('SOCIAL_INSTAGRAM')) define('SOCIAL_INSTAGRAM', 'https://instagram.com/anprix');
if (!defined('SOCIAL_GITHUB'))    define('SOCIAL_GITHUB',    'https://github.com/anprix');

/**
 * Returns the configured admin email, or a safe placeholder if
 * config.local.php is missing (e.g. in CI).
 */
if (!function_exists('admin_email')) {
    function admin_email(): string {
        return defined('ADMIN_EMAIL') ? ADMIN_EMAIL : 'admin@example.com';
    }
}
