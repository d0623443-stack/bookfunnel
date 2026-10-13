<?php
/**
 * WanderLuxe Tourism - CodeIgniter 4 Root Entry
 * Redirects or forwards root directory access to the public directory.
 */
$uri = $_SERVER['REQUEST_URI'] ?? '/';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

// If accessed via localhost/gitags without /public, forward directly
header("Location: " . $protocol . $host . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . "/public/");
exit;
