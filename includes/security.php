<?php
/**
 * Lightweight security helpers: CSRF token + per-IP rate limiting.
 *
 * Storage: PHP session for CSRF, an APCu/file cache for rate limits.
 * Designed to require no third-party dependencies.
 */

if (session_status() === PHP_SESSION_NONE) {
    // Match the cookie name used by the rest of the app if any
    session_name('anprix_sid');
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => !empty($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    @session_start();
}

if (!function_exists('csrf_token')) {
    /**
     * Return the current session CSRF token, generating one if needed.
     */
    function csrf_token(): string {
        if (empty($_SESSION['_csrf'])) {
            $_SESSION['_csrf'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['_csrf'];
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Echo a hidden input carrying the current CSRF token.
     */
    function csrf_field(): void {
        echo '<input type="hidden" name="_csrf" value="' . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') . '">';
    }
}

if (!function_exists('csrf_check')) {
    /**
     * Verify the CSRF token in a POST request. Returns true on success,
     * false otherwise. Uses constant-time comparison.
     */
    function csrf_check(): bool {
        $sent = $_POST['_csrf'] ?? '';
        $real = $_SESSION['_csrf'] ?? '';
        return is_string($sent) && is_string($real) && $real !== '' && hash_equals($real, $sent);
    }
}

if (!function_exists('rate_limit_hit')) {
    /**
     * Sliding-window rate limit keyed by an arbitrary bucket (e.g. IP).
     *
     * @param string $bucket  Identifier (e.g. "contact:1.2.3.4").
     * @param int    $limit   Max events allowed in $window seconds.
     * @param int    $window  Window length in seconds.
     * @return bool  true if under the limit, false if exceeded.
     */
    function rate_limit_hit(string $bucket, int $limit, int $window): bool {
        $store = sys_get_temp_dir() . '/anprix_ratelimit';
        if (!is_dir($store)) {
            @mkdir($store, 0700, true);
        }
        $file = $store . '/' . sha1($bucket) . '.json';
        $now  = time();

        $events = [];
        if (is_file($file)) {
            $raw = @file_get_contents($file);
            if ($raw !== false) {
                $decoded = json_decode($raw, true);
                if (is_array($decoded)) {
                    $events = $decoded;
                }
            }
        }

        // Drop events outside the window
        $events = array_values(array_filter($events, fn($t) => ($now - (int)$t) < $window));

        if (count($events) >= $limit) {
            return false;
        }

        $events[] = $now;
        @file_put_contents($file, json_encode($events), LOCK_EX);
        return true;
    }
}

if (!function_exists('client_ip')) {
    /**
     * Best-effort client IP. Honours X-Forwarded-For when present.
     */
    function client_ip(): string {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ip = trim($parts[0]) ?: $ip;
        }
        return $ip;
    }
}
